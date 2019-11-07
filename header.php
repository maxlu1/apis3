<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="page">


    <header id="masthead" class="site-header" role="banner">


      <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
        <?php

        $custom_logo_url = wp_get_attachment_image_url(get_theme_mod('custom_logo'), 'full');

        echo '<div class="wptest_apis3-header-brandImage" style="background-image: url(' . esc_url($custom_logo_url) . ');"></div>';


        ?>
      </a>

      <div class="site-header-searchButton">
        <div class="icon">
          <svg viewBox="0 -5 42 42" class="item-iconSymbol">
            <path d="M12 0 A12 12 0 0 0 0 12 A12 12 0 0 0 12 24 A12 12 0 0 0 18.5 22.25 L28 32 L32 28 L22.25 18.5 A12 12 0 0 0 24 12 A12 12 0 0 0 12 0 M12 4 A8 8 0 0 1 12 20 A8 8 0 0 1 12 4"></path>
          </svg>
        </div>
        <p>EN</p>
      </div>
      <nav id="site-navigation" class="main-navigation" role="navigation">
        <?php
        $args = [
          'theme_location'  =>  'main-menu',
          'menu'            =>  'Main Menu',
          'container'       =>  'div',
          'container_class' =>  'container-class',
          'container_id'    =>  'container-id',
          'items_wrap'      =>  '<ul id="%1$s" class="%2$s">%3$s</ul>',
          'menu_class'      =>  'items-wrap-class',
          'menu_id'         =>  'items-wrap-id',
          'depth'           =>  0,
          'fallback_cb'     =>  'wp_page_menu',
        ];
        wp_nav_menu($args);
        ?>
      </nav>


    </header>

    <div id="content" class="site-content">