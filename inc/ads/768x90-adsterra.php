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
    <script type="text/javascript">
        atOptions = {
            'key': '208f838897369a66933b8ff14485153e',
            'format': 'iframe',
            'height': 90,
            'width': 728,
            'params': {}
        };
        document.write('<scr' + 'ipt type="text/javascript" src="//www.profitablecreativeformat.com/208f838897369a66933b8ff14485153e/invoke.js"></scr' + 'ipt>');
    </script>
<?php
}
