<?php 

//Register Mobile Navigation
add_action( 'genesis_register_nav_menus', 'register_weeklynews_mobile_menu' );
function register_weeklynews_mobile_menu() {
	register_nav_menu( 'weeklynews-mobile-menu' , __( 'Mobile Navigation Menu', 'genesis' ));
}

//Add the Mobile Navigation Menu
add_action('genesis_before_header', 'weeklynews_mobile_nav');
function weeklynews_mobile_nav(){
  
  echo '<header id="page-header-mobile" class="visible-xs">';
  echo '<div id="sidr">';
  
  get_search_form();
  
  if ( has_nav_menu( 'weeklynews-mobile-menu' ) ) {

    $args = array(
      'theme_location'  => 'weeklynews-mobile-menu',
      'before'          => '<a class="more" href="#"><i class="fa fa-angle-down"></i></a>',
      'items_wrap'      => '<ul>%3$s</ul>',
      'depth'           => 0,
      'walker'          => new WeeklyNews_Mobile_Nav_Walker()
      );

    wp_nav_menu( $args );
  }

  echo '</div>';
  ?>
<div class="row">

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
