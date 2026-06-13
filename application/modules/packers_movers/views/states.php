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
                <span class="bc-nav-current">Our Locations</span>
            </nav>
        </div>
        
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-8 col-12">
                <h1 class="bc-main-title fw-extrabold mb-3">Our Locations</h1>
                <p class="bc-desc mb-0"><?= $company3 ?> Packers and Movers — Delivering trusted relocation services across <?= $statesCovered ?> states in India.</p>
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

<?php
$state = [
    [
        "image" => "maharashtra.jpg",
        "category" => "Maharashtra",
        "link" => "maharashtra"
    ],
    [
        "image" => "punjab.jpg",
        "category" => "Punjab",
        "link" => "punjab"
    ],
    [
        "image" => "gujarat.jpg",
        "category" => "Gujarat",
        "link" => "gujarat"
    ],
    [
        "image" => "haryana.jpg",
        "category" => "Haryana",
        "link" => "haryana"
    ],
    [
        "image" => "telangana.jpg",
        "category" => "Telangana",
        "link" => "telangana"
    ],
    [
        "image" => "tamil-nadu.jpg",
        "category" => "Tamil Nadu",
        "link" => "tamil-nadu"
    ]
];
?>

<!-- Locations Section -->
<section class="portfolio-area py-5 bg-light">
    <div class="container">

        <!-- Section Heading -->
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">
                Our Presence Across <span class="pm-states-title-span">India</span>
            </h2>
            <p class="text-muted">
                Reliable packing and moving services available in major states.
            </p>
        </div>

        <div class="row g-3 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 justify-content-center">

            <?php foreach ($state as $item): 
                $info_text = '';
                $badge_text = 'Active Hub';
                if (strtolower($item['category']) === 'maharashtra') {
                    $info_text = 'Mumbai, Pune, Nagpur & major commercial hubs';
                    $badge_text = '20+ Locations';
                } elseif (strtolower($item['category']) === 'punjab') {
                    $info_text = 'Ludhiana, Jalandhar, Amritsar & major cities';
                    $badge_text = '15+ Locations';
                } elseif (strtolower($item['category']) === 'gujarat') {
                    $info_text = 'Ahmedabad, Surat, Vadodara & major cities';
                    $badge_text = '12+ Locations';
                } elseif (strtolower($item['category']) === 'haryana') {
                    $info_text = 'Gurugram, Faridabad, Panipat & major cities';
                    $badge_text = '10+ Locations';
                } elseif (strtolower($item['category']) === 'telangana') {
                    $info_text = 'Hyderabad, Secunderabad & major cities';
                    $badge_text = '8+ Locations';
                } elseif (strtolower($item['category']) === 'tamil nadu') {
                    $info_text = 'Chennai, Coimbatore, Madurai & major cities';
                    $badge_text = '10+ Locations';
                } 
            ?>
                
                <!-- Individual Column for 5-Cols System -->
                <div class="col">

                    <div class="pm-state-card-premium">

                        <!-- Image Wrap -->
                        <div class="pm-state-image-wrap">
                            <span class="pm-state-badge"><?= $badge_text ?></span>
                            
                            <img class="img-fluid"
                                src="<?= base_url() ?>/assets/images/state/<?= $item['image'] ?>"
                                alt="<?= $item['category'] ?>"
                                loading="lazy">

                            <!-- Hover Overlay -->
                            <div class="pm-state-hover-overlay">
                                <a href="<?= site_url($item['link']) ?>" class="explore-icon" aria-label="Explore <?= $item['category'] ?> Locations">
                                    <i class="bi bi-arrow-right-short"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Card Body -->
                        <div class="pm-state-card-body">
                            <h3 class="pm-state-title">
                                <a href="<?= site_url($item['link']) ?>" class="text-decoration-none color-inherit">
                                    <?= htmlspecialchars($item['category']) ?>
                                </a>
                            </h3>
                            <p class="pm-state-desc">
                                <?= $info_text ?>
                            </p>
                            
                            <!-- Explore Button -->
                            <a href="<?= site_url($item['link']) ?>" class="pm-state-cta-btn">
                                <span>Explore Locations</span>
                                <i class="bi bi-arrow-right-short"></i>
                            </a>
                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>
    </div>
</section>



