<!doctype html>
<html dir="ltr" lang="en-US" class="no-js">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if ( is_category() ) {
      echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
    } elseif ( is_tag() ) {
      echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
    } elseif ( is_archive() ) {
      wp_title(''); echo ' Archive | '; bloginfo( 'name' );
    } elseif ( is_search() ) {
      echo 'Search for &quot;'.esc_html($s).'&quot; | '; bloginfo( 'name' );
    } elseif ( is_home() || is_front_page() ) {
      bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
    }  elseif ( is_404() ) {
      echo 'Error 404 Not Found | '; bloginfo( 'name' );
    } elseif ( is_single() ) {
      wp_title('');
    } else {
      echo wp_title( ' | ', 'false', 'right' ); bloginfo( 'name' );
    } ?></title>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/app.css" />
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700|Raleway:500' rel='stylesheet' type='text/css'>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-144x144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-precomposed.png">

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <?php do_action('AdamPress_after_body'); ?>

  <div class="off-canvas-wrap" data-offcanvas>
  <div class="inner-wrap">

  <?php do_action('AdamPress_layout_start'); ?>

  <nav class="tab-bar show-for-small-only">
    <section class="left-small">
      <a class="left-off-canvas-toggle menu-icon" ><span></span></a>
    </section>
    <section class="middle tab-bar-section">

      <p class="h1 title"><a href="<?php echo home_url(); ?>" rel="home" title="home">adam <i class="icon-infinity"></i> infinitum</a></p>

    </section>
  </nav>

  <aside class="left-off-canvas-menu">
    <?php AdamPress_mobile_off_canvas(); ?>
  </aside>

        <div class="top-bar-container contain-to-grid show-for-medium-up">
            <nav class="top-bar" data-topbar="">
                <ul class="title-area">
                    <li class="name">
                        <p class="h1"><a href="<?php echo home_url(); ?>" rel="home" title="home">adam <i class="icon-infinity"></i> infinitum</a></p>
                    </li>
                </ul>
                <section class="top-bar-section">
                    <?php AdamPress_top_bar_l(); ?>
                    <?php AdamPress_top_bar_r(); ?>
                </section>
            </nav>
        </div>

<section class="container" role="document">
  <?php do_action('AdamPress_after_header'); ?>
