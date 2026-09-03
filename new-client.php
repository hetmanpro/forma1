<?php
$config = require __DIR__ . '/includes/config.php';
$pageTitle = 'New Client — FORMA';
$pageCss = ['/assets/css/new-client.css'];
$bodyClass = '';
require __DIR__ . '/includes/header.php';
?>
<main class="screen page-newclient">
  <div class="el logo">
    <img src="/assets/logo/forma-logo.svg" alt="FORMA">
  </div>

  <h1 class="el heading">HOW TO BECOME A CLIENT</h1>

  <div class="el intro">
    <p>We work in a limited format, with a small number of clients per day. Each appointment is considered &mdash; from consultation to the final result.</p>
    <p>If you feel aligned with our approach, you can request an appointment.</p>
    <p>We review each request individually and confirm availability.</p>
    <p>FORMA is built on attention, not volume.</p>
  </div>

  <h2 class="el booking-policy-title">BOOKING POLICY</h2>

  <div class="el policy-list">
    <div class="item">
      <strong>01 / time</strong>
      <ul><li>Please arrive on time. Delays may affect the scope of your service.</li></ul>
    </div>
    <div class="item">
      <strong>02 / changes</strong>
      <ul>
        <li>48 hours&rsquo; notice is required.</li>
        <li>72 hours for appointments lasting 3+ hours.</li>
      </ul>
    </div>
    <div class="item">
      <strong>03 / cancellations</strong>
      <ul><li>Late cancellations and missed appointments are charged in full.</li></ul>
    </div>
    <div class="item">
      <strong>04 / booking</strong>
      <ul>
        <li>Colour services are available by request.</li>
        <li>Every appointment is reviewed individually.</li>
      </ul>
    </div>
  </div>

  <a class="el request-form" id="request-form-btn" href="mailto:<?= htmlspecialchars($config['contact_email']) ?>?subject=New%20client%20request">Request form</a>

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

<script type="module">
import { init, openModule } from "https://beautyprosoftware.com/online-booking-init/index.js";
init({
  database: 688499,
  elementId: 'request-form-btn'
});
document.getElementById('request-form-btn').addEventListener('click', function (e) {
  e.preventDefault();
  openModule();
});
</script>
<?php require __DIR__ . '/includes/footer.php'; ?>
