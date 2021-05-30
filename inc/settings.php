<?php
/**
 * Theme setup and settings
 *
 * @package Tepanhaky_Theme
 */

@ini_set('upload_max_size', '5M');
@ini_set('post_max_size', '20M');
@ini_set('max_execution_time', '300');

if (!function_exists('tpky_setup')):

    function tpky_setup()
{

        // Add Menu Support
        // add_theme_support('menus');
        // register_nav_menus(array(
        //     'main-menu' => __('Menu', 'tpky'), // Main Navigation
        // ));

        /* Post thumbnails */
        // set_post_thumbnail_size(360, 180, true);

        // update_option( 'medium_size_w', 560 );
        // update_option( 'medium_size_h', 280 );
        // update_option( 'medium_crop', 0 );
        // update_option( 'large_size_w', 1160 );
        // update_option( 'large_size_h', 420 );
        // update_option( 'large_crop', 0 );

        // add_image_size( 'medium', 560, 280, true );
        // add_image_size( 'large', 1160, 420, true );
        // add_image_size('sm', 240, 120, true);
        // add_image_size('md', 560, 280, true);

        // Visual editor stylesheet
        add_editor_style('editor.css');
    }

endif;
add_action('after_setup_theme', 'tpky_setup');

/*--------------------------------------------------------------
 * Enqueue scripts and styles.
--------------------------------------------------------------*/
// function tpky_scripts()
// {
//     $template_path_uri = get_template_directory_uri();
//     $template_path = get_template_directory();
//     // Load latest css version
//     wp_enqueue_style('tpky-style', $template_path_uri . '/style.css', array(), filemtime($template_path . '/style.css'), 'all');

//     if (is_singular() && comments_open() && get_option('thread_comments')) {
//         wp_enqueue_script('comment-reply');
//     }
// }
// add_action('wp_enqueue_scripts', 'tpky_scripts');
