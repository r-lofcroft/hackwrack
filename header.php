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
  <link href="https://fonts.googleapis.com/css2?family=Share&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

  <?php

  wp_head();

  ?>

</head>

<body>

  <header class="header text-center">


    <nav class="navbar">

      <div id="navigation" class="">
        <?php
        if (function_exists('the_custom_logo')) {

          $custom_logo_id = get_theme_mod('custom_logo');
          $logo = wp_get_attachment_image_src($custom_logo_id);
        }
        ?>
        <div>
          <a href="<?php echo home_url(); ?>">
            <img class="logo" src="<?php echo $logo[0] ?>" alt="logo">
          </a>
        </div>
        <?php
        wp_nav_menu(
          array(
            'menu' => 'primary',
            'container' => '',
            'theme_location' => 'primary',
            'items_wrap' => '<div class="navbar-nav"><ul id="nav-links">%3$s</ul></div>',

          )
        );
        ?>
      </div>

      <?php

      dynamic_sidebar('sidebar-1');

      ?>



    </nav>
  </header>
  <div class="main-wrapper">
    <!-- <header class="page-title theme-bg-light text-center gradient py-5">
      <h1 class="heading"><?php the_title() ?></h1>
    </header> -->