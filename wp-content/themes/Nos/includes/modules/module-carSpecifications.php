<dl>
  <li><dt>R</dt><dd><?php echo get_post_meta( $post->ID,'price', true); ?></dd></li>
  <li><dt>Make:</dt><dd><?php echo get_post_meta( $post->ID,'make', true); ?></dd></li>
  <li><dt>Year:</dt><dd><?php echo get_post_meta( $post->ID,'year', true); ?></dd></li>
  <li><dt>Mileage:</dt><dd><?php echo get_post_meta( $post->ID,'mileage', true); ?></dd></li>
  <li><dt>Fuel:</dt><dd><?php echo get_post_meta( $post->ID,'fuel', true); ?></dd></li>
  <li><dt>Colour:</dt><dd><?php echo get_post_meta( $post->ID,'colour', true); ?></dd></li>
  <li><dt>Body Type:<dt><dd><?php echo get_post_meta( $post->ID,'shape', true); ?></dd></li>
  <li><dt>Transmission:</dt><dd><?php echo get_post_meta( $post->ID,'trans', true); ?></dd></li>
  <li><dt>Doors:</dt><dd><?php echo get_post_meta( $post->ID,'doors', true); ?></dd></li>
  <li><dt>Engine:</dt><dd><?php echo get_post_meta( $post->ID,'engine', true); ?></dd></li>
  <li><dt>Power (KW):</dt><dd><?php echo get_post_meta( $post->ID,'power', true); ?></dd></li>
  <li><dt>Power (HP):</dt><dd><?php echo get_post_meta( $post->ID,'powerhp', true); ?></dd></li>
</dl>
