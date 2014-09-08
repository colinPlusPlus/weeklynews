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

//Mobile Navigation Header
add_action('genesis_before_header', 'weeklynews_mobile_header');
function weeklynews_mobile_header(){
  echo '<header id="page-header-mobile" class="visible-xs">';
  // echo '<div id="sidr">';
  // get_search_form();
  genesis_do_nav();
  ?>

  <ul>
      <li class="cat-news">
          <a class="more" href="#"><i class="fa fa-angle-down"></i></a>
          <a href="#">News</a>
          <ul class="subnav-menu">
              <li><a href="#">Nation</a></li>
              <li><a href="#">World</a></li>
              <li><a href="#">Elections</a></li>
              <li><a href="#">Opinions</a></li>
              <li><a href="#">Lorem ipsum</a></li>
              <li><a href="#">Dolor sit amet</a></li>
              <li><a href="#">Photo galleries</a></li>
          </ul>
      </li>
      <li class="cat-sports">
          <a class="more" href="#"><i class="fa fa-angle-down"></i></a>
          <a href="category-1.html">Sports</a>
          <ul>
              <li><a href="#">Football</a></li>
              <li><a href="#">Pro Basketball</a></li>
              <li><a href="#">College Basketball</a></li>
              <li><a href="#">Hockey</a></li>
              <li><a href="#">Baseball</a></li>
              <li><a href="#">Soccer</a></li>
              <li><a href="#">Photo galleries</a></li>
          </ul>
      </li>
      <li class="cat-lifestyle">
          <a class="more" href="#"><i class="fa fa-angle-down"></i></a>
          <a href="#">Lifestyle</a>
          <ul>
              <li><a href="#">Fashion</a></li>
              <li><a href="#">Beauty</a></li>
              <li><a href="#">Health</a></li>
              <li><a href="#">Parenting</a></li>
              <li><a href="#">Home & garden</a></li>
          </ul>
      </li>
      <li class="cat-showtime">
          <a class="more" href="#"><i class="fa fa-angle-down"></i></a>
          <a href="category-2.html">Showtime</a>
          <ul>
              <li><a href="#">Movies</a></li>
              <li><a href="#">Music</a></li>
              <li><a href="#">Television</a></li>
              <li><a href="#">Gaming</a></li>
              <li><a href="#">Lorem ipsum</a></li>
              <li><a href="#">Dolor sit amet</a></li>
              <li><a href="#">Photo galleries</a></li>
          </ul>
      </li>
      <li class="cat-tech">
          <a class="more" href="#"><i class="fa fa-angle-down"></i></a>
          <a href="#">Tech</a>
          <ul>
              <li><a href="#">Gadgets</a></li>
              <li><a href="#">Mobile</a></li>
              <li><a href="#">Internet</a></li>
              <li><a href="#">Security</a></li>
              <li><a href="#">Technocast</a></li>
          </ul>
      </li>
      <li class="cat-business">
          <a class="more" href="#"><i class="fa fa-angle-down"></i></a>
          <a href="#">Business</a>
          <ul>
              <li><a href="#">Investments</a></li>
              <li><a href="#">Loans & guarantees</a></li>
              <li><a href="#">Human resources</a></li>
              <li><a href="#">Culture & media</a></li>
              <li><a href="#">Market rules</a></li>
          </ul>
      </li>
      <li class="cat-extra">
          <a class="more" href="#"><i class="fa fa-angle-down"></i></a>
          <a href="#">Extra +</a>
          <ul>
              <li><a href="archive.html">Archive page</a></li>
              <li><a href="author.html">Author page</a></li>
              <li><a href="contact.html">Contact page</a></li>
              <li>
                  <a href="#">Blog styles</a>
                  <ul>
                      <li><a href="category-1.html">Style one</a></li>
                      <li><a href="category-2.html">Style two</a></li>
                  </ul>
              </li>
              <li>
                  <a href="#">Single post styles</a>
                  <ul>
                      <li><a href="article-1.html">Single post default</a></li>
                      <li><a href="article-2.html">Single post with photos</a></li>
                      <li><a href="article-3.html">Single post with review</a></li>
                      <li><a href="article-4.html">Single post with audio</a></li>
                      <li><a href="article-full-1.html">Full width style one</a></li>
                      <li><a href="article-full-2.html">Full width style two</a></li>
                      <li><a href="article-cover-1.html">Single post with cover photo</a></li>
                      <li><a href="article-cover-2.html">Single post with cover video</a></li>
                  </ul>
              </li>
              <li>
                  <a href="#">Video & photo</a>
                  <ul>
                      <li><a href="video.html">Video page</a></li>
                      <li><a href="video-full.html">Video page - full width</a></li>
                      <li><a href="gallery.html">Gallery page</a></li>
                      <li><a href="gallery-full.html">Gallery page - full width</a></li>
                  </ul>
              </li>
          </ul>
      </li>
  </ul>

  <?php
  echo '</div>';// end sidr
  ?><div class="row">

                    <!-- start:col -->
                    <div class="col-xs-6">
                        <!-- start:logo -->
                        <h1><a href="#"><img src="images/logo-white-mobile.png" alt="Weekly News" /></a></h1>
                        <!-- end:logo -->
                    </div>
                    <!-- end:col -->

                    <!-- start:col -->
                    <div class="col-xs-6 text-right">
                        <a id="nav-expander" href=""><span class="glyphicon glyphicon-th"></span></a>
                    </div>
                    <!-- end:col -->

                </div>
                <!-- end:row -->
                <?php
  echo '</header>';
}
