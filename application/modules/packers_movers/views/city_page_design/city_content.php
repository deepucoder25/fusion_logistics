<?php
$htmlcontent = '';
$htmlcontent1 = '';
$htmlcontent2 = '';

if (!empty($city)) {
   $htmlcontent = "
        <p class='lead-text'>
            Planning a move in <strong>" . $city . "</strong>? Relocating your entire home, office, or transporting vehicles doesn't have to be a stressful task. Local traffic delays, narrow apartment society lanes, building restrictions, and unexpected weather changes can often complicate shifting.
        </p>
        <p>
            At <strong>" . $company3 . "</strong>, we deliver secure, reliable, and professionally managed packers and movers services in <strong>" . $city . "</strong>. Our highly trained loading staff, premium packaging materials, and well-maintained fleet guarantee that your assets are relocated with extreme care and zero hassle.
        </p>
    </div> <!-- Closes .city-prose -->

    <!-- Feature Pills Grid -->
    <div class='city-feature-pills'>
        <div class='city-pill'><i class='bi bi-shield-fill-check'></i> 100% Insured Shifting</div>
        <div class='city-pill'><i class='bi bi-truck'></i> GPS-Tracked Vehicles</div>
        <div class='city-pill'><i class='bi bi-box-seam-fill'></i> 5-Layer Padded Wrapping</div>
        <div class='city-pill'><i class='bi bi-clock-fill'></i> On-Time Shifting Promise</div>
    </div>
   ";

   $htmlcontent1 = "
    <!-- Shifting Dynamics Block -->
    <div class='city-content-card mt-4'>
        <h3 class='city-section-title-sm'><i class='bi bi-info-circle-fill text-primary me-2'></i>Shifting Dynamics in " . $city . "</h3>
        <p>Every city presents unique logistical challenges. In <strong>" . $city . "</strong>, residential societies often restrict commercial vehicles during specific hours, and high-rise apartments require experienced rope-handling for heavy items.</p>
        <p>Our crews are fully familiar with local society rules, permit systems, and street routes across <strong>" . $city . "</strong>. We manage all visual loading checklists, labeling sequences, and safety protocols to ensure a seamless relocation process.</p>

        <!-- Services Checklist -->
        <h3 class='city-section-title-sm mt-4'><i class='bi bi-gear-fill text-primary me-2'></i>Relocation Services Offered in " . $city . "</h3>
        <p>We provide complete packing and shifting solutions under one roof:</p>
        <ul class='city-checklist'>
            <li><i class='bi bi-check2-circle'></i> Complete Household Shifting</li>
            <li><i class='bi bi-check2-circle'></i> Safe Office Relocations</li>
            <li><i class='bi bi-check2-circle'></i> Bike &amp; Car Carrier Transport</li>
            <li><i class='bi bi-check2-circle'></i> Local and Outstation Moving</li>
            <li><i class='bi bi-check2-circle'></i> Secure Storage &amp; Warehousing</li>
            <li><i class='bi bi-check2-circle'></i> Part-load Transport Solutions</li>
        </ul>
    </div>
   ";

   $htmlcontent2 = "
    <!-- Professional Moving Care -->
    <div class='city-content-card mt-4 mb-4'>
        <h3 class='city-section-title-sm'><i class='bi bi-patch-check-fill text-primary me-2'></i>The Professional Shifting Advantage</h3>
        <p>Opting for professional movers ensures that your delicate glassware, electronic items, and large furniture receive appropriate care. We pack fragile kitchenware in customized cardboard cartons, protect table edges with thick foam sheets, and secure white goods using high-strength wrapping films.</p>
        <p>Our pricing model remains fully transparent. We provide structured quotations before booking, with no hidden loading charges or last-minute fee revisions. Experience a secure, stress-free shifting process in <strong>" . $city . "</strong> with our dedicated packers and movers crew.</p>
    </div>
   ";
}