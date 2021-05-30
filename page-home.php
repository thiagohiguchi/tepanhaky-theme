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
batata
		<?php
// while (have_posts()):
//     the_post();

//     $sections = carbon_get_the_post_meta( 'crb_sections' );
//     foreach ( $sections as $section ) {

//     get_template_part( 'template-parts/content', get_post_type() );

//     the_post_navigation(
//         array(
//             'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'tepanhaky-theme' ) . '</span> <span class="nav-title">%title</span>',
//             'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'tepanhaky-theme' ) . '</span> <span class="nav-title">%title</span>',
//         )
//     );

//     // If comments are open or we have at least one comment, load up the comment template.
//     if ( comments_open() || get_comments_number() ) :
//         comments_template();
//     endif;
// }
// endforeach;

// endwhile; // End of the loop.

$loop = new WP_Query(array('post_type' => 'menu-category'));

while ($loop->have_posts()): $loop->the_post();

    the_title('<h2 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '" rel="bookmark">', '</a></h2>');

    $sections = carbon_get_the_post_meta(get_the_ID(), 'crb_menu_item_number');
    // echo '<p>oi</p>';
    echo $sections;
    // if ($sections)
    //     foreach ( $sections as $section ) {
    //     echo $section["crb_menu_item_number"];
    // endforeach;
    // endif;
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
// get_sidebar();
get_footer();
