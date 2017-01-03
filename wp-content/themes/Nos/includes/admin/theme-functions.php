<?php

/*

@package Nos

    ==============================
        Theme Custom Functions
    ==============================
*/

//Related Posts Function

function related_cars($post_type){
	global $post;
  $current_post_type = get_post_type( $post );

 // The query arguments
  $args = array(
    'posts_per_page'    => 4,
    'order'             => 'DEC',
    'orderby'           => 'rand',
    'post_type'         => $post_type,
    'post__not_in'      => array( $post->ID, )

  );

 // Create the related query
 $rel_query = new WP_Query( $args );

 // Check if there is any related posts
 if( $rel_query->have_posts() ) :
 ?>
	<h1 class="simillar">Simillar Cars</h1>
	<div id="related" class="">
		<ul class="group">
			<?php
	 	// The Loop
	 		while ( $rel_query->have_posts() ) :
	    	$rel_query->the_post();
	 			$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 3000,1000 ), false, '' );
				?>
	    	<li>
	    		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark">
	      		<div class="advert-image" style="background-image: url(<?php echo $thumb[0]; ?>)"></div>
					<div class="advert-info">
						<h2 class="entry-title"><?php the_title() ?></h2>
						<p><span>R </span><?php
							if ($post_type === 'cars') {
								$price = get_post_meta( $post->ID,'price', true); $formattedNum = number_format($price); echo $formattedNum;
							}elseif ($post_type === 'wpcm_vehicle') {
									$price = get_post_meta( $post->ID,'wpcm_price', true); $formattedNum = number_format($price); echo $formattedNum;
							}?>
                        </p>
					</a>
					<a href="<?php the_permalink(); ?>">View Vehicle</a>
				</div>
	    	</li>
				<?php
	 		endwhile;
				?>
	 	</ul><!-- .group -->
	</div><!-- #related -->
 <?php
 endif;

 // Reset the query
	wp_reset_query();
}

function nos_get_attachment( $num= 1){
	$output = ' ';
	if (has_post_thumbnail() && $num == 1):
		$output = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
		else:
		 	$attachments = get_posts( array(
				'post_type' 		=> 'attachment',
				'numberposts' 	=> $num,
				'post_parent' 	=> get_the_ID()
			) );
		if( $attachments && $num == 1):
			foreach ($attachments as $attachment) :
				$output= wp_get_attachment_url( $attachment->ID);
			endforeach;
			elseif( $attachments && $num > 1 ):
				$output = $attachments;
		endif;
		wp_reset_postdata();
	endif;

	return $output;
}
