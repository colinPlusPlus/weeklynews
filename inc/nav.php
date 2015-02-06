<?php

// add css class "current" to current page
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes = array();
             $classes[] = 'current';
             return $classes;
     }
     return $classes = array();
}

register_nav_menus( array( 
        'primary' => 'Primary', 
        'weeklynews-mobile-menu' => 'Mobile Navigation Menu' 
      ) );

//Add the Mobile Navigation Menu
function weeklynews_mobile_nav(){

  if ( has_nav_menu( 'weeklynews-mobile-menu' ) ) {

    $args = array(
      'theme_location'  => 'weeklynews-mobile-menu',
      'menu'            => 'Mobile Nav Menu',
      'container'       => '',
      'container_class' => '',
      'menu_class'      => '',
      'echo'            => true,
      'before'          => '<a class="more" href="#"><i class="fa fa-angle-down"></i></a>',
      'items_wrap'      => '<ul>%3$s</ul>',
      'depth'           => 0,
      'walker'          => new WeeklyNews_Mobile_Nav_Walker()
      );

    wp_nav_menu( $args );
  }
}
//Filter genesis_do_nav to output our html markup
//add_filter('genesis_do_nav', 'weeklynews_do_nav', 10, 3 );
function weeklynews_do_nav(){

	if ( has_nav_menu( 'primary' ) ) {

    $args = array(
    	'theme_location'  => 'primary',
    	'menu'            => '',
    	'container'       => 'nav',
    	'container_class' => ' ',
    	'container_id'    => 'menu',
    	'menu_class'      => 'nav clearfix',
    	'menu_id'         => '',
    	'echo'            => true,
    	'fallback_cb'     => 'wp_page_menu',
    	'before'          => '',
    	'after'           => '',
    	'link_before'     => '',
    	'link_after'      => '',
    	'items_wrap'      => is_home() ? '<ul class="%2$s"><li class="home current"><a href="'.get_bloginfo( 'url' ).'"><span class="glyphicon glyphicon-home"></span></a></li>%3$s<li class="options"><a href="#"><span class="glyphicon glyphicon-asterisk"></span> Sign in</a> | <a href="#"><span class="glyphicon glyphicon-pencil"></span> Register</a></li></ul>'  :  '<ul class="%2$s"><li class="home"><a href="'.get_bloginfo( 'url' ).'"><span class="glyphicon glyphicon-home"></span></a></li>%3$s<li class="options"><a href="#"><span class="glyphicon glyphicon-asterisk"></span> Sign in</a> | <a href="#"><span class="glyphicon glyphicon-pencil"></span> Register</a></li></ul>',
    	'depth'           => 0,
    	'walker'          => new WeeklyNews_Do_Nav_Walker()
		);

    wp_nav_menu( $args );

  }
}
