<?php

/**
 * Functions.php
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */

defined('ABSPATH') || exit;

// add theme support.
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('menus');

/**
 * Function load Carbon Fields
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */
function mm_call_carbon_fields()
{
	require_once 'vendor/autoload.php';
	\Carbon_Fields\Carbon_Fields::boot();
}
add_action('after_setup_theme', 'mm_call_carbon_fields');

/**
 * Function is_devmode
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */
function mm_is_devmode()
{
	// Cek apakah $_SERVER['REMOTE_ADDR'] tersedia sebelum membandingkannya.
	if (isset($_SERVER['REMOTE_ADDR']) && in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1'), true)) {
		return true;
	}
	return false;
}

require_once get_template_directory() . '/inc/plugins/plugins.php';
require_once get_template_directory() . '/template-parts/template-parts.php';
require_once get_template_directory() . '/inc/inc.php';
require get_template_directory() . '/assets/assets.php';
