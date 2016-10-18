<?php
if (have_posts() ){
      while (have_posts() ) : the_post(); ?>

      <h2><?php echo the_title(); ?></h2>
      <div class="car-details">
        <div class="feature-image">
        <?php echo the_post_thumbnail(); ?>
        </div>
      </div>
      <div class="description">
        <?php the_content(); ?>
      </div>

    <?php endwhile;
  }?>
