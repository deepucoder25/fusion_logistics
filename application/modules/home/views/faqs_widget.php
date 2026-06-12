<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$faqs = [
    [
        'question' => 'How can I track my shipment?',
        'answer' => 'You can track your shipment in real-time using our tracking tool on the website. Simply enter your tracking ID to get the latest updates.',
        'svg' => '
            <svg class="faq-icon-svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <g transform="translate(1, 1.5) scale(0.7)">
                    <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                    <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                    <line x1="12" y1="22.08" x2="12" y2="12"></line>
                </g>
                <circle cx="17" cy="17" r="3.5" fill="var(--white, #ffffff)"></circle>
                <line x1="19.5" y1="19.5" x2="22.5" y2="22.5"></line>
            </svg>
        '
    ],
    [
        'question' => 'What types of goods do you transport?',
        'answer' => 'We transport all types of household goods, office furniture, commercial cargo, industrial machinery, and vehicles (both cars and bikes) securely across all major routes.',
        'svg' => '
            <svg class="faq-icon-svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                <line x1="12" y1="22.08" x2="12" y2="12"></line>
            </svg>
        '
    ],
    [
        'question' => 'How long does delivery take?',
        'answer' => 'Delivery times depend on the total distance, route, and type of service chosen (express vs. standard). We provide an estimated delivery timeline with your initial quote.',
        'svg' => '
            <svg class="faq-icon-svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"></circle>
                <polyline points="12 6 12 12 16 14"></polyline>
            </svg>
        '
    ],
    [
        'question' => 'Do you provide insurance for shipments?',
        'answer' => 'Yes, we offer comprehensive transit insurance options to protect your goods against any unforeseen damage or incidents during transportation.',
        'svg' => '
            <svg class="faq-icon-svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                <polyline points="9 11 11 13 15 9"></polyline>
            </svg>
        '
    ],
    [
        'question' => 'What are your shipping charges?',
        'answer' => 'Shipping charges are calculated based on cargo volume, distance, transport vehicle type, and additional services such as professional packing or warehouse storage.',
        'svg' => '
            <svg class="faq-icon-svg" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <text x="12" y="17" font-size="18" font-weight="700" text-anchor="middle" fill="currentColor" font-family="\'Outfit\', sans-serif">₹</text>
            </svg>
        '
    ],
    [
        'question' => 'Do you offer door-to-door delivery?',
        'answer' => 'Yes, we provide full door-to-door pickup and delivery services across all major cities, ensuring a completely hassle-free moving experience from your current home to your new one.',
        'svg' => '
            <svg class="faq-icon-svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="5" y="3" width="14" height="18" rx="2" ry="2"></rect>
                <line x1="12" y1="3" x2="12" y2="21"></line>
                <circle cx="9" cy="12" r="1" fill="currentColor"></circle>
                <circle cx="15" cy="12" r="1" fill="currentColor"></circle>
            </svg>
        '
    ]
];
?>

<section class="faq-section py-5 position-relative">
    <div class="faq-dots-pattern decor-left d-none d-md-block"></div>
    <div class="faq-dots-pattern decor-right d-none d-md-block"></div>
    <div class="faq-orange-curve d-none d-lg-block"></div>

    <div class="container position-relative z-2">
        <div class="text-center mb-5">
            <div class="services-subheading d-flex align-items-center justify-content-center mb-3">
                <span class="sub-line"></span>
                <span class="sub-text text-uppercase font-weight-bold">FAQS</span>
                <span class="sub-line"></span>
            </div>
            <h2 class="services-main-title mb-4">Frequently Asked Questions</h2>
            <p class="services-subtitle text-center mx-auto mb-0">
                Find answers to common questions about our services, shipping, and support.
            </p>
        </div>

        <div class="row g-5 align-items-stretch mt-2">
            <div class="col-lg-5 col-12 d-flex">
                <div class="faq-help-card position-relative overflow-hidden w-100">
                    <div class="faq-help-content position-relative z-3">
                        <h3 class="faq-help-title mb-2">Still Have Questions?<br><span class="text-accent">We're Here to Help!</span></h3>
                        <p class="faq-help-desc mb-4">Our team is ready to assist you with any queries you may have.</p>
                        <a href="<?= base_url('contact') ?>" class="faq-help-btn btn">
                            <span>Contact Us</span>
                            <span class="btn-arrow-circle"><i class="bi bi-arrow-right-short"></i></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 col-12 position-relative">
                <div class="faq-accordion-list" id="faqAccordion">
                    <svg id="faqTimelineSvg" class="faq-timeline-svg d-none d-lg-block" width="60" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line class="timeline-line" x1="30" y1="20" x2="30" y2="500" stroke="#FFB38A" stroke-width="2" stroke-dasharray="4 8"/>
                        <?php foreach ($faqs as $index => $faq): ?>
                            <circle class="timeline-dot-<?= $index ?>" cx="30" cy="<?= 60 + $index * 100 ?>" r="5" fill="#FF6B35" />
                            <path class="timeline-path-<?= $index ?>" d="M30 <?= 60 + $index * 100 ?> H50 Q58 <?= 60 + $index * 100 ?> 58 <?= 52 + $index * 100 ?> V<?= 44 + $index * 100 ?>" stroke="#FFD8C4" stroke-width="2" fill="none" stroke-dasharray="4 4"/>
                        <?php endforeach; ?>
                    </svg>

                    <?php foreach ($faqs as $index => $faq): ?>
                        <?php $isOpen = ($index === 0); ?>
                        <div class="faq-timeline-item mb-3">
                            <div class="faq-card">
                                <div class="faq-card-header d-flex align-items-center <?= $isOpen ? '' : 'collapsed' ?>" 
                                     data-bs-toggle="collapse" 
                                     data-bs-target="#faq-collapse-<?= $index ?>" 
                                     aria-expanded="<?= $isOpen ? 'true' : 'false' ?>" 
                                     role="button">
                                    <div class="faq-icon-wrap">
                                        <?= $faq['svg'] ?>
                                    </div>
                                    <div class="faq-question-wrap flex-grow-1 ms-3">
                                        <h3 class="faq-question m-0"><?= htmlspecialchars($faq['question']) ?></h3>
                                    </div>
                                    <div class="faq-toggle-btn"></div>
                                </div>
                                
                                <div id="faq-collapse-<?= $index ?>" class="collapse <?= $isOpen ? 'show' : '' ?>" data-bs-parent="#faqAccordion">
                                    <div class="faq-card-body">
                                        <p class="faq-answer m-0"><?= htmlspecialchars($faq['answer']) ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var accordion = document.getElementById('faqAccordion');
    var svg = document.getElementById('faqTimelineSvg');
    if (!accordion || !svg) return;

    var animInterval;
    function startAnimationLoop() {
        clearInterval(animInterval);
        var startTime = Date.now();
        animInterval = setInterval(function() {
            updateTimeline();
            if (Date.now() - startTime > 400) {
                clearInterval(animInterval);
            }
        }, 16);
    }

    function updateTimeline() {
        var containerRect = accordion.getBoundingClientRect();
        var svgHeight = containerRect.height;
        svg.setAttribute('height', svgHeight);
        svg.setAttribute('viewBox', '0 0 60 ' + svgHeight);

        var line = svg.querySelector('.timeline-line');
        if (line) {
            line.setAttribute('y2', svgHeight - 20);
        }

        var items = accordion.querySelectorAll('.faq-timeline-item');
        items.forEach(function(item, index) {
            var header = item.querySelector('.faq-card-header');
            var dot = svg.querySelector('.timeline-dot-' + index);
            var path = svg.querySelector('.timeline-path-' + index);
            if (!header || !dot || !path) return;

            var headerRect = header.getBoundingClientRect();
            var cy = (headerRect.top + headerRect.height / 2) - containerRect.top;

            dot.setAttribute('cy', cy);

            var pathD = 'M30 ' + cy + ' H50 Q58 ' + cy + ' 58 ' + (cy - 8) + ' V' + (cy - 16);
            path.setAttribute('d', pathD);

            var isExpanded = header.getAttribute('aria-expanded') === 'true';
            if (isExpanded) {
                path.setAttribute('stroke', '#FF6B35');
                path.setAttribute('stroke-width', '2.5');
                path.removeAttribute('stroke-dasharray');
                dot.setAttribute('r', '7');
                dot.style.filter = 'drop-shadow(0 0 4px rgba(255, 107, 53, 0.4))';
            } else {
                path.setAttribute('stroke', '#FFD8C4');
                path.setAttribute('stroke-width', '2');
                path.setAttribute('stroke-dasharray', '4 4');
                dot.setAttribute('r', '5');
                dot.style.filter = 'none';
            }
        });
    }

    updateTimeline();
    
    var collapseElements = accordion.querySelectorAll('.collapse');
    collapseElements.forEach(function(collapseEl) {
        collapseEl.addEventListener('show.bs.collapse', startAnimationLoop);
        collapseEl.addEventListener('hide.bs.collapse', startAnimationLoop);
        collapseEl.addEventListener('shown.bs.collapse', updateTimeline);
        collapseEl.addEventListener('hidden.bs.collapse', updateTimeline);
    });

    window.addEventListener('resize', updateTimeline);
});
</script>
