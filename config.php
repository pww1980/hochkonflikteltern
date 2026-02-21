<?php
/**
 * Zentrale Konfiguration für hochkonflikteltern.de
 *
 * ─── ANPASSEN VOR DEM LIVE-SCHALTEN ──────────────────────────────────────────
 * Tragen Sie Ihre E-Mail-Adresse ein:
 */
define('RECIPIENT_EMAIL', 'ihre@email.de');   // <-- hier anpassen
define('RECIPIENT_NAME',  'Hochkonflikt Eltern');
define('SUBJECT_PREFIX',  '[Kontaktformular] ');
// ─────────────────────────────────────────────────────────────────────────────

// Rate Limiting
define('RATE_LIMIT_FILE', sys_get_temp_dir() . '/hke_ratelimit.json');
define('RATE_LIMIT_MAX',  5);    // max. Nachrichten pro IP
define('RATE_LIMIT_SECS', 3600); // Zeitfenster in Sekunden (1 Stunde)

// Site-Konfiguration
define('SITE_NAME', 'Hochkonflikt Eltern');
define('SITE_URL',  'https://hochkonflikteltern.de');

// Umami Analytics
define('UMAMI_TRACKER_URL', 'https://tracker.hochkonflikteltern.de/script.js');
define('UMAMI_SITE_ID',     '3579d3bd-7cda-4263-9ad2-5c98d70413ba');
