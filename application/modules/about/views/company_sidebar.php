<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<aside class="service-sidebar">
    <!-- Company Navigation Menu -->
    <div class="sidebar-widget widget-services mb-4">
        <div class="sidebar-title-header mb-3">
            <h3 class="widget-title d-flex align-items-center gap-2">
                <i class="bi bi-grid-3x3-gap-fill"></i>
                About Company
            </h3>
            <div class="title-underline"></div>
        </div>
        <p class="widget-desc mb-4">Learn more about our packing and moving legacy in <?php echo !empty($city) ? $city : (!empty($addressRegion) ? $addressRegion : 'India'); ?>.</p>

        <ul class="sidebar-services-list">
            <?php
            $sidebar_links = [
                ['slug' => 'about-us',          'name' => 'About Us',          'icon' => 'bi-info-circle-fill'],
                ['slug' => 'why-choose-us',     'name' => 'Why Choose Us',     'icon' => 'bi-patch-question-fill'],
                ['slug' => 'faqs',              'name' => 'FAQ',               'icon' => 'bi-chat-left-text-fill'],
                ['slug' => 'testimonials',      'name' => 'Testimonial',       'icon' => 'bi-chat-quote-fill'],
                ['slug' => 'reviews',           'name' => 'Reviews',           'icon' => 'bi-star-fill'],
                ['slug' => 'blog',              'name' => 'Blog',              'icon' => 'bi-journal-text'],
                ['slug' => 'photo-gallery',     'name' => 'Photo Gallery',     'icon' => 'bi-images'],
            ];

            foreach ($sidebar_links as $link):
                $is_active = ($active_link === $link['slug']) ? 'active' : '';
            ?>
                <li>
                    <a href="<?= site_url($link['slug']) ?>" class="d-flex align-items-center justify-content-between <?= $is_active ?>">
                        <span class="d-flex align-items-center gap-2">
                            <i class="bi <?= $link['icon'] ?> service-icon"></i>
                            <span class="service-name"><?= $link['name'] ?></span>
                        </span>
                        <i class="bi bi-chevron-right arrow-icon"></i>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- Contact & Action CTA Widget -->
    <div class="sidebar-widget widget-contact-cta mb-4">
        <div class="cta-inner-card">
            <div class="cta-headset-circle">
                <i class="bi bi-headset"></i>
            </div>
            <h3 class="cta-title">Get in touch with our moving experts for a fast and free quotation.</h3>
            
            <div class="cta-buttons-wrapper">
                <a href="<?= $phonehtml ?>" class="btn-sidebar-cta btn-sidebar-call">
                    <i class="bi bi-telephone-fill me-2"></i><?= $phone ?>
                </a>
                
                <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="btn-sidebar-cta btn-sidebar-whatsapp">
                    <i class="bi bi-whatsapp me-2"></i>WhatsApp Chat
                </a>
            </div>
        </div>
    </div>

    <!-- Trusted Badge Widget -->
    <div class="sidebar-widget widget-trusted-badges">
        <div class="sidebar-title-header mb-3">
            <h4 class="widget-sub-title d-flex align-items-start gap-2">
                <i class="bi bi-patch-check-fill text-warning mt-1"></i>
                <span>Why Choose <?= $company3 ?>?</span>
            </h4>
            <div class="title-underline"></div>
        </div>
        <ul class="trusted-points-list">
            <li class="d-flex align-items-center gap-3">
                <div class="icon-wrapper"><i class="bi bi-clock-fill"></i></div>
                <div>
                    <strong><?= $yearsExperience ?> Years Experience</strong>
                    <p class="m-0 point-desc">Trusted since <?= $startYear ?></p>
                </div>
            </li>
            <li class="d-flex align-items-center gap-3">
                <div class="icon-wrapper"><i class="bi bi-people-fill"></i></div>
                <div>
                    <strong><?= $happyClients ?> Happy Clients</strong>
                    <p class="m-0 point-desc">Families and businesses trust us</p>
                </div>
            </li>
            <li class="d-flex align-items-center gap-3">
                <div class="icon-wrapper"><i class="bi bi-patch-check-fill"></i></div>
                <div>
                    <strong>Verified &amp; Licensed</strong>
                    <p class="m-0 point-desc">ISO certified packers and movers</p>
                </div>
            </li>
            <li class="d-flex align-items-center gap-3">
                <div class="icon-wrapper"><i class="bi bi-shield-fill-check"></i></div>
                <div>
                    <strong><?= $secureShifting ?> Secure Shifting</strong>
                    <p class="m-0 point-desc">Complete transit insurance options</p>
                </div>
            </li>
            <li class="d-flex align-items-center gap-3">
                <div class="icon-wrapper"><i class="bi bi-geo-alt-fill"></i></div>
                <div>
                    <strong>Pan-India Coverage</strong>
                    <p class="m-0 point-desc">100+ branches across <?= $statesCovered ?> states</p>
                </div>
            </li>
        </ul>
    </div>
</aside>
