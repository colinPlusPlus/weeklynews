<?php

/************************
 *
 * Author: Colin Williams
 * This is where I put all the function for my header layout.
 *
 ************************/

require_once( 'nav.php' );

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

add_action( 'genesis_header' , 'weekly_news_header' );
function weekly_news_header(){
  echo '<header id="page-header-mobile" class="visible-xs">';
  echo '<div id="sidr">';
  get_search_form();
  weeklynews_mobile_nav();
  echo '</div>';
 ?><div class="row">
	<!-- start:col -->
	<div class="col-xs-6">
	  <!-- start:logo -->
	  <h1><a href="#"><img src=<?php echo get_stylesheet_directory_uri(). '/assets/images/logo-white-mobile.png'; ?> alt="Weekly News" /></a></h1>
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
 	</header>
 	<header id="page-header" class="hidden-xs">
                
                <!-- start:header-branding -->
                <div id="header-branding">
                
                    <!-- start:container -->
                    <div class="container">
                        
                        <!-- start:row -->
                        <div class="row">
                        
                            <!-- start:col -->
                            <div class="col-sm-6 col-md-4">
                                <!-- start:logo -->
                                <h1><a href="index.html"><img src="images/logo-white.png" alt="Weekly News" /></a></h1>
                                <!-- end:logo -->
                            </div>
                            <!-- end:col -->
                            
                            <!-- start:col -->
                            <div class="col-sm-6 col-md-4 text-center">
                                
                                <form id="search-form">
                                    <input type="text" name="qsearch" placeholder="Search weekly news" />
                                    <button><span class="glyphicon glyphicon-search"></span></button>
                                </form>
                                
                            </div>
                            <!-- end:col -->
                            
                            <!-- start:col -->
                            <div class="visible-md visible-lg col-md-4 text-right">
                                
                                <div class="weather">
                                    <i class="icon wi-day-cloudy"></i>
                                    <h3><span class="glyphicon glyphicon-map-marker"></span> LA, California <span class="temp">+12&deg; C</span></h3>
                                    <span class="date">Thursday, 20.4.2014.</span>
                                </div>
                                
                            </div>
                            <!-- end:col -->
                        
                        </div>
                        <!-- end:row -->
    
                    </div>
                    <!-- end:container -->
                    
                 </div>
                <!-- end:header-branding -->
                <!-- start:header-navigation -->
								<div id="header-navigation">
  							<div class="container">
  								<?php weeklynews_do_nav(); ?>
  							</div>
    					</div>
<?php } ?>
