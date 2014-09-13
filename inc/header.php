<?php

/************************
 *
 * Author: Colin Williams
 * This is where I put all the function for my header layout.
 *
 ************************/

//Outer Wrapper
add_filter( 'genesis_attr_outer_wrap', 'weeklynews_attr_outer_wrap' );
function weeklynews_attr_outer_wrap( $attr ) {

  unset( $attr[ 'class' ] );
  $attr[ 'id' ] = '';
  $attr[ 'id' ] .= 'page-outer-wrap';
  return $attr;

}

//Inner Wrapper
add_filter( 'genesis_attr_inner_wrap', 'weeklynews_attr_inner_wrap' );
function weeklynews_attr_inner_wrap( $attr ){

  unset( $attr[ 'class' ] );

  $attr[ 'id' ] = '';
  $attr[ 'id' ] .= 'page-inner-wrap';

  return $attr;

}

remove_action( 'genesis_header' , 'genesis_header_markup_open', 5 );
remove_action( 'genesis_header' , 'genesis_header_markup_close', 15 );
remove_action( 'genesis_header', 'genesis_do_header' );

add_action( 'genesis_header' , 'my_action' );
function my_action(){
  echo 'hello world';
}
