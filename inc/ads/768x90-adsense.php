<?php

/**
 * Ads 768x90
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */

defined('ABSPATH') || exit;


if (mm_is_devmode()) {
?>
    <div class="ads ads-768x90">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/768x90.webp' ?>" alt="Iklan 768x90">
    </div>
<?php
} else {
?>
    <ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-7273106919951725" data-ad-slot="3754147602"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
<?php
}
