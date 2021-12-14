<?php
get_header()
?>


<article class="content">

  <?php
  if (have_posts()) {
    while (have_posts()) {
      the_post();

      get_template_part('template-parts/content', 'archive');
    }
  }
  ?>

  <?php
  /**
   * Exclude sticky posts from archive page.
   */
  function hackwrack_ignore_sticky_posts($query)
  {
    if (is_archive() && $query->is_main_query())
      $query->set('post__not_in', get_option('sticky_posts'));
  }
  add_action('pre_get_posts', 'hackwrack_ignore_sticky_posts');
  ?>

  <?php the_posts_pagination(array(
    'mid_size'  => 2,
    'prev_text' => __('Back', 'textdomain'),
    'next_text' => __('Next', 'textdomain'),
  )); ?>

</article>

<?php
get_footer()
?>