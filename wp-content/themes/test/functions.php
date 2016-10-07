<?php
if ( ! function_exists( 'test_setup' ) ) :

function test_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'test', get_template_directory() . '/languages' );
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
        'primary' => __( 'Primary Menu', 'test' ),
        'social'  => __( 'Social Links Menu', 'test' ),
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
endif; // test_setup

add_action( 'after_setup_theme', 'test_setup' );


if ( ! function_exists( 'test_init' ) ) :

function test_init() {

    
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
endif; // test_setup

add_action( 'init', 'test_init' );


if ( ! function_exists( 'test_widgets_init' ) ) :

function test_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'test_widgets_init' );
endif;// test_widgets_init



if ( ! function_exists( 'test_customize_register' ) ) :

function test_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'test_customize_register' );
endif;// test_customize_register


if ( ! function_exists( 'test_enqueue_scripts' ) ) :
    function test_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_deregister_script( 'webfont' );
    wp_enqueue_script( 'webfont', 'https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js', false, null, false);

    wp_deregister_script( 'modernizr' );
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js', false, null, false);

    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js', false, null, true);

    wp_deregister_script( 'webflow' );
    wp_enqueue_script( 'webflow', get_template_directory_uri() . '/js/webflow.js', false, null, true);

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'normalize' );
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', false, null, 'all');

    wp_deregister_style( 'webflow' );
    wp_enqueue_style( 'webflow', get_template_directory_uri() . '/css/webflow.css', false, null, 'all');

    wp_deregister_style( 'mileswilliamssstupendoussitewebflow' );
    wp_enqueue_style( 'mileswilliamssstupendoussitewebflow', get_template_directory_uri() . '/css/miles-williams-s-stupendous-site.webflow.css', false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'test_enqueue_scripts' );
endif;

/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */

    /* Pinegrow generated Include Resources End */
?>