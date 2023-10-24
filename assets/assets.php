<?php

/**
 * File assets.php
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 1.0.0
 */
defined('ABSPATH') || exit;
/**
 * Function mm_theme_version
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */
function mm_theme_version()
{
    return wp_get_theme()->get('Version');
}

/**
 * Function mm_enqueue_styles
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */
function mm_enqueue_styles()
{
    wp_enqueue_style('mm-normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css', array(), '8.0.1', 'all');
    wp_enqueue_style('mm-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css', array(), '6.2.0', 'all');
    wp_enqueue_style('mm-animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', array(), '4.1.1', 'all');
    if (mm_is_devmode()) {
        wp_enqueue_style('mm-style', get_stylesheet_uri(), array(), mm_theme_version(), 'all');
    } else {
        wp_enqueue_style('mm-style', get_template_directory_uri() . '/style.min.css', array(), mm_theme_version(), 'all');
    }
    if (is_single() || is_page()) {
        if (mm_is_devmode()) {
            wp_enqueue_style('mm-page-style', get_template_directory_uri() . '/assets/css/single.css', array(), mm_theme_version(), 'all');
        } else {
            wp_enqueue_style('mm-page-style', get_template_directory_uri() . '/assets/css/single.min.css', array(), mm_theme_version(), 'all');
        }
    }
    if (is_search()) {
        if (mm_is_devmode()) {
            wp_enqueue_style('mm-search-style', get_template_directory_uri() . '/assets/css/search.css', array(), mm_theme_version(), 'all');
        } else {
            wp_enqueue_style('mm-search-style', get_template_directory_uri() . '/assets/css/search.min.css', array(), mm_theme_version(), 'all');
        }
    }
    if (is_tag() || is_category()) {
        if (mm_is_devmode()) {
            wp_enqueue_style('mm-archive-style', get_template_directory_uri() . '/assets/css/archive.css', array(), mm_theme_version(), 'all');
        } else {
            wp_enqueue_style('mm-archive-style', get_template_directory_uri() . '/assets/css/archive.min.css', array(), mm_theme_version(), 'all');
        }
    }
    if (is_404()) {
        if (mm_is_devmode()) {
            wp_enqueue_style('mm-404-style', get_template_directory_uri() . '/assets/css/404.css', array(), mm_theme_version(), 'all');
        } else {
            wp_enqueue_style('mm-404-style', get_template_directory_uri() . '/assets/css/404.min.css', array(), mm_theme_version(), 'all');
        }
    }
    if (is_home()) {
        if (mm_is_devmode()) {
            wp_enqueue_style('mm-home-style', get_template_directory_uri() . '/assets/css/home.css', array(), mm_theme_version(), 'all');
        } else {
            wp_enqueue_style('mm-home-style', get_template_directory_uri() . '/assets/css/home.min.css', array(), mm_theme_version(), 'all');
        }
    }
}
add_action('wp_enqueue_scripts', 'mm_enqueue_styles');


/**
 * Function mm_load_scripts
 *
 * @package MasmonsTheme
 * @since 019
 */
function mm_load_scripts()
{
    // dequeue jquery.
    wp_deregister_script('jquery');
    wp_enqueue_script('mm-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js', array(), '3.7.0', true);
    if (mm_is_devmode()) {
        wp_enqueue_script('mm-global-js', get_template_directory_uri() . '/assets/js/global.js', array(), mm_theme_version(), true);
    } else {
        wp_enqueue_script('mm-global-js', get_template_directory_uri() . '/assets/js/global.min.js', array(), mm_theme_version(), true);
    }
}
add_action('wp_enqueue_scripts', 'mm_load_scripts');
