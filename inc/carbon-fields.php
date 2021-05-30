<?php
/**
 * Tepanhaky Theme Carbon Fields customization
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Tepanhaky_Theme
 */

require get_template_directory() . '/inc/menu/menu-category.php';
require get_template_directory() . '/inc/menu/menu-item.php';

add_action('after_setup_theme', 'crb_load');
function crb_load()
{
    require_once get_template_directory() . '/vendor/autoload.php';
    \Carbon_Fields\Carbon_Fields::boot();
}
