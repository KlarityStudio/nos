<section class="testx">
  <?php if (is_front_page() ): ?>
    <div class="wpcm-vehicle-filters">
      <?php
      /**
       * wpcm_listings_vehicle_filters hook
       */
      do_action( 'wpcm_listings_vehicle_filters', $atts );
      ?>
    </div>

    <?php do_action( 'wpcm_after_listings_filter' ); ?>
    <?php get_template_part( 'includes/modules/module', 'stickyPosts' ); ?>
  <?php endif; ?>
</section>
