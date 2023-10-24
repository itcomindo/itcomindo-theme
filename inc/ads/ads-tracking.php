<?php

/**
 *  Ads Tracking
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */

defined('ABSPATH') || exit;



add_action('wp_head', function () {
    if (mm_is_devmode()) {
?>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7273106919951725" crossorigin="anonymous"></script>
<?php
    }
});
