<?php
/**
 * Wordpress functions and definitions
 * @since GIANTY 1.0
 */

/*
 * 1- Register Script and Style
 */
function theme_styles(){
  global $wp_styles;

  wp_enqueue_style( 'style', get_template_directory_uri () . '/css/style.css',array(),'','screen and (min-width: 641px)');
  wp_enqueue_style( 'style-ie',  get_template_directory_uri () . "/css/style.css", array());
  $wp_styles->add_data( 'style-ie', 'conditional', 'lte IE 8 ' );

  wp_enqueue_style( 'style_sp', get_template_directory_uri () . '/css/style_sp.css',array(),'','screen and (max-width: 640px)');
  
  if(is_home()||is_front_page()){
    wp_enqueue_style ( 'index', get_template_directory_uri () . '/css/index.css',array(),'','screen and (min-width: 641px)');
    wp_enqueue_style ( 'index-ie',  get_template_directory_uri () . "/css/index.css", array());
    $wp_styles->add_data( 'index-ie', 'conditional', 'lte IE 8 ' );

    wp_enqueue_style ( 'index_sp', get_template_directory_uri () . '/css/index_sp.css',array(),'','screen and (max-width: 640px)');
  }
  if(is_page('services')||is_child('services')||is_page('achievement')){
    wp_enqueue_style ( 'services', get_template_directory_uri () . '/css/services/services.css',array(),'','screen and (min-width: 641px)'); 
    wp_enqueue_style ( 'services-ie',  get_template_directory_uri () . "/css/services/services.css", array());
    $wp_styles->add_data( 'services-ie', 'conditional', 'lte IE 8 ' );

    wp_enqueue_style ( 'services_sp', get_template_directory_uri () . '/css/services/services_sp.css',array(),'','screen and (max-width: 640px)');
  }else if(is_singular( 'news' ) || is_post_type_archive( 'news' )){
    wp_enqueue_style ( 'news', get_template_directory_uri () . '/css/news/news.css',array(),'','screen and (min-width: 641px)');
    wp_enqueue_style ( 'news-ie', get_template_directory_uri () . '/css/news/news.css',array());
    $wp_styles->add_data( 'news-ie', 'conditional', 'lte IE 8 ' );

    wp_enqueue_style ( 'news_sp', get_template_directory_uri () . '/css/news/news_sp.css',array(),'','screen and (max-width: 640px)');
  }else if(is_singular( 'faq' ) || is_post_type_archive( 'faq' )){
    wp_enqueue_style ( 'faq', get_template_directory_uri () . '/css/faq/faq.css',array(),'','screen and (min-width: 641px)');
    wp_enqueue_style ( 'faq-ie', get_template_directory_uri () . '/css/faq/faq.css',array());
    $wp_styles->add_data( 'faq-ie', 'conditional', 'lte IE 8 ' );

    wp_enqueue_style ( 'faq_sp', get_template_directory_uri () . '/css/faq/faq_sp.css',array(),'','screen and (max-width: 640px)');
  }else if(is_page('about-viet-nam')){
    wp_enqueue_style ( 'about-viet-nam', get_template_directory_uri () . '/css/about-viet-nam/about-viet-nam.css',array(),'','screen and (min-width: 641px)');
    wp_enqueue_style ( 'about-viet-nam-ie', get_template_directory_uri () . '/css/about-viet-nam/about-viet-nam.css',array()); 
    $wp_styles->add_data( 'about-viet-nam-ie', 'conditional', 'lte IE 8 ' );

    wp_enqueue_style ( 'about-viet-nam_sp', get_template_directory_uri () . '/css/about-viet-nam/about-viet-nam_sp.css',array(),'','screen and (max-width: 640px)');
  }else if(is_page('company')||is_child('company')){
    wp_enqueue_style ( 'company', get_template_directory_uri () . '/css/company/company.css',array(),'','screen and (min-width: 641px)'); 
    wp_enqueue_style ( 'company-ie', get_template_directory_uri () . '/css/company/company.css',array());
    $wp_styles->add_data( 'company-ie', 'conditional', 'lte IE 8 ' );    
    wp_enqueue_style ( 'company_sp', get_template_directory_uri () . '/css/company/company_sp.css',array(),'','screen and (max-width: 640px)');
  }
}
add_action ( 'wp_enqueue_scripts', 'theme_styles' );

function theme_scripts(){
  wp_register_script('jquery-script',get_template_directory_uri().'/js/jquery-1.9.1.min.js');
  wp_register_script('share-script',get_template_directory_uri().'/js/share.js');
  wp_register_script('index-script',get_template_directory_uri().'/js/index.js');

  if(is_page('company')) {
    wp_register_script('map-script','https://maps.googleapis.com/maps/api/js?v=3.exp');
    wp_register_script('company-script',get_template_directory_uri().'/js/company/company.js');
  }
  if(is_page('gallery')||is_child('company')) {
    wp_register_script('gallery-script',get_template_directory_uri().'/js/company/gallery.js');  
  }
  
  wp_enqueue_script('jquery-script');
  wp_enqueue_script('share-script');
  wp_enqueue_script('index-script');
  wp_enqueue_script('gallery-script');
  wp_enqueue_script('map-script');
  wp_enqueue_script('company-script');
}
add_action('wp_enqueue_scripts','theme_scripts');

/*
 * 2- Register Cutom Post type & Custom Taxonomy
 */
require_once (TEMPLATEPATH . '/inc/template_tags.php');
require_once (TEMPLATEPATH . '/inc/post-types.php');

/*
 * 3- Other Custom plugin options
 */
function is_child( $page_id_or_slug ) { 
  global $post;
  if ( !is_numeric( $page_id_or_slug ) ) {
      $page = get_page_by_path( $page_id_or_slug );
      $page_id_or_slug = $page->ID;
  }
  if ( is_page() && ( $post->post_parent == $page_id_or_slug ) )
      return true;
  else
      return false;
};