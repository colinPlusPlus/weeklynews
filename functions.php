<?php

/**
 * This is the function file
 * By: Colin Williams
 */


add_action('genesis_setup','weeklynews_theme_setup');
function weeklynews_theme_setup(){

  // Start the engine
  require_once( get_template_directory() . '/lib/init.php' );

  //add html5 support
  add_theme_support( 'html5' );

  //make the site mobile
  add_theme_support( 'genesis-responsive-viewport' );

  //add three footer widgets before the footer
  add_theme_support( 'genesis-footer-widgets', 3 );

  // Add support for custom background
  add_theme_support( 'custom-background' );

  //Remove the Genesis Header Area
  remove_action('genesis_header', 'genesis_before');
}

  /** Load Custom Scripts File **/

add_action( 'wp_enqueue_scripts', 'weeklynews_load_custom_css' );
function weeklynews_load_custom_css() {

  /* Stylesheets */
  wp_enqueue_style( 'bootstrap', CHILD_URL . '/assets/css/bootstrap.min.css', array(), PARENT_THEME_VERSION );
  wp_enqueue_style( 'datepicker', CHILD_URL . '/assets/css/datepicker.css', array(), PARENT_THEME_VERSION );
  wp_enqueue_style( 'font-awesome', esc_url_raw( '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css' ), array(), PARENT_THEME_VERSION );
  wp_enqueue_style( 'jquerySidrDark', CHILD_URL . '/assets/css/jquery.sidr.dark.css', array(), PARENT_THEME_VERSION );
  wp_enqueue_style( 'photobox', CHILD_URL . '/assets/css/photobox.css', array(), PARENT_THEME_VERSION );
  wp_enqueue_style( 'main-style', CHILD_URL . '/assets/css/style.min.css', array(), PARENT_THEME_VERSION );
  wp_enqueue_style( 'weather-icon', esc_url_raw( '//cdnjs.cloudflare.com/ajax/libs/weather-icons/1.2/css/weather-icons.min.css' ), array(), PARENT_THEME_VERSION );
  wp_enqueue_style( 'googlefont', esc_url_raw( '//fonts.googleapis.com/css?family=Roboto:400,500,500italic,400italic,700,700italic%7CRoboto+Condensed:400,700%7CRoboto+Slab', 'http' ) );

  /* Scripts */
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'functions' , CHILD_URL . '/assets/js/functions.min.js', array('jquery'), PARENT_THEME_VERSION, true );
  wp_enqueue_script( 'respond' , esc_url_raw( '//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js' ), array('jquery'), PARENT_THEME_VERSION, true );

}

add_action( 'wp_head', 'weeklynews_load_ie_conditionals' );
function weeklynews_load_ie_conditionals(){
  ?>
  <!--[if lte IE 8]>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(). '/assets/css/photobox.ie.css' ?>">
    <script src="<?php echo get_stylesheet_directory_uri().'/assets/js/respond.js' ?>"></script>
    <![endif]-->
  <?php
}


require_once( 'inc/nav.php' );
require_once( 'classes/nav.php' );
require_once( 'inc/header.php' );
require_once( 'inc/search.php' );
