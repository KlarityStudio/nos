<?php
if ( ! function_exists( 'nos_pinegrow_setup' ) ) :

function nos_pinegrow_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'nos_pinegrow', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'nos_pinegrow' ),
        'social'  => __( 'Social Links Menu', 'nos_pinegrow' ),
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );
}
endif; // nos_pinegrow_setup

add_action( 'after_setup_theme', 'nos_pinegrow_setup' );


if ( ! function_exists( 'nos_pinegrow_init' ) ) :

function nos_pinegrow_init() {


    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */

    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // nos_pinegrow_setup

add_action( 'init', 'nos_pinegrow_init' );


if ( ! function_exists( 'nos_pinegrow_widgets_init' ) ) :

function nos_pinegrow_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'nos_pinegrow_widgets_init' );
endif;// nos_pinegrow_widgets_init



if ( ! function_exists( 'nos_pinegrow_customize_register' ) ) :

function nos_pinegrow_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'nos_pinegrow_customize_register' );
endif;// nos_pinegrow_customize_register


if ( ! function_exists( 'nos_pinegrow_enqueue_scripts' ) ) :
    function nos_pinegrow_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_deregister_script( 'webfont' );
    wp_enqueue_script( 'webfont', 'https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js', false, null, false);

    wp_deregister_script( 'modernizr' );
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js', false, null, false);

    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js', false, null, true);

    wp_deregister_script( 'webflow' );
    wp_enqueue_script( 'webflow', get_template_directory_uri() . '/js/webflow.js', false, null, true);

    wp_deregister_script( 'nosmin' );
    wp_enqueue_script( 'nosmin', 'https://dl.dropboxusercontent.com/u/5555505/webflow/nos/js/nos-min.js', false, null, true);

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'normalize' );
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', false, null, 'all');

    wp_deregister_style( 'webflow' );
    wp_enqueue_style( 'webflow', get_template_directory_uri() . '/css/webflow.css', false, null, 'all');

    wp_deregister_style( 'nosfwebflow' );
    wp_enqueue_style( 'nosfwebflow', get_template_directory_uri() . '/css/nos-4f5132.webflow.css', false, null, 'all');

    wp_deregister_style( 'nos' );
    wp_enqueue_style( 'nos', 'https://dl.dropboxusercontent.com/u/5555505/webflow/nos/css/nos.css', false, null, 'all');

    wp_deregister_style( 'animate' );
    wp_enqueue_style( 'animate', 'https://dl.dropboxusercontent.com/u/5555505/webflow/nos/css/lib/animate.css', false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'nos_pinegrow_enqueue_scripts' );
endif;

/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */

    /* Pinegrow generated Include Resources End */

    /*----------     New Cars Custom Post Type     ----------*/
    function newCarCustomPostType(){

    	$singular 	            = 'New Car';
    	$plural 	              = 'New Cars';
    	$labels 	              = array(
    		'name' 					      => $plural,
    		'singular_name' 		  => $singular,
    		'add_name' 				    => 'Add New',
    		'add_new_item' 			  => 'Add New ' . $singular,
    		'edit' 					      => 'Edit',
    		'edit_item'				    => 'Edit ' . $singular,
    		'new_item'				    => 'New ' . $singular,
    		'view'					      => 'View ' . $singular,
    		'view_item'			  	  => 'View ' . $singular,
    		'search_item'			    => 'Search ' . $plural,
    		'parent'				      => 'Parent ' . $singular,
    		'not_found' 			    => 'No ' . $plural . ' found',
    		'not_found_in_trash' 	=> 'No ' . $plural . ' in Trash',
    	);
    	$args = array(
    		'labels'			 	       => $labels,
    		'public' 				       => true,
    		'public_queryable' 		 => true,
    		'exclude_from_search'  => false,
    		'show_in_nav_menus' 	 => true,
    		'show_in_ui' 			     => true,
    		// 'show_in_menu' 			   => 'nos_menu',
    		'show_in_admin_bar' 	 => true,
    		'menu_icon' 			     => get_stylesheet_directory_uri() . '/_build/icons/icon-car.svg',
    		'can_export' 			     => true,
    		'delete_with_user' 		 => false,
    		'hierarchical' 			   => false,
    		'query_var' 			     => true,
    		'capability_type' 		 => 'page',
    		'map_meta_cap' 		     => true,
    		'rewrite' 				     => array(
    			'slug' 				       => 'cars',
    			'with_front' 		     => true,
    			'pages' 			       => true,
    			'feeds' 			       => true,
    			),
    		'supports' 				     => array(
    			'title',
    			'editor',
    			'custom_fields',
    			'thumbnail',
    			'post-formats',
    		)
    	);
    	register_post_type('cars', $args);
    }
    add_action('init', 'newCarCustomPostType');

    /*-----------     Car Custom Post Type Metaboxes    -----------*/
    function car_custom_metaboxes(){
    	add_meta_box(
    		'carAdd',
    		"Car Specifications",
    		'car_meta_callback',
    		'cars'
    	);
      add_meta_box(
        'carFeature',
        "Car Interior Features",
        'car_feature_callback',
        'cars'
      );
      add_meta_box(
        'carExterior',
        "Car Exterior Features",
        'car_exterior_callback',
        'cars'
      );
    }

    add_action('add_meta_boxes', 'car_custom_metaboxes');

    function car_meta_callback( $post ){

    	wp_nonce_field( basename( __FILE__ ), 'car_nonce');
    	$car_stored_meta = get_post_meta( $post->ID ); ?>

    <div class="field-wrapper specifications">
    		<div class="meta-row make">
    			<div class="meta-th">
    				<label for="make" class="meta-label">Make:</label>
    			</div>
    			<div class="meta-td">
    				<input type="text" name="make" id="make" value="<?php  if ( ! empty( $car_stored_meta['make'] ) ) echo esc_attr( $car_stored_meta['make'][0] ); ?>"/>
    			</div>
    		</div>
    		<div class="meta-row model">
    			<div class="meta-th">
    				<label for="model" class="meta-label">Model:</label>
    			</div>
    			<div class="meta-td">
    				<input type="text" name="model" id="model" value="<?php  if ( ! empty( $car_stored_meta['model'] ) ) echo esc_attr( $car_stored_meta['model'][0] ); ?>"/>
    			</div>
    		</div>
    		<div class="meta-row year">
    			<div class="meta-th">
    				<label for="year" class="meta-label">Year:</label>
    			</div>
    			<div class="meta-td">
    				<input type="text" name="year" id="year" value="<?php  if ( ! empty( $car_stored_meta['year'] ) ) echo esc_attr( $car_stored_meta['year'][0] ); ?>"/>
    			</div>
    		</div>
    		<div class="meta-row price">
    			<div class="meta-th">
    				<label for="price" class="meta-label">Price:</label>
    			</div>
    			<div class="meta-td">
    				<input type="text" name="price" id="price" value="<?php  if ( ! empty( $car_stored_meta['price'] ) ) echo number_format($car_stored_meta['price'][0] ); ?>"/>
    			</div>
    		</div>
    		<div class="meta-row mileage">
    			<div class="meta-th">
    				<label for="mileage" class="meta-label">Mileage:</label>
    			</div>
    			<div class="meta-td">
    				<input type="text" name="mileage" id="mileage"value="<?php  if ( ! empty( $car_stored_meta['mileage'] ) ) echo esc_attr( $car_stored_meta['mileage'][0] ); ?>"/>
    			</div>
    		</div>
    		<div class="meta-row fuel">
    			<div class="meta-th">
    				<label for="fuel" class="meta-label">Fuel Type:</label>
    			</div>
    			<div class="meta-td">
    				<input type="text" name="fuel" id="fuel"value="<?php  if ( ! empty( $car_stored_meta['fuel'] ) ) echo esc_attr( $car_stored_meta['fuel'][0] ); ?>"/>
    			</div>
    		</div>
    		<div class="meta-row colour">
    			<div class="meta-th">
    				<label for="colour" class="meta-label">Colour:</label>
    			</div>
    			<div class="meta-td">
    				<input type="text" name="colour" id="colour"value="<?php  if ( ! empty( $car_stored_meta['colour'] ) ) echo esc_attr( $car_stored_meta['colour'][0] ); ?>"/>
    			</div>
    		</div>
    		<div class="meta-row shape">
    			<div class="meta-th">
    				<label for="shape" class="meta-label">Body Style:</label>
    			</div>
    			<div class="meta-td">
    				<input type="text" name="shape" id="shape"value="<?php  if ( ! empty( $car_stored_meta['shape'] ) ) echo esc_attr( $car_stored_meta['shape'][0] ); ?>"/>
    			</div>
    		</div>
    		<div class="meta-row transmission">
    			<div class="meta-th">
    				<label for="trans" class="meta-label">Transmission:</label>
    			</div>
    			<div class="meta-td">
    	      <select name="trans" id="trans">
    	        <option value="Manuel" <?php if ( isset ( $car_stored_meta['trans'] ) ) selected( $car_stored_meta['trans'][0], 'Manuel' ); ?>>Manuel</option>';
    	        <option value="Automatic" <?php if ( isset ( $car_stored_meta['trans'] ) ) selected( $car_stored_meta['trans'][0], 'Automatic' ); ?>>Automatic</option>';
    	      </select>
    			</div>
    		</div>
    	  <div class="meta-row doors">
    			<div class="meta-th">
    				<label for="doors" class="meta-label">Doors:</label>
    			</div>
    			<div class="meta-td">
    				<input type="text" name="doors" id="doors"value="<?php  if ( ! empty( $car_stored_meta['doors'] ) ) echo esc_attr( $car_stored_meta['doors'][0] ); ?>"/>
    			</div>
    		</div>
    	  <div class="meta-row engine">
    			<div class="meta-th">
    				<label for="engine" class="meta-label">Engine:</label>
    			</div>
    			<div class="meta-td">
    				<input type="text" name="engine" id="engine"value="<?php  if ( ! empty( $car_stored_meta['engine'] ) ) echo esc_attr( $car_stored_meta['engine'][0] ); ?>"/>
    			</div>
    		</div>
    	  <div class="meta-row power">
    			<div class="meta-th">
    				<label for="power" class="meta-label">Power kw:</label>
    			</div>
    			<div class="meta-td">
    				<input type="text" name="power" id="power"value="<?php  if ( ! empty( $car_stored_meta['power'] ) ) echo esc_attr( $car_stored_meta['power'][0] ); ?>"/>
    			</div>
    		</div>
    	  <div class="meta-row powerhp">
    			<div class="meta-th">
    				<label for="powerhp" class="meta-label">Power hp:</label>
    			</div>
    			<div class="meta-td">
    				<input type="text" name="powerhp" id="powerhp"value="<?php  if ( ! empty( $car_stored_meta['powerhp'] ) ) echo esc_attr( $car_stored_meta['powerhp'][0] ); ?>"/>
    			</div>
    		</div>
    	</div>
    <?php
    }

    function car_meta_save( $post_id ){
    	//checks save status

    	$is_autosave = wp_is_post_autosave( $post_id );
    	$is_revision = wp_is_post_revision( $post_id );
    	$is_valid_nonce = ( isset( $_POST['car_nonce'] ) && wp_verify_nonce( $_POST['car_nonce'], basename( __FILE__ ) ) ) ? 'true' : 'false';

    	//Exit script depending on save status

    	if ( $is_autosave || $is_revision || !$is_valid_nonce ){
    		return;
    	}
    	if ( isset( $_POST[ 'make' ] ) ) {
    		update_post_meta( $post_id, 'make', sanitize_text_field($_POST[ 'make' ] ) );
    	}
    	if ( isset( $_POST[ 'model' ] ) ) {
    		update_post_meta( $post_id, 'model', sanitize_text_field($_POST[ 'model' ] ) );
    	}
    	if ( isset( $_POST[ 'year' ] ) ) {
    		update_post_meta( $post_id, 'year', sanitize_text_field($_POST[ 'year' ] ) );
    	}
    	if ( isset( $_POST[ 'price' ] ) ) {
    		update_post_meta( $post_id, 'price', sanitize_text_field($_POST[ 'price' ] ) );
    	}
    	if ( isset( $_POST[ 'mileage' ] ) ) {
    		update_post_meta( $post_id, 'mileage', sanitize_text_field($_POST[ 'mileage' ] ) );
    	}
    	if ( isset( $_POST[ 'fuel' ] ) ) {
    		update_post_meta( $post_id, 'fuel', sanitize_text_field($_POST[ 'fuel' ] ) );
    	}
    	if ( isset( $_POST[ 'colour' ] ) ) {
    		update_post_meta( $post_id, 'colour', sanitize_text_field($_POST[ 'colour' ] ) );
    	}
    	if ( isset( $_POST[ 'shape' ] ) ) {
    		update_post_meta( $post_id, 'shape', sanitize_text_field($_POST[ 'shape' ] ) );
    	}
    	if ( isset( $_POST[ 'trans' ] ) ) {
    		update_post_meta( $post_id, 'trans', $_POST['trans'] );
    	}
      if ( isset( $_POST[ 'doors' ] ) ) {
        update_post_meta( $post_id, 'doors', sanitize_text_field($_POST[ 'doors' ] ) );
      }
      if ( isset( $_POST[ 'engine' ] ) ) {
        update_post_meta( $post_id, 'engine', sanitize_text_field($_POST[ 'engine' ] ) );
      }
      if ( isset( $_POST[ 'power' ] ) ) {
        update_post_meta( $post_id, 'power', sanitize_text_field($_POST[ 'power' ] ) );
      }
      if ( isset( $_POST[ 'powerhp' ] ) ) {
        update_post_meta( $post_id, 'powerhp', sanitize_text_field($_POST[ 'powerhp' ] ) );
      }
    }

    add_action('save_post', 'car_meta_save');

    function car_feature_callback( $post ){

    	wp_nonce_field( basename( __FILE__ ), 'interior_nonce');
    	$car_stored_meta = get_post_meta( $post->ID ); ?>
    	<div class="field-wrapper">
    	  <div class="meta-row">
    	    <div class="meta-row airbags">
    	      <div class="meta-th">
    					<div class="feature-icon">
    						<?php get_template_part('_build/icons/icon', 'airbags' ); ?>
    					</div>
    	        <label for="meta-checkbox-2" class="meta-label">Airbags</label>
    	      </div>
    	      <div class="meta-td">
    	        <input type="checkbox" name="meta-checkbox-2" id="meta-checkbox-2" value="Airbags" <?php if ( isset ( $car_stored_meta['meta-checkbox-2'] ) ) checked( $car_stored_meta['meta-checkbox-2'][0], 'Airbags' ); ?> />
    	      </div>
    	    </div>
    	  </div>
    	  <div class="meta-row">
    	    <div class="meta-row mp3">
    	      <div class="meta-th">
    					<div class="feature-icon">
    						<?php get_template_part('_build/icons/icon', 'mp3' ); ?>
    					</div>
    	        <label for="meta-checkbox-3" class="meta-label">MP3 / CD Player</label>
    	      </div>
    	      <div class="meta-td">
    	        <input type="checkbox" name="meta-checkbox-3" id="meta-checkbox-3" value="MP3 / CD Player" <?php if ( isset ( $car_stored_meta['meta-checkbox-3'] ) ) checked( $car_stored_meta['meta-checkbox-3'][0], 'MP3 / CD Player' ); ?> />
    	      </div>
    	    </div>
    	  </div>
    	  <div class="meta-row">
    	    <div class="meta-row handsfree">
    	      <div class="meta-th">
    					<div class="feature-icon">
    						<?php get_template_part('_build/icons/icon', 'handsfree' ); ?>
    					</div>
    	        <label for="meta-checkbox-4" class="meta-label">Handsfree</label>
    	      </div>
    	      <div class="meta-td">
    	        <input type="checkbox" name="meta-checkbox-4" id="meta-checkbox-4" value="Handsfree" <?php if ( isset ( $car_stored_meta['meta-checkbox-4'] ) ) checked( $car_stored_meta['meta-checkbox-4'][0], 'Handsfree' ); ?> />
    	      </div>
    	    </div>
    	  </div>
    	  <div class="meta-row">
    	    <div class="meta-row aircon">
    	      <div class="meta-th">
    					<div class="feature-icon">
    						<?php get_template_part('_build/icons/icon', 'ac' ); ?>
    					</div>
    	        <label for="meta-checkbox-5" class="meta-label">AirCon</label>
    	      </div>
    	      <div class="meta-td">
    	        <input type="checkbox" name="meta-checkbox-5" id="meta-checkbox-5" value="AirCon" <?php if ( isset ( $car_stored_meta['meta-checkbox-5'] ) ) checked( $car_stored_meta['meta-checkbox-5'][0], 'AirCon' ); ?> />
    	      </div>
    	    </div>
    	  </div>
    	  <div class="meta-row">
    	    <div class="meta-row aircon">
    	      <div class="meta-th">
    					<div class="feature-icon">
    						<?php get_template_part('_build/icons/icon', 'steering' ); ?>
    					</div>
    	        <label for="meta-checkbox-6" class="meta-label">Multifunctional Steering Wheel</label>
    	      </div>
    	      <div class="meta-td">
    	        <input type="checkbox" name="meta-checkbox-6" id="meta-checkbox" value="yes" <?php if ( isset ( $car_stored_meta['meta-checkbox-6'] ) ) checked( $car_stored_meta['meta-checkbox-6'][0], 'yes' ); ?> />
    	      </div>
    	    </div>
    	  </div>
    	  <div class="meta-row">
    	    <div class="meta-row window">
    	      <div class="meta-th">
    					<div class="feature-icon">
    						<?php get_template_part('_build/icons/icon', 'window' ); ?>
    					</div>
    	        <label class="meta-label">Electric Windows</label>
    	      </div>
    	      <div class="meta-td">
    					<form>
    		        <label for="meta-checkbox-7">Front:</label>
    		        <input type="radio" name="meta-checkbox-7" id="meta-checkbox-7" value="Front" <?php if ( isset ( $car_stored_meta['meta-checkbox-7'] ) ) checked( $car_stored_meta['meta-checkbox-7'][0], 'Front' ); ?> />
    		        <label for="meta-checkbox-8">Front + Back:</label>
    		        <input type="radio" name="meta-checkbox-7" id="meta-checkbox-8" value="Front + Back" <?php if ( isset ( $car_stored_meta['meta-checkbox-7'] ) ) checked( $car_stored_meta['meta-checkbox-7'][0], 'Front + Back' ); ?> />
    						<label for="meta-checkbox-8">None</label>
    		        <input type="radio" name="meta-checkbox-7" id="meta-checkbox-8" value="None" <?php if ( isset ( $car_stored_meta['meta-checkbox-7'] ) ) checked( $car_stored_meta['meta-checkbox-7'][0], 'None' ); ?> />
    					</form>
    				</div>
    	    </div>
    	  </div>
    	</div>
    	<div class="additional-specs">
    		<div class="meta-th">
    			<label for="interior-textarea" class="meta-label">Use a comma to seperate any additional interior features that the car may have.</label>
    		</div>
    		<div class="meta-td">
    			<textarea name="interior-textarea" id="interior-textarea" ><?php if ( isset ( $car_stored_meta['interior-textarea'] ) ) echo $car_stored_meta['interior-textarea'][0]; ?></textarea>
    		</div>
    	</div>
    <?php
    }

    function interior_meta_save( $post_id ){

    	//checks save status
    	$is_autosave = wp_is_post_autosave( $post_id );
    	$is_revision = wp_is_post_revision( $post_id );
    	$is_valid_nonce = ( isset( $_POST['interior_nonce'] ) && wp_verify_nonce( $_POST['interior_nonce'], basename( __FILE__ ) ) ) ? 'true' : 'false';

    	//Exit script depending on save status

    	if ( $is_autosave || $is_revision || !$is_valid_nonce ){
    		return;
    	}
      // Checks for input and saves
      if( isset( $_POST[ 'meta-checkbox-2' ] ) ) {
          update_post_meta( $post_id, 'meta-checkbox-2', 'Airbags' );
      } else {
          update_post_meta( $post_id, 'meta-checkbox-2', '' );
      }
      if( isset( $_POST[ 'meta-checkbox-3' ] ) ) {
          update_post_meta( $post_id, 'meta-checkbox-3', 'MP3 / CD Player' );
      } else {
          update_post_meta( $post_id, 'meta-checkbox-3', '' );
      }
      if( isset( $_POST[ 'meta-checkbox-4' ] ) ) {
          update_post_meta( $post_id, 'meta-checkbox-4', 'Handsfree' );
      } else {
          update_post_meta( $post_id, 'meta-checkbox-4', '' );
      }
      if( isset( $_POST[ 'meta-checkbox-5' ] ) ) {
          update_post_meta( $post_id, 'meta-checkbox-5', 'AirCon' );
      } else {
          update_post_meta( $post_id, 'meta-checkbox-5', '' );
      }
      if( isset( $_POST[ 'meta-checkbox-6' ] ) ) {
          update_post_meta( $post_id, 'meta-checkbox-6', 'yes' );
      } else {
          update_post_meta( $post_id, 'meta-checkbox-6', '' );
      }
      if( isset( $_POST[ 'meta-checkbox-7' ] ) ) {
          update_post_meta( $post_id, 'meta-checkbox-7', $_POST[ 'meta-checkbox-7' ] );
      } else {
          update_post_meta( $post_id, 'meta-checkbox-7', '' );
      }
    	if( isset( $_POST[ 'interior-textarea' ] ) ) {
        update_post_meta( $post_id, 'interior-textarea', $_POST[ 'interior-textarea' ] );
    	}
    }

    add_action('save_post', 'interior_meta_save');


    function car_exterior_callback( $post ){

    	wp_nonce_field( basename( __FILE__ ), 'exterior_nonce');
    	$car_stored_meta = get_post_meta( $post->ID ); ?>
    	<div class="field-wrapper">
    	  <div class="meta-row">
    	    <div class="meta-row abs">
    	      <div class="meta-th">
    					<div class="feature-icon">
    						<?php get_template_part('_build/icons/icon', 'abs' ); ?>
    					</div>
    	        <label for="checkbox" class="meta-label">ABS</label>
    	      </div>
    	      <div class="meta-td">
    	        <input type="checkbox" name="checkbox" id="checkbox" value="ABS" <?php if ( isset ( $car_stored_meta['checkbox'] ) ) checked( $car_stored_meta['checkbox'][0], 'ABS' ); ?> />
    	      </div>
    	    </div>
    	  </div>
    	  <div class="meta-row">
    	    <div class="meta-row ebd">
    	      <div class="meta-th">
    					<div class="feature-icon">
    						<?php get_template_part('_build/icons/icon', 'ebd' ); ?>
    					</div>
    	        <label for="checkbox-2" class="meta-label">EBD</label>
    	      </div>
    	      <div class="meta-td">
    	        <input type="checkbox" name="checkbox-2" id="checkbox-2" value="EBD" <?php if ( isset ( $car_stored_meta['checkbox-2'] ) ) checked( $car_stored_meta['checkbox-2'][0], 'EBD' ); ?> />
    	      </div>
    	    </div>
    	  </div>
    	  <div class="meta-row">
    	    <div class="meta-row headLamps">
    	      <div class="meta-th">
    					<div class="feature-icon">
    						<?php get_template_part('_build/icons/icon', 'headlights' ); ?>
    					</div>
    	        <label for="meta-checkbox-3" class="meta-label">Auto HeadLamps</label>
    	      </div>
    	      <div class="meta-td">
    	        <input type="checkbox" name="checkbox-3" id="checkbox-3" value="Auto HeadLamps" <?php if ( isset ( $car_stored_meta['checkbox-3'] ) ) checked( $car_stored_meta['checkbox-3'][0], 'Auto HeadLamps' ); ?> />
    	      </div>
    	    </div>
    	  </div>
    	  <div class="meta-row">
    	    <div class="meta-row rain">
    	      <div class="meta-th">
    					<div class="feature-icon">
    						<?php get_template_part('_build/icons/icon', 'rainSensor' ); ?>
    					</div>
    	        <label for="checkbox-4" class="meta-label">Rain Sensor</label>
    	      </div>
    	      <div class="meta-td">
    	        <input type="checkbox" name="checkbox-4" id="checkbox-4" value="Rain Sensor" <?php if ( isset ( $car_stored_meta['checkbox-4'] ) ) checked( $car_stored_meta['checkbox-4'][0], 'Rain Sensor' ); ?> />
    	      </div>
    	    </div>
    	  </div>
    	  <div class="meta-row">
    	    <div class="meta-row park">
    	      <div class="meta-th">
    					<div class="feature-icon">
    						<?php get_template_part('_build/icons/icon', 'parkAssist' ); ?>
    					</div>
    	        <label for="checkbox-5" class="meta-label">Park Assist</label>
    	      </div>
    	      <div class="meta-td">
    	        <input type="checkbox" name="checkbox-5" id="checkbox-5" value="AirCon" <?php if ( isset ( $car_stored_meta['checkbox-5'] ) ) checked( $car_stored_meta['checkbox-5'][0], 'Park Assist' ); ?> />
    	      </div>
    	    </div>
    	  </div>
    	  <div class="meta-row">
    	    <div class="meta-row aircon">
    	      <div class="meta-th">
    					<div class="feature-icon">
    						<?php get_template_part('_build/icons/icon', 'reverseCamera' ); ?>
    					</div>
    	        <label for="checkbox-6" class="meta-label">Reverse Camera</label>
    	      </div>
    	      <div class="meta-td">
    	        <input type="checkbox" name="checkbox-6" id="checkbox-6" value="yes" <?php if ( isset ( $car_stored_meta['checkbox-6'] ) ) checked( $car_stored_meta['checkbox-6'][0], 'Reverse Camera' ); ?> />
    	      </div>
    	    </div>
    	  </div>
    	</div>
    	<div class="additional-specs">
    		<div class="meta-th">
    			<label for="exterior" class="meta-label">Use a comma to seperate any additional exterior features that the car may have.</label>
    		</div>
    		<div class="meta-td">
    			<textarea name="exterior-textarea" id="exterior-textarea" ><?php if ( isset ( $car_stored_meta['exterior-textarea'] ) ) echo $car_stored_meta['exterior-textarea'][0]; ?></textarea>
    		</div>
    	</div>

    <?php
    }

    function exterior_meta_save( $post_id ){
    	//checks save status

    	$is_autosave = wp_is_post_autosave( $post_id );
    	$is_revision = wp_is_post_revision( $post_id );
    	$is_valid_nonce = ( isset( $_POST['exterior_nonce'] ) && wp_verify_nonce( $_POST['exterior_nonce'], basename( __FILE__ ) ) ) ? 'true' : 'false';

    	//Exit script depending on save status

    	if ( $is_autosave || $is_revision || !$is_valid_nonce ){
    		return;
    	}
      // Checks for input and saves
      if( isset( $_POST[ 'checkbox' ] ) ) {
          update_post_meta( $post_id, 'checkbox', 'ABS' );
      } else {
          update_post_meta( $post_id, 'checkbox', '' );
      }
      if( isset( $_POST[ 'checkbox-2' ] ) ) {
          update_post_meta( $post_id, 'checkbox-2', 'EBD' );
      } else {
          update_post_meta( $post_id, 'checkbox-2', '' );
      }
      if( isset( $_POST[ 'checkbox-3' ] ) ) {
          update_post_meta( $post_id, 'checkbox-3', 'Auto HeadLamps' );
      } else {
          update_post_meta( $post_id, 'checkbox-3', '' );
      }
      if( isset( $_POST[ 'checkbox-4' ] ) ) {
          update_post_meta( $post_id, 'checkbox-4', 'Rain Sensor' );
      } else {
          update_post_meta( $post_id, 'checkbox-4', '' );
      }
      if( isset( $_POST[ 'checkbox-5' ] ) ) {
          update_post_meta( $post_id, 'checkbox-5', 'Park Assist' );
      } else {
          update_post_meta( $post_id, 'checkbox-5', '' );
      }
      if( isset( $_POST[ 'checkbox-6' ] ) ) {
          update_post_meta( $post_id, 'checkbox-6', 'Reverse Camera' );
      } else {
          update_post_meta( $post_id, 'checkbox-6', '' );
      }
    	if( isset( $_POST[ 'exterior-textarea' ] ) ) {
        update_post_meta( $post_id, 'exterior-textarea', $_POST[ 'exterior-textarea' ] );
    	}
    }

    add_action('save_post', 'exterior_meta_save');

?>
