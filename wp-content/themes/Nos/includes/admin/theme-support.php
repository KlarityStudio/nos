<?php
/*

@package Nos

    ==============================
        Theme Support Options
    ==============================
*/

function nos_theme_support(){
	add_theme_support('menus');
	add_theme_support('post-thumbnails');
	add_theme_support('post-formats', array('aside', 'image', 'video','gallery'));
	add_theme_support( 'html5', array( 'search-form' ) );
	add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );
	register_nav_menu('primary','Primary Header');
	register_nav_menu('news','News Nav');
}
add_action('after_setup_theme','nos_theme_support');

 ?>
