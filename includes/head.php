<?php require_once __DIR__ . '/../config.php'; ?>
<head>
    <script defer src="<?= htmlspecialchars(UMAMI_TRACKER_URL) ?>" data-website-id="<?= htmlspecialchars(UMAMI_SITE_ID) ?>"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if (!empty($robots)): ?>
    <meta name="robots" content="<?= htmlspecialchars($robots) ?>">
    <?php endif; ?>
    <title><?= htmlspecialchars($title ?? SITE_NAME) ?></title>
    <meta name="description" content="<?= htmlspecialchars($description ?? '') ?>">
    <link rel="stylesheet" href="styles.css">
</head>
