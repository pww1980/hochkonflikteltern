/* ===================================================
   Hochkonflikt Eltern – Haupt-JavaScript
   =================================================== */

// ---------- Navigation ----------

function showPage(pageId, guideSection) {
    document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
    const target = document.getElementById(pageId);
    if (target) target.classList.add('active');
    window.scrollTo({ top: 0, behavior: 'smooth' });
    document.querySelectorAll('.nav-links a').forEach(a => {
        a.classList.toggle('active', a.dataset.page === pageId);
    });
    if (typeof closeNav === 'function') closeNav();
    if (pageId === 'guide') { showGuideSection(guideSection || 'overview'); }
}

function toggleNav(btn) {
    const navLinks = document.getElementById('navLinks');
    const open = navLinks.classList.toggle('open');
    btn.setAttribute('aria-expanded', open ? 'true' : 'false');
}

function closeNav() {
    const navLinks = document.getElementById('navLinks');
    const toggle = document.querySelector('.nav-toggle');
    if (navLinks) navLinks.classList.remove('open');
    if (toggle) toggle.setAttribute('aria-expanded', 'false');
}

document.addEventListener('click', function(e) {
    const nav = document.querySelector('nav');
    if (nav && !nav.contains(e.target)) closeNav();
});
document.addEventListener('keydown', function(e) { if (e.key === 'Escape') closeNav(); });

// ---------- Tabs (Gespräche-Seite) ----------

function showInst(id, btn) {
    document.querySelectorAll('.inst-panel').forEach(p => p.classList.remove('active'));
    document.querySelectorAll('.inst-tab').forEach(b => b.classList.remove('active'));
    const panel = document.getElementById('inst-' + id);
    if (panel) panel.classList.add('active');
    if (btn) btn.classList.add('active');
}

// ---------- Leitfaden / Entscheidungsbaum ----------

const _sectionLabels = {
    'written':    'Schriftliche Kommunikation',
    'background': 'Hintergrundwissen',
    'longterm':   'Langfriststrategie',
    'parenting':  'Co- vs. Parallel Parenting',
    'selfcare':   'Selbstschutz'
};

const _nodeLabels = {
    'dt-received':      'Ich habe eine Nachricht erhalten',
    'dt-send':          'Ich muss etwas mitteilen',
    'dt-violation':     'Verstoß gegen Vereinbarungen',
    'dt-emergency':     'Notfall / Dringend',
    'dt-attack':        'Angriff / Vorwurf',
    'dt-info':          'Sachliche Information',
    'dt-question':      'Frage oder Diskussion',
    'dt-change':        'Änderungsanfrage',
    'dt-appointment':   'Termin mitteilen',
    'dt-request-info':  'Informationen anfordern',
    'dt-request-docs':  'Dokumente anfordern',
    'dt-clarify':       'Sachverhalt klarstellen',
    'dt-viol-access':   'Umgang wird verweigert',
    'dt-viol-docs':     'Dokumente fehlen',
    'dt-viol-info':     'Information verweigert',
    'dt-viol-decision': 'Entscheidung ohne Absprache'
};

function showGuideSection(sectionId) {
    document.querySelectorAll('.guide-sub-section').forEach(s => s.classList.remove('active'));
    const target = document.getElementById('guide-' + sectionId);
    if (target) target.classList.add('active');
    if (sectionId === 'written') { showNode('dt-start'); }
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

function showNode(nodeId) {
    const tree = document.getElementById('guide-written');
    if (!tree) return;
    tree.querySelectorAll('.decision-node, .result').forEach(n => n.classList.add('hidden'));
    const target = document.getElementById(nodeId);
    if (target) {
        target.classList.remove('hidden');
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }
}

function navigateToGuide(sectionId) {
    showPage('guide', sectionId);
}

// ---------- Kontaktformular ----------

(function initContactForm() {
    const form = document.getElementById('contactForm');
    if (!form) return;

    form.addEventListener('submit', async function(e) {
        e.preventDefault();

        const btn    = this.querySelector('button[type="submit"]');
        const status = document.getElementById('formStatus');

        btn.disabled    = true;
        btn.textContent = 'Wird gesendet …';
        status.className = 'form-status';
        status.textContent = '';

        try {
            const res  = await fetch('contact_handler.php', {
                method: 'POST',
                body:   new FormData(this)
            });
            const data = await res.json();

            if (data.success) {
                status.className   = 'form-status success';
                status.textContent = data.message;
                this.reset();
            } else {
                status.className   = 'form-status error';
                status.textContent = data.message;
            }
        } catch (err) {
            status.className   = 'form-status error';
            status.textContent = 'Verbindungsfehler. Bitte prüfen Sie Ihre Internetverbindung und versuchen Sie es erneut.';
        } finally {
            btn.disabled    = false;
            btn.textContent = 'Nachricht senden';
            status.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }
    });
})();

// ---------- Cookie-Banner ----------

function setCookieConsent(accepted) {
    localStorage.setItem('cookieConsent', accepted ? 'accepted' : 'declined');
    const banner = document.getElementById('cookieBanner');
    if (banner) banner.classList.add('hidden');
}

(function initCookieBanner() {
    const banner = document.getElementById('cookieBanner');
    if (banner && !localStorage.getItem('cookieConsent')) {
        banner.classList.remove('hidden');
    }
})();
