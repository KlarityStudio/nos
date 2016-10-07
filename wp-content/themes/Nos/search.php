<?php get_header(); ?>
<h1>Search Page</h1>
<h2><?php echo the_title(); ?></h2>
<?php get_footer(); ?>
<?php echo do_shortcode('[searchandfilter fields="search,post_types,wpcm_make_model" post_types="wpcm_vehicle" taxonomies="wpcm_make_model" headings="Post Types"]') ?>
