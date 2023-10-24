<?php

/**
 * Archive.php
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 1.0.0
 */
defined('ABSPATH') || exit;

get_header();
get_template_part('inc/queries/global-queries');
get_template_part('inc/ads/section-row-ads');
get_template_part('inc/queries/rest-posts-queries');
get_footer();
