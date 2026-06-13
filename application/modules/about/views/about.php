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
                <span class="bc-nav-current">About Us</span>
            </nav>
        </div>
        
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-8 col-12">
                <h1 class="bc-main-title fw-extrabold mb-3">About Us</h1>
                <p class="bc-desc mb-0">Learn more about our history, values, infrastructure, and the expert team dedicated to your seamless move.</p>
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

<!-- Main Page Content Section -->
<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <!-- Left Side Content -->
            <div class="col-lg-8">
                <div class="about-us-content">
                    <h2>Our Journey & Commitment to Shifting Excellence</h2>
                    <p>
                        Welcome to <strong><?= $company3 ?></strong>, your premier choice for end-to-end packing, shifting, and logistics solutions in India. Founded with a single vision to simplify relocations, we have grown to become a national leader in logistics services, trusted by thousands of families and businesses.
                    </p>
                    <p>
                        With over <strong><?= $experience ?> years of experience</strong> since our inception in <strong><?= $startYear ?></strong>, we understand that moving is not merely transporting items — it's about relocating lives, memories, and crucial assets. Our dedicated team of moving professionals works around the clock to ensure every box, piece of furniture, and vehicle is delivered safely and on time.
                    </p>
                    
                    <h3>Our Mission</h3>
                    <p>
                        To provide stress-free, secure, and transparently priced relocation services across India. We strive to combine quality packing materials, structured transit planning, and client-centric customer support to deliver a seamless moving experience every time.
                    </p>

                    <h3>Our Vision</h3>
                    <p>
                        To set the national benchmark for logistics safety and excellence. We plan to continuously expand our pan-India network of locations, implement advanced real-time tracking systems, and train our workforce in cutting-edge safety protocols.
                    </p>

                    <div class="about-vision-mission">
                        <div class="about-vision-card">
                            <div class="icon-wrap"><i class="bi bi-eye-fill"></i></div>
                            <h3>Innovation & Safety</h3>
                            <p>Utilizing premium multi-layer packing materials and GPS-tracked container transport to secure cargo.</p>
                        </div>
                        <div class="about-mission-card">
                            <div class="icon-wrap"><i class="bi bi-heart-fill"></i></div>
                            <h3>Client First Policy</h3>
                            <p>Ensuring transparent, bank-approved quotation policies with no hidden surprises or post-move disputes.</p>
                        </div>
                    </div>

                    <h3>Credibility and Standards</h3>
                    <p>
                        We are ISO certified and accredited under major logistics transport guidelines. Our local teams coordinate directly with local associations, building managers, and transit checkpoints to ensure no unwanted delays occur during transportation.
                    </p>
                    <ul>
                        <li><strong>ISO 9001:2015 Certified</strong>: Assured quality management systems.</li>
                        <li><strong>Enclosed Car & Bike Carriers</strong>: Protection against weather and road debris.</li>
                        <li><strong>Full Transit Insurance Cover</strong>: Valued protection for peace of mind.</li>
                        <li><strong>Verified Moving Specialists</strong>: Background-checked professionals handling your cargo.</li>
                    </ul>

                    <div class="quality-commitment-block">
                        <h5>President's Message on Quality</h5>
                        <p>
                            "At <?= $company3 ?>, we believe our clients' trust is our greatest asset. From single-item relocations to massive corporate shifting contracts, we execute every project with maximum care, precision, and dedication."
                        </p>
                    </div>

                </div>
            </div>

            <!-- Right Side Sticky Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('about/company_sidebar', ['active_link' => 'about-us']); ?>
            </div>
        </div>
    </div>
</section>

