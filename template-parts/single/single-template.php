<?php

/**
 * File single-template.php
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 1.0.0
 */
defined('ABSPATH') || exit;

?>


<section id="single" class="section">
    <div class="container">
        <div id="single-wr">
            <div id="the-content-title-wr"><?php the_title('<h1>', '</h1>'); ?></div>
            <div id="the-content-featured-image">
                <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail('full');
                }
                ?>
            </div>
            <div id="the-content"><?php the_content(); ?></div>
        </div>
    </div>
</section>