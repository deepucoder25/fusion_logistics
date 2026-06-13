<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<aside class="service-sidebar">
    <!-- Services Navigation Menu -->
    <div class="sidebar-widget widget-services mb-4">
        <div class="sidebar-title-header mb-3">
            <h3 class="widget-title d-flex align-items-center gap-2">
                <i class="bi bi-grid-3x3-gap-fill"></i>
                City Services
            </h3>
            <div class="title-underline"></div>
        </div>
        <p class="widget-desc mb-4">Expert relocation solutions in <?php echo !empty($city) ? $city : (!empty($addressRegion) ? $addressRegion : 'India'); ?>.</p>

        <ul class="sidebar-services-list" id="sidebarServiceList">
            <?php
            $sidebar_services = [
                ['slug' => 'home-shifting-in-' . $ctlink,      'name' => "Home Shifting in $city",      'icon' => 'bi-house-door-fill'],
                ['slug' => 'office-shifting-in-' . $ctlink,    'name' => "Office Relocation in $city",  'icon' => 'bi-building-fill-gear'],
                ['slug' => 'car-transport-in-' . $ctlink,      'name' => "Car Transportation in $city", 'icon' => 'bi-car-front-fill'],
                ['slug' => 'bike-transport-in-' . $ctlink,     'name' => "Bike Transportation in $city",'icon' => 'bi-bicycle'],
            ];

            foreach ($sidebar_services as $index => $s):
                $is_active = ($active_service === $s['slug']) ? 'active' : '';
            ?>
                <li>
                    <a href="<?= site_url($s['slug']) ?>" class="d-flex align-items-center justify-content-between <?= $is_active ?>">
                        <span class="d-flex align-items-center gap-2">
                            <i class="bi <?= $s['icon'] ?> service-icon"></i>
                            <span class="service-name"><?= $s['name'] ?></span>
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
                <span>Why Choose <?= $company3 ?> in <?= $city ?>?</span>
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
                    <p class="m-0 point-desc">100+ locations across <?= $statesCovered ?> states</p>
                </div>
            </li>
        </ul>
    </div>
</aside>
