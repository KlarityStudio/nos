<?php

get_header();
?>

<div id="primary" class="content-area">

	<main id="main" class="site-main" role="main">
		<div class="container">
			<?php
				if (have_posts() ){
					while (have_posts() ) : the_post();
						if(is_front_page()){
							get_template_part( 'includes/pages/page', 'home' );
						}
					endwhile;
				}
			?>
		</div><!-- .container -->
	</main>
</div> <!-- #primary -->
<?php
get_footer();
