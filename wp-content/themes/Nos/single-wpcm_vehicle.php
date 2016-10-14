<?php get_header(); ?>
<section>
  <?php the_title('<h1>','</h1>');
    if (have_posts() ){
      while (have_posts() ) : the_post();
      the_content();
    endwhile;
  }?>
</section>
<section>
  <div class="related-cars">
    <?php related_cars('wpcm_vehicle'); ?>
  </div>
</section>
<?php get_footer(); ?>
