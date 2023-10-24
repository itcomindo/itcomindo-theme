<?php

/**
 * File header-template.php
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 1.0.0
 */
defined('ABSPATH') || exit;

?>

<div id="topbar" class="section">
    <div class="container h100">
        <div id="topbar-wr" class="hw100">
            <div id="tb-left" class="hw100">Blog & Berita Teknologi</div>
            <div id="tb-right" class="hw100"><?php mm_jam_indo(); ?></div>
        </div>
    </div>
</div>

<header id="header" class="section">
    <div class="container">
        <div id="header-wr" class="w100">
            <div id="header-left" class="w100">
                <h2 id="header-logo"><a href="/">ITCOMINDO</a></h2>
            </div>
            <div id="header-right" class="w100">
                <div id="ads-header-wr">
                    <?php
                    get_template_part('inc/ads/768x90-adsterra');
                    get_template_part('inc/ads/468x60-adsterra');
                    ?>
                </div>
            </div>
        </div>
    </div>
</header>

<div id="hm" class="section">
    <div class="container">
        <div id="hm-wr" class="hw100">
            <?php
            mm_show_category_menu();
            ?>
        </div>
    </div>
</div>



<?php

function mm_jam_indo()
{
    $date = new DateTime("now", new DateTimeZone('Asia/Jakarta'));
    // echo $date->format('Y-m-d H:i:s');
    $full_date = $date->format('d F Y');
    $jam = $date->format('H');
    if ($jam >= 0 && $jam <= 11) {
        echo '<span class="topbar-date">' . esc_html($full_date) . '</span>';
    } elseif ($jam >= 12 && $jam <= 14) {
        echo '<span class="topbar-date">' . esc_html($full_date) . '</span>';
    } elseif ($jam >= 15 && $jam <= 18) {
        echo '<span class="topbar-date">' . esc_html($full_date) . '</span>';
    } elseif ($jam >= 19 && $jam <= 24) {
        echo '<span class="topbar-date">' . esc_html($full_date) . '</span>';
    }
}
