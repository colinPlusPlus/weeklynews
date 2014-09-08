<?php 
	
add_action( 'genesis_register_nav_menus', 'register_weeklynews_mobile_menu' );
function register_weeklynews_mobile_menu() {

	register_nav_menu( 'weeklynews-mobile-menu' , __( 'Mobile Navigation Menu', 'genesis' ));
}

add_filter( 'genesis_do_nav', 'weeklynews_mobile_nav', 10, 3 );
function weeklynews_mobile_nav( $nav_output, $nav, $args){

	//* Do nothing if menu not supported
	if ( ! genesis_nav_menu_supported( 'primary' ) )
		return; 

	//* If menu is assigned to theme location, output
	if ( has_nav_menu( 'weeklynews-mobile-menu' ) ) {

		$args = array(
			'theme_location' => 'weeklynews-mobile-menu',
			'container'      => '',
	    'menu_class'     => ' ',
	    'menu_id'         => ' ',
	    'echo'           => 0,
			
		);

		$nav = wp_nav_menu( $args );

		$nav_markup_open = '<div id="sidr">';

		$nav_markup_open .= get_search_form( false );

		//$nav_markup_close  = genesis_structural_wrap( 'menu-primary', 'close', 0 );
		$nav_markup_close = genesis_html5() ? '</div>' : '</div>';

		$nav_output = $nav_markup_open . $nav . $nav_markup_close;

		return $nav_output;
	}
}

add_filter( 'genesis_attr_sidr', 'weeklynews_attr_sidr' );
function weeklynews_attr_sidr( $attr ) {

  unset( $attr[ 'class' ] );
  $attr[ 'id' ] = '';
  $attr[ 'id' ] .= 'sidr';
  return $attr;

}


