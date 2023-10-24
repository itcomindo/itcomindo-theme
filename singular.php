<?php

/**
 * Singular
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */

defined('ABSPATH') || exit;

get_header();


if (is_single()) {
    get_template_part('template-parts/single/single-template');
} elseif (is_page()) {
    get_template_part('template-parts/single/page-template');
}


get_footer();
