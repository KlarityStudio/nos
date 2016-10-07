<?php get_header();
if (have_posts() ){
  while (have_posts() ) : the_post();
  if (is_front_page()){ ?>
    <div id="widget-menu_sidebar">
      <?php if ( is_active_sidebar( 'home_filter' ) ) : ?>
    	<ul id="dropdown-sidebar">
    		<?php dynamic_sidebar( 'home_filter' ); ?>
    	</ul>
    <?php endif; ?>
    </div>
  <?php }
the_content();
  endwhile;
}


get_footer();
