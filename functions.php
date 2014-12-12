<?php

defined('ABSPATH') or die("No script kiddies please!");

add_action('after_setup_theme', 'ptc_setup');
function ptc_setup(){
  load_theme_textdomain('ptc', get_template_directory() . '/languages');
}

// inlcudes
require get_template_directory() . "/includes/enqueue.php";

require get_template_directory() . "/includes/theme_options.php";

require get_template_directory() . "/includes/custom_types.php";

require get_template_directory() . "/includes/widgets.php";

require get_template_directory() . "/includes/shortcodes.php";

require get_template_directory() . "/includes/gallery.php";

add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'primary-left',  'Top Menu Left' );
  register_nav_menu( 'primary-right', 'Top Menu Right' );
  register_nav_menu( 'footer', 'Footer Menu' );
}

function custom_theme_setup() {
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'html5' );
}
add_action( 'after_setup_theme', 'custom_theme_setup' );

function get_social_links(){

  $links = [];
  if(strlen($mod = get_theme_mod('facebook_link'))>0)
    $links['facebook_link']  = (object) array(
      'url'   => $mod,
      'icon'  => 'fa-facebook',
      'icon_square'  => 'fa-facebook-square',
      'title' => __('Like us on Facebook', 'ptc'),
    );
  if(strlen($mod = get_theme_mod('twitter_link'))>0)
    $links['twitter_link']   = (object) array(
      'url'   => $mod,
      'icon'  => 'fa-twitter',
      'icon_square'  => 'fa-twitter-square',
      'title' => __('Follow us on Twitter', 'ptc'),
    );
  if(strlen($mod = get_theme_mod('instagram_link'))>0)
    $links['instagram_link'] = (object) array(
      'url'   => $mod,
      'icon'  => 'fa-instagram',
      'icon_square'  => 'fa-instagram',
      'title' => __('Our Instagram page', 'ptc'),
    );
  if(strlen($mod = get_theme_mod('pinterest_link'))>0)
    $links['pinterest_link'] = (object) array(
      'url'   => $mod,
      'icon'  => 'fa-pinterest',
      'icon_square'  => 'fa-pinterest-square',
      'title' => __('We are on pinterest', 'ptc'),
    );
  if(strlen($mod = get_theme_mod('linkedin_link'))>0)
    $links['linkedin_link']  = (object) array(
      'url'   => $mod,
      'icon'  => 'fa-linkedin',
      'icon_square'  => 'fa-linkedin-square',
      'title' => __('On LinkedIn', 'ptc'),
    );

  return $links;
}

function my_custom_archive_order( $vars ) {
  if ( !is_admin() && isset($vars['post_type']) && is_post_type_hierarchical($vars['post_type']) ) {
    $vars['orderby'] = 'menu_order';
    $vars['order'] = 'ASC';
  }

  return $vars;
}
add_filter( 'request', 'my_custom_archive_order');

function get_testimonials(){

  $args = array(
    'post_type' => 'testimonial',
    'posts_per_page' => 5
    );
  return new WP_Query( $args );

}

if ( ! function_exists( 'ptc_paging_nav' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 *
 * @since Twenty Thirteen 1.0
 */
function ptc_paging_nav() {
  global $wp_query;

  // Don't print empty markup if there's only one page.
  if ( $wp_query->max_num_pages < 2 )
    return;
  ?>
  <nav class="navigation paging-navigation" role="navigation">
    <div class="nav-links">

      <?php if ( get_next_posts_link() ) : ?>
      <div class="nav-previous"><?php next_posts_link( __( '<i class="fa fa-chevron-left"></i> Previous', 'ptc' ) ); ?></div>
      <?php endif; ?>

      <?php if ( get_previous_posts_link() ) : ?>
      <div class="nav-next"><?php previous_posts_link( __( 'Next <i class="fa fa-chevron-right"></i>', 'ptc' ) ); ?></div>
      <?php endif; ?>

    </div><!-- .nav-links -->
  </nav><!-- .navigation -->
  <?php
}
endif;