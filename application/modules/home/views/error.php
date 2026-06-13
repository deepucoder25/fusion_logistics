<main class="main">
  <!-- Modern Breadcrumbs Hero Section -->
  <section class="service-breadcrumbs position-relative overflow-hidden py-4">
      <div class="container position-relative z-2">
          
          <!-- Breadcrumb Pill Bar -->
          <div class="bc-nav-wrapper mb-5">
              <nav class="bc-nav-pill shadow-sm d-inline-flex align-items-center gap-2">
                  <a href="<?= site_url() ?>" class="bc-nav-item text-decoration-none">
                      <i class="bi bi-house-door-fill"></i> Home
                  </a>
                  <span class="bc-nav-sep"><i class="bi bi-chevron-right"></i></span>
                  <span class="bc-nav-current">404 Error</span>
              </nav>
          </div>
          
          <div class="row align-items-center">
              <div class="col-lg-7 col-md-8 col-12">
                  <h1 class="bc-main-title fw-extrabold mb-3">404 Error</h1>
                  <p class="bc-desc mb-0">The page you are looking for does not exist on this server.</p>
              </div>
              <!-- Right side column kept empty to let the background image showcase the truck & workers -->
              <div class="col-lg-5 col-md-4 d-none d-md-block"></div>
          </div>

          <!-- Horizontal Features Row -->
          <div class="row bc-features-row mt-5 pt-3">
              <div class="col-lg-2 col-md-3 col-6 feature-item-col">
                  <div class="bc-feature-item d-flex align-items-center">
                      <div class="bc-feature-icon">
                          <i class="bi bi-clock-history"></i>
                      </div>
                      <div class="bc-feature-text">
                          <span class="text-line-1">Since <?= $startYear ?></span>
                          <span class="text-line-2"><?= $experience ?> Years Legacy</span>
                      </div>
                  </div>
              </div>
              <div class="col-lg-2 col-md-3 col-6 feature-item-col">
                  <div class="bc-feature-item d-flex align-items-center">
                      <div class="bc-feature-icon">
                          <i class="bi bi-patch-check-fill"></i>
                      </div>
                      <div class="bc-feature-text">
                          <span class="text-line-1">ISO Certified</span>
                          <span class="text-line-2">Licensed &amp; Verified</span>
                      </div>
                  </div>
              </div>
              <div class="col-lg-2 col-md-3 col-6 feature-item-col">
                  <div class="bc-feature-item d-flex align-items-center">
                      <div class="bc-feature-icon">
                          <i class="bi bi-people-fill"></i>
                      </div>
                      <div class="bc-feature-text">
                          <span class="text-line-1">Expert Team</span>
                          <span class="text-line-2">CMD to Staff</span>
                      </div>
                  </div>
              </div>
              <div class="col-lg-2 col-md-3 col-6 feature-item-col">
                  <div class="bc-feature-item d-flex align-items-center">
                      <div class="bc-feature-icon">
                          <i class="bi bi-geo-alt-fill"></i>
                      </div>
                      <div class="bc-feature-text">
                          <span class="text-line-1">Pan-India</span>
                          <span class="text-line-2">100+ Locations</span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <section class="error_section text-center mouse_move mt-3">
    <div class="container">
      <div class="error_image decoration_wrap text-center">
        <img src="<?= base_url("assets/img/error/404.png") ?>" alt="404 Error">
      </div>
      <div class="error_content">
        <h2>Page not found</h2>
        <p>
          The requested URL does not exist on this server;<span class="d-md-block"> Please verify the web address and contact the administrator if you believe it's an error. </span>
        </p>
        <a href="<?= site_url() ?>" class="bd-btn-link btn_primary">
          <span class="bd-button-content-wrapper">
            <span class="bd-button-icon">
              <i class="fa-light fa-arrow-right-long"></i>
            </span>
            <span class="pd-animation-flip">
              <span class="bd-btn-anim-wrapp">
                <a href="<?= site_url('') ?>" class="theme_button color1">Go Back To Home</a>

              </span>
            </span>
          </span>
        </a>
      </div>
    </div>
  </section>
</main>