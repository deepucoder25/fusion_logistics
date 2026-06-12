<?php 
foreach ($cities as $ct) {
    if (@$ct['nm'] == $city) {
        $lat = $ct['lat'];
        $lon = $ct['lon'];
        $state_code = $ct['sc'];
        break;
    }
} 

if (!empty($lat) && !empty($lon)) { ?>
    <div class="pm-city-map-card">
        <div class="pm-city-map-header">
            <i class="bi bi-geo-alt-fill"></i>
            <h4>Our Shifting Coverage Area in <?= $city ?></h4>
        </div>
        <iframe
            width="100%"
            height="350"
            class="pm-city-map-iframe"
            loading="lazy"
            allowfullscreen
            src="https://www.google.com/maps?q=<?php echo $lat; ?>,<?php echo $lon; ?>&hl=en&z=12&output=embed">
        </iframe>
    </div>
<?php } ?>