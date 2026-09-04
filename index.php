<?php
$config = require __DIR__ . '/includes/config.php';
$pageTitle = 'FORMA — Coming Soon, Vienna';
$pageCss = ['/assets/css/home.css'];
$bodyClass = 'body-home';
require __DIR__ . '/includes/header.php';
?>
<script>
(function () {
  // Two Figma mobile designs exist: the spacious one (393x852) and a
  // dedicated compact one (393x650, frame "iPhone 16 - 25") built for
  // real phones whose visible Safari viewport is shorter than 852.
  // Switch to the compact design once the real measured height drops
  // below the midpoint between the two, so neither design ever needs
  // to crop — each is shown at (or scaled from) its own true size.
  var COMPACT_THRESHOLD = (852 + 650) / 2; // 751
  function setRealVh() {
    var h = (window.visualViewport && window.visualViewport.height) || window.innerHeight;
    document.documentElement.style.setProperty('--vh100', h + 'px');
    document.documentElement.classList.toggle('compact-mobile', h < COMPACT_THRESHOLD);
  }
  setRealVh();
  window.addEventListener('resize', setRealVh);
  window.addEventListener('orientationchange', setRealVh);
  if (window.visualViewport) {
    window.visualViewport.addEventListener('resize', setRealVh);
  }
})();
</script>
<main class="screen page-home">
  <div class="el bg-photo">
    <picture>
      <source media="(min-width: 768px)" srcset="/assets/images/home-bg-desktop.jpg">
      <img src="/assets/images/home-bg.jpg" alt="FORMA salon">
    </picture>
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
    Nordbahnstrasse 15, 1020<br class="address-break"><span class="address-city">Vienna</span>
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
