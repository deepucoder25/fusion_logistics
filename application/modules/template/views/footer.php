<!-- FOOTER SECTION -->
<footer class="footer-section">

  <!-- 1. Planning a Move? CTA Card -->
  <div class="container footer-cta-card-wrap">
    <div class="footer-cta-card">
      <div class="cta-left-content">
        <div class="cta-image-box">
          <img src="<?= base_url('assets/images/home_modules/cta_box.jpg') ?>" alt="Planning a Move - <?= $company3 ?>" loading="lazy">
        </div>
        <div class="cta-text-content">
          <h3 class="cta-title">Planning a Move?</h3>
          <h4 class="cta-subtitle">We're Here to Help!</h4>
          <p class="cta-desc">Get a personalized quote and experience a hassle-free move with our experts.</p>
          
          <!-- Decorative Paper Plane SVG -->
          <svg class="cta-plane-decor" viewBox="0 0 120 50" xmlns="http://www.w3.org/2000/svg">
            <path class="plane-path" d="M10 35 C 35 25, 70 38, 95 18" />
            <!-- Small arrowhead -->
            <path class="plane-arrow" d="M93 23 L96 17 L90 19 Z" />
            <!-- Paper Plane Shape -->
            <path class="plane-body" d="M96 17 L114 10 L106 24 L102 17 Z" />
            <path class="plane-shadow" d="M102 17 L106 24 L104 20 Z" />
          </svg>
        </div>
      </div>
      
      <div class="cta-right-content">
        <a href="<?= $phonehtml ?>" class="cta-phone-widget">
          <div class="cta-phone-icon-wrap">
            <i class="bi bi-telephone-fill"></i>
          </div>
          <div class="cta-phone-text">
            <span class="cta-phone-label">Call Us Anytime</span>
            <span class="cta-phone-num"><?= $phone ?></span>
          </div>
        </a>
        <a href="#" class="cta-btn-quote" data-bs-toggle="modal" data-bs-target="#qteModal">
          <span>Get a Free Quote</span>
          <i class="bi bi-arrow-right"></i>
        </a>
      </div>
    </div>
  </div>

  <!-- 2. Main Footer Grid -->
  <div class="container footer-main-grid">
    <div class="row g-4 justify-content-between">
      
      <!-- Brand & Socials -->
      <div class="col-lg-3 col-md-6">
        <a href="<?= site_url() ?>" class="footer-brand-logo-wrap">
          <img src="<?= base_url('assets/images/logo/logo.png') ?>" alt="<?= $company3 ?> Logo" loading="lazy">
        </a>
        <p class="footer-brand-desc">
          End-to-end logistics and supply chain solutions designed for speed, safety, and reliability. As your trusted packers and movers partner, we offer secure home shifting, office relocation, and vehicle transportation services across India.
        </p>
        <div class="footer-brand-divider"></div>
        <div class="footer-social-row">
          <?php if(!empty($facebookhtml)): ?>
            <a href="<?= $facebookhtml ?>" class="footer-social-circle" target="_blank" rel="noopener" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
          <?php endif; ?>
          <?php if(!empty($linkedinhtml)): ?>
            <a href="<?= $linkedinhtml ?>" class="footer-social-circle" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
          <?php endif; ?>
          <?php if(!empty($instagramhtml)): ?>
            <a href="<?= $instagramhtml ?>" class="footer-social-circle" target="_blank" rel="noopener" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
          <?php endif; ?>
          <?php if(!empty($twitterhtml)): ?>
            <a href="<?= $twitterhtml ?>" class="footer-social-circle" target="_blank" rel="noopener" aria-label="Twitter X"><i class="bi bi-twitter-x"></i></a>
          <?php endif; ?>
        </div>
      </div>

      <!-- Company Links -->
      <div class="col-lg-2 col-md-6 col-6">
        <h4 class="footer-col-title">Company</h4>
        <ul class="footer-links-menu">
          <li><a href="<?= site_url() ?>"><i class="bi bi-chevron-right link-arrow"></i>Home</a></li>
          <li><a href="<?= site_url('about-us') ?>"><i class="bi bi-chevron-right link-arrow"></i>About Us</a></li>
          <li><a href="<?= site_url('why-choose-us') ?>"><i class="bi bi-chevron-right link-arrow"></i>Why Choose Us</a></li>
          <li><a href="<?= site_url('blog') ?>"><i class="bi bi-chevron-right link-arrow"></i>Blog</a></li>
          <li><a href="<?= site_url('reviews') ?>"><i class="bi bi-chevron-right link-arrow"></i>Reviews</a></li>
          <li><a href="<?= site_url('our-branches') ?>"><i class="bi bi-chevron-right link-arrow"></i>Our Branches</a></li>
          <li><a href="<?= site_url('contact-us') ?>"><i class="bi bi-chevron-right link-arrow"></i>Contact Us</a></li>
        </ul>
      </div>

      <!-- Services Links (Only those on Navbar) -->
      <div class="col-lg-2 col-md-6 col-6">
        <h4 class="footer-col-title">Services</h4>
        <ul class="footer-links-menu">
          <li><a href="<?= site_url('home-shifting') ?>"><i class="bi bi-chevron-right link-arrow"></i>Home Shifting</a></li>
          <li><a href="<?= site_url('office-relocation') ?>"><i class="bi bi-chevron-right link-arrow"></i>Office Relocation</a></li>
          <li><a href="<?= site_url('car-transportation') ?>"><i class="bi bi-chevron-right link-arrow"></i>Car Transportation</a></li>
          <li><a href="<?= site_url('bike-transportation') ?>"><i class="bi bi-chevron-right link-arrow"></i>Bike Transportation</a></li>
          <li><a href="<?= site_url('warehouse-and-storage') ?>"><i class="bi bi-chevron-right link-arrow"></i>Warehouse &amp; Storage</a></li>
          <li><a href="<?= site_url('domestic-relocation') ?>"><i class="bi bi-chevron-right link-arrow"></i>Domestic Relocation</a></li>
          <li><a href="<?= site_url('international-shifting') ?>"><i class="bi bi-chevron-right link-arrow"></i>International Shifting</a></li>

        </ul>
      </div>

      <!-- Quick Links -->
      <div class="col-lg-2 col-md-6 col-6">
        <h4 class="footer-col-title">Quick Links</h4>
        <ul class="footer-links-menu">
          <li><a href="<?= site_url('photo-gallery') ?>"><i class="bi bi-chevron-right link-arrow"></i>Photo Gallery</a></li>
          <li><a href="#" data-bs-toggle="modal" data-bs-target="#qteModal"><i class="bi bi-chevron-right link-arrow"></i>Quote Request</a></li>
          <li><a href="<?= site_url('terms-and-conditions') ?>"><i class="bi bi-chevron-right link-arrow"></i>Terms &amp; Conditions</a></li>
          <li><a href="<?= site_url('privacy-policy') ?>"><i class="bi bi-chevron-right link-arrow"></i>Privacy Policy</a></li>
          <li><a href="<?= site_url('faqs') ?>"><i class="bi bi-chevron-right link-arrow"></i>FAQ's</a></li>
          <li><a href="<?= site_url('testimonials') ?>"><i class="bi bi-chevron-right link-arrow"></i>Testimonials</a></li>
        </ul>
      </div>

      <!-- Stay in Touch -->
      <div class="col-lg-3 col-md-6">
        <h4 class="footer-col-title">Stay in Touch</h4>
        <div class="footer-touch-list">
          <!-- Phone -->
          <a href="<?= $phonehtml ?>" class="footer-touch-item">
            <div class="footer-touch-icon-wrap icon-phone-bg">
              <i class="bi bi-telephone-fill"></i>
            </div>
            <div class="footer-touch-content">
              <span><?= $phone ?></span>
            </div>
          </a>
          <!-- Email -->
          <a href="<?= $mailhtml ?>" class="footer-touch-item">
            <div class="footer-touch-icon-wrap icon-mail-bg">
              <i class="bi bi-envelope-fill"></i>
            </div>
            <div class="footer-touch-content">
              <span><?=  $mail ?></span>
            </div>
          </a>
          <!-- Address -->
          <div class="footer-touch-item">
            <div class="footer-touch-icon-wrap icon-location-bg">
              <i class="bi bi-geo-alt-fill"></i>
            </div>
            <div class="footer-touch-content">
              <span><?= !empty($address) ? $address : '123, 4th Floor, Sunrise Tower, MG Road, Bangalore - 560001' ?></span>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>

  <!-- 3. Features Blue Bar -->
  <div class="footer-features-bar">
    <div class="container">
      <div class="row g-4 align-items-center">
        <!-- Feature 1 -->
        <div class="col-xl-3 col-md-6">
          <div class="feature-item-box">
            <div class="feature-icon-circle">
              <i class="bi bi-shield-fill-check"></i>
            </div>
            <div class="feature-content-wrap">
              <h5 class="feature-heading">Safe &amp; Secure</h5>
              <p class="feature-subheading">Your cargo is always in safe hands</p>
            </div>
          </div>
        </div>
        <!-- Feature 2 -->
        <div class="col-xl-3 col-md-6 feature-border-left">
          <div class="feature-item-box">
            <div class="feature-icon-circle">
              <i class="bi bi-calendar-check-fill"></i>
            </div>
            <div class="feature-content-wrap">
              <h5 class="feature-heading">On-Time Delivery</h5>
              <p class="feature-subheading">Punctuality is our promise</p>
            </div>
          </div>
        </div>
        <!-- Feature 3 -->
        <div class="col-xl-3 col-md-6 feature-border-left">
          <div class="feature-item-box">
            <div class="feature-icon-circle">
              <i class="bi bi-globe"></i>
            </div>
            <div class="feature-content-wrap">
              <h5 class="feature-heading">Pan India Network</h5>
              <p class="feature-subheading">Extensive reach. Seamless delivery</p>
            </div>
          </div>
        </div>
        <!-- Feature 4 -->
        <div class="col-xl-3 col-md-6 feature-border-left">
          <div class="feature-item-box">
            <div class="feature-icon-circle">
              <i class="bi bi-headset"></i>
            </div>
            <div class="feature-content-wrap">
              <h5 class="feature-heading">24/7 Support</h5>
              <p class="feature-subheading">We're here whenever you need us</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- 4. Bottom bar with Skyline -->
  <div class="footer-bottom-bar">
    
    <div class="container">
      <div class="footer-bottom-container">
        
        <!-- Copyright Section -->
        <div class="footer-copyright-wrap">
          <div class="skyline-wrapper">
            <img src="<?= base_url('assets/images/home_modules/footer_design.jpg') ?>" alt="<?= $company3 ?> skyline" class="skyline-img" loading="lazy">
          </div>
          <p class="footer-copyright-text">
            &copy; <?= $company3 ?>. All Rights Reserved.
          </p>
        </div>

        <!-- Payment Options -->
        <div class="footer-payment-gateways">
          <span class="payment-label">We Accept</span>
          <div class="payment-box-list">
            <!-- Visa -->
            <div class="payment-box-item" title="Visa">
              <svg viewBox="0 0 60 20" xmlns="http://www.w3.org/2000/svg">
                <text x="4" y="15" class="visa-text">
                  <tspan class="visa-tspan">V</tspan>ISA
                </text>
              </svg>
            </div>
            <!-- Mastercard -->
            <div class="payment-box-item" title="Mastercard">
              <svg viewBox="0 0 48 30" xmlns="http://www.w3.org/2000/svg">
                <circle cx="18" cy="15" r="11" class="mastercard-red" />
                <circle cx="30" cy="15" r="11" class="mastercard-yellow" />
                <path d="M24 8.76a11 11 0 0 0-3.8 6.24c0 2.44 1.5 5.56 3.8 6.24a11 11 0 0 0 3.8-6.24c0-2.44-1.5-5.56-3.8-6.24z" class="mastercard-center" />
              </svg>
            </div>
            <!-- RuPay -->
            <div class="payment-box-item" title="RuPay">
              <svg viewBox="0 0 60 20" xmlns="http://www.w3.org/2000/svg">
                <text x="2" y="15" class="rupay-text">
                  Ru<tspan class="rupay-green">Pay</tspan>
                </text>
              </svg>
            </div>
            <!-- UPI -->
            <div class="payment-box-item" title="UPI">
              <svg viewBox="0 0 60 20" xmlns="http://www.w3.org/2000/svg">
                <text x="2" y="15" class="upi-blue-text">U</text>
                <text x="13" y="15" class="upi-blue-text">P</text>
                <text x="21" y="15" class="upi-green-text">I</text>
                <path d="M32 15l10-8M35 15l10-8" class="upi-line-blue" />
                <path d="M38 15l10-8" class="upi-line-green" />
              </svg>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>

</footer>


  <?php $this->load->view('contacts/quotemodal'); ?>
  <?php $this->load->view('contacts/callmeback_modal'); ?>
  <?php $this->load->view('contacts/review_modal'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url()?>assets/js/form.js"></script>
</body>

</html>
