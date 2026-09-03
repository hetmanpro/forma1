<?php
$config = require __DIR__ . '/includes/config.php';
$pageTitle = 'FORMA — Coming Soon, Vienna';
$pageCss = ['/assets/css/home.css'];
$bodyClass = '';
require __DIR__ . '/includes/header.php';
?>
<main class="screen page-home">
  <div class="el bg-photo">
    <img src="/assets/images/home-bg.jpg" alt="FORMA salon">
  </div>

  <div class="el logo">
    <img src="/assets/logo/forma-logo.svg" alt="FORMA">
  </div>

  <p class="el opening-date">COMING SOON<br>&nbsp;</p>

  <div class="el actions">
    <a class="btn" href="https://wa.me/<?= htmlspecialchars($config['whatsapp_e164']) ?>?text=<?= rawurlencode('Hi, I\'d like to book an appointment.') ?>">BOOKING</a>
    <a class="btn" href="/new-client.php">NEW CLIENT</a>
  </div>

  <a class="el address" href="<?= htmlspecialchars($config['maps_url']) ?>" target="_blank" rel="noopener">
    Nordbahnstrasse 15, 1020<br>Vienna
  </a>

  <nav class="el legal-links">
    <a href="/legal.php">Legal Notice</a>
    <a href="/legal.php#terms">Terms &amp; Conditions</a>
  </nav>

  <a class="el icon-instagram" href="<?= htmlspecialchars($config['instagram_url']) ?>" target="_blank" rel="noopener" aria-label="Instagram">
    <?php include __DIR__ . '/includes/icon-instagram.php'; ?>
  </a>

  <a class="el icon-whatsapp" href="https://wa.me/<?= htmlspecialchars($config['whatsapp_e164']) ?>" target="_blank" rel="noopener" aria-label="WhatsApp">
    <?php include __DIR__ . '/includes/icon-whatsapp.php'; ?>
  </a>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
