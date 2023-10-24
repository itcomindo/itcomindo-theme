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
    <div class="ads-300x250">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/300x250.webp' ?>" alt="Iklan 768x90">
    </div>
<?php
} else {
?><ins class="adsbygoogle" style="display:inline-block;width:300px;height:250px" data-ad-client="ca-pub-7273106919951725" data-ad-slot="1604387752"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
<?php
}
