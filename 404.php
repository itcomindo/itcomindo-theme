<?php

/**
 * 404.php
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 1.0.0
 */
defined('ABSPATH') || exit;

get_header();

?>

<section id="the-404" class="section">
    <div class="container">
        <div id="the-404-wr">
            <div id="the-404-img-wr">
                <img src="<?php echo esc_html(get_template_directory_uri()) . '/assets/images/404.png'; ?>" alt="Page Not Found">
            </div>
            <h1>Ups! maaf konten tidak tersedia</h1>
        </div>
    </div>
</section>

<?php


get_footer();
