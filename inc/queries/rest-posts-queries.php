<?php

/**
 * Rest Posts Queries
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */

defined('ABSPATH') || exit;


?>
<div id="rq" class="section">
    <div class="container">
        <div id="rq-wr">
            <div id="rq-left">
                <div id="rq-item-wr">
                    <?php
                    $args = array(
                        'numberposts' => 7,
                        'post_status' => 'publish',
                    );

                    $recent_posts = wp_get_recent_posts($args);

                    $exclude_ids = array();

                    foreach ($recent_posts as $post) {
                        $exclude_ids[] = $post['ID'];
                    }

                    $query_args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 10,
                        'post__not_in' => $exclude_ids,
                    );

                    $query = new WP_Query($query_args);
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
                            if (3 === $count) {
                    ?>
                                <div class="rq-item iklan">
                                    <?php
                                    get_template_part('inc/ads/300x250-adsense');
                                    ?>
                                </div>
                            <?php
                            } elseif (8 === $count) {
                            ?>
                                <div class="rq-item iklan">
                                    <?php
                                    get_template_part('inc/ads/300x250-adsterra');
                                    ?>
                                </div>
                            <?php

                            } else {

                            ?>
                                <div class="rq-item">
                                    <div class="rq-item-left">
                                        <span class="the-date"><?php echo esc_html(get_the_date()); ?></span>
                                        <?php
                                        get_template_part('inc/category-link');
                                        ?>
                                        <a href="<?php echo esc_html($permalink) ?>">
                                            <img src="<?php echo esc_html($thumbnail); ?>" alt="<?php echo esc_html($title); ?>">
                                        </a>
                                    </div>
                                    <div class="rq-item-right">
                                        <h3 class="rq-head"><a href="<?php echo esc_html($permalink); ?>"><?php get_template_part('inc/title'); ?></a></h3>
                                        <span class="rq-excerpt"><?php get_template_part('inc/excerpt'); ?></span>
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="rq-readmore" title="<?php the_title(); ?>">Baca Artikel</a>
                                </div>
                    <?php
                            }
                        }
                        //reset post data
                        wp_reset_postdata();
                    } else {
                        echo '<p>There are no posts</p>';
                    }

                    ?>
                </div>
            </div>
            <div id="rq-right">
                <aside id="sidebar">
                    <h3 class="sidebar-head">Siderbar</h3>
                </aside>
            </div>
        </div>
    </div>
</div>