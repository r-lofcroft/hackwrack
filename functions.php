<?php

function hackwrackThemeSupport()
{
  //Adds dynamic title support
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
  add_post_type_support('page', 'excerpt');
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
/**
 * Filter the excerpt length to 30 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wp_example_excerpt_length($length)
{
  return 30;
}
add_filter('excerpt_length', 'wp_example_excerpt_length');

function hackwrackRegisterStyles()
{
  // Version variable
  $version = wp_get_theme()->get('Version');

  wp_enqueue_style('hackwrack-style', get_template_directory_uri() . "/style.css");
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

  register_sidebar(array(
    'name' => 'Footer Area 1',
    'id' => 'footer-1',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ));

  register_sidebar(array(
    'name' => 'Footer Area 2',
    'id' => 'footer-2',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ));

  register_sidebar(array(
    'name' => 'Footer Area 3',
    'id' => 'footer-3',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ));
}
add_action('widgets_init', 'hackwrackWidgetAreas');

function list_cases()
{
  global $string;
  $query = new WP_Query(array(
    'category_name' => 'Cases',
    'posts_per_page' => 4
  ));
  if ($query->have_posts()) {
    $string .= '<div class="customers-items">';
    while ($query->have_posts()) {
      $query->the_post();
      $string .= '<div class="customer-item"><a href="' . get_the_permalink() . '">';
      $string .= '<div class="customer-item-img">';
      $string .= '<img src="' . get_field('case_image') . '" alt="Customer" width="200px">';
      $string .= '</div>';
      $string .= '<div class="customer-item-desc"><h3>' . get_field('case_name') . '</h3><p>' . get_field('case_desc') . '</p></div>';
      $string .= '</a></div>';
    }
  }
  $string .= '</div>';
  return $string;
  wp_reset_postdata();
}
add_shortcode('show_cases', 'list_cases');

function list_stories()
{
  global $stringStory;
  $query = new WP_Query(array(
    'category_name' => 'Stories',
    'posts_per_page' => 2
  ));
  if ($query->have_posts()) {
    $stringStory .= '<div class="stories-items">';
    while ($query->have_posts()) {
      $query->the_post();
      $stringStory .= '<div class="stories-item" style="background: linear-gradient(0deg, rgba(250,250,250,1) 10%, rgba(255,255,255,0) 100%), url(' . get_field('story_image') . ')"><a href="' . get_the_permalink() . '">';
      $stringStory .= '<div class="stories-item-desc"><h3>' . get_field('story_name') . '</h3><p>' . get_field('story_desc') . '</p></div>';
      $stringStory .= '</a></div>';
    }
  }
  $stringStory .= '</div>';
  return $stringStory;
  wp_reset_postdata();
}
add_shortcode('show_stories', 'list_stories');
