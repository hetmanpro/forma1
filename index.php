<?php
$config = require __DIR__ . '/includes/config.php';
$pageTitle = 'FORMA — Coming Soon, Vienna';
$pageCss = ['/assets/css/home.css'];
$pageJs = $config['typed_headline_enabled']
    ? ['https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.1.0/typed.umd.js']
    : [];
$bodyClass = 'body-home';
require __DIR__ . '/includes/header.php';
?>
<main class="screen page-home">
  <div class="el bg-photo">
    <img src="/assets/images/home-bg-new.jpg" alt="FORMA salon interior">
  </div>

  <div class="content">
    <div class="content-top">
      <?php if ($config['typed_headline_enabled']): ?>
      <p class="opening-date"><span class="opening-date-typed-wrap" id="opening-date-typed-wrap"><span id="opening-date-typed">SALON COMING SOON</span></span><br>&nbsp;</p>
      <?php else: ?>
      <p class="opening-date">COMING SOON<br>&nbsp;</p>
      <?php endif; ?>

      <div class="logo">
        <img src="/assets/logo/forma-logo-white.svg" alt="FORMA">
      </div>

      <div class="actions">
        <a class="btn" id="booking-btn" href="mailto:<?= htmlspecialchars($config['contact_email']) ?>?subject=Booking%20request">booking</a>
        <a class="btn" href="/new-client.php">new client</a>
      </div>
    </div>

    <div class="content-bottom">
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

<?php if ($config['typed_headline_enabled']): ?>
<script>
document.addEventListener('DOMContentLoaded', function () {
  var target = document.getElementById('opening-date-typed');
  var wrap = document.getElementById('opening-date-typed-wrap');
  if (!target || !wrap) return;

  var phrases = ['SALON COMING SOON', 'COFFEE BAR COMING SOON', 'WEBSITE COMING SOON'];
  var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  if (reduceMotion || typeof Typed === 'undefined') {
    target.textContent = phrases[0];
    return;
  }

  function sizeWrap() {
    var probe = document.createElement('span');
    probe.style.cssText = 'position:absolute; visibility:hidden; white-space:nowrap;';
    wrap.appendChild(probe);
    var max = 0;
    phrases.forEach(function (phrase) {
      probe.textContent = phrase;
      max = Math.max(max, probe.offsetWidth);
    });
    wrap.removeChild(probe);
    wrap.style.minWidth = max + 'px';
  }

  sizeWrap();
  window.addEventListener('resize', sizeWrap);
  if (document.fonts && document.fonts.ready) {
    document.fonts.ready.then(sizeWrap);
  }

  // Typed.js treats pre-existing element text that matches the first
  // string as "already typed" and flashes it in instantly instead of
  // animating it — clear the no-JS fallback text right before init.
  target.textContent = '';

  new Typed(target, {
    strings: phrases,
    typeSpeed: 95,
    backSpeed: 45,
    backDelay: 2750,
    loop: true,
    showCursor: true,
    cursorChar: '|'
  });
});
</script>
<?php endif; ?>
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
