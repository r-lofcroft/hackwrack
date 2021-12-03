<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Blog Site Template">
  <meta name="author" content="https://www.linkedin.com/in/robin-williscroft/">
  <link rel="shortcut icon" href="/wp-content/themes/hackwrack/assets/images/logo.png">

  <?php

  wp_head();

  ?>

</head>

<body>

  <header class="header text-center">
    <a class="site-title pt-lg-4 mb-0" href="/hackwrack">
      <?php echo get_bloginfo('name'); ?>
    </a>

    <nav class="navbar navbar-expand-lg navbar-dark">

      <div id="navigation" class="collapse navbar-collapse flex-column">
        <?php
        if (function_exists('the_custom_logo')) {

          $custom_logo_id = get_theme_mod('custom_logo');
          $logo = wp_get_attachment_image_src($custom_logo_id);
        }
        ?>
        <img class="mb-3 mx-auto logo" src="<?php echo $logo[0] ?>" alt="logo">
        <?php
        wp_nav_menu(
          array(
            'menu' => 'primary',
            'container' => '',
            'theme_location' => 'primary',
            'items_wrap' => '<ul id="" class="navbar-nav flex-column text-sm-center text-md-left">%3$s</ul>'
          )
        );
        ?>
        <hr>
      </div>

      <?php

      dynamic_sidebar('sidebar-1');

      ?>


    </nav>
  </header>
  <div class="main-wrapper">
    <header class="page-title theme-bg-light text-center gradient py-5">
      <h1 class="heading"><?php the_title() ?></h1>
    </header>