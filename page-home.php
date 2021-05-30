<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * Template Name: Home Page
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tepanhaky_Theme
 */

get_header();
?>

	<main id="primary" class="site-main">


    <div class="section section--hero">
        <h1>HERO</h1>
    </div>

    <div class="section section--menu">

    </div>


		<?php

$loop = new WP_Query(array('post_type' => 'menu-category'));

while ($loop->have_posts()): $loop->the_post();

    the_title('<h2 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '" rel="bookmark">', '</a></h2>');

    echo $sections;

    the_content();
endwhile;

$loop = new WP_Query(array('post_type' => 'menu-item'));

while ($loop->have_posts()): $loop->the_post();

    the_title('<h2 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '" rel="bookmark">', '</a></h2>');

    echo carbon_get_the_post_meta('crb_menu_item_number');
    echo carbon_get_the_post_meta('crb_menu_item_description');
    // $sections = carbon_get_the_post_meta(get_the_ID(), 'crb_menu_item_number');
    // echo '<p>oi</p>';
    // echo $sections;
    // if ($sections)
    //     foreach ( $sections as $section ) {
    //     echo $section["crb_menu_item_number"];
    // endforeach;
    // endif;
    // the_content();
endwhile;
?>

	</main><!-- #main -->

<?php
get_footer();
