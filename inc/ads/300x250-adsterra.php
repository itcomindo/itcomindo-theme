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
?>
    <script type="text/javascript">
        atOptions = {
            'key': '0a5dadcb6d4d7d6a36c3e80e4f06c084',
            'format': 'iframe',
            'height': 250,
            'width': 300,
            'params': {}
        };
        document.write('<scr' + 'ipt type="text/javascript" src="//www.profitablecreativeformat.com/0a5dadcb6d4d7d6a36c3e80e4f06c084/invoke.js"></scr' + 'ipt>');
    </script>
<?php
}
