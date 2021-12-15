<div class="container">
  <div class="post">
    <div class="media">

      <img src="    
      <?php
      the_post_thumbnail_url('thumbnail')
      ?>" alt="image">

      <div class="media-body">
        <span><?php the_category(); ?></span>
        <h3 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>

        <div class="meta">
          <span class="date">
            <?php the_date(); ?></span>
        </div>



        <div class="intro">
          <?php
          the_excerpt();
          ?></div>

        <a class="more-link" href="<?php the_permalink() ?>">Läs mer &rarr;</a>
      </div>
    </div>
  </div>


</div>