<?php
/*
 * Post type
 *
 * @package WordPress
 * @package GIANTY VIETNAM
 * @since GIANTY VIETNAM 1.0
 */

/* CPT: FAQ */
add_action('init', '_init_faq_post_type');
function _init_faq_post_type() {
  // -------------------------------------------------------------
  register_taxonomy(
    'faq-category',
    array( 'faq' ),
    array(
      'labels' => array(
        'name' => __( 'FAQ Categories' ),
        'singular_name' => __( 'FAQ Category' ),
        'search_items' => __( 'Search FAQ Category' ),
        'popular_items' => __( 'Popular FAQ Category' ),
        'all_items' => __( 'All FAQ Category' ),
        'parent_item' => __( 'Parent FAQ Category' ),
        'parent_item_colon' => __( 'Parent FAQ Category:' ),
        'edit_item' => __( 'Edit FAQ Category' ),
        'update_item' => __( 'Update FAQ Category' ),
        'add_new_item' => __( 'Add New FAQ Category' ),
        'new_item_name' => __( 'New FAQ Category' ),
      ),
      'public' => true,
      'show_in_nav_menus' => true,
      'show_ui' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => false,
      'hierarchical' => true,
      'query_var' => true,
      'rewrite' => array( 'slug' => 'faq', 'with_front' => false ),
    )
  );  


  // Create post type (FAQ)
  // -------------------------------------------------------------
  register_post_type( 'FAQ',
    array(
      'capability_type' => 'post',
      'hierarchical' => false,
      'public' => true,
      'show_ui' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => false,
      'menu_position' => 30,
      'labels' => array(
        'name' => __( 'FAQs' ),
        'singular_name' => __( 'FAQ' ),
        'add_new' => __( 'Add New' ),
        'add_new_item' => __( 'Add New FAQ' ),
        'edit' => __( 'Edit FAQ' ),
        'edit_item' => __( 'Edit FAQ' ),
        'new_item' => __( 'New FAQ' ),
        'view' => __( 'View FAQ' ),
        'view_item' => __( 'View FAQ' ),
        'search_items' => __( 'Search FAQ' ),
        'not_found' => __( 'No FAQs found' ),
        'not_found_in_trash' => __( 'No FAQs found in Trash' )
      ),
      'has_archive' => true,
      'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
      'query_var' => true,
      'rewrite' => array( 'slug' => 'faq', 'with_front' => false ),
    )
  );

} 

/* CPT: NEWS */
add_action('init', '_init_news_post_type');
function _init_news_post_type() {

  register_post_type( 'news',
    array(
      'capability_type' => 'post',
      'hierarchical' => false,
      'public' => true,
      'show_ui' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => false,
      'menu_position' => 30,
      'labels' => array(
        'name' => __( 'ニュース' ),
        'singular_name' => __( 'ニュース' ),
        'add_new' => __( 'Add New' ),
        'add_new_item' => __( 'Add New ニュース' ),
        'edit' => __( 'Edit ニュース' ),
        'edit_item' => __( 'Edit ニュース' ),
        'new_item' => __( 'New ニュース' ),
        'view' => __( 'View ニュース' ),
        'view_item' => __( 'View ニュース' ),
        'search_items' => __( 'Search ニュース' ),
        'not_found' => __( 'No ニュース found' ),
        'not_found_in_trash' => __( 'No ニュース found in Trash' )
      ),
      'has_archive' => true,
      'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
      'query_var' => true,
      'rewrite' => array( 'slug' => 'news', 'with_front' => false )
    )
  );
}