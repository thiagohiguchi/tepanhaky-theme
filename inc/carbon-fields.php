<?php
/**
 * Tepanhaky Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Tepanhaky_Theme
 */

// use \Carbon_Fields\Container;
// use \Carbon_Fields\Field;

// add_action('carbon_fields_register_fields', 'crb_attach_theme_options');
// function crb_attach_theme_options()
// {
//     Container::make('theme_options', __('Theme Options'))
//         ->add_fields(array(
//             Field::make('text', 'crb_text', 'Text Field'),
//         ));
// }

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/menu/menu-category.php';

add_action('after_setup_theme', 'crb_load');
function crb_load()
{
    require_once ABSPATH . 'wp-content/themes/tepanhaky-theme/vendor/autoload.php';
    \Carbon_Fields\Carbon_Fields::boot();
}
