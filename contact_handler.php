<?php
/**
 * Kontaktformular-Handler für hochkonflikteltern.de
 * Läuft auf YunoHost (Postfix / PHP mail())
 *
 * ─── KONFIGURATION ───────────────────────────────────────────────────────────
 * Tragen Sie hier Ihre E-Mail-Adresse ein, bevor Sie die Seite live schalten:
 */
define('RECIPIENT_EMAIL', 'ihre@email.de');   // <-- hier anpassen
define('RECIPIENT_NAME',  'Hochkonflikt Eltern');
define('SUBJECT_PREFIX',  '[Kontaktformular] ');
define('RATE_LIMIT_FILE', sys_get_temp_dir() . '/hke_ratelimit.json');
define('RATE_LIMIT_MAX',  5);   // max. Nachrichten pro IP
define('RATE_LIMIT_SECS', 3600); // ... innerhalb dieser Sekunden (1 Stunde)
// ─────────────────────────────────────────────────────────────────────────────

header('Content-Type: application/json; charset=utf-8');
header('X-Content-Type-Options: nosniff');

// Nur POST erlauben
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Methode nicht erlaubt.']);
    exit;
}

// ── Honeypot-Prüfung (Bot-Schutz) ────────────────────────────────────────────
if (!empty($_POST['website'])) {
    // Bot hat das versteckte Feld ausgefüllt → still ablehnen
    http_response_code(200);
    echo json_encode(['success' => true, 'message' => 'Nachricht gesendet.']);
    exit;
}

// ── Rate Limiting (pro IP) ────────────────────────────────────────────────────
$ip = $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'] ?? 'unknown';
$ip = trim(explode(',', $ip)[0]);

$limits = [];
if (file_exists(RATE_LIMIT_FILE)) {
    $limits = json_decode(file_get_contents(RATE_LIMIT_FILE), true) ?: [];
}
$now = time();
// Veraltete Einträge bereinigen
foreach ($limits as $storedIp => $data) {
    if ($now - $data['first'] > RATE_LIMIT_SECS) {
        unset($limits[$storedIp]);
    }
}
if (isset($limits[$ip]) && $limits[$ip]['count'] >= RATE_LIMIT_MAX) {
    http_response_code(429);
    echo json_encode(['success' => false, 'message' => 'Zu viele Anfragen. Bitte versuchen Sie es später erneut.']);
    exit;
}
if (!isset($limits[$ip])) {
    $limits[$ip] = ['count' => 0, 'first' => $now];
}
$limits[$ip]['count']++;
file_put_contents(RATE_LIMIT_FILE, json_encode($limits));

// ── Eingaben einlesen & bereinigen ────────────────────────────────────────────
function clean(string $value): string {
    return htmlspecialchars(strip_tags(trim($value)), ENT_QUOTES, 'UTF-8');
}

$name    = clean($_POST['name']    ?? '');
$email   = filter_var(trim($_POST['email']   ?? ''), FILTER_SANITIZE_EMAIL);
$subject = clean($_POST['subject'] ?? '');
$message = clean($_POST['message'] ?? '');

// ── Validierung ───────────────────────────────────────────────────────────────
$errors = [];
if (strlen($name) < 2 || strlen($name) > 100) {
    $errors[] = 'Bitte geben Sie einen gültigen Namen ein (2–100 Zeichen).';
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Bitte geben Sie eine gültige E-Mail-Adresse ein.';
}
if (strlen($subject) < 3 || strlen($subject) > 150) {
    $errors[] = 'Bitte geben Sie einen Betreff ein (3–150 Zeichen).';
}
if (strlen($message) < 10 || strlen($message) > 5000) {
    $errors[] = 'Die Nachricht muss zwischen 10 und 5000 Zeichen lang sein.';
}

if (!empty($errors)) {
    http_response_code(422);
    echo json_encode(['success' => false, 'message' => implode(' ', $errors)]);
    exit;
}

// ── E-Mail aufbauen ───────────────────────────────────────────────────────────
$mailSubject = SUBJECT_PREFIX . $subject;

$mailBody  = "Neue Kontaktanfrage über hochkonflikteltern.de\n";
$mailBody .= str_repeat('─', 50) . "\n\n";
$mailBody .= "Name:    {$name}\n";
$mailBody .= "E-Mail:  {$email}\n";
$mailBody .= "Betreff: {$subject}\n\n";
$mailBody .= "Nachricht:\n{$message}\n\n";
$mailBody .= str_repeat('─', 50) . "\n";
$mailBody .= "Gesendet am: " . date('d.m.Y \u\m H:i \U\h\r') . "\n";
$mailBody .= "IP: {$ip}\n";

// Header: Absender ist die eigene Domain (verhindert SPF-Probleme auf YunoHost)
$headers  = "From: " . RECIPIENT_NAME . " <noreply@" . ($_SERVER['HTTP_HOST'] ?? 'localhost') . ">\r\n";
$headers .= "Reply-To: {$name} <{$email}>\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
$headers .= "Content-Transfer-Encoding: 8bit\r\n";
$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

// ── Senden ────────────────────────────────────────────────────────────────────
$sent = mail(RECIPIENT_EMAIL, $mailSubject, $mailBody, $headers);

if ($sent) {
    http_response_code(200);
    echo json_encode(['success' => true, 'message' => 'Ihre Nachricht wurde erfolgreich gesendet. Ich melde mich so bald wie möglich bei Ihnen.']);
} else {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Die Nachricht konnte leider nicht gesendet werden. Bitte versuchen Sie es später erneut oder schreiben Sie direkt eine E-Mail.']);
}
