<!doctype html >
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en-US"> <!--<![endif]-->
<head>
    <!-- start:global -->
    <meta charset="utf-8">
    <!-- end:global -->

    <!-- start:page title -->
    <title> <?php echo get_bloginfo( 'name' ); ?> </title>
    <!-- end:page title -->
    
    <!-- start:meta info -->
    <meta name="keywords" content="Weekly News, Daily News, article, blog, breaking news, editorial, magazine, modern, modern news, news article, news magazine, newspaper, online news, publishing, reviews, weekly news" />
    <meta name="description" content="Weekly News - Responsive HTML5 News/Magazine Template">
    <meta name="author" content="mipdesign.com">
    <!-- end:meta info -->

    <!-- start:responsive web design -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end:responsive web design -->

    <!-- start:stylesheets -->
    <?php wp_head(); ?>
    <!-- end:stylesheets -->

    <!--[if lte IE 8]>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(). '/assets/css/photobox.ie.css' ?>">
    <script src="<?php echo get_stylesheet_directory_uri().'/assets/js/respond.js' ?>"></script>
    <![endif]-->
</head>
<body>
  
  <!-- start:page outer wrap -->
  <div id="page-outer-wrap">
    <!-- start:page inner wrap -->
    <div id="page-inner-wrap">        
        
      <!-- start:page header mobile -->
      <header id="page-header-mobile" class="visible-xs">
          
        <!-- start:sidr -->
        <div id="sidr">
          <form role="search" id="search-form-mobile" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" >
              <input type="search" placeholder="<?php echo esc_attr_x( 'Search weekly news', 'placeholder' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ); ?>" />
          </form>
          <?php weeklynews_mobile_nav(); ?>
        </div>
        <div class="row">
          <!-- start:col -->
          <div class="col-xs-6">
            <!-- start:logo -->
            <h1><a href="<?php echo get_bloginfo( 'url' ); ?>"><img src=" <?php echo get_stylesheet_directory_uri(). '/assets/images/logo-white-mobile.png'; ?> " alt="Weekly News" /></a></h1>
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
      <!-- end:page header mobile -->

      <!-- start:page header -->
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
                <h1><a href="<?php echo get_bloginfo( 'url' ); ?>"><img src="<?php echo get_template_directory_uri() .'/assets/images/logo-white.png' ?>" alt="Weekly News" /></a></h1>
                <!-- end:logo -->
              </div>
              <!-- end:col -->

              <!-- start:col -->
              <div class="col-sm-6 col-md-4 text-center">

                <?php weeklynews_search_form( get_search_form() ); ?>

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
        <!-- end:header-navigation -->
      </header>
      <!-- end:page header -->
        