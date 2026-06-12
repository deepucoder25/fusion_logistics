<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<main class="main">
    <!-- Breadcrumbs Section -->
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
                    <span class="bc-nav-current">Our Blog</span>
                </nav>
            </div>
            
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-8 col-12">
                    <h1 class="bc-main-title fw-extrabold mb-3">Our Blog</h1>
                    <p class="bc-desc mb-0">Stay updated with the latest news, tips, and insights on packing and moving.</p>
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
                            <span class="text-line-1">Since <?= isset($startYear) ? $startYear : '1986' ?></span>
                            <span class="text-line-2"><?= isset($experience) ? $experience : '40+' ?> Years Legacy</span>
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

    <section class="blog-section py-5 bg-light">
        <div class="container">
            <!-- Section Heading -->
            <div class="text-center mb-5">
                <h2 class="fw-bold">
                    Our Latest <span class="blog-title-highlight">News & Blog</span>
                </h2>
                <p class="text-muted">
                    Stay updated with our latest packing and moving insights.
                </p>
            </div>

            <div class="row g-4">
                <?php
                $schemaData = []; // Initialize the schema data array

                if (!empty($blogs)):
                    foreach ($blogs as $b_arr):
                        $b = (object) $b_arr;
                        $custom_slug = !empty($b->slug) ? $b->slug : rtrim(str_replace("--", "-", urlencode(str_replace(" ", "-", str_replace(",", " ", $b->title)))), "-");
                        $link = strtolower(site_url('blog/' . $custom_slug));

                        $image_path = FCPATH . 'uploads/blogs/' . $b->image;
                        $img = ($b->image && file_exists($image_path)) ? base_url("uploads/blogs/{$b->image}") : base_url('assets/images/about/packers_movers.jpg');

                        // Handle date parsing
                        $created_at = isset($b->created_at) ? $b->created_at : date('Y-m-d H:i:s');
                        $day = date('d', strtotime($created_at));
                        $month = date('M', strtotime($created_at));

                        $schemaData[] = [
                            "@context" => "https://schema.org",
                            "@type" => "BlogPosting",
                            "headline" => $b->title,
                            "image" => $img,
                            "datePublished" => $created_at,
                            "author" => [
                                "@type" => "Person",
                                "name" => "Admin"
                            ],
                            "publisher" => [
                                "@type" => "Organization",
                                "name" => isset($company3) ? $company3 : 'MyCompany',
                                "logo" => [
                                    "@type" => "ImageObject",
                                    "url" => base_url('assets/images/logo/logo.png')
                                ]
                            ],
                            "description" => substr(strip_tags($b->description), 0, 160) . '...'
                        ];
                    ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden blog-card blog-transition-hover">
                            <div class="position-relative">
                                <a href="<?= $link ?>">
                                    <img src="<?= $img ?>" class="card-img-top blog-card-img" alt="<?= htmlspecialchars($b->title) ?>">
                                </a>
                                <div class="position-absolute top-0 end-0 bg-warning text-dark fw-bold px-3 py-2 rounded-bottom-start shadow-sm blog-date-badge">
                                    <?= $day ?> <?= $month ?>
                                </div>
                            </div>
                            <div class="card-body p-4 d-flex flex-column">
                                <div class="d-flex align-items-center gap-3 mb-3 text-muted small">
                                    <span class="d-flex align-items-center gap-1"><i class="bi bi-person-circle blog-icon-primary"></i> By Admin</span>
                                    <span class="d-flex align-items-center gap-1"><i class="bi bi-patch-check-fill text-success"></i> Verified</span>
                                </div>
                                <h5 class="card-title fw-bold mb-3">
                                    <a href="<?= $link ?>" class="text-dark text-decoration-none blog-title-link"><?= $b->title ?></a>
                                </h5>
                                <p class="card-text text-muted small mb-4 flex-grow-1">
                                    <?= substr(strip_tags($b->description), 0, 110) ?>...
                                </p>
                                <div>
                                    <a href="<?= $link ?>" class="btn btn-sm px-4 rounded-pill fw-bold blog-btn-primary">
                                        Read More <i class="bi bi-arrow-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="col-12 text-center">
                        <p class="p-5 bg-white rounded-4 shadow-sm text-muted">No blogs published yet. Check back soon!</p>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Pagination -->
            <div class="row mt-5">
                <div class="col-12 d-flex justify-content-center">
                    <?= $this->pagination->create_links(); ?>
                </div>
            </div>
        </div>
    </section>
</main>  


<script type="application/ld+json">
<?= json_encode($schemaData, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
</script>
