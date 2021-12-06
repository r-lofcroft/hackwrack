<?php

function hackwrackThemeSupport()
{
  //Adds dynamic title support
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'hackwrackThemeSupport');

function hackwrackMenus()
{

  $locations = array(
    'primary' => "Desktop Primary Left Sidebar",
    'footer' => "Footer Menu Items"
  );
  register_nav_menus($locations);
}
add_action('init', 'hackwrackMenus');


function hackwrackRegisterStyles()
{
  // Version variable
  $version = wp_get_theme()->get('Version');

  wp_enqueue_style('hackwrack-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
}
add_action('wp_enqueue_scripts', 'hackwrackRegisterStyles');


function hackwrackRegisterScripts()
{
  wp_enqueue_script('hackwrack-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', true);
  wp_enqueue_script('hackwrack-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1.16.0', true);
  wp_enqueue_script('hackwrack-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '4.4.1', true);
  wp_enqueue_script('hackwrack-main', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'hackwrackRegisterScripts');


function hackwrackWidgetAreas()
{

  register_sidebar(
    array(
      'before_title' => '<h2>',
      'after_title' => '</h2>',
      'before_widget' => '',
      'after_widget' => '',
      'name' => 'Sidebar Area',
      'id' => 'sidebar-1',
      'description' => 'Sidebar Widget Area'
    )
  );
  /* register_sidebar(
    array(
      'before_title' => '',
      'after_title' => '',
      'before_widget' => '',
      'after_widget' => '',
      'name' => 'Footer Area',
      'id' => 'footer-1',
      'description' => 'Footer Widget Area'
    )
  ); */

  register_sidebar( array(
'name' => 'Footer Area 1',
'id' => 'footer-1',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );

register_sidebar( array(
'name' => 'Footer Area 2',
'id' => 'footer-2',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );

register_sidebar( array(
'name' => 'Footer Area 3',
'id' => 'footer-3',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );

}
add_action('widgets_init', 'hackwrackWidgetAreas');

