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
                <span class="bc-nav-current">Our Branches</span>
            </nav>
        </div>
        
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-8 col-12">
                <h1 class="bc-main-title fw-extrabold mb-3">Our Branches</h1>
                <p class="bc-desc mb-0">Get in touch directly with our regional business heads and managers across major Indian hubs.</p>
            </div>
            <div class="col-lg-5 col-md-4 d-none d-md-block"></div>
        </div>

        <!-- Horizontal Features Row -->
        <div class="row bc-features-row mt-5 pt-3">
            <div class="col-lg-2 col-md-3 col-6 feature-item-col">
                <div class="bc-feature-item d-flex align-items-center">
                    <div class="bc-feature-icon">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>
                    <div class="bc-feature-text">
                        <span class="text-line-1">6 Major</span>
                        <span class="text-line-2">Metro Hubs</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6 feature-item-col">
                <div class="bc-feature-item d-flex align-items-center">
                    <div class="bc-feature-icon">
                        <i class="bi bi-patch-check-fill"></i>
                    </div>
                    <div class="bc-feature-text">
                        <span class="text-line-1">IBA Approved</span>
                        <span class="text-line-2">Verified Branches</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6 feature-item-col">
                <div class="bc-feature-item d-flex align-items-center">
                    <div class="bc-feature-icon">
                        <i class="bi bi-headset"></i>
                    </div>
                    <div class="bc-feature-text">
                        <span class="text-line-1">Direct Line</span>
                        <span class="text-line-2">Branch Heads</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Branches Grid Section -->
<section class="branches-section py-5 bg-light">
    <div class="container my-4">
        
        <div class="text-center mb-5">
            <h2 class="fw-extrabold text-dark mb-2">Connect With Local Experts</h2>
            <p class="text-muted">Find office details and direct contact details for our localized branch network.</p>
            <div class="title-underline mx-auto mt-3" style="width: 60px; height: 3px; background: var(--primary-color);"></div>
        </div>

        <div class="row g-4">
            <?php
            $branches = [
                [
                    'city' => 'Navi Mumbai (Head Office)',
                    'name' => 'ARYAN CHOUDHARY',
                    'role' => 'Business Head',
                    'email' => 'aryan@fusionlogistics.in',
                    'phone' => '9076012200',
                    'address' => 'Office No. 2, Vista Enclave CHS., Sector - 2, Taloja Phase - 1, Navi Mumbai - 410208.'
                ],
                [
                    'city' => 'Chennai Branch',
                    'name' => 'SUNIL SHARMA',
                    'role' => 'Business Head',
                    'email' => 'sunilsharma@fusionlogistics.in',
                    'phone' => '9076018800',
                    'address' => 'Office No. 62, Micro Marble, 2nd Main Road, Balaji Nagar, Puzhal Kavangarai, Chennai, Tamilnadu- 600066.'
                ],
                [
                    'city' => 'Delhi / NCR Branch',
                    'name' => 'VIKAS BHARTI',
                    'role' => 'Business Head',
                    'email' => 'vikas@fusionlogistics.in',
                    'phone' => '9076014400',
                    'address' => '17/6, Delhi Mathura Road, Near Sarpunch Colony, Metro Pilor No. 763, Faridabad -121001'
                ],
                [
                    'city' => 'Hyderabad Branch',
                    'name' => 'SOM SINGH',
                    'role' => 'Business Head',
                    'email' => 'somsing@fusionlogistics.in',
                    'phone' => '9076016600',
                    'address' => 'Office Pl.No. 38, SY.NO. 94/P, Marri Ram Reddy Colony, Bowenpally, Secunderabad- 500011, Telangana.'
                ],
                [
                    'city' => 'Ludhiana Branch',
                    'name' => 'KRISHAN AGARWAL',
                    'role' => 'Business Head',
                    'email' => 'aggarwal.krishan@fusionlogistics.in',
                    'phone' => '9076015500',
                    'address' => 'Office 1371, MiG, Sector 32, Chandigarh Road, Ludhiana, Punjab - 141010.'
                ],
                [
                    'city' => 'Ahmedabad Branch',
                    'name' => 'SUNIL CHOUDHARY',
                    'role' => 'Business Head',
                    'email' => 'sunilkumar@fusionlogistics.in',
                    'phone' => '9076023300',
                    'address' => 'Office A-123, Bijal Business Centre, Near Aslali Circle, Aslali, Ahmedabad, Gujarat - 382427.'
                ]
            ];

            foreach ($branches as $index => $b):
            ?>
                <!-- Branch Card Block (2 in a row on desktop) -->
                <div class="col-lg-6 col-md-6 col-12 mb-4">
                    <div class="business-card shadow-lg position-relative overflow-hidden bg-white" data-index="<?= $index ?>">
                        <!-- Left Card Content -->
                        <div class="card-left-side">
                            <span class="branch-card-city-badge"><?= $b['city'] ?></span>
                            <h3 class="card-contact-name"><?= $b['name'] ?></h3>
                            <span class="card-contact-role"><?= $b['role'] ?></span>
                            <div class="role-underline-red"></div>
                            <a href="mailto:<?= $b['email'] ?>" class="card-contact-email contact-link mb-4 d-block text-decoration-none"><?= $b['email'] ?></a>
                            
                            <div class="contact-details-list">
                                <!-- Phone -->
                                <a href="tel:<?= $b['phone'] ?>" class="contact-detail-row text-decoration-none">
                                    <div class="contact-circle-icon"><i class="bi bi-telephone-fill"></i></div>
                                    <span class="contact-text-value font-bold"><?= $b['phone'] ?></span>
                                </a>
                                <!-- Web/General Email -->
                                <div class="contact-detail-row">
                                    <div class="contact-circle-icon"><i class="bi bi-globe"></i></div>
                                    <div class="contact-text-multi">
                                        <a href="https://<?= $companydomain ?>" target="_blank" class="contact-text-value contact-link text-decoration-none"><?= $companydomain ?></a>
                                        <a href="<?= $mailhtml ?>" class="contact-text-value contact-link text-decoration-none"><?= $mail ?></a>
                                    </div>
                                </div>
                                <!-- Address -->
                                <div class="contact-detail-row align-items-start">
                                    <div class="contact-circle-icon mt-1"><i class="bi bi-geo-alt-fill"></i></div>
                                    <span class="contact-text-value text-wrap-address"><?= $b['address'] ?></span>
                                </div>
                            </div>
                        </div>

                        <!-- Curvy Separator Overlay (SVG) -->
                        <div class="card-curvy-svg-container">
                            <svg width="100%" height="100%" viewBox="0 0 300 290" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                <!-- Gray wave -->
                                <path d="M 100,0 C 30,80 30,210 160,290 L 300,290 L 300,0 Z" fill="#1f2122" />
                                <!-- Red wave -->
                                <path d="M 115,0 C 45,80 45,210 175,290 L 300,290 L 300,0 Z" fill="#d1121b" />
                                <!-- White backing -->
                                <path d="M 130,0 C 60,80 60,210 190,290 L 300,290 L 300,0 Z" fill="#ffffff" />
                            </svg>
                        </div>

                        <!-- Right Card Content (Logo & Brand) -->
                        <div class="card-right-side">
                            <div class="card-logo-circle-container">
                                <div class="card-logo-circle">
                                    <img src="<?= base_url() ?>assets/images/logo/logo.png" alt="Fusion Logo" class="card-logo-img">
                                </div>
                            </div>
                            <div class="card-brand-label-container">
                                <h4 class="brand-text-red">FUSION</h4>
                                <h4 class="brand-text-red">LOGISTICS</h4>
                                <span class="brand-text-gray">PVT. LTD.</span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- Custom Styles specific to Business Cards -->
<style>
/* Business Card Box Model */
.business-card {
    width: 100%;
    height: 320px;
    border-radius: 14px;
    display: flex;
    box-sizing: border-box;
    transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
    cursor: pointer;
    background: #ffffff;
    border: 1px solid rgba(0, 0, 0, 0.03);
}

/* Branch City Badge inside Card */
.branch-card-city-badge {
    display: inline-block;
    color: #d1121b;
    font-size: 11px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.8px;
    margin-bottom: 4px;
}

.business-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 30px rgba(0, 0, 0, 0.1);
    border-color: rgba(209, 18, 27, 0.15);
}

/* Left portion (Content) */
.card-left-side {
    width: 58%;
    padding: 24px 15px 24px 24px;
    z-index: 10;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    box-sizing: border-box;
}

.card-contact-name {
    font-family: 'Inter', sans-serif;
    font-size: 19px;
    font-weight: 850;
    color: #1f2122;
    margin: 0 0 2px 0;
    letter-spacing: -0.2px;
    text-transform: uppercase;
}

.card-contact-role {
    font-size: 13px;
    font-weight: 500;
    color: #6c757d;
}

.role-underline-red {
    width: 32px;
    height: 3px;
    background: #d1121b;
    margin: 6px 0 4px 0;
    border-radius: 2px;
}

.card-contact-email {
    font-size: 13.5px;
    color: #495057;
    font-weight: 600;
}

/* Contact Detail rows */
.contact-details-list {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.contact-detail-row {
    display: flex;
    align-items: center;
    gap: 12px;
    color: #343a40;
}

.contact-circle-icon {
    width: 26px;
    height: 26px;
    border-radius: 50%;
    background: #d1121b;
    color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 11px;
    flex-shrink: 0;
    transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275), background-color 0.3s ease, box-shadow 0.3s ease;
}

.business-card:hover .contact-circle-icon {
    transform: scale(1.12);
    box-shadow: 0 3px 8px rgba(209, 18, 27, 0.25);
}

.contact-detail-row:hover .contact-circle-icon {
    transform: scale(1.22);
    background-color: #1f2122;
    box-shadow: 0 4px 10px rgba(31, 33, 34, 0.3);
}

.contact-text-value {
    font-size: 13px;
    font-weight: 500;
    line-height: 1.3;
}

.font-bold {
    font-weight: 700 !important;
}

.contact-text-multi {
    display: flex;
    flex-direction: column;
}

.text-wrap-address {
    font-size: 13px;
}

/* Premium Link Hover Effects */
.contact-link {
    color: inherit;
    text-decoration: none;
    transition: color 0.2s ease;
}

.contact-link:hover {
    color: #d1121b !important;
}

a.contact-detail-row {
    transition: color 0.2s ease;
}

a.contact-detail-row:hover {
    color: #d1121b;
}

/* SVG Curvy Stripe separating left and right */
.card-curvy-svg-container {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    width: 58%;
    height: 100%;
    pointer-events: none;
    z-index: 2;
}

.card-curvy-svg-container svg {
    display: block;
}

/* Right portion (Logo & Branding) */
.card-right-side {
    position: absolute;
    right: 0;
    top: 0;
    bottom: 0;
    width: 42%;
    z-index: 10;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding-right: 18px;
    box-sizing: border-box;
}

/* Outer circular container with double ring effect */
.card-logo-circle-container {
    width: 82px;
    height: 82px;
    border-radius: 50%;
    background: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 15px rgba(0,0,0,0.08);
    position: relative;
    margin-bottom: 15px;
    border: 1px solid #e9ecef;
    transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.15), box-shadow 0.4s ease;
}

.card-logo-circle-container::before {
    content: '';
    position: absolute;
    top: 2px;
    left: 2px;
    right: 2px;
    bottom: 2px;
    border: 1.5px solid #d1121b;
    border-radius: 50%;
    pointer-events: none;
}

.business-card:hover .card-logo-circle-container {
    transform: scale(1.06) rotate(3deg);
    box-shadow: 0 8px 20px rgba(0,0,0,0.12);
}

.card-logo-circle {
    width: 66px;
    height: 66px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    background: #ffffff;
}

.card-logo-img {
    width: 90%;
    height: 90%;
    object-fit: contain;
}

/* Brand Text styles */
.card-brand-label-container {
    text-align: center;
}

.brand-text-red {
    color: #d1121b;
    font-size: 14.5px;
    font-weight: 900;
    font-style: italic;
    line-height: 1.05;
    margin: 0;
    font-family: 'Montserrat', sans-serif;
    letter-spacing: -0.2px;
}

.brand-text-gray {
    color: #495057;
    font-size: 10.5px;
    font-weight: 800;
    font-style: italic;
    letter-spacing: 0.5px;
    display: block;
    margin-top: 1px;
}

</style>

<!-- Hover scripting removed for clean CSS transitions -->
