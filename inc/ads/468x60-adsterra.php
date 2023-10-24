<?php

/**
 * Ads 468x60
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */

defined('ABSPATH') || exit;


if (mm_is_devmode()) {
?>
    <div class="ads ads-468x60">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/468x60.gif' ?>" alt="Iklan 768x90">
    </div>
<?php
} else {
?>
    <script type="text/javascript">
        atOptions = {
            'key': 'a3428b8a253b4c4cbe593a0ccdceb9d9',
            'format': 'iframe',
            'height': 60,
            'width': 468,
            'params': {}
        };
        document.write('<scr' + 'ipt type="text/javascript" src="//www.profitablecreativeformat.com/a3428b8a253b4c4cbe593a0ccdceb9d9/invoke.js"></scr' + 'ipt>');
    </script>
<?php
}
