<?php
  if(get_post_meta($post->ID, 'checkbox', true)){ ?>
    <li>
      <span><?php get_template_part('_build/icons/icon', 'abs' ); ?></span>ABS
    </li>
  <?php  }
  if(get_post_meta($post->ID, 'checkbox-2', true)){ ?>
    <li>
      <span><?php get_template_part('_build/icons/icon', 'ebd' ); ?></span>EBD
    </li>
  <?php  }
  if(get_post_meta($post->ID, 'checkbox-3', true)){ ?>
  <li>
    <span><?php get_template_part('_build/icons/icon', 'headlights' ); ?></span>Auto HeadLamps
  </li>
  <?php  }
  if(get_post_meta($post->ID, 'checkbox-4', true)){ ?>
    <li>
      <span><?php get_template_part('_build/icons/icon', 'rainSensor' ); ?></span>Rain Sensor
    </li>
  <?php  }
  if(get_post_meta($post->ID, 'checkbox-5', true)){ ?>
    <li>
      <span><?php get_template_part('_build/icons/icon', 'parkAssist' ); ?></span>Park Assist
    </li>
  <?php  }
  if(get_post_meta($post->ID, 'checkbox-6', true)){ ?>
    <li>
      <span><?php get_template_part('_build/icons/icon', 'reverseCamera' ); ?></span>Reverse Camera
    </li>
  <?php  } ?>
