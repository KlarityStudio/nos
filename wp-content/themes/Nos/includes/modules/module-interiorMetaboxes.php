<ul>

<?php
  if(get_post_meta($post->ID, 'meta-checkbox-2', true)){ ?>
    <li>
      <span><?php get_template_part('_build/icons/icon', 'airbags' ); ?></span>Airbags
    </li>
  <?php  }
  if(get_post_meta($post->ID, 'meta-checkbox-3', true)){ ?>
  <li>
    <span><?php get_template_part('_build/icons/icon', 'mp3' ); ?></span>MP3 / CD Player
  </li>
  <?php  }
  if(get_post_meta($post->ID, 'meta-checkbox-4', true)){ ?>
    <li>
      <span><?php get_template_part('_build/icons/icon', 'handsfree' ); ?></span>Handsfree
    </li>
  <?php  }
  if(get_post_meta($post->ID, 'meta-checkbox-5', true)){ ?>
    <li>
      <span><?php get_template_part('_build/icons/icon', 'ac' ); ?></span>AirCon
    </li>
  <?php  }
  if(get_post_meta($post->ID, 'meta-checkbox-6', true)){ ?>
    <li>
      <span><?php get_template_part('_build/icons/icon', 'steering' ); ?></span>Multifunctional Steering Wheel
    </li>
  <?php  }
  $windowNumber = get_post_meta($post->ID, 'meta-checkbox-7', true);
  if(get_post_meta($post->ID, 'meta-checkbox-7', true) && $windowNumber != 'None' ){ ?>
    <li>
      <?php $windowNumber = get_post_meta($post->ID, 'meta-checkbox-7', true); ?>
      <?php if ($windowNumber == 'Front'){ ?>
        <span><?php get_template_part('_build/icons/icon', 'window' ); ?></span> Front Electric Windows
      <?php }elseif ($windowNumber == 'Front + Back') { ?>
        <span><?php get_template_part('_build/icons/icon', 'window' ); ?></span>  Front + Back Electric Windows
      <?php } ?>
    </li>
  <?php  } ?>
</ul>
