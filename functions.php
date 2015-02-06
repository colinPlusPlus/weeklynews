<?php

/**
 * This is the function file
 * By: Colin Williams
 */


add_action('after_setup_theme','weeklynews_theme_setup');
function weeklynews_theme_setup(){

  //add html5 support
  add_theme_support( 'html5' , array( 'search-form' ) );

  //add custom background support
  add_theme_support( 'custom-background' );
}

  /** Load Custom Scripts File **/

add_action( 'wp_enqueue_scripts', 'weeklynews_load_custom_scripts' );
function weeklynews_load_custom_scripts() {

    /* fonts */
  wp_enqueue_style( 'googlefont', esc_url_raw( '//fonts.googleapis.com/css?family=Roboto:400,500,500italic,400italic,700,700italic%7CRoboto+Condensed:400,700%7CRoboto+Slab', 'http' ) );

  /* Stylesheets */
  wp_enqueue_style( 'bootstrap', get_template_directory_uri(). '/assets/css/bootstrap.min.css', array() );
  wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css', array() );
  wp_enqueue_style( 'weather-icon', get_template_directory_uri().'/assets/css/weather-icons.min.css', array() );
  wp_enqueue_style( 'jquerySidrDark', get_template_directory_uri(). '/assets/css/jquery.sidr.dark.css', array() );
  wp_enqueue_style( 'photobox', get_template_directory_uri(). '/assets/css/photobox.css', array() );
  wp_enqueue_style( 'datepicker', get_template_directory_uri(). '/assets/css/datepicker.css', array() );
  wp_enqueue_style( 'main-style', get_template_directory_uri(). '/assets/css/style.min.css', array() );

  /* Scripts */
  //wp_enqueue_script( 'jquery', '/wp-includes/js/jquery/jquery.js', array(),'', true );
  wp_enqueue_script( 'functions' , get_template_directory_uri(). '/assets/js/functions.min.js', array('jquery'),'', true );

}

//add_action( 'wp_head', 'weeklynews_load_ie_conditionals' );
// function weeklynews_load_ie_conditionals(){
//   ?>
   <!--[if lte IE 8]>
     <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(). '/assets/css/photobox.ie.css' ?>">
     <script src="<?php echo get_stylesheet_directory_uri().'/assets/js/respond.js' ?>"></script>
     <![endif]-->
   <?php
// }

require_once( 'classes/nav.php' );
require_once( 'inc/nav.php' );
require_once( 'inc/search.php' );
