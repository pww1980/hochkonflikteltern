<?php
$current_page = 'contact';
$title        = 'Kontakt | Hochkonflikt Eltern';
$description  = 'Schreiben Sie uns – Fragen, Feedback oder Anregungen zum Hochkonflikt-Eltern-Leitfaden sind herzlich willkommen.';
?>
<!DOCTYPE html>
<html lang="de">
<?php include 'includes/head.php'; ?>
<body>
<?php include 'includes/nav.php'; ?>

    <div class="page active">
        <div class="contact-section">
            <h2>Kontakt</h2>
            <p>Haben Sie Fragen, Feedback oder Anregungen? Ich freue mich über Ihre Nachricht.</p>

            <form id="contactForm">
                <!-- Status-Meldung -->
                <div id="formStatus" class="form-status"></div>

                <!-- Honeypot (Bot-Schutz, für Menschen unsichtbar) -->
                <div class="hp-field">
                    <input type="text" name="website" tabindex="-1" autocomplete="off">
                </div>

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">E-Mail-Adresse</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="subject">Betreff</label>
                    <input type="text" id="subject" name="subject" required>
                </div>
                <div class="form-group">
                    <label for="message">Nachricht</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <button type="submit" class="submit-button">Nachricht senden</button>
                <p class="privacy-note">
                    Ihre Daten werden vertraulich behandelt und nicht an Dritte weitergegeben.
                    Mit dem Absenden stimmen Sie der Verarbeitung Ihrer Daten zum Zweck der Kontaktaufnahme zu.
                    Weitere Informationen finden Sie in unserer <a href="datenschutz.php">Datenschutzerklärung</a>.
                </p>
            </form>
        </div>
    </div>

<?php include 'includes/cookie_banner.php'; ?>
<?php include 'includes/footer.php'; ?>
    <script src="script.js"></script>
</body>
</html>
