<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title>Nos</title>
    <?php  wp_head(); ?>
  </head>
  <header>
    <nav>
      <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
    </nav>
  </header>
  <body <?php body_class(); ?>>
