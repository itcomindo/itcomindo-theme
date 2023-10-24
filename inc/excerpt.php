<?php

/**
 *  Excerpt
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */

defined('ABSPATH') || exit;

$x = get_the_excerpt();
// count excerpt words, if more than 20 then trim to 20 words
$words = explode(' ', $x);
if (count($words) > 20) {
    $x = implode(' ', array_slice($words, 0, 15));
    echo esc_html($x) . '...';
}
