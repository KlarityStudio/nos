<?php
/*

@package nos

    ==================================================
        REMOVE GENERATED WORDPRESS VERSION NUMBERS
    ==================================================
*/

    function freeleance_remove_wp_version_strings( $src ){
      global $wp_version;

      parse_str( parse_url( $src, PHP_URL_QUERY ), $query );
      if ( !empty( $query['ver'] ) && $query['ver'] === $wp_version ) {
          $src = remove_query_arg('ver', $src);
      }
      return $src;
    }
    add_filter( 'script_loader_src', 'freeleance_remove_wp_version_strings' );
    add_filter( 'style_loader_src', 'freeleance_remove_wp_version_strings' );

    function freelance_remove_meta_version(){
      return '';
    }
    add_filter('the_generator', 'freelance_remove_meta_version');

/*
    ==================================================
            Adding Page Slug To Body tag
    ==================================================
*/

    function add_slug( $classes ){
      global $post;
      if ( isset( $post ) ){
          $classes[] = $post->post_type . '-' . $post->post_name;
      }
     return $classes;
    }
    add_filter('body_class' , 'add_slug' );

/*
    ==================================================
                    Post Word Count
    ==================================================
*/

    function wcount(){
        ob_start();
        the_content();
        $content = ob_get_clean();
        return sizeof(explode(" ", $content));
    }

/*
    ==================================================
                Remove excerpt ellipses
    ==================================================
*/

    function nos_excerptEllipses_removeal($more) {
    	global $post;
     		remove_filter('excerpt_more', 'nos_excerptEllipses_removeal');
     	return '...';
    }
    add_filter('excerpt_more','nos_excerptEllipses_removeal');

    /*-----     Changes excerpt length to 20 charachter     -----*/
    function nos_custom_excerpt_length( $length ) {
        return 20;
    }
    add_filter( 'excerpt_length', 'nos_custom_excerpt_length', 999 );
