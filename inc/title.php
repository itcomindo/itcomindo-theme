<?php

/**
 * Title
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */

defined('ABSPATH') || exit;

$x = get_the_title();
//count title characters, if more than 50 then trim to 50 characters
if (strlen($x) > 75) {
    $x = substr($x, 0, 75);
    echo esc_html($x) . '...';
} else {
    echo esc_html($x);
}
