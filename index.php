<?php
$current_page = 'home';
$title        = 'Hochkonflikt Eltern – Kommunikationsleitfaden für getrennte Eltern';
$description  = 'Professioneller Kommunikations-Leitfaden für Eltern in Hochkonfliktsituationen nach Trennung. Praktische Strategien, psychologisches Hintergrundwissen.';
?>
<!DOCTYPE html>
<html lang="de">
<?php include 'includes/head.php'; ?>
<body>
<?php include 'includes/nav.php'; ?>

<!-- HOME PAGE -->
    <div id="home" class="page active">
        <section class="hero">
            <h1>Kommunikation in Hochkonfliktsituationen</h1>
            <p class="subtitle">Der professionelle Leitfaden für getrennte Eltern</p>
            <p>Praktische Strategien, psychologisches Hintergrundwissen und konkrete Handlungsempfehlungen für friedlichere Kommunikation – auch wenn der andere Elternteil nicht kooperiert.</p>
            <a href="#" class="cta-button" onclick="showPage('guide')">Zum kostenlosen Leitfaden →</a>
        </section>

        <section class="features">
            <h2>Was Sie erwartet</h2>
            <div class="feature-grid">
                <div class="feature-card" onclick="location.href='patterns.php'">
                    <div class="feature-icon">🧠</div>
                    <h3>Muster erkennen</h3>
                    <p>25+ dokumentierte Hochkonflikt-Muster – von DARVO und Gaslighting bis Hub-and-Spoke und systemischem Missbrauch, jeweils mit Gegenstrategie.</p>
                </div>
                <div class="feature-card" onclick="location.href='Kommunikationsleitfaden_Ultimate.php'">
                    <div class="feature-icon">🗺️</div>
                    <h3>Interaktiver Entscheidungsbaum</h3>
                    <p>Für jede Situation die richtige Reaktion finden – mit konkreten Formulierungsvorschlägen und Templates.</p>
                </div>
                <div class="feature-card" onclick="location.href='longterm.php'">
                    <div class="feature-icon">📈</div>
                    <h3>Langfristige Strategie</h3>
                    <p>Denken Sie in Jahren, nicht in einzelnen Konflikten. Lernen Sie nachhaltige Ansätze für dauerhaften Frieden.</p>
                </div>
                <div class="feature-card" onclick="location.href='selfcare.php'">
                    <div class="feature-icon">🛡️</div>
                    <h3>Selbstschutz</h3>
                    <p>Schützen Sie Ihre emotionale Gesundheit und Energie – mit praktischen Techniken für den Alltag.</p>
                </div>
                <div class="feature-card" onclick="location.href='parenting.php'">
                    <div class="feature-icon">👨‍👩‍👧</div>
                    <h3>Co- vs. Parallel Parenting</h3>
                    <p>Warum Co-Parenting im Hochkonflikt oft scheitert – und wie Parallel Parenting das Kind schützt. Mit Vergleich, Forschungsbezug und Praxistipps.</p>
                </div>
                <div class="feature-card" onclick="location.href='background.php'">
                    <div class="feature-icon">📚</div>
                    <h3>Forschungsbasiert</h3>
                    <p>Alle Strategien basieren auf aktueller Familienpsychologie und Konfliktforschung.</p>
                </div>
                <div class="feature-card" onclick="location.href='about.php'">
                    <div class="feature-icon">✅</div>
                    <h3>Praxiserprobt</h3>
                    <p>Entwickelt aus 9 Jahren realer Erfahrung in einer Hochkonfliktsituation.</p>
                </div>
                <div class="feature-card" onclick="location.href='selbstreflexion.php'">
                    <div class="feature-icon">🪞</div>
                    <h3>Selbstreflexion</h3>
                    <p>Die unbequeme Frage, die die meisten Ratgeber auslassen: Welchen Anteil haben Sie selbst an der Dynamik? Mit konkreten Selbstchecks zu Kommunikation, Kind, Wahrnehmung und System.</p>
                </div>
                <div class="feature-card feature-card--child">
                    <div class="feature-icon">👧🧒</div>
                    <h3>Am Ende hilft es dem Kind</h3>
                    <p>Kinder leiden am meisten, wenn Eltern dauerhaft im Konflikt bleiben. Jede Strategie in diesem Leitfaden hat ein Ziel: den Konflikt so weit zu reduzieren, dass Ihr Kind in beiden Welten aufwachsen kann – ohne zerrissen zu werden. Was Sie hier lernen, tun Sie nicht nur für sich.</p>
                </div>
            </div>
        </section>

        <section class="hero hero--secondary">
            <h2>Für wen ist dieser Leitfaden?</h2>
            <div class="checklist">
                <p>✓ Sie stecken in wiederkehrenden Konflikten mit dem anderen Elternteil</p>
                <p>✓ "Normale" Kommunikation funktioniert nicht mehr</p>
                <p>✓ Sie fühlen sich manipuliert oder emotional erschöpft</p>
                <p>✓ Sie suchen konkrete, umsetzbare Strategien</p>
                <p>✓ Sie wollen Ihre Kinder schützen ohne den Konflikt zu verschärfen</p>
            </div>
            <a href="#" class="cta-button cta-mt" onclick="showPage('guide')">Jetzt Leitfaden öffnen</a>
        </section>
    </div>

    <!-- GUIDE PAGE -->
    <div id="guide" class="page">
        <div class="guide-wrapper">

            <!-- ── Übersicht ─────────────────────────────── -->
            <div id="guide-overview" class="guide-sub-section active">
                <h1>Kommunikationsleitfaden</h1>
                <p>Wählen Sie den Bereich, der Ihrer aktuellen Situation entspricht.</p>

                <div class="guide-entry-cards">
                    <div class="guide-entry-card" onclick="location.href='Kommunikationsleitfaden_Ultimate.php'">
                        <div class="guide-entry-icon">✉️</div>
                        <h2>Schriftliche Kommunikation</h2>
                        <p>Nachrichten, E-Mails, WhatsApp – der interaktive Entscheidungsbaum hilft Ihnen, für jede Nachricht die richtige Reaktion zu finden.</p>
                    </div>
                    <div class="guide-entry-card" onclick="location.href='meetings.php'">
                        <div class="guide-entry-icon">🗣️</div>
                        <h2>Persönliches Gespräch</h2>
                        <p>Jugendamt, Mediation, Erziehungsberatung – vorbereitet und souverän in jeden Termin.</p>
                    </div>
                </div>

                <div class="guide-topics">
                    <button class="guide-topic-link" onclick="location.href='background.php'">📚 Hintergrundwissen</button>
                    <button class="guide-topic-link" onclick="location.href='patterns.php'">🧠 Muster erkennen</button>
                    <button class="guide-topic-link" onclick="location.href='longterm.php'">📈 Langfriststrategie</button>
                    <button class="guide-topic-link" onclick="location.href='selfcare.php'">🛡️ Selbstschutz</button>
                    <button class="guide-topic-link" onclick="location.href='parenting.php'">👨‍👩‍👧 Co- vs. Parallel Parenting</button>
                    <button class="guide-topic-link" onclick="location.href='selbstreflexion.php'">🪞 Selbstreflexion</button>
                </div>
            </div>

        </div>
    </div>

<?php include 'includes/cookie_banner.php'; ?>
<?php include 'includes/footer.php'; ?>
    <script src="script.js"></script>
</body>
</html>
