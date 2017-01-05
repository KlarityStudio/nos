<section >
  <h1><?php the_title(); ?> </h1>
  <?php
   $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
   $count = -1;
   $args = array(
       'post_type' 				        => 'cars',
       'order_by'					        => 'menu_order',
       'order'						        => 'DEC',
       'update_post_term_cache' 	=> false,
       'post_per_page' 			      => $count,
       'pagination'				        => false,
       'paged'						        => $paged,
       );
   $cars = new WP_Query($args);

if( $cars->have_posts()) : ?>
  <ul>
    <?php while( $cars->have_posts() ) : $cars->the_post();
      $featured_image = nos_get_attachment();?>
      <li>
        <div class="advert-lockup">
          
          <?php the_post_thumbnail('small') ?></img>
          <div class="advert-details">
            <h2><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></h2></a>
              <div class="minor-specifications">
                <ul>
                  <li>
                    <div class="">R<?php $price = get_post_meta( $post->ID,'price', true); $formatted_Num = number_format($price); echo $formatted_Num; ?></div>
                  </li>
                  <li>
                    <div class="">Year:<?php echo get_post_meta( $post->ID,'year', true); ?></div>
                  </li>
                  <li>
                    <div class="">Mileage: <?php echo get_post_meta( $post->ID,'mileage', true); ?></div>
                  </li>
                  <li>
                    <div class="">Transmission: <?php echo get_post_meta( $post->ID,'trans', true); ?></div>
                  </li>
                </ul>
              </div>
            <p><?php the_excerpt(); ?></p>
            <a href="<?php echo the_permalink(); ?>">View Car</a>
          </div>
        </div>
      </li>
    <?php endwhile; ?>
  </ul>
<?php endif;
wp_reset_query();?>

<?php get_footer(); ?>
