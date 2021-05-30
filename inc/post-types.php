<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Tepanhaky_Theme
 */

function menu_category_post_type()
{

    register_post_type('menu-category',
        array(
            'labels' => array(
                'name' => __('Menu Categorias'),
                'singular_name' => __('Menu Categoria'),
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'menu-category'),
            'show_in_rest' => true,
            // on the supports param here you see no 'editor'
            'supports' => array('title', 'thumbnail', 'revisions'),

        )
    );
}
add_action('init', 'menu_category_post_type');

function menu_item_post_type()
{

    register_post_type('menu-item',
        array(
            'labels' => array(
                'name' => __('Menu Item'),
                'singular_name' => __('Menu Item'),
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'menu-item'),
            'show_in_rest' => true,
            // on the supports param here you see no 'editor'
            'supports' => array('title', 'thumbnail', 'revisions'),

        )
    );
}
add_action('init', 'menu_item_post_type');
