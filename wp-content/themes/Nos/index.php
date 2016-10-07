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
						}elseif (is_singular()) {
							if (is_home()) {
								echo 'blog';
							}

						}elseif(is_home()) {
							get_template_part( 'includes/pages/page', 'archive' );
						}
					endwhile;
				}
			?>
		</div><!-- .container -->
	</main>
</div> <!-- #primary -->
<?php
get_footer();
