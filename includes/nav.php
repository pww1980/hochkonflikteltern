    <!-- Navigation -->
    <nav>
        <div class="nav-container">
            <a href="index.php" class="logo">Hochkonflikt Eltern</a>
            <button class="nav-toggle" aria-label="Menü öffnen" aria-expanded="false" onclick="toggleNav(this)">
                <span></span><span></span><span></span>
            </button>
            <ul class="nav-links" id="navLinks">
                <?php if (($current_page ?? '') === 'home'): ?>
                <li><a href="#" data-page="home" onclick="showPage('home')" class="active">Start</a></li>
                <li><a href="#" data-page="meetings" onclick="showPage('meetings'); return false;">🗣️ Persönliche Gespräche</a></li>
                <?php else: ?>
                <li><a href="index.php">Start</a></li>
                <li><a href="index.php">🗣️ Persönliche Gespräche</a></li>
                <?php endif; ?>
                <li><a href="Kommunikationsleitfaden_Ultimate.php"<?= ($current_page ?? '') === 'leitfaden' ? ' class="active"' : '' ?>>✉️ Schriftliche Kommunikation</a></li>
                <li><a href="background.php"<?= ($current_page ?? '') === 'background' ? ' class="active"' : '' ?>>📚 Hintergrundwissen</a></li>
                <li><a href="longterm.php"<?= ($current_page ?? '') === 'longterm' ? ' class="active"' : '' ?>>📈 Langfriststrategie</a></li>
                <li><a href="selfcare.php"<?= ($current_page ?? '') === 'selfcare' ? ' class="active"' : '' ?>>🛡️ Selbstschutz</a></li>
                <li><a href="parenting.php"<?= ($current_page ?? '') === 'parenting' ? ' class="active"' : '' ?>>👨‍👩‍👧 Co- vs. Parallel Parenting</a></li>
                <li><a href="patterns.php"<?= ($current_page ?? '') === 'patterns' ? ' class="active"' : '' ?>>🧠 Muster</a></li>
                <li><a href="about.php"<?= ($current_page ?? '') === 'about' ? ' class="active"' : '' ?>>Über mich</a></li>
                <li><a href="contact.php"<?= ($current_page ?? '') === 'contact' ? ' class="active"' : '' ?>>Kontakt</a></li>
            </ul>
        </div>
    </nav>
