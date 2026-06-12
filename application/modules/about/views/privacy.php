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
                <span class="bc-nav-current">Privacy Policy</span>
            </nav>
        </div>
        
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-8 col-12">
                <h1 class="bc-main-title fw-extrabold mb-3">Privacy Policy</h1>
                <p class="bc-desc mb-0">Learn how <?= $company3 ?> collects, uses, and safeguards your personal data during your relocation and website browsing experience.</p>
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
<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="policy-content-card">
                    <p class="lead">
                        We value your trust and are committed to protecting your privacy. This Privacy Policy describes how <strong><?= $company3 ?></strong> collects, uses, and discloses your personal information when you visit our website or use our relocation services.
                    </p>

                    <h2>1. Information We Collect</h2>
                    <p>
                        When you request a quote, contact us, or hire our shifting services, we may collect the following personal information:
                    </p>
                    <ul>
                        <li>Contact details such as your name, email address, and phone number.</li>
                        <li>Origin address and destination address for your relocation.</li>
                        <li>Inventory list of goods to be moved.</li>
                        <li>Payment and billing information.</li>
                    </ul>

                    <h2>2. How We Use Your Information</h2>
                    <p>
                        We use the collected information for the following purposes:
                    </p>
                    <ul>
                        <li>To provide and manage our packing, moving, and transport services.</li>
                        <li>To calculate and provide accurate shifting quotes.</li>
                        <li>To communicate with you regarding your move status.</li>
                        <li>To process payments and send invoices.</li>
                        <li>To improve our customer service and user experience.</li>
                    </ul>

                    <h2>3. Data Security &amp; Protection</h2>
                    <p>
                        We implement standard security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, please note that no method of transmission over the Internet or electronic storage is 100% secure.
                    </p>

                    <h2>4. Cookies</h2>
                    <p>
                        Our website uses cookies to enhance your browsing experience, track website traffic, and understand user preferences. You can choose to disable cookies through your browser settings, though some features of the website may not function properly.
                    </p>

                    <h2>5. Third-Party Sharing</h2>
                    <p>
                        We do not sell, trade, or rent your personal information to third parties. We may share data with trusted partners and subcontractors (such as delivery crews or insurance providers) solely to the extent necessary to perform your relocation services.
                    </p>

                    <h2>6. Contact Information</h2>
                    <p>
                        If you have any questions or concerns about this Privacy Policy, please contact us at:
                    </p>
                    <p class="mb-0">
                        <strong><?= $company3 ?></strong><br>
                        Address: <?= $address ?><br>
                        Email: <a href="<?= $mailhtml ?>"><?= $mail ?></a><br>
                        Phone: <a href="<?= $phonehtml ?>"><?= $phone ?></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
