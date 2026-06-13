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
                <span class="bc-nav-current">Testimonials</span>
            </nav>
        </div>
        
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-8 col-12">
                <h1 class="bc-main-title fw-extrabold mb-3">Client Testimonials</h1>
                <p class="bc-desc mb-0">Read the authentic experiences of families, corporates, and professionals who chose <?= $company3 ?> for their relocation needs.</p>
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
                <div class="testimonials-content">
                    
                    <h2>What Our Customers Say</h2>
                    <p>
                        At <strong><?= $company3 ?></strong>, client satisfaction is our primary reward. Over our <?= $experience ?>+ year legacy, we have successfully relocated thousands of families, offices, and vehicles across India. Below are some reviews and testimonials from our valued clients.
                    </p>

                    <!-- Testimonials Grid -->
                    <div class="testimonials-grid">
                        <!-- Testimonial 1 -->
                        <div class="testimonial-card-item">
                            <div class="stars-row">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <h4>Excellent Household Shifting</h4>
                            <p>
                                "I shifted my entire household goods from Delhi to Bangalore. The crew arrived on time and packed everything carefully using double-layered bubble wrap. Not even a single glass item broke during the transit. Highly recommended!"
                            </p>
                            <div class="user-meta">
                                <div class="user-profile">
                                    <div class="avatar-circle">R</div>
                                    <div class="user-info">
                                        <strong>Ramanuj Sharma</strong>
                                        <small>Delhi to Bangalore</small>
                                    </div>
                                </div>
                                <span class="verified-tag">
                                    <i class="bi bi-patch-check-fill"></i> Verified
                                </span>
                            </div>
                        </div>

                        <!-- Testimonial 2 -->
                        <div class="testimonial-card-item">
                            <div class="stars-row">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <h4>Safe Car &amp; Bike Carrier Service</h4>
                            <p>
                                "We relocated our Hyundai i20 and Royal Enfield from Mumbai to Gurgaon. <?= $company3 ?> used a dedicated car carrier and delivered both vehicles door-to-door without a single scratch. Very transparent pricing as well."
                            </p>
                            <div class="user-meta">
                                <div class="user-profile">
                                    <div class="avatar-circle">P</div>
                                    <div class="user-info">
                                        <strong>Priya Nair</strong>
                                        <small>Mumbai to Gurgaon</small>
                                    </div>
                                </div>
                                <span class="verified-tag">
                                    <i class="bi bi-patch-check-fill"></i> Verified
                                </span>
                            </div>
                        </div>

                        <!-- Testimonial 3 -->
                        <div class="testimonial-card-item">
                            <div class="stars-row">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <h4>Smooth Office Relocation</h4>
                            <p>
                                "We had to move our IT office location with 45 work stations from Pune to Hyderabad. The planning and execution by <?= $company3 ?> was flawless. We resumed our operations on Monday morning without any downtime."
                            </p>
                            <div class="user-meta">
                                <div class="user-profile">
                                    <div class="avatar-circle">V</div>
                                    <div class="user-info">
                                        <strong>Vikram Malhotra</strong>
                                        <small>Pune to Hyderabad</small>
                                    </div>
                                </div>
                                <span class="verified-tag">
                                    <i class="bi bi-patch-check-fill"></i> Verified
                                </span>
                            </div>
                        </div>

                        <!-- Testimonial 4 -->
                        <div class="testimonial-card-item">
                            <div class="stars-row">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </div>
                            <h4>Reliable Local Shifting</h4>
                            <p>
                                "Shifted our 3 BHK flat within Kolkata. The team completed the loading, transport, and unloading in just under 6 hours. Their pricing was highly competitive and the crew was incredibly polite and helpful."
                            </p>
                            <div class="user-meta">
                                <div class="user-profile">
                                    <div class="avatar-circle">A</div>
                                    <div class="user-info">
                                        <strong>Amitava Bose</strong>
                                        <small>Local Kolkata Shifting</small>
                                    </div>
                                </div>
                                <span class="verified-tag">
                                    <i class="bi bi-patch-check-fill"></i> Verified
                                </span>
                            </div>
                        </div>

                        <!-- Testimonial 5 -->
                        <div class="testimonial-card-item">
                            <div class="stars-row">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <h4>Stress-Free Pet Relocation</h4>
                            <p>
                                "Extremely thankful to <?= $company3 ?> for safely shifting my Labrador from Siliguri to Chennai. They handled the documentation, custom travel crate, and kept feeding and walking him during breaks. Amazing care!"
                            </p>
                            <div class="user-meta">
                                <div class="user-profile">
                                    <div class="avatar-circle">R</div>
                                    <div class="user-info">
                                        <strong>Dr. Rajesh Patel</strong>
                                        <small>Siliguri to Chennai</small>
                                    </div>
                                </div>
                                <span class="verified-tag">
                                    <i class="bi bi-patch-check-fill"></i> Verified
                                </span>
                            </div>
                        </div>

                        <!-- Testimonial 6 -->
                        <div class="testimonial-card-item">
                            <div class="stars-row">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <h4>IBA Approved Billing &amp; Shifting</h4>
                            <p>
                                "As a bank employee, I needed IBA approved packers and movers for my official transfer from Patna to Lucknow. <?= $company3 ?> provided accurate quotation, consignment note, and bills. Claim settlement was smooth."
                            </p>
                            <div class="user-meta">
                                <div class="user-profile">
                                    <div class="avatar-circle">S</div>
                                    <div class="user-info">
                                        <strong>Siddharth Sen</strong>
                                        <small>Patna to Lucknow</small>
                                    </div>
                                </div>
                                <span class="verified-tag">
                                    <i class="bi bi-patch-check-fill"></i> Verified
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial Form Invitation Banner -->
                    <div class="review-invite-banner">
                        <h5>Leave Your Feedback</h5>
                        <p>
                            Have you recently relocated with us? We would love to hear about your experience. Your reviews help us improve our services and guide other families in choosing the right relocation partner.
                        </p>
                        <a href="<?= site_url('reviews') ?>" class="btn-invite">
                            <i class="bi bi-pencil-square"></i> Write a Customer Review
                        </a>
                    </div>

                </div>
            </div>

            <!-- Right Side Sticky Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('about/company_sidebar', ['active_link' => 'testimonials']); ?>
            </div>
        </div>
    </div>
</section>



