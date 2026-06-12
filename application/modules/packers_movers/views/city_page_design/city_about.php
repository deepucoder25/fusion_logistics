<section class="pm-city-details-section">
  <div class="container">
    <div class="row g-4">

      <!-- ============ LEFT: MAIN CONTENT (col-lg-8) ============ -->
      <div class="col-lg-8">

        <!-- About Card -->
        <div class="pm-city-content-card">

          <!-- Eyebrow + Heading -->
          <div class="pm-city-section-eyebrow">Top Rated Relocation</div>
          <h2 class="pm-city-section-title">
            <span class="pm-city-accent"><?= $city ?></span> Packers &amp; Movers
          </h2>

          <!-- Featured Image Box (CSS Slider) -->
          <div class="pm-city-image-slider-wrapper">
             <!-- Radio Controls -->
             <input type="radio" name="image-slider" id="img-slide-1" checked class="image-slider-radio">
             <input type="radio" name="image-slider" id="img-slide-2" class="image-slider-radio">
             <input type="radio" name="image-slider" id="img-slide-3" class="image-slider-radio">

             <!-- Slides Container -->
             <div class="image-slider-track-container">
                <div class="image-slider-track">
                   <!-- Slide 1 -->
                   <div class="image-slider-slide">
                      <img src="<?= base_url('assets/images/img1.png') ?>" alt="Packers and Movers Shifting in <?= $city ?>" class="img-fluid slider-image" loading="lazy">
                   </div>
                   <!-- Slide 2 -->
                   <div class="image-slider-slide">
                      <img src="<?= base_url('assets/images/img2.png') ?>" alt="Safe packing services in <?= $city ?>" class="img-fluid slider-image" loading="lazy">
                   </div>
                   <!-- Slide 3 -->
                   <div class="image-slider-slide">
                      <img src="<?= base_url('assets/images/img3.png') ?>" alt="Loading transport vehicle in <?= $city ?>" class="img-fluid slider-image" loading="lazy">
                   </div>
                </div>
             </div>

             <!-- Bottom Transparent Overlay Bar -->
             <div class="image-slider-bottom-bar">
                <!-- Left: ISO Badge (Now inside the bar, styled inline) -->
                <div class="slider-badge-inline">
                    <i class="bi bi-shield-fill-check"></i>
                    <span>ISO 9001:2015</span>
                </div>

                <!-- Center: Next/Prev Buttons (In between!) -->
                <div class="image-slider-arrows-inline">
                   <!-- Left (Prev) Arrow -->
                   <div class="arrows-wrap left-arrows">
                      <label for="img-slide-3" class="arrow-btn-inline arr-to-3"><i class="bi bi-chevron-left"></i></label>
                      <label for="img-slide-1" class="arrow-btn-inline arr-to-1"><i class="bi bi-chevron-left"></i></label>
                      <label for="img-slide-2" class="arrow-btn-inline arr-to-2"><i class="bi bi-chevron-left"></i></label>
                   </div>
                   
                   <!-- Right (Next) Arrow -->
                   <div class="arrows-wrap right-arrows">
                      <label for="img-slide-2" class="arrow-btn-inline arr-to-2"><i class="bi bi-chevron-right"></i></label>
                      <label for="img-slide-3" class="arrow-btn-inline arr-to-3"><i class="bi bi-chevron-right"></i></label>
                      <label for="img-slide-1" class="arrow-btn-inline arr-to-1"><i class="bi bi-chevron-right"></i></label>
                   </div>
                </div>

                <!-- Right: Indicators (Dots) -->
                <div class="image-slider-indicators-inline">
                   <label for="img-slide-1" class="indicator-dot dot-1"></label>
                   <label for="img-slide-2" class="indicator-dot dot-2"></label>
                   <label for="img-slide-3" class="indicator-dot dot-3"></label>
                </div>
             </div>
          </div>

          <div class='city-prose'>
            <?php echo $htmlcontent;?>  
            
            <!-- Google Maps Card Block -->
            <?php include 'city_map.php';?>

          <?php echo $htmlcontent1;?>   
          <?php echo $htmlcontent2;?>      
          
          <!-- Testimonials Slider (Pure CSS) -->
          <?php include 'city_reviews.php'?>

          <!-- FAQs Accordion -->
          <?php include 'city_faq.php'?>

        </div>
      </div><!-- /col-lg-8 -->

      <!-- ============ RIGHT: SIDEBAR (col-lg-4) ============ -->
      <div class="col-lg-4">
        <?php include 'city_siderbar.php'; ?>
      </div>

    </div><!-- /row -->

    <!-- Dynamic Services Section based on City -->
    <?php 
    $allowed_cities = [];
    if(in_array(strtolower(trim($city)), $allowed_cities)): 
    ?>
        <?php include 'city_service.php'; ?>
    <?php endif; ?>

  </div><!-- /container -->
</section>
