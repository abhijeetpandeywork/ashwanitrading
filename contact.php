<?php
$pageTitle   = 'Contact Us — Ashwani Trading Co. | Jammu, Kashmir & Ladakh';
$metaDesc    = 'Contact Ashwani Trading Co. for spare parts, accessories, repairs & rentals. Call +91 94191 86209 or visit our Narwal, Jammu offices. Two locations serving J&K & Ladakh.';
$currentPage = 'contact';

// Pre-fill service/category from URL if present
$preService  = htmlspecialchars($_GET['service']  ?? '');
$preCategory = htmlspecialchars($_GET['category'] ?? '');
$preReq = '';
if ($preService)  $preReq = 'Service enquiry: ' . $preService;
if ($preCategory) $preReq = 'Parts enquiry — Category: ' . $preCategory;

include 'includes/header.php';
?>

<main id="main-content">

<!-- PAGE HERO -->
<section class="page-hero">
  <div class="container page-hero__inner">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/index.php">Home</a>
      <span class="breadcrumb__sep" aria-hidden="true">›</span>
      <span>Contact</span>
    </nav>
    <span class="tag tag--white">Get in Touch</span>
    <h1>Call, WhatsApp, or Visit.<br>We're Ready to Help.</h1>
    <p>Our team at the Narwal, Jammu yard responds fast. Describe your part or service need and we'll get back to you within hours.</p>
  </div>
</section>


<!-- CONTACT SECTION -->
<section class="section section--white" id="contact-form">
  <div class="container">
    <div class="contact-grid">

      <!-- LEFT: Form -->
      <div class="contact-form-wrap" data-reveal>
        <h2>Send Your Requirement</h2>
        <p>Fill in the form below and our team will call you back — usually within a few hours.</p>

        <form class="lead-form" id="contact-form-main" novalidate>
          <div class="form-group">
            <label for="name">Your Name <span style="color:#b91c1c;">*</span></label>
            <input type="text" id="name" name="name" class="form-inp-v2" placeholder="e.g. Rajesh Kumar" required autocomplete="name">
          </div>
          <div class="form-group">
            <label for="phone">Phone Number <span style="color:#b91c1c;">*</span></label>
            <input type="tel" id="phone" name="phone" class="form-inp-v2" placeholder="+91 98765 43210" required autocomplete="tel">
          </div>
          <div class="form-group">
            <label for="email">Email Address <span style="color:var(--gray-300);">(optional)</span></label>
            <input type="email" id="email" name="email" class="form-inp-v2" placeholder="your@email.com" autocomplete="email">
          </div>
          <div class="form-group">
            <label for="service">Service / Category</label>
            <select id="service" name="part_category" class="form-inp-v2">
              <option value="">— Select a service or category —</option>
              <optgroup label="Parts Enquiry">
                <option value="Undercarriage Parts"  <?= $preCategory==='undercarriage'    ?'selected':'' ?>>Undercarriage Parts</option>
                <option value="Hydraulic Components" <?= $preCategory==='hydraulics'       ?'selected':'' ?>>Hydraulic Components</option>
                <option value="Ground Engaging Tools"<?= $preCategory==='ground-engaging'  ?'selected':'' ?>>Ground Engaging Tools</option>
                <option value="Engine &amp; Filtration"<?= $preCategory==='engine'         ?'selected':'' ?>>Engine &amp; Filtration</option>
                <option value="Transmission &amp; Drivetrain"<?= $preCategory==='transmission'?'selected':'' ?>>Transmission &amp; Drivetrain</option>
                <option value="Electrical Components"<?= $preCategory==='electrical'      ?'selected':'' ?>>Electrical Components</option>
                <option value="Attachments &amp; Buckets"<?= $preCategory==='attachments' ?'selected':'' ?>>Attachments &amp; Buckets</option>
                <option value="Drill Rods &amp; Bits"<?= $preCategory==='drill-rods'      ?'selected':'' ?>>Drill Rods &amp; Bits</option>
                <option value="Other Parts"          <?= $preCategory==='other'           ?'selected':'' ?>>Other Parts</option>
              </optgroup>
              <optgroup label="Services">
                <option value="Spare Parts Supply"   <?= $preService==='spare-parts'      ?'selected':'' ?>>Spare Parts Supply</option>
                <option value="Accessories"          <?= $preService==='accessories'      ?'selected':'' ?>>Accessories</option>
                <option value="Workshop &amp; Repairs"<?= $preService==='workshop'        ?'selected':'' ?>>Workshop &amp; Repairs</option>
                <option value="Machinery Rentals"    <?= $preService==='rentals'          ?'selected':'' ?>>Machinery Rentals</option>
              </optgroup>
              <option value="General Enquiry">General Enquiry</option>
            </select>
          </div>
          <div class="form-group">
            <label for="message">Part / Machine Details <span style="color:#b91c1c;">*</span></label>
            <textarea id="message" name="message" class="form-inp-v2" rows="4"
              placeholder="e.g. JCB 3CX hydraulic pump seal kit, or Road roller drum bearing, or Excavator bucket teeth 20J adapter…" required><?= $preReq ?></textarea>
          </div>
          <button type="submit" class="btn--submit" id="contact-submit-btn">
            <i class="fas fa-paper-plane" aria-hidden="true"></i> Send Requirement
          </button>
          <div class="form-status" id="contact-form-status" role="alert" aria-live="polite"></div>
        </form>
      </div><!-- /form-wrap -->

      <!-- RIGHT: Contact Info -->
      <div data-reveal data-reveal-delay="1">

        <!-- Quick Call Actions -->
        <div style="display:flex; flex-direction:column; gap:12px; margin-bottom:36px;">
          <a href="tel:+919419186209" class="btn btn--primary" style="justify-content:center; font-size:16px; padding:18px;" id="contact-call-btn">
            <i class="fas fa-phone-alt"></i> Call: +91 94191 86209
          </a>
          <a href="https://wa.me/919419186209?text=Hi%2C%20I%20need%20spare%20parts%20help"
             target="_blank" rel="noopener"
             class="btn" style="background:#25D366;color:#fff;justify-content:center;font-size:16px;padding:18px;" id="contact-wa-btn">
            <i class="fab fa-whatsapp"></i> WhatsApp Us
          </a>
        </div>

        <!-- Contact Clusters — Proximity grouping (Gestalt) -->
        <div class="contact-info">

          <div class="contact-block">
            <h3><i class="fas fa-phone-alt" style="color:var(--green-700);margin-right:8px;"></i>Phone Numbers</h3>
            <a href="tel:+919419186209"><i class="fas fa-chevron-right"></i>+91 94191 86209 (Primary)</a>
            <a href="tel:+919419186331"><i class="fas fa-chevron-right"></i>+91 94191 86331</a>
            <a href="tel:+919858486209"><i class="fas fa-chevron-right"></i>+91 98584 86209</a>
          </div>

          <div class="contact-block">
            <h3><i class="fas fa-envelope" style="color:var(--green-700);margin-right:8px;"></i>Email</h3>
            <a href="mailto:ashwanitradingcojammu@gmail.com"><i class="fas fa-chevron-right"></i>ashwanitradingcojammu@gmail.com</a>
            <a href="mailto:ashwaniyradingco@gmail.com"><i class="fas fa-chevron-right"></i>ashwaniyradingco@gmail.com</a>
            <a href="mailto:gupta.ashwanikumar@yahoo.com"><i class="fas fa-chevron-right"></i>gupta.ashwanikumar@yahoo.com</a>
          </div>

          <div class="contact-block">
            <h3><i class="fas fa-map-marker-alt" style="color:var(--green-700);margin-right:8px;"></i>Branch Office</h3>
            <p><i class="fas fa-chevron-right"></i>Sunjwan Morh, Bye Pass Road,<br>Narwal, Jammu – 180006</p>
          </div>

          <div class="contact-block">
            <h3><i class="fas fa-warehouse" style="color:var(--green-700);margin-right:8px;"></i>Main Office / Yard</h3>
            <p><i class="fas fa-chevron-right"></i>Plot No. 112, Yard 6,<br>Transport Nagar, Narwal, Jammu – 180006</p>
          </div>

        </div>
      </div><!-- /contact info -->

    </div><!-- /contact-grid -->
  </div>
</section>


<!-- MAP SECTION -->
<section class="section section--tint" id="locations" style="padding-top:0;">
  <div class="container">
    <div class="section-head" data-reveal style="margin-bottom:32px;">
      <span class="tag">Find Us</span>
      <h2>Our Offices — Narwal, Jammu</h2>
      <p>Both our offices are located in Narwal, Jammu — walk in any time during business hours, or call ahead.</p>
    </div>
    <div class="map-embed" style="height:400px;" data-reveal data-reveal-delay="1">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3368.0!2d74.857!3d32.7266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391e842a6d6a5dc7%3A0xb123456789!2sTransport+Nagar%2C+Narwal%2C+Jammu%2C+Jammu+and+Kashmir+180006!5e0!3m2!1sen!2sin!4v1620000000000"
        width="100%" height="100%"
        style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
        title="Ashwani Trading Co. — Transport Nagar, Narwal, Jammu location map">
      </iframe>
    </div>
    <div style="display:grid; grid-template-columns:1fr 1fr; gap:24px; margin-top:20px;" data-reveal data-reveal-delay="2">
      <a href="https://maps.google.com/?q=Transport+Nagar+Narwal+Jammu" target="_blank" rel="noopener"
         class="btn btn--outline" style="justify-content:center;">
        <i class="fas fa-directions"></i> Get Directions — Main Office
      </a>
      <a href="https://maps.google.com/?q=Sunjwan+Morh+Bye+Pass+Road+Narwal+Jammu" target="_blank" rel="noopener"
         class="btn btn--outline" style="justify-content:center;">
        <i class="fas fa-directions"></i> Get Directions — Branch Office
      </a>
    </div>
  </div>
</section>


<!-- FINAL CTA -->
<section class="cta-band">
  <div class="container">
    <h2 data-reveal>Your part is waiting. Call now.</h2>
    <a href="tel:+919419186209" class="cta-band__phone" data-reveal data-reveal-delay="1">+91 94191 86209</a>
    <div class="cta-band__actions" data-reveal data-reveal-delay="2">
      <a href="tel:+919419186209" class="btn btn--primary"><i class="fas fa-phone-alt"></i> Call Now</a>
      <a href="https://wa.me/919419186209" target="_blank" rel="noopener" class="btn btn--secondary"><i class="fab fa-whatsapp"></i> WhatsApp</a>
    </div>
  </div>
</section>

</main>
<?php include 'includes/footer.php'; ?>
