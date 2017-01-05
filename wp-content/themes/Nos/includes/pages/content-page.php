<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Nos
 * @since 1.0
 * @version 1.0
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php 
        if ( is_page('new-cars') ){

            get_template_part( 'includes/pages/page', 'new-cars' );

        }elseif (is_singular( "wpcm_vehicle" )){
            get_template_part( 'includes/pages/single', 'wpcm_vehicle'  );
        }elseif ( is_singular('cars')){
            get_template_part( 'includes/pages/single', 'cars'  );
        }
        else{
            get_template_part( 'includes/pages/page', 'general' );
        }
    ?>
</article><!-- #post-## -->