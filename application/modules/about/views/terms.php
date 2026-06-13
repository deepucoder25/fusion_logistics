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
                <span class="bc-nav-current">Terms &amp; Conditions</span>
            </nav>
        </div>
        
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-8 col-12">
                <h1 class="bc-main-title fw-extrabold mb-3">Terms &amp; Conditions</h1>
                <p class="bc-desc mb-0">Understand the service terms, booking rules, transit guidelines, and liability policies for relocations managed by <?= $company3 ?>.</p>
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
<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="policy-content-card">
                    <p class="lead">
                        Welcome to <strong><?= $company3 ?></strong>. These Terms &amp; Conditions govern your use of our website and relocation services. By booking a move or using our services, you agree to be bound by these terms.
                    </p>

                    <h2>1. Service Booking &amp; Shifting Quotes</h2>
                    <ul>
                        <li>Shifting quotes provided by us are based on the inventory list and details supplied by you.</li>
                        <li>Any change in the inventory list, travel distance, floor levels, or loading conditions will result in an adjustment of the final price.</li>
                        <li>The final service pricing is subject to taxes and other applicable duties as outlined in the invoice.</li>
                    </ul>

                    <h2>2. Excluded &amp; Restricted Items</h2>
                    <p>
                        For safety and legal reasons, we do not transport the following items:
                    </p>
                    <ul>
                        <li>Hazardous materials, explosives, and flammable liquids (e.g., gas cylinders, fuel).</li>
                        <li>Valuables including cash, jewelry, gold, and extremely important original documents. We advise carrying these items personally.</li>
                        <li>Contraband, illegal items, or restricted substances.</li>
                        <li>Perishable goods or live plants unless special arrangements are formally agreed upon.</li>
                    </ul>

                    <h2>3. Payments &amp; Billing</h2>
                    <ul>
                        <li>A booking advance may be required to confirm the shifting slot.</li>
                        <li>The remaining balance must be paid in full at the time of loading or unloading, as agreed in the service order.</li>
                        <li>Payments can be made via credit card, net banking, UPI, or other options approved by our billing desk.</li>
                    </ul>

                    <h2>4. Transit Insurance &amp; Liability</h2>
                    <ul>
                        <li>While we take utmost care of your goods, unexpected accidents or road conditions can occur. We strongly recommend choosing transit insurance.</li>
                        <li>Our liability for any damage is strictly limited to the terms of the transit insurance policy.</li>
                        <li>All damage claims must be documented and submitted within 24 hours of unloading.</li>
                    </ul>

                    <h2>5. Delivery Timeline &amp; Delays</h2>
                    <p>
                        We make every effort to deliver your goods on schedule. However, we are not liable for transit delays caused by traffic accidents, road closures, strikes, bad weather, or other events beyond our reasonable control.
                    </p>

                    <h2>6. Governing Law</h2>
                    <p>
                        These Terms &amp; Conditions are governed by and construed in accordance with the laws of India. Any legal disputes arising from our services shall be subject to the exclusive jurisdiction of the courts near our registered office.
                    </p>

                    <h2>7. Contact Us</h2>
                    <p>
                        If you have any questions about our Terms &amp; Conditions, please get in touch with us:
                    </p>
                    <p class="mb-0">
                        <strong><?= $company3 ?></strong><br>
                        Email: <a href="<?= $mailhtml ?>"><?= $mail ?></a><br>
                        Phone: <a href="<?= $phonehtml ?>"><?= $phone ?></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
