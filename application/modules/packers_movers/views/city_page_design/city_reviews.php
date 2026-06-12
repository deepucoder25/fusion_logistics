<!-- Testimonials CSS Carousel (No JS required) -->
<div class="city-content-card mt-4">
  <h3 class="city-section-title-sm"><i class="bi bi-chat-left-quote me-2 text-primary"></i>Customer Experiences</h3>
  <p class="city-review-subtitle text-muted mb-4">Read real feedback from our clients relocated in <?= $city ?>.</p>
  
  <div class="css-carousel-wrapper">
    <!-- Radio Controls -->
    <input type="radio" name="testimonial-carousel" id="review-1" checked class="carousel-radio">
    <input type="radio" name="testimonial-carousel" id="review-2" class="carousel-radio">
    
    <!-- Slides Container -->
    <div class="carousel-track-container">
      <div class="carousel-track">
        
        <!-- Slide 1 (Rohit & Ananya) -->
        <div class="carousel-slide">
          <div class="row g-3">
            <div class="col-md-6 col-12">
              <div class="city-review-card h-100">
                <div class="review-stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>"Shifted my flat inside <?= $city ?>. They arrived at 8 AM sharp and finished packing faster than expected. No damage to kitchen items."</p>
                <div class="review-author">
                  <div class="review-avatar">R</div>
                  <div>
                    <strong>Rohit Sharma</strong>
                    <small><?= $city ?>, India</small>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-md-6 col-12 d-none d-md-block">
              <div class="city-review-card h-100">
                <div class="review-stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>"We moved office equipment during the weekend. The team coordinated with building security and handled everything properly. Great experience!"</p>
                <div class="review-author">
                  <div class="review-avatar">A</div>
                  <div>
                    <strong>Ananya Gupta</strong>
                    <small><?= $city ?>, India</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Slide 2 (Sandeep & Priya) -->
        <div class="carousel-slide">
          <div class="row g-3">
            <div class="col-md-6 col-12">
              <div class="city-review-card h-100">
                <div class="review-stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
                </div>
                <p>"Booked them after searching Packers and Movers Near Me in <?= $city ?>. Pricing stayed exactly as discussed earlier. That rarely happens these days."</p>
                <div class="review-author">
                  <div class="review-avatar">S</div>
                  <div>
                    <strong>Sandeep Verma</strong>
                    <small><?= $city ?>, India</small>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-md-6 col-12 d-none d-md-block">
              <div class="city-review-card h-100">
                <div class="review-stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>"Helpful staff. My parents were stressed about furniture scratches, but packing quality was genuinely good. Highly recommended!"</p>
                <div class="review-author">
                  <div class="review-avatar">P</div>
                  <div>
                    <strong>Priya Nair</strong>
                    <small><?= $city ?>, India</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
    
    <!-- Bottom Controls Container -->
    <div class="carousel-bottom-controls">
      <!-- Left Arrows (Prev) -->
      <div class="carousel-arrows left-arrows">
        <label for="review-2" class="arrow-btn arr-to-2"><i class="bi bi-chevron-left"></i> Prev</label>
        <label for="review-1" class="arrow-btn arr-to-1"><i class="bi bi-chevron-left"></i> Prev</label>
      </div>

      <!-- Navigation Indicators (Dots) -->
      <div class="pm-carousel-indicators">
        <label for="review-1" class="pm-indicator-dot dot-1"></label>
        <label for="review-2" class="pm-indicator-dot dot-2"></label>
      </div>

      <!-- Right Arrows (Next) -->
      <div class="carousel-arrows right-arrows">
        <label for="review-2" class="arrow-btn arr-to-2">Next <i class="bi bi-chevron-right"></i></label>
        <label for="review-1" class="arrow-btn arr-to-1">Next <i class="bi bi-chevron-right"></i></label>
      </div>
    </div>
    
  </div>
</div>