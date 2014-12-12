<?php
add_action( 'init', 'ptc_custom_types' );
/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function ptc_custom_types() {

  $labels_staff = array(
    'name'               => _x( 'Staff members', 'post type general name', 'ptc' ),
    'singular_name'      => _x( 'Staff member', 'post type singular name', 'ptc' ),
    'menu_name'          => _x( 'Staff', 'admin menu', 'ptc' ),
    'name_admin_bar'     => _x( 'Staff', 'add new on admin bar', 'ptc' ),
    'add_new'            => _x( 'Add New', 'book', 'ptc' ),
    'add_new_item'       => __( 'Add New Staff member', 'ptc' ),
    'new_item'           => __( 'New Staff member', 'ptc' ),
    'edit_item'          => __( 'Edit Staff member', 'ptc' ),
    'view_item'          => __( 'View Staff member', 'ptc' ),
    'all_items'          => __( 'All Staff members', 'ptc' ),
    'search_items'       => __( 'Search Staff members', 'ptc' ),
    'parent_item_colon'  => __( 'Parent Staff members:', 'ptc' ),
    'not_found'          => __( 'No staff members found.', 'ptc' ),
    'not_found_in_trash' => __( 'No staff members found in Trash.', 'ptc' )
  );

  $args_staff = array(
    'labels'             => $labels_staff,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'staff' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => true,
    'menu_position'      => 20,
    'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'page-attributes' )
  );

  register_post_type( 'staff', $args_staff );

  $labels_testimonials = array(
    'name'                => _x( 'Testimonials', 'Post Type General Name', 'ptc' ),
    'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name', 'ptc' ),
    'menu_name'           => __( 'Testimonials', 'ptc' ),
    'parent_item_colon'   => __( 'Parent Item:', 'ptc' ),
    'all_items'           => __( 'All Testimonials', 'ptc' ),
    'view_item'           => __( 'View Testimonial', 'ptc' ),
    'add_new_item'        => __( 'Add New Testimonial', 'ptc' ),
    'add_new'             => __( 'Add New', 'ptc' ),
    'edit_item'           => __( 'Edit Testimonial', 'ptc' ),
    'update_item'         => __( 'Update Testimonial', 'ptc' ),
    'search_items'        => __( 'Search Testimonial', 'ptc' ),
    'not_found'           => __( 'Not found', 'ptc' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'ptc' ),
  );
  $args_testimonials = array(
    'label'               => __( 'testimonial', 'ptc' ),
    'description'         => __( 'Quotes about PTC', 'ptc' ),
    'labels'              => $labels_testimonials,
    'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'custom-fields', 'page-attributes', ),
    'hierarchical'        => true,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => false,
    'menu_position'       => 20,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => true,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
  );
  register_post_type( 'testimonial', $args_testimonials );

  $labels_history = array(
    'name'               => _x( 'Previous editions', 'post type general name', 'ptc' ),
    'singular_name'      => _x( 'Previous edition', 'post type singular name', 'ptc' ),
    'menu_name'          => _x( 'History', 'admin menu', 'ptc' ),
    'name_admin_bar'     => _x( 'History', 'add new on admin bar', 'ptc' ),
    'add_new'            => _x( 'Add New', 'book', 'ptc' ),
    'add_new_item'       => __( 'Add New Previous edition', 'ptc' ),
    'new_item'           => __( 'New Previous edition', 'ptc' ),
    'edit_item'          => __( 'Edit Previous edition', 'ptc' ),
    'view_item'          => __( 'View Previous edition', 'ptc' ),
    'all_items'          => __( 'All Previous editions', 'ptc' ),
    'search_items'       => __( 'Search Previous editions', 'ptc' ),
    'parent_item_colon'  => __( 'Parent Previous editions:', 'ptc' ),
    'not_found'          => __( 'No previous edition found.', 'ptc' ),
    'not_found_in_trash' => __( 'No previous edition found in Trash.', 'ptc' )
  );

  $args_history = array(
    'labels'             => $labels_history,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'history' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => true,
    'menu_position'      => 20,
    'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'page-attributes' )
  );

  register_post_type( 'history', $args_history );

}
 ?>