<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<section class="testimonial-section-custom py-5">
  <div class="container position-relative">
    
    <!-- Background quotes/dots decor -->
    <div class="testimonial-decor-quote">“</div>
    <div class="testimonial-decor-dots"></div>

    <!-- Section Header -->
    <div class="testimonial-header text-center mb-5">
      <div class="testimonial-badge-wrap mb-2">
        <span class="testimonial-badge-text">★ WHAT CLIENTS SAY ★</span>
      </div>
      <h2 class="testimonial-main-title mt-3">
        Their Experience, <span>Our Pride</span>
      </h2>
      <p class="testimonial-subtitle mt-2">
        Real stories from real customers who trusted us with their move.
      </p>
    </div>

    <!-- Testimonials Grid Container -->
    <div class="testimonial-grid-container position-relative">
      <div class="row g-4 align-items-stretch">
        
        <!-- Left Column: Large Dark Card -->
        <div class="col-lg-6">
          <div class="testimonial-main-card-dark position-relative h-100">
            
            <!-- Floating Top Quote Badge -->
            <div class="floating-quote-badge-orange">”</div>

            <div class="row g-0 align-items-stretch h-100">
              <!-- Family Photo -->
              <div class="col-md-5 main-card-photo-col">
                <div class="main-card-photo-wrap">
                  <div class="image-quote-watermark">“</div>
                  <img src="<?= base_url('assets/images/reviews/family.jpg') ?>" alt="<?= $company3 ?> Family" loading="lazy">
                </div>
              </div>
              
              <!-- Review Text & Author Info -->
              <div class="col-md-7 d-flex flex-column justify-content-between p-4 p-md-5">
                <div>
                  <p class="card-text-content-white">
                    <span class="orange-quote-inline">“</span>Fusion Logistics made our home shifting so easy and stress-free. Everything was handled with care and delivered on time. Highly recommended!
                  </p>
                </div>

                <div class="card-author-footer-dark">
                  <div class="dark-divider mb-3"></div>
                  <div class="d-flex align-items-center gap-2 flex-wrap mb-1">
                    <h4 class="profile-name text-white mb-0">Rahul Mehta</h4>
                    <div class="card-stars-gold">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                    </div>
                  </div>
                  <div class="profile-location-dark">
                    <i class="bi bi-geo-alt-fill"></i>
                    <span>Bangalore</span>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>

        <!-- Middle Column: Decorative Connector (Hidden on Mobile/Tablet) -->
        <div class="col-lg-1 d-none d-lg-block position-relative">
          <div class="testimonial-connector-wrap">
            <svg class="connector-svg" width="120" height="260" viewBox="0 0 120 260" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                  d="M60 10
                     C110 40, 110 90, 60 120
                     C10 150, 10 200, 60 250"
                  stroke="#FF6B35"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-dasharray="4 8"
                  fill="none"/>
              
              <!-- Orange dots -->
              <circle cx="60" cy="10" r="4" fill="#FF6B35"/>
              <circle cx="60" cy="120" r="4" fill="#FF6B35"/>
              <circle cx="60" cy="250" r="4" fill="#FF6B35"/>
            </svg>
            
            <div class="connector-icons-list">
              <!-- Icon 1: Custom Speach Bubble with Stars -->
              <div class="connector-icon-circle top-circle" title="Highly Rated">
                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" />
                  <path d="M7.5 11l.4.8.9.1-.6.6.1.9-.8-.4-.8.4.1-.9-.6-.6.9-.1.4-.8z" fill="currentColor" stroke="none" />
                  <path d="M12 11l.4.8.9.1-.6.6.1.9-.8-.4-.8.4.1-.9-.6-.6.9-.1.4-.8z" fill="currentColor" stroke="none" />
                  <path d="M16.5 11l.4.8.9.1-.6.6.1.9-.8-.4-.8.4.1-.9-.6-.6.9-.1.4-.8z" fill="currentColor" stroke="none" />
                </svg>
              </div>
              <!-- Icon 2: Custom Speed Truck -->
              <div class="connector-icon-circle middle-circle" title="Safe Delivery">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="2" y1="8" x2="6" y2="8" />
                  <line x1="1" y1="12" x2="4" y2="12" />
                  <line x1="2" y1="16" x2="5" y2="16" />
                  <rect x="7" y="6" width="9" height="11" rx="1" />
                  <path d="M16 8h4l3 3v6h-7V8z" />
                  <circle cx="10" cy="19" r="2" />
                  <circle cx="19" cy="19" r="2" />
                </svg>
              </div>
              <!-- Icon 3: Isometric Moving Box -->
              <div class="connector-icon-circle bottom-circle" title="Secure Packaging">
                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M12 2L2 7l10 5 10-5-10-5z" />
                  <path d="M2 17l10 5 10-5" />
                  <path d="M2 7v10" />
                  <path d="M12 12v10" />
                  <path d="M22 7v10" />
                  <path d="M12 2.2v5" stroke-dasharray="1 1" />
                  <path d="M7 9.5l2-1 2 1" />
                  <path d="M7 11.5l2-1 2 1" />
                </svg>
              </div>
            </div>
          </div>
        </div>

        <!-- Right Column: Stacked Light Cards with Scroll Support -->
        <div class="col-lg-5">
          <div class="testimonial-right-scroll-container">
            
            <!-- Card 2: Amit Verma -->
            <div id="card-amit" class="review-card-right-light position-relative">
              <!-- Floating Right Quote Badge -->
              <div class="floating-quote-badge-right-orange">”</div>
              
              <p class="card-text-content-light">
                <span class="light-quote-inline">“</span>Very professional and reliable team. They packed everything securely and ensured timely delivery. Great experience!
              </p>
              
              <div class="light-divider mb-3"></div>
              
              <div class="card-profile-footer-light">
                <div class="profile-info-left">
                  <div class="profile-avatar-icon-light profile-avatar-orange">
                    <i class="bi bi-person-fill"></i>
                  </div>
                  <div class="profile-details">
                    <div class="d-flex align-items-center gap-2 flex-wrap">
                      <h4 class="profile-name">Amit Verma</h4>
                      <div class="card-stars-gold-small">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                    <div class="profile-location">
                      <i class="bi bi-geo-alt-fill"></i>
                      <span>Mumbai</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Card 3: Priya Sharma -->
            <div id="card-priya" class="review-card-right-light position-relative">
              <!-- Floating Right Quote Badge -->
              <div class="floating-quote-badge-right-navy">”</div>
              
              <p class="card-text-content-light">
                <span class="light-quote-inline">“</span>From start to finish, the service was excellent. The team was punctual, polite, and took great care of our belongings.
              </p>
              
              <div class="light-divider mb-3"></div>
              
              <div class="card-profile-footer-light">
                <div class="profile-info-left">
                  <div class="profile-avatar-icon-light profile-avatar-navy">
                    <i class="bi bi-person-fill"></i>
                  </div>
                  <div class="profile-details">
                    <div class="d-flex align-items-center gap-2 flex-wrap">
                      <h4 class="profile-name">Priya Sharma</h4>
                      <div class="card-stars-gold-small">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                    <div class="profile-location">
                      <i class="bi bi-geo-alt-fill"></i>
                      <span>Delhi</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>

          <!-- Navigation Buttons (using scrollBy to prevent main page scrolling) -->
          <div class="testimonial-scroll-nav d-flex d-lg-none">
            <a href="#" class="testimonial-scroll-btn" onclick="const c = this.closest('.col-lg-5').querySelector('.testimonial-right-scroll-container'); c.scrollBy({ left: -c.clientWidth, top: -c.clientHeight, behavior: 'smooth' }); return false;" title="Previous Review">
              <i class="bi bi-chevron-left"></i>
            </a>
            <a href="#" class="testimonial-scroll-btn" onclick="const c = this.closest('.col-lg-5').querySelector('.testimonial-right-scroll-container'); c.scrollBy({ left: c.clientWidth, top: c.clientHeight, behavior: 'smooth' }); return false;" title="Next Review">
              <i class="bi bi-chevron-right"></i>
            </a>
          </div>
        </div>

      </div>
    </div>

    <!-- Bottom Stats Bar -->
    <div class="testimonial-stats-bar mt-5">
      <div class="row g-4 align-items-center justify-content-between">
        <!-- Stat 1 -->
        <div class="col-lg-3 col-md-3 col-6 stat-box-item-col">
          <div class="stat-box-item">
            <div class="stat-icon-wrap">
              <i class="bi bi-people-fill"></i>
            </div>
            <div class="stat-text-wrap">
              <span class="stat-number"><?= $happyClients ?></span>
              <span class="stat-label">Happy Customers</span>
            </div>
          </div>
        </div>
        <!-- Stat 2 -->
        <div class="col-lg-3 col-md-3 col-6 stat-box-item-col">
          <div class="stat-box-item">
            <div class="stat-icon-wrap">
              <i class="bi bi-shield-fill-check"></i>
            </div>
            <div class="stat-text-wrap">
              <span class="stat-number">99.8%</span>
              <span class="stat-label">On-Time Delivery</span>
            </div>
          </div>
        </div>
        <!-- Stat 3 -->
        <div class="col-lg-3 col-md-3 col-6 stat-box-item-col">
          <div class="stat-box-item">
            <div class="stat-icon-wrap">
              <i class="bi bi-box-seam-fill"></i>
            </div>
            <div class="stat-text-wrap">
              <span class="stat-number"><?= $successfulMoves ?></span> 
              <span class="stat-label">Successful Moves</span>
            </div>
          </div>
        </div>
        <!-- Stat 4 -->
        <div class="col-lg-3 col-md-3 col-6 stat-box-item-col">
          <div class="stat-box-item">
            <div class="stat-icon-wrap">
              <i class="bi bi-headset"></i>
            </div>
            <div class="stat-text-wrap">
              <span class="stat-number">24/7</span>
              <span class="stat-label">Customer Support</span>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>


