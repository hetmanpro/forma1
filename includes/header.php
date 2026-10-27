<?php
if (!isset($pageTitle)) {
    $pageTitle = 'FORMA';
}
if (!isset($pageCss)) {
    $pageCss = [];
}
if (!isset($bodyClass)) {
    $bodyClass = '';
}
if (!isset($pageJs)) {
    $pageJs = [];
}
?>
<!doctype html>
<html lang="en">
<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-VM1272HJNH"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-VM1272HJNH');
</script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= htmlspecialchars($pageTitle) ?></title>
<link rel="stylesheet" href="/assets/css/fonts.css">
<link rel="stylesheet" href="/assets/css/base.css">
<?php foreach ($pageCss as $href): ?>
<link rel="stylesheet" href="<?= htmlspecialchars($href) ?>">
<?php endforeach; ?>
<?php foreach ($pageJs as $src): ?>
<script src="<?= htmlspecialchars($src) ?>" defer></script>
<?php endforeach; ?>
</head>
<body<?= $bodyClass ? ' class="' . htmlspecialchars($bodyClass) . '"' : '' ?>>
