<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$steps = [
    [
        'num' => '01',
        'title' => 'Enquiry & Consultation',
        'desc' => 'Share your moving details and get a free consultation from our experts.',
        'svg' => '
            <svg class="process-svg" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                <path d="M52 32c0-11.046-9.85-20-22-20S8 20.954 8 32c0 4.28 1.48 8.24 4 11.4V52l9.08-4.54C23.9 47.88 26.9 48 30 48c12.15 0 22-8.954 22-20z" fill="none" stroke="var(--primary-color)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                <circle cx="22" cy="32" r="3.5" fill="var(--accent-color)"/>
                <circle cx="30" cy="32" r="3.5" fill="var(--accent-color)"/>
                <circle cx="38" cy="32" r="3.5" fill="var(--accent-color)"/>
            </svg>
        '
    ],
    [
        'num' => '02',
        'title' => 'Pre-Move Survey',
        'desc' => 'We assess your requirements and provide a transparent, no-obligation quote.',
        'svg' => '
            <svg class="process-svg" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                <rect x="18" y="14" width="28" height="38" rx="3" fill="none" stroke="var(--primary-color)" stroke-width="2.5" stroke-linejoin="round"/>
                <path d="M26 8h12v6H26z" fill="none" stroke="var(--primary-color)" stroke-width="2.5" stroke-linejoin="round"/>
                <line x1="28" y1="24" x2="40" y2="24" stroke="var(--primary-color)" stroke-width="2.5" stroke-linecap="round"/>
                <line x1="28" y1="32" x2="40" y2="32" stroke="var(--primary-color)" stroke-width="2.5" stroke-linecap="round"/>
                <line x1="28" y1="40" x2="36" y2="40" stroke="var(--primary-color)" stroke-width="2.5" stroke-linecap="round"/>
                <circle cx="24" cy="24" r="2.5" fill="var(--accent-color)"/>
                <circle cx="24" cy="32" r="2.5" fill="var(--accent-color)"/>
                <circle cx="24" cy="40" r="2.5" fill="var(--accent-color)"/>
                <path d="M42 42l4-4 2 2-4 4z" fill="var(--accent-color)"/>
            </svg>
        '
    ],
    [
        'num' => '03',
        'title' => 'Packing & Preparation',
        'desc' => 'Our team uses premium packing materials and techniques to ensure maximum safety.',
        'svg' => '
            <svg class="process-svg" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                <path d="M32 8l20 10v24L32 52 12 42V18z" fill="none" stroke="var(--primary-color)" stroke-width="2.5" stroke-linejoin="round"/>
                <path d="M12 18l20 10 20-10" fill="none" stroke="var(--primary-color)" stroke-width="2.5" stroke-linejoin="round"/>
                <line x1="32" y1="28" x2="32" y2="52" stroke="var(--primary-color)" stroke-width="2.5"/>
                <path d="M24 24l8 4 8-4" fill="none" stroke="var(--accent-color)" stroke-width="2.5" stroke-linecap="round"/>
            </svg>
        '
    ],
    [
        'num' => '04',
        'title' => 'Safe Transportation',
        'desc' => 'Your belongings are transported securely with real-time tracking and utmost care.',
        'svg' => '
            <svg class="process-svg" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                <rect x="8" y="16" width="34" height="26" rx="2" fill="none" stroke="var(--primary-color)" stroke-width="2.5" stroke-linejoin="round"/>
                <path d="M42 22h8l8 8v12H42z" fill="none" stroke="var(--primary-color)" stroke-width="2.5" stroke-linejoin="round"/>
                <circle cx="20" cy="48" r="6" fill="none" stroke="var(--primary-color)" stroke-width="2.5"/>
                <circle cx="20" cy="48" r="2.5" fill="var(--accent-color)"/>
                <circle cx="48" cy="48" r="6" fill="none" stroke="var(--primary-color)" stroke-width="2.5"/>
                <circle cx="48" cy="48" r="2.5" fill="var(--accent-color)"/>
                <line x1="2" y1="24" x2="6" y2="24" stroke="var(--accent-color)" stroke-width="2.5" stroke-linecap="round"/>
                <line x1="0" y1="30" x2="5" y2="30" stroke="var(--accent-color)" stroke-width="2.5" stroke-linecap="round"/>
                <line x1="3" y1="36" x2="6" y2="36" stroke="var(--accent-color)" stroke-width="2.5" stroke-linecap="round"/>
            </svg>
        '
    ],
    [
        'num' => '05',
        'title' => 'Delivery & Unloading',
        'desc' => 'We deliver and unload your items carefully at your new location.',
        'svg' => '
            <svg class="process-svg" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                <path d="M32 8c-9.94 0-18 8.06-18 18 0 12.6 18 30 18 30s18-17.4 18-30c0-9.94-8.06-18-18-18z" fill="none" stroke="var(--primary-color)" stroke-width="2.5" stroke-linejoin="round"/>
                <circle cx="32" cy="26" r="6" fill="none" stroke="var(--primary-color)" stroke-width="2.5"/>
                <circle cx="32" cy="26" r="2.5" fill="var(--accent-color)"/>
                <ellipse cx="32" cy="56" rx="10" ry="2" fill="none" stroke="var(--accent-color)" stroke-width="2" opacity="0.6"/>
            </svg>
        '
    ],
    [
        'num' => '06',
        'title' => 'Setup & Satisfaction',
        'desc' => 'We help with setup and ensure you’re 100% satisfied with our service.',
        'svg' => '
            <svg class="process-svg" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                <path d="M32 8L10 26v26a3 3 0 0 0 3 3h38a3 3 0 0 0 3-3V26L32 8z" fill="none" stroke="var(--primary-color)" stroke-width="2.5" stroke-linejoin="round"/>
                <path d="M22 55V35h20v20" fill="none" stroke="var(--primary-color)" stroke-width="2.5" stroke-linejoin="round"/>
                <polyline points="26 26 30 30 38 22" fill="none" stroke="var(--accent-color)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        '
    ]
];
?>
<section class="process-section py-5">
    <div class="container position-relative">
        <div class="text-center mb-5">
            <div class="process-subheading-pill mb-3">
                <i class="bi bi-gear text-accent"></i>
                <span class="sub-text font-weight-bold text-uppercase">Our Process</span>
            </div>
            <h2 class="services-main-title mb-4">
                Simple Process. <span class="text-accent">Seamless Move.</span>
            </h2>
            <p class="services-subtitle text-center mx-auto mb-0">
                We follow a streamlined process to ensure your move is <strong>smooth, safe, and stress-free</strong> from start to finish.
            </p>
        </div>
        <div class="row g-4 justify-content-center mt-2 process-steps-row">
            <?php foreach ($steps as $index => $step): ?>
                <div class="col-xl-2 col-md-4 col-sm-6 col-6 text-center process-step-col" ontouchstart="">
                    <?php if ($index < 5): ?>
                        <div class="process-step-arrow d-none d-xl-flex">
                            <i class="bi bi-chevron-right"></i>
                        </div>
                    <?php endif; ?>
                    <div class="process-step-card d-flex flex-column align-items-center">
                        <div class="process-step-circle-outer mb-4">
                            <div class="process-step-circle">
                                <?= $step['svg'] ?>
                            </div>
                            <span class="process-step-num"><?= $step['num'] ?></span>
                        </div>
                        <h3 class="process-step-title"><?= htmlspecialchars($step['title']) ?></h3>
                        <p class="process-step-desc mt-2"><?= htmlspecialchars($step['desc']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
