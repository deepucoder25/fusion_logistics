<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$services = [
    [
        'title' => 'Home Shifting',
        'icon' => 'bi-house-door',
        'image' => 'service_home_shifting.jpg',
        'desc' => 'Professional home shifting services to carefully transport all your household belongings with care and precision.',
        'link' => 'home-shifting',
        'badge' => 'Reliable'
    ],
    [
        'title' => 'Office Relocation',
        'icon' => 'bi-briefcase',
        'image' => 'service_office_relocation.jpg',
        'desc' => 'Seamless office relocation services designed to minimize disruption and ensure a smooth business transition.',
        'link' => 'office-relocation',
        'badge' => 'Efficient'
    ],
    [
        'title' => 'Car Transportation',
        'icon' => 'bi-car-front',
        'image' => 'service_car_transportation.jpg',
        'desc' => 'Safe and reliable car transportation services to ensure your vehicle reaches its destination without hassle.',
        'link' => 'car-transportation',
        'badge' => 'Safe Transit'
    ],
    [
        'title' => 'Bike Transportation',
        'icon' => 'bi-bicycle',
        'image' => 'service_bike_transportation.jpg',
        'desc' => 'Efficient bike transportation services tailored to ensure your bike reaches its destination safely and on time.',
        'link' => 'bike-transportation',
        'badge' => 'Fast'
    ],
    [
        'title' => 'Warehouse & Storage',
        'icon' => 'bi-box-seam',
        'image' => 'service_warehouse_storage.jpg',
        'desc' => 'Safe and spacious warehouse and storage solutions to store your goods for short or long-term durations.',
        'link' => 'warehouse-and-storage',
        'badge' => 'Secured'
    ]
];
?>

<section class="services-section py-5">
    <div class="container position-relative">
        
        <!-- Header Grid -->
        <div class="row align-items-center mb-5 services-header-grid">
            <div class="col-md-7 col-8 services-header-left">
                <!-- Subheading -->
                <div class="services-subheading d-flex align-items-center mb-3">
                    <span class="sub-line"></span>
                    <span class="sub-text text-uppercase font-weight-bold">Our Services</span>
                    <span class="sub-line"></span>
                </div>
                <!-- Main Title -->
                <h2 class="services-main-title mb-4">
                    Comprehensive Logistics <br>
                    <span class="text-accent">Solutions</span> Tailored to You
                </h2>
                <!-- Subtitle Description -->
                <p class="services-subtitle mb-0">
                    From first mile to last mile, we provide end-to-end logistics solutions that drive your business forward.
                </p>
            </div>
            <div class="col-md-5 col-4 services-header-right text-end">
                <img src="<?= base_url('assets/images/services_modules/services_header_truck.webp') ?>" alt="Logistics Cargo Truck" class="img-fluid services-header-truck">
            </div>
        </div>

        <!-- Grid of Services (5 Columns) -->
        <div class="services-grid mb-5">
            <?php foreach ($services as $service): ?>
                <div class="service-card-wrapper">
                    <div class="service-card">
                        <!-- Badge Tag -->
                        <?php if (!empty($service['badge'])): ?>
                            <span class="service-card-badge"><?= htmlspecialchars($service['badge']) ?></span>
                        <?php endif; ?>

                        <!-- Icon Circle -->
                        <div class="service-icon-circle mb-4">
                            <div class="icon-inner">
                                <i class="bi <?= $service['icon'] ?>"></i>
                            </div>
                        </div>
                        
                        <!-- Title -->
                        <h3 class="service-card-title"><?= htmlspecialchars($service['title']) ?></h3>
                        
                        <!-- Line Divider -->
                        <div class="service-line-divider my-3"></div>
                        
                        <!-- Description -->
                        <p class="service-card-desc"><?= htmlspecialchars($service['desc']) ?></p>
                        
                        <!-- Landscape Image -->
                        <div class="service-card-img-wrap mb-4">
                            <img src="<?= base_url('assets/images/services_modules/' . $service['image']) ?>" alt="<?= htmlspecialchars($service['title']) ?>" class="img-fluid service-card-img">
                        </div>
                        
                        <!-- Link -->
                        <a href="<?= site_url($service['link']) ?>" class="service-card-link d-flex align-items-center gap-2">
                            <span>Learn More</span>
                            <i class="bi bi-arrow-right service-link-arrow"></i>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Bottom Stats Banner -->
        <div class="services-stats-banner">
            <div class="stats-row">
                <!-- Stat 1 -->
                <div class="stat-item">
                    <div class="stat-icon-wrap">
                        <i class="bi bi-award"></i>
                    </div>
                    <div class="stat-content">
                        <h4 class="stat-title"><?= $experience ?> Years of Industry Experience</h4>
                        <p class="stat-desc">Delivering reliability and excellence since <?= $startYear ?>.</p>
                    </div>
                </div>
                <!-- Divider -->
                <div class="stat-divider d-none d-lg-block"></div>
                
                <!-- Stat 2 -->
                <div class="stat-item">
                    <div class="stat-icon-wrap">
                        <i class="bi bi-people"></i>
                    </div>
                    <div class="stat-content">
                        <h4 class="stat-title">250+ Expert Professionals</h4>
                        <p class="stat-desc">A dedicated team working for your success.</p>
                    </div>
                </div>
                <!-- Divider -->
                <div class="stat-divider d-none d-lg-block"></div>
                
                <!-- Stat 3 -->
                <div class="stat-item">
                    <div class="stat-icon-wrap">
                        <i class="bi bi-globe"></i>
                    </div>
                    <div class="stat-content">
                        <h4 class="stat-title">Pan India Network</h4>
                        <p class="stat-desc">Extensive reach with a strong logistics infrastructure.</p>
                    </div>
                </div>
                <!-- Divider -->
                <div class="stat-divider d-none d-lg-block"></div>
                
                <!-- Stat 4 -->
                <div class="stat-item">
                    <div class="stat-icon-wrap">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <div class="stat-content">
                        <h4 class="stat-title">Safe, Secure &amp; On-Time Delivery</h4>
                        <p class="stat-desc">Your cargo is our responsibility, safety is our promise.</p>
                    </div>
                </div>
                <!-- Divider -->
                <div class="stat-divider d-none d-lg-block"></div>
                
                <!-- Stat 5 -->
                <div class="stat-item">
                    <div class="stat-icon-wrap">
                        <i class="bi bi-headset"></i>
                    </div>
                    <div class="stat-content">
                        <h4 class="stat-title">24/7 Customer Support</h4>
                        <p class="stat-desc">We're here whenever you need us.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
