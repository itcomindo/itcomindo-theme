<?php

/**
 * Category Link
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */

defined('ABSPATH') || exit;


//get current post category name and url.
$categories = get_the_category();
if (!empty($categories)) {
    $category = $categories[0];
    $cat_name = $category->name;
    $cat_link = get_category_link($category->term_id);
    echo '<a title="' . esc_html($cat_name) . '" href="' . esc_url($cat_link) . '" class="cat-link">' . esc_html($cat_name) . '</a>';
}
