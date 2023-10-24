<?php

/**
 * Home
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 1.0.0
 */
defined('ABSPATH') || exit;

get_header();

?>

<div id="query" class="section">
    <div class="container">
        <div id="query-wr">
            <?php
            get_template_part('inc/queries/global-queries');
            ?>
        </div>
    </div>
</div>
<!-- <div id="rq" class="section">
    <div class="container">
        <div id="rq-wr">
            <div id="rq-left">
                <div id="rq-item-wr">
                    <?php
                    // get_template_part('inc/queries/rest-posts-queries');
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
</div> -->
<?php
get_footer();
