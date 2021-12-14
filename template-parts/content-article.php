<div class="blog-container">
  <div class="blog-header">
    <span><?php the_date(); ?></span>
    <h1><?php the_title(); ?>.</h1>
    <?php the_category(); ?>
  </div>
  <div class="blog-content">
    <?php
      the_content();
    ?>
  </div>

<?php
  /*comments_template();*/
?>

</div>