<section class="fusion-hero-slider py-4">
  <div class="container hero-main-container">
    <div class="row align-items-center">
      <div class="col-lg-7 col-md-12 hero-content-col">
        
        <!-- Top Badge with Breadcrumb -->
        <div class="hero-top-badge d-inline-flex align-items-center gap-2">
          <nav class="bc-nav pm-city-slider-nav" style="font-size: 13.5px; font-weight: 700; color: var(--primary-color);">
             <a href="<?= site_url() ?>" style="color: var(--primary-color); text-decoration: none;">Home</a>
             <span class="bc-sep" style="color: var(--accent-color); font-weight: bold; margin: 0 4px;">›</span>
             <a href="<?= site_url('our-locations') ?>" style="color: var(--primary-color); text-decoration: none;">Locations</a>
             <span class="bc-sep" style="color: var(--accent-color); font-weight: bold; margin: 0 4px;">›</span>
             <span class="bc-state" style="color: var(--primary-color);"><?= $state ?></span>
             <span class="bc-sep" style="color: var(--accent-color); font-weight: bold; margin: 0 4px;">›</span>
             <span class="bc-current" style="color: var(--accent-color);"><?= $city ?></span>
          </nav>
        </div>
        
        <!-- Main Heading -->
        <h1 class="hero-title">
          Best Packers and Movers in <span class="highlight-orange"><?= $city ?></span>
        </h1>
        
        <!-- Description -->
        <p class="hero-desc">
          Best movers & packers in <?= $city ?>. Safe, affordable, and reliable packing, moving and storage services. Get your free quote now.
        </p>
        
        <!-- Key Features Row -->
        <div class="hero-features-scroll-wrapper">
          <div class="hero-features-box">
            <!-- Item 1 -->
            <div class="hero-feature-item">
              <div class="feature-icon-circle">
                <i class="bi bi-shield-check"></i>
              </div>
              <div class="feature-info">
                <h6>Safe & Secure</h6>
                <p>Your cargo is always in safe hands.</p>
              </div>
            </div>
            
            <div class="feature-item-divider"></div>
            
            <!-- Item 2 -->
            <div class="hero-feature-item">
              <div class="feature-icon-circle">
                <i class="bi bi-clock"></i>
              </div>
              <div class="feature-info">
                <h6>On-Time Delivery</h6>
                <p>Punctuality is our promise.</p>
              </div>
            </div>
            
            <div class="feature-item-divider"></div>
            
            <!-- Item 3 -->
            <div class="hero-feature-item">
              <div class="feature-icon-circle">
                <i class="bi bi-globe"></i>
              </div>
              <div class="feature-info">
                <h6>Pan India Network</h6>
                <p>Extensive reach. Seamless delivery.</p>
              </div>
            </div>
            
            <div class="feature-item-divider"></div>
            
            <!-- Item 4 -->
            <div class="hero-feature-item">
              <div class="feature-icon-circle">
                <i class="bi bi-headset"></i>
              </div>
              <div class="feature-info">
                <h6>24/7 Support</h6>
                <p>We're here whenever you need us.</p>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Google Reviews Box -->
        <div class="google-reviews-badge">
          <div class="reviews-left-wrap">
            <svg class="google-logo" viewBox="0 0 24 24" width="26" height="26" xmlns="http://www.w3.org/2000/svg">
              <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
              <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
              <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z" fill="#FBBC05"/>
              <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z" fill="#EA4335"/>
            </svg>
            <div class="reviews-brand">
              <span class="brand-text-top">Google</span>
              <span class="brand-text-bottom">Reviews</span>
            </div>
          </div>
          
          <div class="reviews-vertical-divider"></div>
          
          <div class="reviews-rating-wrap">
            <div class="rating-header">
              <span class="rating-num">4.8</span>
              <div class="stars-row">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
            </div>
            <span class="rating-desc">Based on 125+ Reviews</span>
          </div>
          
          <div class="reviews-vertical-divider d-none d-md-block"></div>
          
          <div class="reviews-quote-wrap">
            <p class="quote-text">"Excellent service, on-time delivery and great support. Highly recommend Fusion Logistics!"</p>
            <div class="quote-author">
              <span class="author-name">– Rahul Mehta</span>
              <i class="bi bi-patch-check-fill verified-badge"></i>
            </div>
          </div>
        </div>
        
      </div>
      
      <!-- Quote Form Column -->
      <div class="col-lg-5 col-md-12 hero-form-col">
         <?php $this->load->view('contacts/quoteform'); ?>
      </div>
    </div>
  </div>
</section>
