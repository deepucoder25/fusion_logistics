<?php
$st = strtolower(str_replace(" ", "-", $state));
include "data/$st.php";
$state = ucwords($state);
?>

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
                <a href="<?= site_url('our-branches') ?>" class="bc-nav-item text-decoration-none">
                    Our Branches
                </a>
                <span class="bc-nav-sep"><i class="bi bi-chevron-right"></i></span>
                <span class="bc-nav-current"><?= $state ?></span>
            </nav>
        </div>
        
        <div class="row align-items-center g-4">
            <div class="col-lg-7 col-md-8 col-12">
                <h1 class="bc-main-title fw-extrabold mb-3">Packers and Movers in <?= $state ?></h1>
                <p class="bc-desc mb-0">Professional relocation and shifting services across all major cities in <?= $state ?>.</p>
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
    <div class="pm-list-service-page">
    <div class="container pm-list-feature-section">
        <div class="row">
            <?php
            $st = str_replace(" ", "-", $state);
            foreach ($cities as $ct) :
                $link = urlencode(strtolower(str_replace(" ", "-", $ct['nm'])));
                $statename = urlencode(strtolower(str_replace(" ", "-", $st)));
            ?>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 mb-3">
                    <a href="<?= site_url("$link-packers-movers-$statename") ?>" class="pm-list-city-card-link d-block h-100 text-decoration-none">
                        <div class="pm-list-city-card card border-0 shadow h-100">
                            <div class="card-body pm-list-card-body">
                                <!-- Truck Icon on Left -->
                                <div class="pm-list-icon">
                                    <i class="bi bi-truck"></i>
                                </div>
                                <!-- Title on Right -->
                                <div class="pm-list-city-name">
                                    <h5>Packers and Movers <b><?= $ct['nm'] ?></b></h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
</main>

