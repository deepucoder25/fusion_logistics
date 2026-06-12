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
                <span class="bc-nav-current">Contact Us</span>
            </nav>
        </div>
        
        <div class="row align-items-center g-4">
            <div class="col-lg-7 col-md-8 col-12">
                <h1 class="bc-main-title fw-extrabold mb-3">Contact Us</h1>
                <p class="bc-desc mb-0">Get in touch with <?= $company3 ?> Packers and Movers. We are here to help you 24/7 with your relocation needs.</p>
            </div>
            <!-- Right side column kept empty to let the background image showcase the truck & workers -->
            <div class="col-lg-5 col-md-4 d-none d-md-block"></div>
        </div>

        <!-- Horizontal Features Row -->
        <div class="row bc-features-row mt-5 pt-3">
            <div class="col-lg-2 col-md-3 col-6 feature-item-col">
                <div class="bc-feature-item d-flex align-items-center">
                    <div class="bc-feature-icon">
                        <i class="bi bi-shield-fill-check"></i>
                    </div>
                    <div class="bc-feature-text">
                        <span class="text-line-1">Safe &amp; Secure</span>
                        <span class="text-line-2">Packing</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6 feature-item-col">
                <div class="bc-feature-item d-flex align-items-center">
                    <div class="bc-feature-icon">
                        <i class="bi bi-clock-fill"></i>
                    </div>
                    <div class="bc-feature-text">
                        <span class="text-line-1">On-Time</span>
                        <span class="text-line-2">Delivery</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6 feature-item-col">
                <div class="bc-feature-item d-flex align-items-center">
                    <div class="bc-feature-icon">
                        <i class="bi bi-truck"></i>
                    </div>
                    <div class="bc-feature-text">
                        <span class="text-line-1">Professional</span>
                        <span class="text-line-2">Movers</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6 feature-item-col">
                <div class="bc-feature-item d-flex align-items-center">
                    <div class="bc-feature-icon">
                        <i class="bi bi-headset"></i>
                    </div>
                    <div class="bc-feature-text">
                        <span class="text-line-1">24/7 Customer</span>
                        <span class="text-line-2">Support</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modern Contact Booklet Section -->
<section class="contact-section py-5 bg-light">
    <div class="container my-5">
        <div class="contact-booklet position-relative shadow-lg rounded-5 overflow-hidden bg-white">
            
            <!-- Center Vertical Divider (Hidden on mobile/tablet) -->
            <div class="contact-divider d-none d-lg-flex">
                <div class="divider-circle-outer">
                    <div class="divider-circle-inner">
                        <i class="bi bi-headset"></i>
                    </div>
                </div>
            </div>

            <div class="row g-0">
                <!-- Left Column: Info Panel -->
                <div class="col-lg-5 col-12 info-card-col">
                    <div class="contact-info-panel h-100 p-4 p-md-5 position-relative">
                        <h3 class="fw-bold mb-3 contact-title-primary">Get In Touch</h3>
                        <p class="text-muted mb-5">Fill out the form, and our logistics experts will analyze your requirements and get back to you within 30 minutes.</p>
                        
                        <!-- Detailed Info Rows -->
                        <div class="info-block mb-4">
                            <div class="info-icon-square">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div class="info-block-text">
                                <span class="info-label">Head Office</span>
                                <p class="info-value"><?= $address ?></p>
                            </div>
                        </div>
                        
                        <div class="info-block mb-4">
                            <div class="info-icon-square">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div class="info-block-text">
                                <span class="info-label">Call Us 24/7</span>
                                <p class="info-value"><a href="<?= $phonehtml ?>"><?= $phone ?></a></p>
                            </div>
                        </div>
                        
                        <div class="info-block mb-5">
                            <div class="info-icon-square">
                                <i class="bi bi-envelope-fill"></i>
                            </div>
                            <div class="info-block-text">
                                <span class="info-label">Email Support</span>
                                <p class="info-value"><a href="<?= $mailhtml ?>"><?= $mail ?></a></p>
                            </div>
                        </div>

                        <!-- Operational Badge -->
                        <div class="operational-badge d-flex align-items-center">
                            <div class="pulse-indicator"></div>
                            <span class="badge-text text-uppercase fw-bold">OPERATIONAL &amp; SAFE</span>
                        </div>
                    </div>
                </div>
                
                <!-- Right Column: Form Panel -->
                <div class="col-lg-7 col-12 form-card-col">
                    <div class="contact-form-panel p-4 p-md-5 bg-white h-100">
                        <h3 class="fw-bold mb-2 contact-title-primary">Send Us A Message</h3>
                        <p class="text-muted mb-4">Your safety and convenience are our priority.</p>
                        
                        <form id="contactform" class="ajax-form" data-url="<?php echo site_url('contacts/contact') ?>" data-result="contactformresults" onsubmit="return false;">
                            <div class="row g-4">
                                <!-- Your Name -->
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold text-dark">Your Name *</label>
                                    <div class="input-group-custom">
                                        <span class="input-icon"><i class="bi bi-person"></i></span>
                                        <input type="text" name="name" class="form-control contact-input-rounded" placeholder="John Doe">
                                    </div>
                                </div>
                                
                                <!-- Phone Number -->
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold text-dark">Phone Number *</label>
                                    <div class="input-group-custom">
                                        <span class="input-icon"><i class="bi bi-telephone"></i></span>
                                        <input type="tel" name="phone" class="form-control contact-input-rounded" placeholder="Mobile Number">
                                    </div>
                                </div>
                                
                                <!-- Email Address -->
                                <div class="col-12">
                                    <label class="form-label fw-semibold text-dark">Email Address</label>
                                    <div class="input-group-custom">
                                        <span class="input-icon"><i class="bi bi-envelope"></i></span>
                                        <input type="email" name="email" class="form-control contact-input-rounded" placeholder="hello@example.com">
                                    </div>
                                </div>
                                
                                <!-- Your Message -->
                                <div class="col-12">
                                    <label class="form-label fw-semibold text-dark">Your Message</label>
                                    <div class="input-group-custom align-items-start">
                                        <span class="input-icon pt-3"><i class="bi bi-chat-left-dots"></i></span>
                                        <textarea name="message" class="form-control contact-input-rounded" rows="5" placeholder="How can we help you?"></textarea>
                                    </div>
                                </div>
                                
                                <!-- Submit Button -->
                                <div class="col-12 mt-4">
                                    <button type="submit" class="theme-btn w-100 py-3 contact-btn-rounded">
                                        <span>Send Message</span>
                                        <span class="btn-icon"><i class="bi bi-send-fill"></i></span>
                                    </button>
                                </div>
                            </div>
                            <div id="contactformresults" class="mt-3"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
