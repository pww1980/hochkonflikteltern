<?php require_once __DIR__ . '/../config.php'; ?>
<?php
// Kanonische URL aufbauen
$_self      = basename($_SERVER['PHP_SELF'] ?? 'index.php');
$_canonical = ($_self === 'index.php')
    ? SITE_URL . '/'
    : SITE_URL . '/' . $_self;

// OG-Bild: Seitenspezifisch oder globaler Fallback
$_og_image = !empty($og_image) ? $og_image : SITE_OG_IMAGE;
?>
<head>
    <script defer src="<?= htmlspecialchars(UMAMI_TRACKER_URL) ?>" data-website-id="<?= htmlspecialchars(UMAMI_SITE_ID) ?>"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if (!empty($robots)): ?>
    <meta name="robots" content="<?= htmlspecialchars($robots) ?>">
    <?php endif; ?>
    <link rel="canonical" href="<?= htmlspecialchars($_canonical) ?>">
    <title><?= htmlspecialchars($title ?? SITE_NAME) ?></title>
    <meta name="description" content="<?= htmlspecialchars($description ?? '') ?>">

    <!-- Open Graph (Facebook, LinkedIn, WhatsApp …) -->
    <meta property="og:type"        content="website">
    <meta property="og:url"         content="<?= htmlspecialchars($_canonical) ?>">
    <meta property="og:title"       content="<?= htmlspecialchars($title ?? SITE_NAME) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($description ?? '') ?>">
    <meta property="og:locale"      content="de_DE">
    <meta property="og:site_name"   content="<?= htmlspecialchars(SITE_NAME) ?>">
    <meta property="og:image"       content="<?= htmlspecialchars($_og_image) ?>">

    <!-- Twitter Card -->
    <meta name="twitter:card"        content="summary">
    <meta name="twitter:title"       content="<?= htmlspecialchars($title ?? SITE_NAME) ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($description ?? '') ?>">
    <meta name="twitter:image"       content="<?= htmlspecialchars($_og_image) ?>">

    <!-- Favicon -->
    <link rel="icon"             href="/favicon.ico"        sizes="32x32">
    <link rel="icon"             href="/favicon-96x96.png"  sizes="96x96" type="image/png">
    <link rel="icon"             href="/favicon.svg"        type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <link rel="stylesheet" href="styles.css">
</head>
