<?php
$config = require __DIR__ . '/includes/config.php';
$pageTitle = 'Legal Notice & Privacy Policy — FORMA';
$pageCss = ['/assets/css/legal.css'];
require __DIR__ . '/includes/header.php';
$email = $config['contact_email'];
$phone = $config['whatsapp_number'];
$phoneHref = 'tel:+' . $config['whatsapp_e164'];
?>
<main class="screen page-legal">
  <a class="logo" href="/index.php">
    <img src="/assets/logo/forma-logo.svg" alt="FORMA">
  </a>

  <div class="content">
    <h1 id="legal-notice">Imprint</h1>

    <dl>
      <dt>Owner</dt>
      <dd>Serhiy Shapochka</dd>
    </dl>

    <dl>
      <dt>Company address</dt>
      <dd>FORMA<br>Nordbahnstraße 15/1B<br>1020 Vienna, Austria</dd>
    </dl>

    <dl>
      <dt>Email</dt>
      <dd><a href="mailto:<?= htmlspecialchars($email) ?>"><?= htmlspecialchars($email) ?></a></dd>
    </dl>

    <dl>
      <dt>Phone</dt>
      <dd><a href="<?= htmlspecialchars($phoneHref) ?>"><?= htmlspecialchars($phone) ?></a></dd>
    </dl>

    <dl>
      <dt>VAT number</dt>
      <dd>ATU81352135</dd>
    </dl>

    <dl>
      <dt>Company registration number</dt>
      <dd>GISA-Zahl: 36721436</dd>
    </dl>

    <dl>
      <dt>Business activity</dt>
      <dd>Hairdresser and wigmaker (hair design)</dd>
    </dl>

    <h3>Liability for Links</h3>
    <p>Our website contains links to external third-party websites over whose content we have no control. Therefore, we cannot accept any liability for this external content. The respective provider or operator of the linked pages is always responsible for their own content.</p>

    <h3>Copyright</h3>
    <p>The content and works created by the site operators on this website are subject to Austrian copyright law. Duplication, editing, distribution, and any type of use outside the scope of copyright law require the written consent of the respective author or creator.</p>

    <h3>Online Dispute Resolution</h3>
    <p>Consumers have the possibility of submitting complaints to the EU's Online Dispute Resolution platform: <a href="https://ec.europa.eu/odr" target="_blank" rel="noopener">ec.europa.eu/odr</a>. You may also send any complaint to the email address given above.</p>

    <h2 id="terms">Privacy Policy</h2>

    <h3>Name and Contact Details of the Data Controller</h3>
    <dl>
      <dt>Business Name</dt>
      <dd>FORMA</dd>
    </dl>
    <dl>
      <dt>Owner</dt>
      <dd>Serhiy Shapochka</dd>
    </dl>
    <dl>
      <dt>Address</dt>
      <dd>Nordbahnstrasse 15, 1020 Vienna, Austria</dd>
    </dl>
    <dl>
      <dt>Phone</dt>
      <dd><a href="<?= htmlspecialchars($phoneHref) ?>"><?= htmlspecialchars($phone) ?></a></dd>
    </dl>
    <dl>
      <dt>Email</dt>
      <dd><a href="mailto:<?= htmlspecialchars($email) ?>"><?= htmlspecialchars($email) ?></a></dd>
    </dl>

    <h3>Processing of Personal Data</h3>
    <p>FORMA processes personal data, such as name, address, email address and telephone number, only in accordance with the General Data Protection Regulation (GDPR) and the Austrian Data Protection Act (DSG).</p>
    <p>Personal data is processed where necessary for the performance of a contract or in order to take steps prior to entering into a contract, for compliance with legal obligations, or on the basis of the consent of the data subject.</p>

    <h3>Purpose and Legal Basis for Processing Personal Data</h3>
    <p>FORMA processes personal data for the following purposes:</p>
    <ul>
      <li>Contact and communication with clients</li>
      <li>Appointment requests, scheduling and management</li>
      <li>Processing of client enquiries and consultation forms</li>
      <li>Provision of hair, beauty and related services</li>
      <li>Billing and payment processing</li>
      <li>Compliance with legal and accounting obligations</li>
      <li>Improvement of our services and customer experience</li>
    </ul>
    <p>The processing of personal data is carried out on the basis of Article 6 of the GDPR and the applicable provisions of the Austrian Data Protection Act (DSG).</p>
    <p>Depending on the individual processing activity, the legal basis may include the performance of a contract, steps taken prior to entering into a contract, compliance with a legal obligation, legitimate interests of FORMA, or the consent of the data subject.</p>

    <h3>Recipients of Personal Data</h3>
    <p>Where necessary, personal data may be shared with:</p>
    <ul>
      <li>Website hosting and technical service providers</li>
      <li>Appointment and booking service providers</li>
      <li>Payment service providers and financial institutions</li>
      <li>Accounting and tax advisory service providers</li>
      <li>IT and software service providers</li>
      <li>Public authorities where disclosure is required by law</li>
    </ul>
    <p>Personal data will only be shared to the extent necessary for the respective purpose and in accordance with applicable data protection legislation.</p>

    <h3>Storage Period</h3>
    <p>FORMA stores personal data only for as long as necessary to fulfil the purpose for which it was collected or for as long as statutory retention obligations apply.</p>
    <p>Once the relevant purpose no longer applies and there is no legal obligation requiring further storage, the personal data will be deleted or anonymised.</p>

    <h3>Rights of Data Subjects</h3>
    <p>Under the GDPR, data subjects have the right to:</p>
    <ul>
      <li>Request access to their personal data</li>
      <li>Request correction of inaccurate or incomplete personal data</li>
      <li>Request deletion of their personal data</li>
      <li>Request restriction of processing</li>
      <li>Request data portability, where applicable</li>
      <li>Object to the processing of their personal data</li>
      <li>Withdraw previously given consent at any time</li>
    </ul>
    <p>The withdrawal of consent does not affect the lawfulness of processing carried out before the withdrawal.</p>
    <p>Requests concerning personal data and the exercise of these rights may be submitted using the contact details provided above.</p>

    <h3>Right to Lodge a Complaint</h3>
    <p>If you believe that the processing of your personal data violates applicable data protection legislation, you have the right to lodge a complaint with the competent supervisory authority.</p>
    <p>In Austria, the competent authority is the Austrian Data Protection Authority (Österreichische Datenschutzbehörde).</p>

    <h3>Automated Decision-Making and Profiling</h3>
    <p>FORMA does not use automated decision-making or profiling within the meaning of Article 22 of the GDPR.</p>
  </div>

  <a class="back-link" href="/index.php">&larr; Back to FORMA</a>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
