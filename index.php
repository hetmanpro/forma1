<?php
$config = require __DIR__ . '/includes/config.php';
$pageTitle = 'FORMA — Coming Soon, Vienna';
$pageCss = ['/assets/css/home.css'];
$bodyClass = 'body-home';
require __DIR__ . '/includes/header.php';
?>
<main class="screen page-home">
  <div class="el bg-photo">
    <img src="/assets/images/home-bg-new.jpg" alt="FORMA salon interior">
  </div>

  <div class="content">
    <div class="content-top">
      <div class="logo">
        <img src="/assets/logo/forma-logo-white.svg" alt="FORMA">
      </div>

      <p class="opening-date">COMING SOON<br>&nbsp;</p>
    </div>

    <div class="content-bottom">
      <div class="actions">
        <a class="btn" id="booking-btn" href="mailto:<?= htmlspecialchars($config['contact_email']) ?>?subject=Booking%20request">booking</a>
        <a class="btn" href="/new-client.php">new client</a>
      </div>

      <div class="info-block">
        <div class="info-location">
          <span class="info-label">Location:</span>
          <a class="info-value" href="<?= htmlspecialchars($config['maps_url']) ?>" target="_blank" rel="noopener">Nordbahnstrasse 15, 1020, Vienna</a>
        </div>

        <div class="info-whatsapp">
          <span class="info-label">WhatsApp:</span>
          <a class="info-value" href="https://wa.me/<?= htmlspecialchars($config['whatsapp_e164']) ?>" target="_blank" rel="noopener"><?= htmlspecialchars($config['whatsapp_number']) ?></a>
        </div>
      </div>

      <div class="site-footer">
        <nav class="legal-links">
          <a href="/legal.php">Legal Notice</a>
          <a href="/legal.php#terms">Terms &amp; Conditions</a>
        </nav>

        <div class="social-icons">
          <a class="icon-instagram" href="<?= htmlspecialchars($config['instagram_url']) ?>" target="_blank" rel="noopener" aria-label="Instagram">
            <?php include __DIR__ . '/includes/icon-instagram.php'; ?>
          </a>

          <a class="icon-whatsapp" href="https://wa.me/<?= htmlspecialchars($config['whatsapp_e164']) ?>" target="_blank" rel="noopener" aria-label="WhatsApp">
            <?php include __DIR__ . '/includes/icon-whatsapp.php'; ?>
          </a>
        </div>
      </div>
    </div>
  </div>
</main>

<script type="module">
import { init, openModule } from "https://beautyprosoftware.com/online-booking-init/index.js";
init({
  database: 688499,
  elementId: 'booking-btn'
});
document.getElementById('booking-btn').addEventListener('click', function (e) {
  e.preventDefault();
  openModule();
});
</script>
<?php require __DIR__ . '/includes/footer.php'; ?>
