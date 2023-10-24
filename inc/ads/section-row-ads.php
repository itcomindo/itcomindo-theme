<?php

/**
 * Section Row Ads
 * Description: menampilkan iklan dengan 3 buah kondisi, yaitu: adsense, adsterra, dan gambar
 * Jika adsense tidak tampil, maka akan menampilkan adsterra dan gambar sebagai alternatif terakhir
 */

defined('ABSPATH') || exit;



?>


<div id="sra" class="section">
    <div class="container">
        <div id="sra-wr" class="768x90-wr">
            <?php
            get_template_part('inc/ads/768x90-adsense');
            ?>
        </div>
    </div>
</div>