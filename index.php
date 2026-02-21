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
                <div class="feature-card" onclick="navigateToGuide('written')">
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
                    <div class="guide-entry-card" onclick="showGuideSection('written')">
                        <div class="guide-entry-icon">✉️</div>
                        <h2>Schriftliche Kommunikation</h2>
                        <p>Nachrichten, E-Mails, WhatsApp – der interaktive Entscheidungsbaum hilft Ihnen, für jede Nachricht die richtige Reaktion zu finden.</p>
                    </div>
                    <div class="guide-entry-card" onclick="showPage('meetings')">
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
                </div>
            </div>

            <!-- ── Schriftliche Kommunikation (Entscheidungsbaum) ── -->
            <div id="guide-written" class="guide-sub-section">
                <div class="guide-sub-header">
                    <button class="back-button--light" onclick="showGuideSection('overview')">← Zurück</button>
                    <h2>✉️ Schriftliche Kommunikation</h2>
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

                <!-- Start -->
                <div id="dt-start" class="decision-node">
                    <div class="question">Was ist Ihre aktuelle Situation?</div>
                    <div class="options">
                        <div class="option" onclick="showNode('dt-received')">Ich habe eine Nachricht erhalten</div>
                        <div class="option" onclick="showNode('dt-send')">Ich muss etwas mitteilen</div>
                        <div class="option" onclick="showNode('dt-violation')">Verstoß gegen Vereinbarungen</div>
                        <div class="option" onclick="showNode('dt-emergency')">Notfall / Dringend</div>
                    </div>
                </div>

                <!-- Nachricht erhalten -->
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
                    <h3>In 90 % der Fälle: Nicht antworten</h3>
                    <div class="result-content">
                        <p><strong>Grundregel:</strong> Vorwürfe und Angriffe brauchen keine Antwort.</p>
                        <div class="principle-box">
                            <strong>Warum nicht?</strong><br>
                            • Jede Verteidigung verstärkt den Konflikt<br>
                            • Sie geraten in reaktive Position<br>
                            • Schweigen signalisiert Souveränität
                        </div>
                        <p><strong>Nur antworten wenn</strong> ein faktisch falscher Sachverhalt dokumentarisch korrigiert werden muss:</p>
                        <div class="example">"Zur Klarstellung: [Ein Fakt in einem Satz].<br><br>Mit freundlichen Grüßen"</div>
                        <div class="warning">
                            <strong>⚠️ Niemals:</strong> Rechtfertigungen · Emotionale Aussagen · Gegenvorwürfe · Lange Erklärungen
                        </div>
                    </div>
                    <button class="back-button" onclick="showNode('dt-received')">← Zurück</button>
                </div>

                <div id="dt-info" class="result hidden">
                    <h3>Kurze Bestätigung senden</h3>
                    <div class="result-content">
                        <div class="example">"Vielen Dank für die Information.<br>[Optional: Gute Besserung / Zur Kenntnis]<br><br>Mit freundlichen Grüßen"</div>
                        <div class="principle-box">
                            <strong>Drei-Satz-Maximum.</strong> Keine Ratschläge. Keine Nachfragen. Keine Kritik.
                        </div>
                        <div class="info"><strong>Timing:</strong> 24–48 h Antwortzeit zeigt Verlässlichkeit ohne Dringlichkeit.</div>
                    </div>
                    <button class="back-button" onclick="showNode('dt-received')">← Zurück</button>
                </div>

                <div id="dt-question" class="result hidden">
                    <h3>Sachfrage oder Diskussionsköder?</h3>
                    <div class="result-content">
                        <p><strong>Echte Sachfrage</strong> – konkrete Details, Termine, Informationen:</p>
                        <div class="success">→ Kurz beantworten (max. 3 Sätze)</div>
                        <p class="mt-20"><strong>Diskussionsversuch</strong> – „Warum …", „Findest Du nicht …":</p>
                        <div class="warning">→ Nicht antworten. Das ist ein Köder.</div>
                        <div class="example example--light">
                            <strong>Sachfrage:</strong> „Wann bringst Du [Kind] zurück?"<br>
                            <strong>Antwort:</strong> „Um 17 Uhr laut Vereinbarung. MfG"<br><br>
                            <strong>Köder:</strong> „Warum bestehst Du auf diesen Zeiten?"<br>
                            <strong>Antwort:</strong> Keine.
                        </div>
                    </div>
                    <button class="back-button" onclick="showNode('dt-received')">← Zurück</button>
                </div>

                <div id="dt-change" class="result hidden">
                    <h3>Verweis auf offizielle Stellen</h3>
                    <div class="result-content">
                        <div class="principle-box">
                            <strong>Keine Verhandlungen per Nachricht.</strong><br>
                            Alle Änderungen über Erziehungsberatung oder Gericht.
                        </div>
                        <div class="example">"Änderungen der Vereinbarung besprechen wir bei [Beratungsstelle / Termin].<br><br>MfG"</div>
                        <p class="mt-20"><strong>Bei einmaliger Ausnahme:</strong></p>
                        <div class="example">"Für diese Ausnahme: [Ja/Nein mit kurzem Grund].<br>Für strukturelle Änderungen: Termin bei [Stelle].<br><br>MfG"</div>
                    </div>
                    <button class="back-button" onclick="showNode('dt-received')">← Zurück</button>
                </div>

                <!-- Ich muss mitteilen -->
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
                    <h3>Sachliche Mitteilung</h3>
                    <div class="result-content">
                        <div class="example">"Am [Datum] um [Uhrzeit] findet [Termin] statt.<br><br>Mit freundlichen Grüßen"</div>
                        <div class="principle-box">
                            <strong>Keine Fragen einbauen:</strong><br>
                            ❌ „Passt Dir das?" · ❌ „Könntest Du …?"<br>
                            ✓ Einfach mitteilen. Punkt.
                        </div>
                        <div class="info">
                            <strong>Vorlaufzeit:</strong> Routine: 7 Tage · Arzt: 2–3 Tage · Notfall: Sofort
                        </div>
                    </div>
                    <button class="back-button" onclick="showNode('dt-send')">← Zurück</button>
                </div>

                <div id="dt-request-info" class="result hidden">
                    <h3>Information anfordern</h3>
                    <div class="result-content">
                        <div class="example">"Ich benötige [konkrete Information] für [Zweck].<br>Laut [Sorgerecht/Vereinbarung] habe ich Anspruch darauf.<br>Bitte bis [Datum].<br><br>Mit freundlichen Grüßen"</div>
                        <div class="principle-box"><strong>Drei Elemente:</strong> Was · Rechtliche Grundlage · Klare Frist</div>
                        <div class="warning"><strong>Falls keine Antwort:</strong> Keine Erinnerung – direkt zur Quelle (Schule, Arzt, Jugendamt)</div>
                    </div>
                    <button class="back-button" onclick="showNode('dt-send')">← Zurück</button>
                </div>

                <div id="dt-request-docs" class="result hidden">
                    <h3>Dokumente anfordern</h3>
                    <div class="result-content">
                        <div class="example">"Laut [Vereinbarung] sind [Dokumente] bei Umgangsterminen mitzugeben.<br>Bitte stellen Sie sicher, dass diese beim nächsten Termin dabei sind.<br><br>MfG"</div>
                        <div class="info"><strong>Bei wiederholtem Fehlen:</strong> Dokumente selbst beschaffen, Kosten dokumentieren.</div>
                    </div>
                    <button class="back-button" onclick="showNode('dt-send')">← Zurück</button>
                </div>

                <div id="dt-clarify" class="result hidden">
                    <h3>Sachliche Richtigstellung</h3>
                    <div class="result-content">
                        <div class="example">"Zur Klarstellung: [Ein Fakt in einem Satz].<br><br>Mit freundlichen Grüßen"</div>
                        <div class="principle-box"><strong>Ein Fakt. Ein Satz. Fertig.</strong> Keine Begründungen, keine Emotionen.</div>
                        <div class="warning">Nur klarstellen wenn dokumentarisch relevant für Jugendamt/Gericht.</div>
                    </div>
                    <button class="back-button" onclick="showNode('dt-send')">← Zurück</button>
                </div>

                <!-- Verstöße -->
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
                    <h3>Dokumentieren &amp; Eskalieren</h3>
                    <div class="result-content">
                        <p><strong>Schritt 1 – An den anderen Elternteil (einmalig):</strong></p>
                        <div class="example">"Am [Datum] war laut [Vereinbarung] meine Umgangszeit. Der Umgang hat nicht stattgefunden.<br>Bitte halten Sie sich an die Vereinbarung.<br><br>MfG"</div>
                        <p class="mt-20"><strong>Schritt 2 – An Jugendamt:</strong></p>
                        <div class="example">"Sehr geehrte Damen und Herren,<br>ich dokumentiere: Am [Datum] war laut Punkt [X] meine Umgangszeit. [Kurze Sachdarstellung].<br>Bitte um Dokumentation.<br><br>MfG"</div>
                        <p class="mt-20"><strong>Schritt 3 – Bei Wiederholung:</strong></p>
                        <div class="warning">→ Ordnungsmittelantrag beim Familiengericht (§ 89 FamFG) · Rechtsberatung einholen</div>
                    </div>
                    <button class="back-button" onclick="showNode('dt-violation')">← Zurück</button>
                </div>

                <div id="dt-viol-docs" class="result hidden">
                    <h3>Auffordern, warten, selbst handeln</h3>
                    <div class="result-content">
                        <div class="example">"Laut [Vereinbarung] sind [Dokumente] mitzugeben. Bitte beim nächsten Termin dabei haben. MfG"</div>
                        <p class="mt-20"><strong>Nach 2 Wochen ohne Besserung:</strong></p>
                        <div class="success">1. Dokumente selbst beschaffen<br>2. „Dokumente waren erneut nicht dabei. Ich habe Ersatz beantragt."<br>3. Kosten und Zeitaufwand dokumentieren</div>
                    </div>
                    <button class="back-button" onclick="showNode('dt-violation')">← Zurück</button>
                </div>

                <div id="dt-viol-info" class="result hidden">
                    <h3>Direkt zur Quelle</h3>
                    <div class="result-content">
                        <div class="example">"Ich benötige [Information]. Als Sorgeberechtigter habe ich Anspruch darauf. Bitte bis [Datum]. MfG"</div>
                        <p class="mt-20"><strong>Falls keine Antwort:</strong></p>
                        <div class="success">Keine zweite Anfrage. → Direkt zur Quelle: Schule, Arzt, Klinik · Jugendamt informieren</div>
                    </div>
                    <button class="back-button" onclick="showNode('dt-violation')">← Zurück</button>
                </div>

                <div id="dt-viol-decision" class="result hidden">
                    <h3>Nach Gewicht unterscheiden</h3>
                    <div class="result-content">
                        <p><strong>Wichtige Entscheidungen (Gesundheit, Schule, Wohnort):</strong></p>
                        <div class="warning">→ Schriftlicher Widerspruch · Dokumentation Jugendamt · Bei Blockade: § 1628 BGB Antrag</div>
                        <p class="mt-20"><strong>Alltägliche Entscheidungen (Kleidung, Hobbys):</strong></p>
                        <div class="success">→ Nicht eingreifen · Fokus auf wichtige Themen</div>
                    </div>
                    <button class="back-button" onclick="showNode('dt-violation')">← Zurück</button>
                </div>

                <!-- Notfall -->
                <div id="dt-emergency" class="result hidden">
                    <h3>⚠️ Notfall-Kommunikation</h3>
                    <div class="result-content">
                        <div class="warning">
                            <strong>Sofort und direkt informieren:</strong><br>
                            „[Kind] [Situation]. Ich bin/war [Ort]. [Status]. Weitere Info folgt."
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
            </div>

        </div>
    </div>

    <!-- MEETINGS PAGE -->
    <div id="meetings" class="page">
        <div class="meetings-wrapper">
            <h1>Gespräche vorbereiten</h1>
            <p class="meetings-intro">Termine beim Jugendamt, in der Mediation oder Erziehungsberatung mit dem anderen Elternteil sind besonders herausfordernd. Wer vorbereitet geht, schützt sich – und wirkt glaubwürdig. Diese Seite hilft Ihnen, die richtigen Worte und die richtige Haltung zu finden.</p>

            <!-- ── 1. Vorbereitung ────────────────────────── -->
            <div class="meetings-section">
                <div class="meetings-section-title">📋 Vorbereitung</div>

                <div class="warn-box">
                    <div class="box-title">⚠️ Wichtig vorab</div>
                    In Hochkonflikt-Situationen wird <em>alles</em>, was Sie sagen, möglicherweise gegen Sie verwendet. Vorbereitung ist kein Nice-to-have – sie ist Selbstschutz.
                </div>

                <div class="check-grid">
                    <div class="check-card">
                        <h4>Unterlagen &amp; Dokumentation</h4>
                        <ul class="check-list">
                            <li>Chronologie der relevanten Ereignisse (kompakt, 1 Seite)</li>
                            <li>Schriftliche Vereinbarungen, Gerichtsbeschlüsse, Beschlüsse</li>
                            <li>Dokumentation von Umgangsverstößen (Datum, Uhrzeit, was genau)</li>
                            <li>Screenshots relevanter Nachrichten (ausgedruckt mit Datum)</li>
                            <li>Kontaktdaten von Zeugen, Ärzten, Lehrern falls relevant</li>
                        </ul>
                    </div>
                    <div class="check-card">
                        <h4>Ziele &amp; Strategie</h4>
                        <ul class="check-list">
                            <li>Max. 3 konkrete Punkte definieren, die Sie ansprechen wollen</li>
                            <li>Priorität: Was ist wirklich wichtig – was kann warten?</li>
                            <li>Erwartung realistisch setzen: kein Ergebnis erzwingbar</li>
                            <li>Eigene rote Linien kennen: Was akzeptieren Sie, was nicht?</li>
                            <li>Mögliche Provokationen antizipieren und Antworten vorbereiten</li>
                        </ul>
                    </div>
                    <div class="check-card">
                        <h4>Emotionale Vorbereitung</h4>
                        <ul class="check-list">
                            <li>Genug Schlaf, keine anderen Stresstermine direkt davor</li>
                            <li>Vertrauensperson vorher kurz sprechen (Entlastung)</li>
                            <li>Ruhige Anfahrt einplanen – nicht gehetzt ankommen</li>
                            <li>Essen und trinken nicht vergessen</li>
                            <li>Mantra vorbereiten: „Ich muss nicht gewinnen, ich muss sachlich bleiben."</li>
                        </ul>
                    </div>
                    <div class="check-card">
                        <h4>Beistand mitnehmen?</h4>
                        <ul class="check-list">
                            <li>Beim Jugendamt haben Sie das Recht auf Beistand (§ 17 SGB I)</li>
                            <li>Beistand kann sein: Anwalt, Vertrauensperson, Beratungsstelle</li>
                            <li>Ankündigen: Jugendamt vorab informieren, wer mitkommt</li>
                            <li>Bei Mediation: vorab fragen ob Beistand erlaubt ist</li>
                            <li>Bei Erziehungsberatung: meistens möglich, aber nachfragen</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- ── 2. Je Institution ──────────────────────── -->
            <div class="meetings-section">
                <div class="meetings-section-title">🏛️ Je nach Institution</div>

                <div class="inst-tabs">
                    <button class="inst-tab active" onclick="showInst('jugendamt', this)">Jugendamt (ASD)</button>
                    <button class="inst-tab" onclick="showInst('mediation', this)">Mediation</button>
                    <button class="inst-tab" onclick="showInst('beratung', this)">Erziehungsberatung</button>
                </div>

                <!-- Jugendamt -->
                <div id="inst-jugendamt" class="inst-panel active">
                    <div class="info-box">
                        <div class="box-title">ℹ️ Was das Jugendamt tut</div>
                        Der ASD (Allgemeiner Sozialer Dienst) ist keine Polizei und kein Gericht. Seine Aufgabe ist <strong>Unterstützung von Familien und Schutz des Kindeswohls</strong>. Sachbearbeiter schreiben Berichte, die an das Familiengericht gehen können – wie Sie sich im Gespräch zeigen, fließt darin ein.
                    </div>
                    <div class="tip-box">
                        <div class="box-title">✅ Was gut ankommt</div>
                        <ul style="margin:0;padding-left:18px;display:flex;flex-direction:column;gap:6px;">
                            <li>Fokus auf das Kind, nicht auf den Konflikt mit dem anderen Elternteil</li>
                            <li>Konkrete Sorgen benennen: Was hat das Kind erlebt? Was braucht es?</li>
                            <li>Kooperationsbereitschaft signalisieren – auch wenn es schwer fällt</li>
                            <li>Sachlich und ruhig bleiben, auch wenn der andere Elternteil eskaliert</li>
                            <li>Nachfragen: „Was empfehlen Sie als nächsten Schritt?"</li>
                        </ul>
                    </div>
                    <div class="warn-box">
                        <div class="box-title">⚠️ Was schadet</div>
                        <ul style="margin:0;padding-left:18px;display:flex;flex-direction:column;gap:6px;">
                            <li>Den anderen Elternteil schlecht reden – wirkt wie Konfliktverstärkung</li>
                            <li>Zu viele Papiere mitbringen und „präsentieren" – überwältigend und misstrauisch machend</li>
                            <li>Emotionale Ausbrüche oder sichtbare Wut</li>
                            <li>Das Jugendamt als Verbündeten einspannen wollen</li>
                            <li>Falsche oder übertriebene Angaben – das fällt auf</li>
                        </ul>
                    </div>
                    <div class="tip-box">
                        <div class="box-title">📌 Besonderheiten beim Jugendamt</div>
                        <ul style="margin:0;padding-left:18px;display:flex;flex-direction:column;gap:6px;">
                            <li>Sie können auch <strong>allein</strong> einen Termin beim Jugendamt anfragen – ohne den anderen Elternteil</li>
                            <li>Jugendamtsmitarbeiter sind oft überlastet: kommen Sie auf den Punkt</li>
                            <li>Sie können nach einer schriftlichen Zusammenfassung des Gesprächs fragen</li>
                            <li>Das Jugendamt kann bei anhaltenden Problemen <strong>Hilfen zur Erziehung</strong> (HzE) vorschlagen – das ist keine Niederlage</li>
                            <li>Im Notfall (akute Gefährdung): § 8a SGB VIII – direkt ansprechen</li>
                        </ul>
                    </div>
                    <div class="script-box">„Mir ist wichtig, dass [Kind] diese schwierige Zeit gut übersteht. Ich bin bereit, daran mitzuarbeiten. Konkret habe ich folgende Sorge: [eine Sache, sachlich]. Was würden Sie empfehlen?"</div>
                </div>

                <!-- Mediation -->
                <div id="inst-mediation" class="inst-panel">
                    <div class="warn-box">
                        <div class="box-title">⚠️ Wann Mediation nicht geeignet ist</div>
                        Mediation funktioniert nur bei <strong>grundsätzlicher Kooperationsbereitschaft beider Seiten</strong>. Bei echter Hochkonflikt-Persönlichkeit, häuslicher Gewalt oder stark asymmetrischer Machtdynamik kann Mediation sogar schaden – der andere Elternteil sammelt Informationen, signalisiert Kooperation ohne sie zu leben, und nutzt den Rahmen zur weiteren Manipulation.
                    </div>
                    <div class="info-box">
                        <div class="box-title">ℹ️ Was Mediation ist – und was nicht</div>
                        Mediation ist ein freiwilliger, vertraulicher Prozess. Der Mediator ist <strong>neutral</strong> – er ergreift keine Partei. Er moderiert, schlägt aber keine Lösungen vor. Getroffene Vereinbarungen sind zunächst nicht rechtlich bindend, können aber notariell beurkundet werden.
                    </div>
                    <div class="tip-box">
                        <div class="box-title">✅ Tipps für die Mediation</div>
                        <ul style="margin:0;padding-left:18px;display:flex;flex-direction:column;gap:6px;">
                            <li>Fokus auf <strong>Interessen</strong>, nicht auf Positionen: Was brauche ich wirklich – warum?</li>
                            <li>Den Mediator nicht überzeugen wollen – er ist kein Richter</li>
                            <li>Pausen nutzen wenn es emotional wird – aktiv darum bitten</li>
                            <li>Vereinbarungen nur abschließen die Sie wirklich mittragen</li>
                            <li>Ergebnisse immer schriftlich festhalten, ggf. notariell beurkunden lassen</li>
                        </ul>
                    </div>
                    <div class="warn-box">
                        <div class="box-title">🔍 Achtung: Hochkonflikt in der Mediation</div>
                        <ul style="margin:0;padding-left:18px;display:flex;flex-direction:column;gap:6px;">
                            <li>Der andere Elternteil kann Mediation nutzen um Zeit zu gewinnen</li>
                            <li>Alles was Sie preisgeben kann später gegen Sie verwendet werden</li>
                            <li>Scheinvereinbarungen: Zustimmung im Sitzungsraum, keine Umsetzung danach</li>
                            <li>Sie können Mediation jederzeit abbrechen – ohne Begründung</li>
                            <li>Ggf. Co-Mediation mit eigenem Anwalt als Beistand klären</li>
                        </ul>
                    </div>
                    <div class="script-box">„Ich möchte eine Lösung finden, die für [Kind] gut ist. Mein Interesse ist [konkret]. Ich bin offen für Vorschläge – möchte aber jede Vereinbarung schriftlich festhalten."</div>
                </div>

                <!-- Erziehungsberatung -->
                <div id="inst-beratung" class="inst-panel">
                    <div class="info-box">
                        <div class="box-title">ℹ️ Was Erziehungsberatung ist</div>
                        Erziehungsberatungsstellen (Caritas, Diakonie, AWO, kommunale Träger) sind <strong>kostenlos, freiwillig und vertraulich</strong>. Sie sind keine Entscheidungsinstanz – sie helfen bei der Kommunikation und unterstützen Kinder in Trennungssituationen. Berater sind <strong>nicht verpflichtet</strong>, Berichte ans Gericht zu liefern (außer bei Kindeswohlgefährdung).
                    </div>
                    <div class="tip-box">
                        <div class="box-title">✅ Wie gemeinsame Beratung gelingt</div>
                        <ul style="margin:0;padding-left:18px;display:flex;flex-direction:column;gap:6px;">
                            <li>Das Kind in den Mittelpunkt stellen: Was braucht es gerade?</li>
                            <li>Bereit sein, eigenes Verhalten zu reflektieren – auch unbequemes</li>
                            <li>Berater nicht als Schiedsrichter nutzen wollen</li>
                            <li>Konkrete Themen nennen: Übergaben, Kommunikation, besondere Anlässe</li>
                            <li>Ergebnisse aus den Sitzungen selbst schriftlich festhalten</li>
                        </ul>
                    </div>
                    <div class="ok-box">
                        <div class="box-title">💡 Auch ohne den anderen Elternteil</div>
                        Sie können Erziehungsberatung auch <strong>allein</strong> in Anspruch nehmen – das ist sogar oft sinnvoller. Einzelberatung stärkt Ihre eigene Handlungsfähigkeit und ist vollständig vertraulich. Viele Stellen bieten auch Kinderberatung an, damit das Kind einen eigenen Raum bekommt.
                    </div>
                    <div class="warn-box">
                        <div class="box-title">⚠️ Grenzen der gemeinsamen Beratung</div>
                        <ul style="margin:0;padding-left:18px;display:flex;flex-direction:column;gap:6px;">
                            <li>Bei schwerem Hochkonflikt kann gemeinsame Beratung eskalieren statt deeskalieren</li>
                            <li>Berater können nicht erzwingen, dass der andere Elternteil mitarbeitet</li>
                            <li>Keine Rechtskraft: Vereinbarungen aus Beratungsgesprächen sind nicht vollstreckbar</li>
                        </ul>
                    </div>
                    <div class="script-box">„Ich komme hierher, weil mir [Kind] am Herzen liegt. Ich möchte lernen, wie wir als Eltern besser kommunizieren können – unabhängig davon, wie schwierig das gerade ist."</div>
                </div>
            </div>

            <!-- ── 3. Im Gespräch ─────────────────────────── -->
            <div class="meetings-section">
                <div class="meetings-section-title">🗣️ Im Gespräch</div>

                <div class="check-grid">
                    <div class="check-card">
                        <h4>Kommunikationstechniken</h4>
                        <ul class="check-list">
                            <li>Sprechen Sie die Fachkraft an, nicht den anderen Elternteil</li>
                            <li>Ich-Botschaften: „Ich mache mir Sorgen, dass …" statt „Er/Sie macht …"</li>
                            <li>Konkret und datiert: „Am 14.01 war die Übergabe zwei Stunden später als vereinbart."</li>
                            <li>Pause einfordern wenn nötig: „Ich brauche kurz einen Moment."</li>
                            <li>Nachfragen statt annehmen: „Habe ich das richtig verstanden, dass …?"</li>
                        </ul>
                    </div>
                    <div class="check-card">
                        <h4>Bei Provokationen</h4>
                        <ul class="check-list">
                            <li>Kurze Pause – atmen – dann erst sprechen</li>
                            <li>Nicht verteidigen, nicht erklären: Angriff kommentarlos stehen lassen</li>
                            <li>An die Fachkraft wenden: „Kann ich auf das Thema X zurückkommen?"</li>
                            <li>Bei falschen Aussagen: ruhig korrigieren, nicht empört</li>
                            <li>DARVO erkennen: nicht auf die Umkehrung einsteigen</li>
                        </ul>
                    </div>
                    <div class="check-card">
                        <h4>Sprache &amp; Haltung</h4>
                        <ul class="check-list">
                            <li>Kein Schimpfen, keine Ironie, kein Augenrollen</li>
                            <li>Kooperative Formulierungen: „Ich wäre bereit …", „Ich schlage vor …"</li>
                            <li>Das Kind beim Namen nennen – nicht „das Kind"</li>
                            <li>Lösungsorientiert klingen, auch bei schwierigen Themen</li>
                            <li>Zum Abschluss: nächste Schritte konkret ansprechen</li>
                        </ul>
                    </div>
                    <div class="check-card">
                        <h4>Notizen &amp; Protokoll</h4>
                        <ul class="check-list">
                            <li>Kurznotizen während des Gesprächs erlaubt und klug</li>
                            <li>Am Ende: schriftliche Zusammenfassung erbitten</li>
                            <li>Wenn keine Zusammenfassung: eigene Protokollnotiz ankündigen</li>
                            <li>Audioaufnahmen nur mit Zustimmung aller – vorher fragen</li>
                            <li>Nach dem Gespräch sofort eigene Notiz erstellen (Datum, Anwesende, Inhalte)</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- ── 4. Do / Don't ─────────────────────────── -->
            <div class="meetings-section">
                <div class="meetings-section-title">✅ Do &amp; Don't</div>
                <div class="do-dont">
                    <div class="do-col">
                        <h4>✅ Das hilft Ihrer Glaubwürdigkeit</h4>
                        <ul>
                            <li>Sachlich, ruhig und lösungsorientiert auftreten</li>
                            <li>Das Wohl des Kindes explizit benennen</li>
                            <li>Eigene Fehler eingestehen können (wenn berechtigt)</li>
                            <li>Konkrete Beispiele statt pauschale Vorwürfe</li>
                            <li>Kooperationswillen signalisieren</li>
                            <li>Pünktlich, vorbereitet und gepflegt erscheinen</li>
                            <li>Auf Angriffe gelassen reagieren</li>
                        </ul>
                    </div>
                    <div class="dont-col">
                        <h4>❌ Das schadet Ihrer Glaubwürdigkeit</h4>
                        <ul>
                            <li>Den anderen Elternteil emotional angreifen oder abwerten</li>
                            <li>Übertriebene oder nicht belegbare Vorwürfe</li>
                            <li>Fachkraft überzeugen wollen, dass Sie „Recht haben"</li>
                            <li>Mit Papieren überhäufen statt auf den Punkt kommen</li>
                            <li>Weinend oder zornig in den Termin gehen</li>
                            <li>Das Kind als Argument einsetzen</li>
                            <li>Ultimaten stellen oder Drohungen aussprechen</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- ── 5. Nachbereitung ───────────────────────── -->
            <div class="meetings-section">
                <div class="meetings-section-title">📝 Nachbereitung</div>

                <div class="tip-box">
                    <div class="box-title">✅ Sofort nach dem Gespräch</div>
                    Schreiben Sie noch am gleichen Tag eine eigene Gesprächsnotiz: Datum, Uhrzeit, Anwesende, wichtigste Aussagen, vereinbarte nächste Schritte. Das ist keine Paranoia – das ist Professionalität.
                </div>

                <div class="check-grid">
                    <div class="check-card">
                        <h4>Protokoll &amp; Bestätigung</h4>
                        <ul class="check-list">
                            <li>Per E-Mail eine schriftliche Zusammenfassung an die Fachkraft schicken: „Ich fasse unser Gespräch vom [Datum] zusammen …"</li>
                            <li>Formulierung: „Bitte korrigieren Sie mich, wenn ich etwas falsch verstanden habe."</li>
                            <li>So entsteht ein schriftlicher Beleg ohne offizielles Protokoll</li>
                            <li>Vereinbarungen explizit benennen und auf Bestätigung warten</li>
                        </ul>
                    </div>
                    <div class="check-card">
                        <h4>Nächste Schritte</h4>
                        <ul class="check-list">
                            <li>Was wurde vereinbart? Von wem bis wann?</li>
                            <li>Folgetermin direkt im Gespräch vereinbaren</li>
                            <li>Anwalt informieren wenn rechtlich relevante Aussagen gefallen sind</li>
                            <li>Eigene Reaktion und Befinden kurz notieren (für Selbstfürsorge)</li>
                        </ul>
                    </div>
                </div>

                <div class="script-box">E-Mail-Vorlage: „Sehr geehrte/r [Name], vielen Dank für das heutige Gespräch. Ich fasse die für mich wesentlichen Punkte zusammen: [Punkt 1]. [Punkt 2]. Als nächste Schritte haben wir vereinbart: [Schritt]. Bitte teilen Sie mir mit, wenn Sie etwas anders verstanden haben. Mit freundlichen Grüßen, [Ihr Name]"</div>
            </div>

            <!-- CTA -->
            <div class="meetings-guide-cta">
                <h3>Vorbereitet – und dann?</h3>
                <p>Den richtigen Ton für jede Kommunikationssituation finden Sie im Leitfaden – mit konkreten Formulierungen für schwierige Nachrichten, Eskalationen und Notfälle.</p>
                <a href="#" class="cta-button" onclick="showPage('guide')">Zum Kommunikationsleitfaden →</a>
            </div>
        </div>
    </div>

<?php include 'includes/cookie_banner.php'; ?>
<?php include 'includes/footer.php'; ?>
    <script src="script.js"></script>
</body>
</html>
