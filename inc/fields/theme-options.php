<?php

/**
 * File theme-options.php
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 1.0.0
 */
defined('ABSPATH') || exit;

use Carbon_Fields\Container;
use Carbon_Fields\Field;


/**
 * Function Theme Options
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */
function mm_theme_options()
{
    Container::make('theme_options', 'Theme Options')
        ->add_fields([
            Field::make('text', 'starter', 'Start Ganti ini Yak')
        ]);
}
add_action('carbon_fields_register_fields', 'mm_theme_options');
