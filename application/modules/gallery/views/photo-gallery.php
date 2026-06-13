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
                <span class="bc-nav-current">Photo Gallery</span>
            </nav>
        </div>
        
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-8 col-12">
                <h1 class="bc-main-title fw-extrabold mb-3">Photo Gallery</h1>
                <p class="bc-desc mb-0">Explore visual highlights of our packaging quality, warehouse storage, specialized container carriers, and relocation operations.</p>
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
<?php
$galleryItems = [
    [
        'fallback_img' => 'assets/images/gallery/img1.jpg',
        'alt' => 'Professional packing of household furniture with bubble wrap'
    ],
    [
        'fallback_img' => 'assets/images/gallery/img2.jpg',
        'alt' => 'Logistics workers loading packed boxes into a relocation truck'
    ],
    [
        'fallback_img' => 'assets/images/gallery/img3.jpg',
        'alt' => 'Logistics container truck carrying goods safely on the highway'
    ],
    [
        'fallback_img' => 'assets/images/gallery/img4.jpg',
        'alt' => 'Secure warehouse storage facility with stacked wooden crates'
    ],
    [
        'fallback_img' => 'assets/images/gallery/img5.jpg',
        'alt' => 'Professional corporate office relocation and desk setup setup in progress'
    ],
    [
        'fallback_img' => 'assets/images/gallery/img6.jpg',
        'alt' => 'Close up of worker wrapping household furniture with stretch wrap'
    ],
    [
        'fallback_img' => 'assets/images/gallery/img7.jpg',
        'alt' => 'Safe delivery person delivering packed cargo boxes at customer doorstep'
    ],
    [
        'fallback_img' => 'assets/images/gallery/img8.jpg',
        'alt' => 'Workers carefully packing fragile television screen with protective foam sheets'
    ],
    [
        'fallback_img' => 'assets/images/gallery/img9.jpg',
        'alt' => 'Packing household products into heavy-duty corrugated cartons for safe shifting'
    ],
    [
        'fallback_img' => 'assets/images/gallery/img10.jpg',
        'alt' => 'Packed goods wrapped with bubble sheets and strapping tape ready for transport loading'
    ],
    [
        'fallback_img' => 'assets/images/gallery/img11.jpg',
        'alt' => 'Happy family moving and shifting to new home smiling with packers movers'
    ],
    [
        'fallback_img' => 'assets/images/gallery/img12.jpg',
        'alt' => 'Happy family moving and shifting to new home smiling with packers movers'
    ],
];
?>

<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-12">
                <div class="gallery-container px-2">
                    
                    <!-- Title & Subtitle -->
                    <h2 class="gallery-main-title mb-2">Photo Gallery</h2>
                    <p class="gallery-subtitle mb-4">Explore our relocation operations in action. From careful packing to safe delivery, we ensure a smooth and hassle-free moving experience.</p>
                    
                    <!-- Photo Grid (3 columns in 1 row) -->
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4" id="galleryGrid">
                        <?php foreach ($galleryItems as $item): ?>
                            <?php
                            $imgSrc = base_url($item['fallback_img']);
                            ?>
                            <div class="col gallery-item-col">
                                <div class="gallery-card-modern">
                                    <div class="gallery-card-img-wrap">
                                        <img loading="lazy" src="<?= $imgSrc ?>" class="gallery-card-img" alt="<?= $item['alt'] ?>">
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    
                    <!-- Load More Button -->
                    <div class="text-center mt-5">
                        <button class="btn btn-load-more" id="loadMoreBtn">
                            <i class="bi bi-grid-3x3-gap-fill"></i>
                            <span>Load More Photos</span>
                        </button>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Client side pagination logic -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const galleryItems = document.querySelectorAll('.gallery-item-col');
    const loadMoreBtn = document.getElementById('loadMoreBtn');
    
    let visibleLimit = 6; // Show 6 photos initially
    
    function updateGallery() {
        let count = 0;
        galleryItems.forEach(item => {
            count++;
            if (count <= visibleLimit) {
                item.classList.remove('hidden-by-limit');
            } else {
                item.classList.add('hidden-by-limit');
            }
        });
        
        // Show or hide the Load More button
        if (galleryItems.length > visibleLimit) {
            loadMoreBtn.style.display = 'inline-flex';
        } else {
            loadMoreBtn.style.display = 'none';
        }
    }
    
    // Load More button click handler
    loadMoreBtn.addEventListener('click', function() {
        visibleLimit += 6; // Reveal next 6 items
        updateGallery();
    });
    
    // Initialize gallery layout
    updateGallery();
});
</script>

