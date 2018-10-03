<!doctype html>
<html class="no-js" lang="">
    <head>
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-79858300-7"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-79858300-7');
      </script>
        <?php get_template_part( 'partials/gtm' ); ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php wp_title(); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
        <!-- font-awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <?php get_template_part( 'partials/gtm-noscript' ); ?>
        <header>
          <nav class="secondary">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><h2>The Roman Catholic Communities of Waterbury, Waitsfield and Moretown</h2></a>
          </nav>

            <nav class="primary">
                <div class="primary-nav-wrap">
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false ) ); ?>
                </div>
            </nav>
            <nav class="mobile">
              <div class="mobile-track">
                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false ) ); ?>
                <?php wp_nav_menu( array( 'theme_location' => 'secondary', 'container' => false ) ); ?>
              </div>
            </nav>
          <a href="#" class="mobile-nav-toggle"><i class="fa fa-bars" aria-hidden="true"></i></a>
        </header>
