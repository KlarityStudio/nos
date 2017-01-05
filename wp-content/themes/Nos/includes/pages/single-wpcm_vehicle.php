<?php get_header(); ?>
<section>
  <?php the_title('<h1>','</h1>');
      the_content();
  ?>
</section>
<section>
  <div class="related-cars">
    <?php related_cars('wpcm_vehicle'); ?>
  </div>
</section>
<?php get_footer(); ?>
