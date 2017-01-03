<?php
/*

@package Nos

    ==============================
        Admin Enqueue Functions
    ==============================
*/

function load_admin_styles() {
    wp_enqueue_style( 'nos_admin_css', get_stylesheet_directory_uri() . '/includes/admin/css/admin.css', false, '1.0.0' );
    //wp_enqueue_style( 'admin_js_', get_template_directory_uri() . '/admin-style.js', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'load_admin_styles' );
 ?>
