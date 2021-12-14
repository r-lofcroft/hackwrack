  <?php
  /* Template Name: Work with us */
  get_header();

?>
<?php
  if (have_posts()) ;
    while (have_posts()) : the_post();?>

      <?php get_template_part('template-parts/content', 'page'); ?>

      

      <div class="work-items">

<div class="work-items-ingress">
  <h2>Lediga tjänster</h2>
  <p> Nedan hittar du alla våra lediga tjänster just nu. Om du hittar något som passar, skicka in en ansökan idag!</p>
</div>

<div class="work-item">

  <img src="<?php the_field('picture'); ?>" alt="" />

<div class="work-item-content">
  <h3><?php the_field('title');?></h3>
  <p><?php the_field('job-description')?></p>
  <div>
        <span style="font-weight: bold; "><?php the_field('date')?></span>
        <button >Ansök nu</button>
  </div>
  </div>

  </div>
  
  

</div>
  </div>
      

    
  <?php endwhile; ?>

  


  <?php get_footer(); ?>