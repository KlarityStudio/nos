<?php

/*
 **This php file includes the functions to remove
 **the wordpress version numbers to secure the site for hackers
 */
	require get_template_directory() . '/includes/admin/cleanup.php';

	//Below are the required scripts which handles all the cpt's and the Nos admin page
	require get_template_directory() . '/includes/admin/theme-functions.php';
	require get_template_directory() . '/includes/admin/enqueue.php';
	require get_template_directory() . '/includes/admin/theme-support.php';
	require get_template_directory() . '/includes/admin/cpt-new-cars.php';
	require get_template_directory() . '/includes/admin/sidebar.php';

/*------------     Enqueing of Styles and JS     -----------*/
	function nos_scripts() {

		if (! is_admin()) {
			wp_enqueue_style('nos_style', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all' );
			wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,300', false );

			wp_deregister_script('jquery');
			wp_register_script('jquery', get_stylesheet_directory_uri() . '/_build/js/min/jquery-3.1.1.min.js', array(),'', false);
			wp_enqueue_script('jquery');

			wp_register_script('nos_initJS', get_stylesheet_directory_uri() . '/_build//js/min/init.min.js', array('jquery'),'1.0.0', true);
			wp_enqueue_script('nos_initJS');

	  	}
	}

	add_action('wp_enqueue_scripts','nos_scripts');
