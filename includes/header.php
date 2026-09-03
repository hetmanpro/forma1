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
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= htmlspecialchars($pageTitle) ?></title>
<link rel="stylesheet" href="/assets/css/fonts.css">
<link rel="stylesheet" href="/assets/css/base.css">
<?php foreach ($pageCss as $href): ?>
<link rel="stylesheet" href="<?= htmlspecialchars($href) ?>">
<?php endforeach; ?>
</head>
<body<?= $bodyClass ? ' class="' . htmlspecialchars($bodyClass) . '"' : '' ?>>
