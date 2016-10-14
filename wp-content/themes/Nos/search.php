<?php
get_header(); ?>
<section>
  <h1>Search Page</h1>
  <?php echo do_shortcode('[searchandfilter fields="search,post_types,wpcm_make_model" post_types="wpcm_vehicle" taxonomies="wpcm_make_model" headings="Post Types"]');
  if (have_posts() ){
        while (have_posts() ) : the_post(); ?>

  <h2><?php echo the_title(); ?></h2>
  <div class="car-details">
    <div class="feature-image">
    <?php echo the_post_thumbnail(); ?>
    </div>
  </div>
  <div class="specifications">
    <dl>
      <dt>R:</dt><dd> <?php $price= get_post_meta( $post->ID, 'wpcm_price', true); $formattedNum = number_format($price); echo $formattedNum; ?></dd>
      <dt>Make:</dt><dd> <?php echo get_post_meta( $post->ID, 'wpcm_make', true); ?></dd>
      <dt>Model:</dt><dd> <?php echo get_post_meta( $post->ID, 'wpcm_model', true); ?></dd>
      <dt>Year:</dt><dd> <?php echo get_post_meta( $post->ID, 'wpcm_frdate', true); ?></dd>
      <dt>Engine:</dt><dd> <?php echo get_post_meta( $post->ID, 'wpcm_engine', true); ?></dd>
      <dt>Mileage(KM):</dt><dd> <?php echo get_post_meta( $post->ID, 'wpcm_mileage', true); ?></dd>
      <dt>Fuel Type:</dt><dd> <?php echo get_post_meta( $post->ID, 'wpcm_fuel_type', true); ?></dd>
      <dt>Color:</dt><dd> <?php echo get_post_meta( $post->ID, 'wpcm_color', true); ?></dd>
      <dt>Transmission:</dt><dd> <?php echo get_post_meta( $post->ID, 'wpcm_transmission', true); ?></dd>
    </dl>
  </div>
  <div class="description">
    <?php the_content(); ?>
  </div>


<?php endwhile;
      }?>
  </section>
  <section>
    <div class="related-cars">
      <?php related_cars('wpcm_vehicle'); ?>
    </div>
  </section>
<?php get_footer(); ?>
