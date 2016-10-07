<dl>
  <dt>R:</dt><dd><?php $price = get_post_meta( $post->ID,'price', true); $formattedNum = number_format($price); echo $formattedNum; ?></dd>
  <dt>Make:</dt><dd><?php echo get_post_meta( $post->ID,'make', true); ?></dd>
  <dt>Year:</dt><dd><?php echo get_post_meta( $post->ID,'year', true); ?></dd>
  <dt>Mileage:</dt><dd><?php echo get_post_meta( $post->ID,'mileage', true); ?></dd>
  <dt>Fuel:</dt><dd><?php echo get_post_meta( $post->ID,'fuel', true); ?></dd>
  <dt>Colour:</dt><dd><?php echo get_post_meta( $post->ID,'colour', true); ?></dd>
  <dt>Body Type:</dt><dd><?php echo get_post_meta( $post->ID,'shape', true); ?></dd>
  <dt>Transmission:</dt><dd><?php echo get_post_meta( $post->ID,'trans', true); ?></dd>
  <dt>Doors:</dt><dd><?php echo get_post_meta( $post->ID,'doors', true); ?></dd>
  <dt>Engine:</dt><dd><?php echo get_post_meta( $post->ID,'engine', true); ?></dd>
  <dt>Power (KW):</dt><dd><?php echo get_post_meta( $post->ID,'power', true); ?></dd>
  <dt>Power (HP):</dt><dd><?php echo get_post_meta( $post->ID,'powerhp', true); ?></dd>
</dl>
