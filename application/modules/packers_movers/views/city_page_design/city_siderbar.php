<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- ======================================================
     CITY PAGE SIDEBAR
     Available vars: $city, $state, $company3, $experience,
                     $startYear, $phone, $phone1, $phonehtml,
                     $phonehtml1, $whatsapphtml, $cities, $st
  ====================================================== -->

<aside class="pm-city-sidebar">

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

  <!-- Safety Banner Widget -->
  <div class="sidebar-widget widget-safety-banner mt-4" id="sidebarSafetyBanner">
      <div class="safety-banner-inner">
          <div class="safety-banner-graphic">
              <img src="<?= base_url('assets/images/slider/safe_moving_banner.jpg') ?>" alt="Safe Moving" class="safety-banner-img">
          </div>
          <div class="safety-banner-info">
              <span class="safety-banner-eyebrow">Your Safety, Our Priority</span>
              <h4 class="safety-banner-title">100% Safe & Reliable Moving</h4>
              <p class="safety-banner-desc">We ensure the safe delivery of your valuables with complete care.</p>
              <a href="#quoteform" class="btn-safety-banner-quote text-decoration-none">
                  <span>Get a Free Quote</span>
                  <i class="bi bi-arrow-right ms-1"></i>
              </a>
          </div>
      </div>
  </div>

  <!-- Trust Badges Widget -->
  <div class="sidebar-widget widget-trusted-badges mt-4" id="sidebarTrustWidget">
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
                  <p class="m-0 point-desc">100+ locations across <?= $statesCovered ?> states</p>
              </div>
          </li>
      </ul>
  </div>

  <!-- Related Locations -->
  <div class="sidebar-widget widget-nearby-cities mt-4" id="sidebarRelatedLocations">
    <div class="sidebar-title-header d-flex align-items-center gap-2 mb-2">
      <h4 class="widget-sub-title d-flex align-items-center gap-2">
        <i class="bi bi-pin-map-fill text-warning"></i>
        <span>Nearby Cities</span>
      </h4>
    </div>
    <p class="widget-desc mb-4 text-white-50">Packers and Movers near <?= $city ?>.</p>
    
    <!-- Decorative background truck icon/SVG -->
    <div class="decorative-truck-bg">
        <svg viewBox="0 0 120 80" xmlns="http://www.w3.org/2000/svg">
            <path d="M10 50 L80 50 L80 20 L25 20 L25 40 L10 40 Z" fill="none" stroke="rgba(255,255,255,0.06)" stroke-width="2" />
            <path d="M80 50 L100 50 L110 40 L110 30 L95 30 L95 20 L80 20 Z" fill="none" stroke="rgba(255,255,255,0.06)" stroke-width="2" />
            <circle cx="35" cy="55" r="8" fill="none" stroke="rgba(255,255,255,0.06)" stroke-width="2" />
            <circle cx="90" cy="55" r="8" fill="none" stroke="rgba(255,255,255,0.06)" stroke-width="2" />
        </svg>
    </div>

    <div class="nearby-cities-tags" id="relatedCityTags">
      <?php
      $count = 0;
      foreach ($cities as $ct):
        if ($ct['nm'] == $city) continue;
        if ($count >= 10) break;
        $link      = urlencode(strtolower(str_replace(" ", "-", $ct['nm'])));
        $statename = urlencode(strtolower(str_replace(" ", "-", $st)));
      ?>
      <a href="<?= site_url("$link-packers-movers-$statename") ?>"
         class="nearby-city-pill"
         id="relatedCity-<?= $count ?>">
        <i class="bi bi-arrow-right-short"></i>
        <span><?= $ct['nm'] ?></span>
      </a>
      <?php
        $count++;
      endforeach;
      ?>
    </div>
  </div>

</aside><!-- /city-sidebar -->


