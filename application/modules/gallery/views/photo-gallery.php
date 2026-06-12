<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

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
                <span class="bc-nav-current">Photo Gallery</span>
            </nav>
        </div>
        
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-8 col-12">
                <h1 class="bc-main-title fw-extrabold mb-3">Photo Gallery</h1>
                <p class="bc-desc mb-0">Explore visual highlights of our packaging quality, warehouse storage, specialized container carriers, and relocation operations.</p>
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
                        <span class="text-line-2">100+ Branches</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Page Content Section -->
<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <!-- Left Side Content -->
            <div class="col-lg-8">
                <div class="service-main-content">
                    
                    <h2 class="service-section-title">Our Relocation Operations in Action</h2>
                    <div class="about-service-text mb-4">
                        <p>
                            Take a look at our on-field photos demonstrating our dedication to safety, careful packaging, and organized logistics. Our photo gallery highlights our packing standards, secure warehouse storage, and specialized fleets.
                        </p>
                    </div>

                    <!-- Photo Gallery Grid -->
                    <div class="row">
                        <!-- Photo 1 -->
                        <div class="col-md-6 mb-4">
                            <div class="card border-0 shadow-sm rounded-3 overflow-hidden gallery-photo-card h-100">
                                <div class="gallery-img-wrapper position-relative">
                                    <img loading="lazy" src="<?= base_url('assets/images/services_modules/home-shifting-services.webp') ?>" class="w-100 img-fluid gallery-img" alt="Household Packing and Shifting Services">
                                    <div class="gallery-hover-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center opacity-0 gallery-bg-dark-50 gallery-transition-all">
                                        <i class="bi bi-zoom-in text-white gallery-icon-lg"></i>
                                    </div>
                                </div>
                                <div class="card-body p-3">
                                    <span class="badge gallery-bg-success-soft text-success mb-2 gallery-badge-sm">Household Packing</span>
                                    <h5 class="fw-bold mb-1 gallery-title-sm">Multi-Layer Furniture Protection</h5>
                                    <p class="small text-muted mb-0">Careful packing of household furniture using bubble wrap and edge guards to prevent transit scratches.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Photo 2 -->
                        <div class="col-md-6 mb-4">
                            <div class="card border-0 shadow-sm rounded-3 overflow-hidden gallery-photo-card h-100">
                                <div class="gallery-img-wrapper position-relative">
                                    <img loading="lazy" src="<?= base_url('assets/images/services_modules/car-transportation-services.webp') ?>" class="w-100 img-fluid gallery-img" alt="Car Transportation Carriers">
                                    <div class="gallery-hover-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center opacity-0 gallery-bg-dark-50 gallery-transition-all">
                                        <i class="bi bi-zoom-in text-white gallery-icon-lg"></i>
                                    </div>
                                </div>
                                <div class="card-body p-3">
                                    <span class="badge gallery-bg-success-soft text-success mb-2 gallery-badge-sm">Car Carrier</span>
                                    <h5 class="fw-bold mb-1 gallery-title-sm">Enclosed Double-Deck Car Transport</h5>
                                    <p class="small text-muted mb-0">Loading passenger cars inside fully enclosed containers to protect them from weather and road debris.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Photo 3 -->
                        <div class="col-md-6 mb-4">
                            <div class="card border-0 shadow-sm rounded-3 overflow-hidden gallery-photo-card h-100">
                                <div class="gallery-img-wrapper position-relative">
                                    <img loading="lazy" src="<?= base_url('assets/images/services_modules/bike-transportation-services.webp') ?>" class="w-100 img-fluid gallery-img" alt="Two-Wheeler Bike Shifting">
                                    <div class="gallery-hover-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center opacity-0 gallery-bg-dark-50 gallery-transition-all">
                                        <i class="bi bi-zoom-in text-white gallery-icon-lg"></i>
                                    </div>
                                </div>
                                <div class="card-body p-3">
                                    <span class="badge gallery-bg-success-soft text-success mb-2 gallery-badge-sm">Bike Shifting</span>
                                    <h5 class="fw-bold mb-1 gallery-title-sm">Scratch-Free Two-Wheeler Packing</h5>
                                    <p class="small text-muted mb-0">Secure wheel lock straps and heavy foam sheeting applied to bikes before long-distance transport.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Photo 4 -->
                        <div class="col-md-6 mb-4">
                            <div class="card border-0 shadow-sm rounded-3 overflow-hidden gallery-photo-card h-100">
                                <div class="gallery-img-wrapper position-relative">
                                    <img loading="lazy" src="<?= base_url('assets/images/services_modules/loading.webp') ?>" class="w-100 img-fluid gallery-img" alt="Cargo Loading Operations">
                                    <div class="gallery-hover-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center opacity-0 gallery-bg-dark-50 gallery-transition-all">
                                        <i class="bi bi-zoom-in text-white gallery-icon-lg"></i>
                                    </div>
                                </div>
                                <div class="card-body p-3">
                                    <span class="badge gallery-bg-success-soft text-success mb-2 gallery-badge-sm">Cargo Loading</span>
                                    <h5 class="fw-bold mb-1 gallery-title-sm">Organized Goods Stacking &amp; Loading</h5>
                                    <p class="small text-muted mb-0">Professional loaders stacking boxes systematically inside our trucks to ensure stability during transit.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Side Sticky Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('about/company_sidebar', ['active_link' => 'photo-gallery']); ?>
            </div>
        </div>
    </div>
</section>

