<dl>
  <li><dt>R</dt><dd><?php echo get_post_meta( $post->ID,'price', true); ?></dd></li>
  <li><dt>Make:</dt><dd><?php echo get_post_meta( $post->ID,'make', true); ?></dd></li>
  <li>Year:<?php echo get_post_meta( $post->ID,'year', true); ?></li>
  <li>Mileage:<?php echo get_post_meta( $post->ID,'mileage', true); ?></li>
  <li>Fuel:<?php echo get_post_meta( $post->ID,'fuel', true); ?></li>
  <li>Colour:<?php echo get_post_meta( $post->ID,'colour', true); ?></li>
  <li>Body Type:<?php echo get_post_meta( $post->ID,'shape', true); ?></li>
  <li>Transmission:<?php echo get_post_meta( $post->ID,'trans', true); ?></li>
  <li>Doors:<?php echo get_post_meta( $post->ID,'doors', true); ?></li>
  <li>Engine:<?php echo get_post_meta( $post->ID,'engine', true); ?></li>
  <li>Power (KW):<?php echo get_post_meta( $post->ID,'power', true); ?></li>
  <li>Power (HP):<?php echo get_post_meta( $post->ID,'powerhp', true); ?></li>
</dl>
