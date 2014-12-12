<?php
  // header
 ?>
 <!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if lte IE 8]>
  <script type="text/javascript">
    window.location = "http://browsehappy.com/";
  </script>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header id="main-head">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand visible-xs-block" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_theme_mod('menu_logo_mobile'); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-navbar-collapse">
          <?php wp_nav_menu( array( 'theme_location' => 'primary-left', 'menu_class' => 'nav navbar-nav left-menu' ) ); ?>
          <div class="hidden-xs logo">
            <a class="" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
              <img src="<?php echo get_theme_mod('menu_logo'); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
            </a>
          </div>
          <?php wp_nav_menu( array( 'theme_location' => 'primary-right', 'menu_class' => 'nav navbar-nav right-menu' ) ); ?>

        </div>
        <div id="header-social" class="hidden-xs">
          <ul>
            <?php
            foreach (get_social_links() as $key => $link) {
              echo "<li class='social-item'>";
              echo "<a href='$link->url' title='$link->title' target='_blank'><i class='fa $link->icon'></i></a>";
              echo "</li>";
            }
             ?>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <div id="header-image" style="background-color: <?php echo get_field('header_background_color'); ?>;">
    <?php
    $image = get_field('header_picture');

    if( !empty($image) ): ?>

      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

    <?php endif; ?>
    <div class="title">
      <?php
        $title = get_field('header_title');
        $subtitle = get_field('header_subtitle');

        if( !empty($title) )
          echo "<h1>$title</h1>";
        if( !empty($subtitle) )
          echo "<p class='hidden-xs'>$subtitle</p>";
      ?>
    </div>

  </div>
  <div id="main">

