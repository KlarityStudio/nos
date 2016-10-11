<?php get_header(); ?>
<section>
  <?php the_title('<h1>','</h1>');
    if (have_posts() ){
      while (have_posts() ) : the_post();
      the_content();
    endwhile;
  }?>
</section>
<?php get_footer(); ?>
