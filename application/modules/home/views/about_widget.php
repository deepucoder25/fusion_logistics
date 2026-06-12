<section class="about-section py-5 position-relative">
    <div class="about-decor decor-top-right d-none d-md-block"></div>
    <div class="about-decor decor-bottom-left d-none d-md-block"></div>
    <div class="values-dots-pattern d-none d-lg-block"></div>
    
    <div class="container position-relative z-2">
        <!-- About Content and Image Row -->
        <div class="row align-items-center g-5 mb-5">
            <!-- Left Side: Content Details -->
            <div class="col-lg-6 col-12">
                <div class="about-content">
                    <div class="about-subheading d-flex align-items-center mb-3">
                        <span class="sub-line"></span>
                        <span class="sub-text">ABOUT US</span>
                        <span class="sub-line"></span>
                    </div>

                    <h2 class="about-main-title mb-4">
                        Delivering More Than <span class="text-accent">Just Shipments</span>
                    </h2>

                    <p class="about-description mb-4">
                        At <?= $company3 ?>, we believe in delivering trust, efficiency, and excellence with every shipment. With a strong network, advanced technology, and a customer-first approach, we ensure your goods reach their destination safely and on time.
                    </p>

                    <!-- Features Row -->
                    <div class="row g-3">
                        <div class="col-md-4 col-12">
                            <div class="about-mini-feature">
                                <div class="mini-icon-wrap">
                                    <i class="bi bi-people-fill"></i>
                                </div>
                                <div class="mini-text-wrap">
                                    <h4 class="mini-title">Customer First</h4>
                                    <p class="mini-desc">We prioritize your needs and deliver beyond expectations.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="about-mini-feature">
                                <div class="mini-icon-wrap">
                                    <i class="bi bi-shield-fill-check"></i>
                                </div>
                                <div class="mini-text-wrap">
                                    <h4 class="mini-title">Safe & Secure</h4>
                                    <p class="mini-desc">Your goods are protected with the highest standards.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="about-mini-feature">
                                <div class="mini-icon-wrap">
                                    <i class="bi bi-clock-fill"></i>
                                </div>
                                <div class="mini-text-wrap">
                                    <h4 class="mini-title">On-Time Delivery</h4>
                                    <p class="mini-desc">We value time and ensure prompt deliveries.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Image Showcase -->
            <div class="col-lg-6 col-12">
                <div class="about-image-wrap position-relative">
                    <img src="<?= base_url('assets/images/home_modules/about_showcase.jpg') ?>" 
                         alt="Reliable Logistics Service - <?= $company3 ?>" 
                         class="about-img img-fluid shadow-lg" 
                         loading="lazy">
                    
                    <!-- Floating Experience Badge -->
                    <div class="about-experience-badge shadow-lg">
                        <div class="badge-icon-wrap">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <div class="badge-text-wrap">
                            <span class="badge-number"><?= $experience ?> Years of</span>
                            <span class="badge-label">Logistics Excellence</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Counter Card Banner -->
        <div class="about-counter-card py-4 px-3 mb-5">
            <div class="row align-items-center text-center">
                <div class="col-lg-3 col-sm-6 col-6 counter-col">
                    <div class="counter-item">
                        <div class="counter-icon-wrap">
                            <i class="bi bi-box-seam-fill"></i>
                        </div>
                        <div class="counter-text-wrap">
                            <h3 class="counter-number"><?= $successfulMoves ?></h3>
                            <p class="counter-label">Shipments Delivered</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-6 counter-col">
                    <div class="counter-item">
                        <div class="counter-icon-wrap">
                            <i class="bi bi-globe"></i>
                        </div>
                        <div class="counter-text-wrap">
                            <h3 class="counter-number">500+</h3>
                            <p class="counter-label">Cities Covered</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-6 counter-col">
                    <div class="counter-item">
                        <div class="counter-icon-wrap">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <div class="counter-text-wrap">
                            <h3 class="counter-number"><?= $happyClients ?></h3>
                            <p class="counter-label">Happy Clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-6 counter-col">
                    <div class="counter-item">
                        <div class="counter-icon-wrap">
                            <i class="bi bi-award-fill"></i>
                        </div>
                        <div class="counter-text-wrap">
                            <h3 class="counter-number">99.5%</h3>
                            <p class="counter-label">On-Time Delivery</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- OUR VALUES Section -->
        <div class="values-section mt-5 pt-3">
            <div class="values-header text-center mb-5">
                <div class="about-subheading d-flex align-items-center justify-content-center mb-3">
                    <span class="sub-line"></span>
                    <span class="sub-text">OUR VALUES</span>
                    <span class="sub-line"></span>
                </div>
                <h2 class="about-main-title">The Principles That Drive Us</h2>
            </div>

            <div class="row g-4 values-row">
                <div class="col-xl col-lg-4 col-sm-6 col-12">
                    <div class="value-item">
                        <div class="value-icon-wrap">
                            <i class="bi bi-shield-fill-check"></i>
                        </div>
                        <div class="value-content">
                            <h4 class="value-title">Integrity</h4>
                            <p class="value-desc">We operate with honesty, transparency, and fairness in everything we do.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl col-lg-4 col-sm-6 col-12">
                    <div class="value-item">
                        <div class="value-icon-wrap">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <div class="value-content">
                            <h4 class="value-title">Reliability</h4>
                            <p class="value-desc">We deliver on our promises with consistency and accountability.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl col-lg-4 col-sm-6 col-12">
                    <div class="value-item">
                        <div class="value-icon-wrap">
                            <i class="bi bi-award-fill"></i>
                        </div>
                        <div class="value-content">
                            <h4 class="value-title">Excellence</h4>
                            <p class="value-desc">We strive for excellence through innovation and continuous improvement.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl col-lg-4 col-sm-6 col-12">
                    <div class="value-item">
                        <div class="value-icon-wrap">
                            <i class="bi bi-handshake-fill"></i>
                        </div>
                        <div class="value-content">
                            <h4 class="value-title">Teamwork</h4>
                            <p class="value-desc">We believe in the power of collaboration to achieve greater success.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl col-lg-4 col-sm-6 col-12">
                    <div class="value-item">
                        <div class="value-icon-wrap">
                            <i class="bi bi-leaf-fill"></i>
                        </div>
                        <div class="value-content">
                            <h4 class="value-title">Sustainability</h4>
                            <p class="value-desc">We are committed to building a greener and better tomorrow.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
