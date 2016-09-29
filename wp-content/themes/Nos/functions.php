<?php


/*------------     Enqueing of Styles and JS     -----------*/
function nos_scripts() {
	if (! is_admin()) {
		wp_enqueue_style('nos_style', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all' );
		wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,300', false );

		wp_register_script('nos_initJS', get_stylesheet_directory_uri() . '/_build//js/min/init.min.js', array('jquery'),'1.0.0', true);
		wp_enqueue_script('nos_initJS');

		wp_register_script('nos_jquery', get_stylesheet_directory_uri() . '/_build/js/min/jquery-3.1.1.min.js', array(),'', false);
		wp_enqueue_script('nos_jquery');
  	}
}

add_action('wp_enqueue_scripts','nos_scripts');

/*------------     Enqueing of Theme Support     -----------*/

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

//Page Slug Body class
function add_slug( $classes ){
    global $post;
    if ( isset( $post ) ){
        $classes[] = $post->post_type . '-' . $post->post_name;
    }
   return $classes;
}
add_filter('body_class' , 'add_slug' );

function wcount(){
  ob_start();
  the_content();
  $content = ob_get_clean();
  return sizeof(explode(" ", $content));
}

/*------------     Nos Custom Post Menu Page    -----------*/
// function nos_post_page(){
//   //Generate Nos Admin Page
//  	add_menu_page( 'Nos Theme Options', 'Nos Settings', 'manage_options', 'nos_menu', 'nos_menu_theme_create_page' );
//   }
// add_action('admin_menu', 'nos_post_page');

require get_template_directory() . '/theme-support/cars-cpt.php';

	add_action( 'admin_enqueue_scripts', 'load_admin_styles' );

 function load_admin_styles() {
	 wp_enqueue_style( 'nos_admin_css', get_stylesheet_directory_uri() . '/theme-support/admin-scripts/admin-css.css', false, '1.0.0' );
	//  wp_enqueue_style( 'admin_js_', get_template_directory_uri() . '/admin-style.js', false, '1.0.0' );
 }

 function nos_get_attachment( $num= 1){
  	$output = ' ';
  	if (has_post_thumbnail() && $num == 1):
 		$output = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
 			else:
	 		 	$attachments = get_posts( array(
	 				'post_type' 	=> 'attachment',
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

 /*-----     Changes excerpt length to 20 charachter     -----*/
 function nos_custom_excerpt_length( $length ) {
     return 20;
 }
 add_filter( 'excerpt_length', 'nos_custom_excerpt_length', 999 );
