<?php

/**
 * Global Queries
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */

defined('ABSPATH') || exit;

?>

<div id="query" class="section">
    <div class="container">
        <div id="query-wr">
            <?php
            if (is_category() || is_single()) {
                //get current category id
                $cat_id = get_queried_object_id();
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 7,
                    'cat' => $cat_id,
                    'paged' => get_query_var('paged') ? get_query_var('paged') : 1
                );
            } elseif (is_tag()) {
                $tag_id = get_queried_object_id();
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 7,
                    'tag_id' => $tag_id,
                    'paged' => get_query_var('paged') ? get_query_var('paged') : 1
                );
            } elseif (is_search()) {
                $search_query = get_search_query();
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 7,
                    's' => $search_query,
                    'paged' => get_query_var('paged') ? get_query_var('paged') : 1
                );
            } else {
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 7,
                    'paged' => get_query_var('paged') ? get_query_var('paged') : 1
                );
            }

            echo '<div class="qpost-wr">';


            $query = new WP_Query($args);
            $count = 0;
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $count++;
                    $query->the_post();
                    $title = get_the_title();
                    $date = get_the_date();
                    $content = get_the_content();
                    $excerpt = get_the_excerpt();
                    $permalink = get_the_permalink();
                    $thumbnail = get_the_post_thumbnail_url();
            ?>
                    <div class="qpost-item qnum-<?php echo esc_html($count); ?>">
                        <?php
                        get_template_part('inc/category-link');
                        ?>
                        <div class="qpost-top">

                            <a href="<?php echo esc_html($permalink) ?>">
                                <img src="<?php echo esc_html($thumbnail); ?>" alt="<?php echo esc_html($title); ?>">
                            </a>
                        </div>
                        <div class="qpost-bot">
                            <h3 class="qpost-head"><a href="<?php echo esc_html($permalink); ?>"><?php get_template_part('inc/title'); ?></a></h3>
                            <span class="the-date">Written on: <?php echo esc_html(get_the_date()); ?></span>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo 'No posts found';
            }
            wp_reset_postdata();

            echo '</div>';
            ?>
        </div>
    </div>
</div>