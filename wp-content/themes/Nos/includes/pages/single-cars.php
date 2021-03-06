<?php get_header(); ?>
  <section class="single-car-post">
    <a class="back" href="<?php echo site_url('/new-cars/'); ?>"><div>back</div></a>
    <div class="advert-lockup">
      <div class="title">
        <?php echo the_title('<h1>', '</h1>') ?>
      </div>
      <div class="advert-main">
        <div class="advert-images">
          <div class="featured-image">
            <?php $featured_image = nos_get_attachment(); ?>
            <ul class="car-gallery">
              <li class="car-featureImage active"><img  src="<?php echo $featured_image; ?>"></li>
              <?php global $post;
              $images = get_children( array (
                'post_parent'   => $post->ID,
                'post_type'     => 'attachment',
              ));
              if ( empty($images) ) {
                  // no attachments here
              }else{
                foreach ( $images as $attachment_id => $attachment ) {
                  $image_url = wp_get_attachment_url( $attachment_id );
                  echo '<li><img class="car-image" src='.$image_url.'></li>';
                }
              }
              ?>
            </ul>
          </div>
        </div>
        <div class="car-specifications">
          <?php get_template_part( 'includes/modules/module', 'carSpecifications' ); ?>
          <div class="vehicle-contact">
            <a href="mailto:miles@klarity.co.za?subject=Can I please get some more info about the <?php the_title();?>">Enquire about this Car</a>
            <a href="tel:0218987677">Give Us a Call</a>
          </div>
        </div>
      </div>
      <div class="features-wrapper">
        <div class="interior-features feature-container">
          <h2>Interior Features</h2>

            <?php get_template_part( 'includes/modules/module', 'interiorMetaboxes' ); ?>

          <?php if(get_post_meta($post->ID, 'interior-textarea', true)){ ?>
            <h3>Additional Features</h3>
            <?php $additionalFeatures = get_post_meta($post->ID, 'interior-textarea', true);
            $individualFeature = explode(',', $additionalFeatures); ?>
            <ul class="additional-interior">
              <?php foreach ( $individualFeature as $feature ) { ?>
              <li><?php echo $feature; ?></li>
              <?php  } ?>
            </ul>
          <?php } ?>
        </div>
        <div class="exterior-features feature-container">
          <h2>Exterior Features</h2>
          <ul>
            <?php get_template_part( 'includes/modules/module', 'exteriorMetaboxes' ); ?>
          </ul>
          <?php if(get_post_meta($post->ID, 'exterior-textarea', true)){ ?>
            <h3>Additional Features</h3>
            <?php $additionalFeatures = get_post_meta($post->ID, 'exterior-textarea', true);
            $individualFeature = explode(',', $additionalFeatures); ?>
            <ul class="additional-exterior">
              <?php foreach ( $individualFeature as $feature ) { ?>
              <li><?php echo $feature; ?></li>
              <?php  } ?>
            </ul>
          <?php } ?>
        </div>
      </div>
      <div class="description">
        <?php the_content(); ?>
      </div>
    </div>
  </section>
  <section id="related-vehicles">
    <?php related_cars('cars'); ?>
  </section>
  <section id="enquiry-form ">
    <?php get_template_part('includes/modules/module','enquiryForm'); ?>
  </section>
<?php get_footer(); ?>
