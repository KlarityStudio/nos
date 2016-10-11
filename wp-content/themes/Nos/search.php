<?php get_header(); ?>
<section>
  <h1>Search Page</h1>
  <?php echo do_shortcode('[searchandfilter fields="search,post_types,wpcm_make_model" post_types="wpcm_vehicle" taxonomies="wpcm_make_model" headings="Post Types"]') ?>
  <h2><?php echo the_title(); ?></h2>
  <div class="car-details">
    <?php echo the_post_thumbnail(); ?>
  </div>
</section>
<?php get_footer(); ?>
