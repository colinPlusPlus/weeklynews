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