<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nos
 */

get_header(); ?>



		<?php
		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) : the_post();
				if( is_front_page() ){
						}
					elseif (is_singular() ) {

					}
			endwhile;

		endif; ?>



<?php
// get_sidebar();
get_footer();
