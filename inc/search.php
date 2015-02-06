<?php

//remove button on search form
add_filter( 'get_search_form', 'weeklynews_search_form', 11 ,4 );
function weeklynews_search_form( $form ){
  $form = '
	  <form role="search" id="search-form" method="get" action="' . esc_url( home_url( '/' ) ) . '" >
	  	<input type="search" placeholder="' . esc_attr_x( 'Search weekly news', 'placeholder' ) . '" value="' . get_search_query() . '" name="s" title="' . esc_attr_x( 'Search for:', 'label' ) . '" />
	  	<button type="submit"><span class="glyphicon glyphicon-search"></span></button>
		</form>';
	
	return $form;
}
add_filter( 'get_search_form', 'weeklynews_mobile_search_form', 10 ,4 );
function weeklynews_mobile_search_form( $form ){
  	$form = '<form role="search" id="search-form-mobile" method="get" action="' . esc_url( home_url( '/' ) ) . '" >
                  <input type="search" placeholder="' . esc_attr_x( 'Search weekly news', 'placeholder' ) . '" value="' . get_search_query() . '" name="s" title="' . esc_attr_x( 'Search for:', 'label' ) . '" />
              </form>';
    return $form;
	}