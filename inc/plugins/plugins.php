<?php

/**
 * File plugins.php
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 1.0.0
 */
defined('ABSPATH') || exit;


/**
 *=========================
 * Clean WP Head
 *=========================
 */

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
//remove shortlink
remove_action('wp_head', 'wp_shortlink_wp_head');
//remove generator meta tag
remove_action('wp_head', 'wp_generator');

function mm_remove_block_css()
{
    wp_dequeue_style('wp-block-library');
}
add_action('wp_enqueue_scripts', 'mm_remove_block_css', 100);
