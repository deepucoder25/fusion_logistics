<body>
  <?php

  $ci =& get_instance();
  $class = strtolower($ci->router->fetch_class());
  $method = strtolower($ci->router->fetch_method());
  $segment1 = $ci->uri->segment(1);

  // Determine active tab
  $active_tab = '';
  if (empty($segment1) || $segment1 === 'home' || $class === 'home') {
      $active_tab = 'home';
  } elseif ($class === 'about' || in_array($segment1, ['about-us', 'why-choose-us', 'faqs', 'testimonials'])) {
      $active_tab = 'about';
  } elseif ($class === 'services' || in_array($segment1, ['our-services', 'home-shifting', 'office-relocation', 'car-transportation', 'bike-transportation', 'warehouse-and-storage', 'domestic-relocation', 'international-shifting', 'intercity-shifting', 'local-shifting', 'logistic-services', 'pet-relocation', 'home-relocation', 'storage-services', 'car-transportation-service'])) {
      $active_tab = 'services';
  } elseif ($class === 'packers_movers' || $segment1 === 'our-branches') {
      $active_tab = 'locations';
  } elseif ($class === 'blog' || $segment1 === 'blog') {
      $active_tab = 'blog';
  } elseif ($class === 'contacts' || $segment1 === 'contact-us') {
      $active_tab = 'contact';
  }
  ?>

  <!-- Slim Top Bar -->
  <div class="top-bar">
    <div class="container">
      <!-- Desktop Top Bar -->
      <div class="top-bar-desktop d-none d-lg-flex justify-content-between align-items-center">
        <!-- Left Side: Email & Phone -->
        <div class="top-bar-left d-flex align-items-center gap-3">
          <a href="<?= $mailhtml ?>" class="d-flex align-items-center gap-2">
            <i class="bi bi-envelope"></i> <span><?= $mail ?></span>
          </a>
          <span class="divider-line">|</span>
          <a href="<?= $phonehtml ?>" class="d-flex align-items-center gap-2">
            <i class="bi bi-telephone"></i> <span><?= $phone ?></span>
          </a>
        </div>
        
        <!-- Middle-Left: Trust Badge & Happy Customers -->
        <div class="top-bar-middle d-flex align-items-center gap-3">
          <span class="top-badge-text d-flex align-items-center gap-2">
            <i class="bi bi-shield-check text-primary-light"></i> <span>Verified & Trusted</span>
          </span>
          <span class="divider-line">|</span>
          <span class="top-badge-text d-flex align-items-center gap-2">
            <i class="bi bi-people"></i> <span><?= $happyClients ?> Happy Customers</span>
          </span>
        </div>
        
        <!-- Right Side: Offer & Reviews Badges -->
        <div class="top-bar-right d-flex align-items-center gap-2">
          <span class="top-badge-pill highlight-offer">
            <i class="bi bi-lightning-fill text-warning"></i> 10% OFF ON YOUR FIRST MOVE
          </span>
          <span class="top-badge-pill highlight-rating">
            <i class="bi bi-star-fill text-warning"></i> <?= $ratingValue ?> Google Reviews
          </span>
        </div>
      </div>

      <!-- Mobile Top Bar -->
      <div class="top-bar-mobile d-flex d-lg-none flex-column gap-2 py-1">
        <!-- Row 1: Contact Info -->
        <div class="d-flex justify-content-center align-items-center gap-3">
          <a href="<?= $mailhtml ?>" class="d-flex align-items-center gap-1">
            <i class="bi bi-envelope"></i> <span><?= $mail ?></span>
          </a>
          <span class="divider-line">|</span>
          <a href="<?= $phonehtml ?>" class="d-flex align-items-center gap-1">
            <i class="bi bi-telephone"></i> <span><?= $phone ?></span>
          </a>
        </div>
        <!-- Row 2: Offer & Google Reviews -->
        <div class="d-flex justify-content-center align-items-center gap-2">
          <span class="top-badge-pill highlight-offer">
            <i class="bi bi-lightning-fill text-warning"></i> 10% OFF ON YOUR FIRST MOVE
          </span>
          <span class="top-badge-pill highlight-rating">
            <i class="bi bi-star-fill text-warning"></i> <?= $ratingValue ?> Google Reviews
          </span>
        </div>
      </div>
    </div>
  </div>

  <!-- Main Sticky Header -->
  <header class="main-header" id="mainHeader">
    <div class="container d-flex align-items-center justify-content-between">
      <!-- Brand Logo -->
      <a href="<?= site_url() ?>" class="brand-wrap">
        <img src="<?= base_url() ?>assets/images/logo/logo.png" alt="<?= $company3 ?> Packers and Movers" class="brand-logo" loading="lazy">
      </a>

      <!-- Desktop Navigation Menu -->
      <nav class="desktop-nav d-none d-lg-flex align-items-center gap-4">
        <a href="<?= site_url() ?>" class="nav-link<?= $active_tab === 'home' ? ' active' : '' ?>">Home</a>
        
        <!-- About Us Dropdown -->
        <div class="nav-item dropdown">
          <a href="<?= site_url('about-us') ?>" class="nav-link dropdown-toggle<?= $active_tab === 'about' ? ' active' : '' ?>">About Us <i class="bi bi-chevron-down ms-1"></i></a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item<?= $segment1 === 'about-us' ? ' active' : '' ?>" href="<?= site_url('about-us') ?>">About Us</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'why-choose-us' ? ' active' : '' ?>" href="<?= site_url('why-choose-us') ?>">Why Choose Us</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'faqs' ? ' active' : '' ?>" href="<?= site_url('faqs') ?>">FAQ</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'testimonials' ? ' active' : '' ?>" href="<?= site_url('testimonials') ?>">Testimonial</a></li>
          </ul>
        </div>

        <!-- Services Dropdown -->
        <div class="nav-item dropdown">
          <a href="<?= site_url('our-services') ?>" class="nav-link dropdown-toggle<?= $active_tab === 'services' ? ' active' : '' ?>">Services <i class="bi bi-chevron-down ms-1"></i></a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item<?= $segment1 === 'home-shifting' ? ' active' : '' ?>" href="<?= site_url('home-shifting') ?>">Home Shifting</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'office-relocation' ? ' active' : '' ?>" href="<?= site_url('office-relocation') ?>">Office Relocation</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'car-transportation' ? ' active' : '' ?>" href="<?= site_url('car-transportation') ?>">Car Transportation</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'bike-transportation' ? ' active' : '' ?>" href="<?= site_url('bike-transportation') ?>">Bike Transportation</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'warehouse-and-storage' || $segment1 === 'storage-services' ? ' active' : '' ?>" href="<?= site_url('warehouse-and-storage') ?>">Warehouse &amp; Storage</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'domestic-relocation' ? ' active' : '' ?>" href="<?= site_url('domestic-relocation') ?>">Domestic Relocation</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'international-shifting' ? ' active' : '' ?>" href="<?= site_url('international-shifting') ?>">International Shifting</a></li>

          </ul>
        </div>

        <!-- Branches -->
        <a href="<?= site_url('our-branches') ?>" class="nav-link<?= $active_tab === 'locations' ? ' active' : '' ?>">Branches</a>
        
        <!-- Gallery -->
        <a href="<?= site_url('photo-gallery') ?>" class="nav-link<?= $active_tab === 'gallery' ? ' active' : '' ?>">Gallery</a>
        
        <!-- Contact Us -->
        <a href="<?= site_url('contact-us') ?>" class="nav-link<?= $active_tab === 'contact' ? ' active' : '' ?>">Contact Us</a>
      </nav>

      <!-- Header Action Buttons & Widgets -->
      <div class="d-flex align-items-center gap-3">
        <!-- Call Us Anytime Widget (Desktop only) -->
        <a href="<?= $phonehtml ?>" class="call-us-widget d-none d-xl-flex align-items-center gap-2">
          <div class="call-icon-wrap">
            <i class="bi bi-telephone"></i>
          </div>
          <div class="call-text-wrap d-flex flex-column">
            <span class="call-label">Call Us Anytime</span>
            <span class="call-value"><?= $phone ?></span>
          </div>
        </a>

        <!-- Get a Quote Button -->
        <a href="#" class="btn-quote-orange d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#qteModal">
          <span>Get a Quote</span>
          <span class="btn-quote-icon">
            <i class="bi bi-arrow-right-short"></i>
          </span>
        </a>

        <!-- Hamburger for Mobile -->
        <button class="hamburger d-flex d-lg-none" id="openMenu" aria-label="Open navigation menu">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
    </div>
  </header>

  <!-- Full Screen Mega Menu (overlay menu when clicking hamburger) -->
  <nav class="mega-overlay" id="megaMenu" aria-label="Main navigation">
    <button class="mega-close" id="closeMenu" aria-label="Close navigation menu">
      <i class="bi bi-x"></i>
    </button>

    <div class="mega-inner">

      <!-- Navigation Accordion -->
      <div class="mobile-nav-list">
        <!-- Home -->
        <div class="mobile-nav-item<?= $active_tab === 'home' ? ' active' : '' ?>">
          <a href="<?= site_url() ?>" class="mobile-nav-link">Home</a>
        </div>
        
        <!-- About Us -->
        <div class="mobile-nav-item mobile-dropdown<?= $active_tab === 'about' ? ' active' : '' ?>">
          <button class="mobile-nav-link mobile-dropdown-toggle">
            <span>About Us</span>
            <i class="bi bi-chevron-down toggle-icon"></i>
          </button>
          <div class="mobile-dropdown-menu">
            <a href="<?= site_url('about-us') ?>" class="<?= $segment1 === 'about-us' ? 'active' : '' ?>">About Us</a>
            <a href="<?= site_url('why-choose-us') ?>" class="<?= $segment1 === 'why-choose-us' ? 'active' : '' ?>">Why Choose Us</a>
            <a href="<?= site_url('faqs') ?>" class="<?= $segment1 === 'faqs' ? 'active' : '' ?>">FAQ</a>
            <a href="<?= site_url('testimonials') ?>" class="<?= $segment1 === 'testimonials' ? 'active' : '' ?>">Testimonial</a>
          </div>
        </div>

        <!-- Services -->
        <div class="mobile-nav-item mobile-dropdown<?= $active_tab === 'services' ? ' active' : '' ?>">
          <button class="mobile-nav-link mobile-dropdown-toggle">
            <span>Services</span>
            <i class="bi bi-chevron-down toggle-icon"></i>
          </button>
          <div class="mobile-dropdown-menu">
            <a href="<?= site_url('home-shifting') ?>" class="<?= $segment1 === 'home-shifting' ? 'active' : '' ?>">Home Shifting</a>
            <a href="<?= site_url('office-relocation') ?>" class="<?= $segment1 === 'office-relocation' ? 'active' : '' ?>">Office Relocation</a>
            <a href="<?= site_url('car-transportation') ?>" class="<?= $segment1 === 'car-transportation' ? 'active' : '' ?>">Car Transportation</a>
            <a href="<?= site_url('bike-transportation') ?>" class="<?= $segment1 === 'bike-transportation' ? 'active' : '' ?>">Bike Transportation</a>
            <a href="<?= site_url('warehouse-and-storage') ?>" class="<?= $segment1 === 'warehouse-and-storage' || $segment1 === 'storage-services' ? 'active' : '' ?>">Warehouse &amp; Storage</a>
            <a href="<?= site_url('domestic-relocation') ?>" class="<?= $segment1 === 'domestic-relocation' ? 'active' : '' ?>">Domestic Relocation</a>
            <a href="<?= site_url('international-shifting') ?>" class="<?= $segment1 === 'international-shifting' ? 'active' : '' ?>">International Shifting</a>

          </div>
        </div>

        <!-- Locations (Branches) -->
        <div class="mobile-nav-item<?= $active_tab === 'locations' ? ' active' : '' ?>">
          <a href="<?= site_url('our-branches') ?>" class="mobile-nav-link">Locations (Branches)</a>
        </div>
        
        <!-- Contact Us -->
        <div class="mobile-nav-item<?= $active_tab === 'contact' ? ' active' : '' ?>">
          <a href="<?= site_url('contact-us') ?>" class="mobile-nav-link">Contact Us</a>
        </div>
      </div>

      <!-- Secondary Links -->
      <div class="mobile-sec-links">
        <a href="<?= site_url('photo-gallery') ?>">Gallery</a>
        <a href="<?= site_url('reviews') ?>">Reviews</a>
        <a href="<?= site_url('privacy-policy') ?>">Privacy Policy</a>
        <a href="<?= site_url('terms-and-conditions') ?>">Terms &amp; Conditions</a>
        <a href="<?= $megaWhatsappLink ?>" target="_blank" rel="noopener">WhatsApp</a>
      </div>
    </div>
  </nav>

  <script>
    const openMenu = document.getElementById('openMenu');
    const closeMenu = document.getElementById('closeMenu');
    const megaMenu = document.getElementById('megaMenu');
    const body = document.body;
    const mainHeader = document.getElementById('mainHeader');

    openMenu.addEventListener('click', () => {
      megaMenu.classList.add('active');
      body.classList.add('menu-open');
    });

    closeMenu.addEventListener('click', () => {
      megaMenu.classList.remove('active');
      body.classList.remove('menu-open');
    });

    // Toggle mobile dropdown accordions
    document.querySelectorAll('.mobile-dropdown-toggle').forEach(button => {
      button.addEventListener('click', (e) => {
        e.preventDefault();
        const parent = button.closest('.mobile-nav-item');
        
        // Close other open dropdowns (accordion style)
        document.querySelectorAll('.mobile-nav-item.mobile-dropdown').forEach(item => {
          if (item !== parent) {
            item.classList.remove('active');
          }
        });

        parent.classList.toggle('active');
      });
    });

    // Close menu when clicking on backdrop overlay
    megaMenu.addEventListener('click', (e) => {
      if (e.target === megaMenu) {
        megaMenu.classList.remove('active');
        body.classList.remove('menu-open');
      }
    });

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') {
        megaMenu.classList.remove('active');
        body.classList.remove('menu-open');
      }
    });

    window.addEventListener('scroll', () => {
      mainHeader.classList.toggle('scrolled', window.scrollY > 20);
    });
  </script>
