<?php get_header(); ?>
<?php
  if ( have_posts() ) {
    get_template_part( 'template-parts/content', 'single' );
    the_posts_pagination( array(
      'prev_text' => esc_html__( 'Previous page', 'artsy-wp' ),
      'next_text' => esc_html__( 'Next page', 'artsy-wp' ),
      'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'artsy-wp' ) . ' </span>',
    ));
  } else {
    get_template_part( 'template-parts/content', 'none' );
  }
?>
<?php get_footer(); ?>
