<?php

//remove button on search form
add_filter( 'genesis_search_form', 'weeklynews_search_form', 10 ,4 );
function weeklynews_search_form( $form, $search_text, $button_text, $label ){
  $search_text = get_search_query() ? esc_attr( apply_filters( 'the_search_query', get_search_query() ) ) : apply_filters( 'genesis_search_text', esc_attr__( 'Search', 'genesis' ) . '&#x02026;' );

  //* Empty label, by default. Filterable.
  $label = apply_filters( 'genesis_search_form_label', '' );
  //$xhtml_form = sprintf( '<form method="get" id="search-form-mobile" action="%s" role="search" >%s<input type="text" value="%s" name="s" class="s search-input" %s %s /></form>', home_url( '/' ), $label, esc_attr( $search_text ), $onfocus, $onblur );
  $form = sprintf( '<form method="get" id="search-form-mobile" action="%s" role="search">%s<input type="search" name="s" placeholder="%s" /></form>', home_url( '/' ), $label, $search_text );
  return $form;
}