<?php get_header(); ?>
<?php
  if ( have_posts() ) {
    get_template_part( 'template-parts/content', 'archive');
  } else {
    get_template_part( 'template-parts/content', 'none' );
  }
?>
<?php get_footer(); ?>
