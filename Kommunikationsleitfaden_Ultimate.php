<?php
$current_page = 'leitfaden';
$title        = 'Vollständiger Leitfaden | Hochkonflikt Eltern';
$description  = 'Vollständiger interaktiver Entscheidungsbaum für schriftliche Kommunikation in Hochkonfliktsituationen – mit psychologischem Hintergrund und konkreten Formulierungen.';
?>
<!DOCTYPE html>
<html lang="de">
<?php include 'includes/head.php'; ?>
<body>
<?php include 'includes/nav.php'; ?>

<div class="page active">
    <div class="guide-wrapper">

        <h1>📋 Hochkonflikt-Elternschaft: Der vollständige Leitfaden</h1>
        <p>Psychologisches Hintergrundwissen, praktische Strategien und vollständiger Entscheidungsbaum</p>

        <div class="guide-info-box">
            <strong>Dieser umfassende Leitfaden bietet:</strong><br>
            • Tiefes Verständnis psychologischer Mechanismen<br>
            • Vollständigen, interaktiven Entscheidungsbaum für alle Situationen<br>
            • Langfristige Strategien und Selbstschutz<br>
            • Wissenschaftlich fundierte Ansätze<br>
            • Konkrete Templates für jede Kommunikationssituation
        </div>

        <!-- BIFF-Empfehlung -->
        <div class="biff-box">
            <div class="biff-title">✉️ Grundprinzip: Die BIFF-Methode</div>
            <p>Bevor Sie den Entscheidungsbaum nutzen: Jede Antwort in einer Hochkonfliktsituation sollte dem BIFF-Prinzip folgen (nach Bill Eddy, High Conflict Institute):</p>
            <div class="biff-grid">
                <div class="biff-item"><span class="biff-letter">B</span><span class="biff-label">rief</span> – Kurz halten. Keine langen Erklärungen, keine Rechtfertigungen. Je kürzer, desto weniger Angriffsfläche.</div>
                <div class="biff-item"><span class="biff-letter">I</span><span class="biff-label">nformative</span> – Nur relevante Sachinformationen. Keine Emotionen, keine Geschichte, keine Vorwürfe.</div>
                <div class="biff-item"><span class="biff-letter">F</span><span class="biff-label">riendly</span> – Freundlich im Ton, nicht unterwürfig. „Danke für die Info." reicht. Keine Ironie.</div>
                <div class="biff-item"><span class="biff-letter">F</span><span class="biff-label">irm</span> – Bestimmt. Keine offenen Fragen, keine Einladung zur Diskussion. Eine Aussage, kein Dialog.</div>
            </div>
            <p class="biff-note">Der Entscheidungsbaum unten hilft Ihnen, für jede Situation den richtigen Inhalt zu finden – BIFF gibt die Form vor.</p>
        </div>

        <!-- VOLLSTÄNDIGER ENTSCHEIDUNGSBAUM -->
        <div class="guide-sub-header" style="margin-top: 40px;">
            <h2>🗺️ Vollständiger Entscheidungsbaum</h2>
        </div>

        <div id="guide-written">

            <div id="dt-back-to-start" class="hidden" style="margin-bottom: 12px;">
                <button class="back-button" onclick="showNode('dt-start')">&#8592; Zum Anfang</button>
            </div>

            <div id="dt-start" class="decision-node">
                <div class="question">Was ist Ihre aktuelle Situation?</div>
                <div class="options">
                    <div class="option" onclick="showNode('dt-received')">Ich habe eine Nachricht erhalten</div>
                    <div class="option" onclick="showNode('dt-send')">Ich muss etwas mitteilen</div>
                    <div class="option" onclick="showNode('dt-violation')">Verstoß gegen Vereinbarungen</div>
                    <div class="option" onclick="showNode('dt-emergency')">Notfall / Dringend</div>
                </div>
            </div>

            <!-- PATH 1: Nachricht erhalten -->
            <div id="dt-received" class="decision-node hidden">
                <div class="question">Welche Art von Nachricht haben Sie erhalten?</div>
                <div class="options">
                    <div class="option" onclick="showNode('dt-attack')">Angriff / Vorwurf / Schuldzuweisung</div>
                    <div class="option" onclick="showNode('dt-info')">Sachliche Information</div>
                    <div class="option" onclick="showNode('dt-question')">Frage oder Diskussion</div>
                    <div class="option" onclick="showNode('dt-change')">Änderungsanfrage</div>
                </div>
                <button class="back-button" onclick="showNode('dt-start')">← Zurück</button>
            </div>

            <div id="dt-attack" class="result hidden">
                <h3>EMPFEHLUNG: In 90% der Fälle nicht antworten</h3>
                <div class="result-content">
                    <p><strong>Grundregel:</strong> Vorwürfe und Angriffe benötigen keine Antwort.</p>
                    <div class="principle-box">
                        <strong>Warum nicht?</strong><br>
                        • Jede Verteidigung verstärkt den Konflikt<br>
                        • Sie geraten in reaktive Position<br>
                        • Emotionale Trigger werden aktiviert<br>
                        • Schweigen signalisiert Souveränität
                    </div>
                    <p><strong>Nur antworten wenn:</strong> Ein faktisch falscher Sachverhalt dokumentarisch korrigiert werden muss.</p>
                    <div class="example">
                        "Zur Klarstellung: [Ein Fakt in einem Satz].<br><br>Mit freundlichen Grüßen"
                    </div>
                    <div class="warning">
                        <strong>⚠️ NIEMALS:</strong><br>
                        • Rechtfertigungen<br>
                        • Emotionale Aussagen<br>
                        • Gegenvorwürfe<br>
                        • Lange Erklärungen
                    </div>
                </div>
                <button class="back-button" onclick="showNode('dt-received')">← Zurück</button>
            </div>

            <div id="dt-info" class="result hidden">
                <h3>EMPFEHLUNG: Kurze Bestätigung</h3>
                <div class="result-content">
                    <div class="example">
                        "Vielen Dank für die Information.<br>
                        [Optional: Gute Besserung / Zur Kenntnis]<br><br>
                        Mit freundlichen Grüßen"
                    </div>
                    <div class="principle-box">
                        <strong>Drei-Satz-Maximum</strong><br>
                        Keine Ratschläge. Keine Nachfragen. Keine Kritik.
                    </div>
                    <div class="info">
                        <strong>Timing:</strong> 24–48h Antwortzeit zeigt Verlässlichkeit ohne Dringlichkeit.
                    </div>
                </div>
                <button class="back-button" onclick="showNode('dt-received')">← Zurück</button>
            </div>

            <div id="dt-question" class="result hidden">
                <h3>ENTSCHEIDUNG: Sachfrage oder Diskussionsköder?</h3>
                <div class="result-content">
                    <p><strong>Echte Sachfrage:</strong> Konkrete Details, Termine, Informationen</p>
                    <div class="success">→ Kurz beantworten (max. 3 Sätze)</div>
                    <p class="mt-20"><strong>Diskussionsversuch:</strong> "Warum...", "Findest Du nicht..."</p>
                    <div class="warning">→ NICHT beantworten. Das ist ein Köder.</div>
                    <div class="example example--light">
                        <strong>Sachfrage:</strong> "Wann bringst Du [Kind] zurück?"<br>
                        <strong>Antwort:</strong> "Um 17 Uhr laut Vereinbarung. MfG"<br><br>
                        <strong>Köder:</strong> "Warum bestehst Du auf diesen Zeiten?"<br>
                        <strong>Antwort:</strong> Keine.
                    </div>
                </div>
                <button class="back-button" onclick="showNode('dt-received')">← Zurück</button>
            </div>

            <div id="dt-change" class="result hidden">
                <h3>EMPFEHLUNG: Verweis auf offizielle Stellen</h3>
                <div class="result-content">
                    <div class="principle-box">
                        <strong>Keine Verhandlungen per Nachricht.</strong><br>
                        Alle Änderungen über Erziehungsberatung oder Gericht.
                    </div>
                    <div class="example">
                        "Änderungen der Vereinbarung besprechen wir bei [Beratungsstelle / Termin].<br><br>MfG"
                    </div>
                    <p class="mt-20"><strong>Bei einmaligen Ausnahmen:</strong></p>
                    <div class="example">
                        "Für diese Ausnahme: [Ja/Nein mit kurzem Grund].<br>
                        Für strukturelle Änderungen: Termin bei [Stelle].<br><br>MfG"
                    </div>
                </div>
                <button class="back-button" onclick="showNode('dt-received')">← Zurück</button>
            </div>

            <!-- PATH 2: Mitteilen -->
            <div id="dt-send" class="decision-node hidden">
                <div class="question">Was müssen Sie mitteilen?</div>
                <div class="options">
                    <div class="option" onclick="showNode('dt-appointment')">Termin / Organisatorisches</div>
                    <div class="option" onclick="showNode('dt-request-info')">Ich benötige Information</div>
                    <div class="option" onclick="showNode('dt-request-docs')">Ich benötige Dokumente</div>
                    <div class="option" onclick="showNode('dt-clarify')">Sachverhalt klarstellen</div>
                </div>
                <button class="back-button" onclick="showNode('dt-start')">← Zurück</button>
            </div>

            <div id="dt-appointment" class="result hidden">
                <h3>TEMPLATE: Sachliche Mitteilung</h3>
                <div class="result-content">
                    <div class="example">
                        "Am [Datum] um [Uhrzeit] findet [Termin] statt.<br><br>Mit freundlichen Grüßen"
                    </div>
                    <div class="principle-box">
                        <strong>Keine Fragen einbauen:</strong><br>
                        ❌ "Passt Dir das?"<br>
                        ❌ "Könntest Du...?"<br>
                        ✓ Einfach mitteilen. Punkt.
                    </div>
                    <div class="info">
                        <strong>Vorlaufzeit:</strong><br>
                        • Routine: 7 Tage<br>
                        • Arzt: 2–3 Tage<br>
                        • Notfall: Sofort
                    </div>
                </div>
                <button class="back-button" onclick="showNode('dt-send')">← Zurück</button>
            </div>

            <div id="dt-request-info" class="result hidden">
                <h3>TEMPLATE: Information anfordern</h3>
                <div class="result-content">
                    <div class="example">
                        "Ich benötige [konkrete Information] für [Zweck].<br>
                        Laut [Sorgerecht/Vereinbarung] habe ich Anspruch darauf.<br><br>
                        Bitte bis [Datum].<br><br>
                        Mit freundlichen Grüßen"
                    </div>
                    <div class="principle-box">
                        <strong>Drei Elemente:</strong><br>
                        1. Was Sie benötigen<br>
                        2. Rechtliche Grundlage<br>
                        3. Klare Frist
                    </div>
                    <div class="warning">
                        <strong>Falls keine Antwort:</strong><br>
                        Keine Erinnerung. Keine zweite Anfrage.<br>
                        → Direkt zur Quelle (Schule, Arzt, Jugendamt)
                    </div>
                </div>
                <button class="back-button" onclick="showNode('dt-send')">← Zurück</button>
            </div>

            <div id="dt-request-docs" class="result hidden">
                <h3>TEMPLATE: Dokumente anfordern</h3>
                <div class="result-content">
                    <div class="example">
                        "Laut [Vereinbarung] sind [Dokumente] bei Umgangsterminen mitzugeben.<br><br>
                        Bitte stellen Sie sicher, dass diese beim nächsten Termin dabei sind.<br><br>
                        MfG"
                    </div>
                    <div class="info">
                        <strong>Bei wiederholtem Fehlen:</strong><br>
                        Nach 2–3 Wochen → Dokumente selbst beschaffen
                    </div>
                    <div class="success">
                        Kosten dokumentieren und ggf. beim Jugendamt/Gericht vorlegen
                    </div>
                </div>
                <button class="back-button" onclick="showNode('dt-send')">← Zurück</button>
            </div>

            <div id="dt-clarify" class="result hidden">
                <h3>TEMPLATE: Sachliche Richtigstellung</h3>
                <div class="result-content">
                    <div class="example">
                        "Zur Klarstellung: [Ein Fakt in einem Satz].<br><br>Mit freundlichen Grüßen"
                    </div>
                    <div class="principle-box">
                        <strong>Ein Fakt. Ein Satz. Fertig.</strong><br>
                        Keine Begründungen, keine Emotionen.
                    </div>
                    <div class="warning">
                        Nur klarstellen wenn dokumentarisch relevant für Jugendamt/Gericht.
                    </div>
                </div>
                <button class="back-button" onclick="showNode('dt-send')">← Zurück</button>
            </div>

            <!-- PATH 3: Verstöße -->
            <div id="dt-violation" class="decision-node hidden">
                <div class="question">Welche Art von Verstoß?</div>
                <div class="options">
                    <div class="option" onclick="showNode('dt-viol-access')">Umgangsverweigerung</div>
                    <div class="option" onclick="showNode('dt-viol-docs')">Dokumente nicht mitgegeben</div>
                    <div class="option" onclick="showNode('dt-viol-info')">Information verweigert</div>
                    <div class="option" onclick="showNode('dt-viol-decision')">Entscheidung ohne Absprache</div>
                </div>
                <button class="back-button" onclick="showNode('dt-start')">← Zurück</button>
            </div>

            <div id="dt-viol-access" class="result hidden">
                <h3>VORGEHEN: Dokumentieren &amp; Eskalieren</h3>
                <div class="result-content">
                    <p><strong>Schritt 1: An den anderen Elternteil (einmalig):</strong></p>
                    <div class="example">
                        "Am [Datum] war laut [Vereinbarung] meine Umgangszeit. Der Umgang hat nicht stattgefunden.<br><br>
                        Bitte halten Sie sich an die Vereinbarung.<br><br>MfG"
                    </div>
                    <p class="mt-20"><strong>Schritt 2: An Jugendamt:</strong></p>
                    <div class="example">
                        "Sehr geehrte Damen und Herren,<br><br>
                        ich dokumentiere: Am [Datum] war laut Punkt [X] meine Umgangszeit. [Kurze Sachdarstellung].<br><br>
                        Bitte um Dokumentation.<br><br>MfG"
                    </div>
                    <p class="mt-20"><strong>Schritt 3: Bei Wiederholung:</strong></p>
                    <div class="warning">
                        → Ordnungsmittelantrag beim Familiengericht (§ 89 FamFG)<br>
                        → Rechtsberatung einholen
                    </div>
                </div>
                <button class="back-button" onclick="showNode('dt-violation')">← Zurück</button>
            </div>

            <div id="dt-viol-docs" class="result hidden">
                <h3>VORGEHEN: Auffordern, warten, selbst handeln</h3>
                <div class="result-content">
                    <div class="example">
                        "Laut [Vereinbarung] sind [Dokumente] mitzugeben. Bitte beim nächsten Termin dabei haben. MfG"
                    </div>
                    <p class="mt-20"><strong>Nach 2 Wochen ohne Besserung:</strong></p>
                    <div class="success">
                        1. Dokumente selbst beschaffen<br>
                        2. Kurze Info: "Dokumente waren erneut nicht dabei. Ich habe Ersatz beantragt."<br>
                        3. Kosten und Zeitaufwand dokumentieren
                    </div>
                </div>
                <button class="back-button" onclick="showNode('dt-violation')">← Zurück</button>
            </div>

            <div id="dt-viol-info" class="result hidden">
                <h3>VORGEHEN: Direkt zur Quelle</h3>
                <div class="result-content">
                    <div class="example">
                        "Ich benötige [Information]. Als Sorgeberechtigter habe ich Anspruch darauf. Bitte bis [Datum]. MfG"
                    </div>
                    <p class="mt-20"><strong>Falls keine Antwort:</strong></p>
                    <div class="success">
                        Keine zweite Anfrage.<br>
                        → Direkt zur Quelle: Schule, Arzt, Klinik<br>
                        → Jugendamt informieren
                    </div>
                </div>
                <button class="back-button" onclick="showNode('dt-violation')">← Zurück</button>
            </div>

            <div id="dt-viol-decision" class="result hidden">
                <h3>VORGEHEN: Nach Gewicht unterscheiden</h3>
                <div class="result-content">
                    <p><strong>Wichtige Entscheidungen (Gesundheit, Schule, Wohnort):</strong></p>
                    <div class="warning">
                        → Schriftlicher Widerspruch<br>
                        → Dokumentation Jugendamt<br>
                        → Bei Blockade: § 1628 BGB Antrag
                    </div>
                    <p class="mt-20"><strong>Alltägliche Entscheidungen (Kleidung, Hobbys):</strong></p>
                    <div class="success">
                        → Nicht eingreifen<br>
                        → Fokus auf wichtige Themen
                    </div>
                </div>
                <button class="back-button" onclick="showNode('dt-violation')">← Zurück</button>
            </div>

            <!-- PATH 4: Notfall -->
            <div id="dt-emergency" class="result hidden">
                <h3>NOTFALL-KOMMUNIKATION</h3>
                <div class="result-content">
                    <div class="warning">
                        <strong>Sofort und direkt informieren:</strong><br><br>
                        "[Kind] [Situation]. Ich bin/war [Ort]. [Status]. Weitere Info folgt."
                    </div>
                    <div class="principle-box">
                        <strong>Reihenfolge:</strong><br>
                        1. Handeln (Notruf, Krankenhaus)<br>
                        2. Informieren (Fakten)<br>
                        3. Dokumentieren (später)<br>
                        4. Diskussion (viel später oder nie)
                    </div>
                </div>
                <button class="back-button" onclick="showNode('dt-start')">← Zurück</button>
            </div>

        </div><!-- #guide-written -->

    </div><!-- .guide-wrapper -->
</div><!-- .page -->

<?php include 'includes/cookie_banner.php'; ?>
<?php include 'includes/footer.php'; ?>
    <script src="script.js"></script>
</body>
</html>
