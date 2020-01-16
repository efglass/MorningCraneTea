<?php
  $author_id = $post->post_author;
  $thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
  $sidebar_class = ( is_active_sidebar( 'sidebar-1' ) ) ? $sidebar_class = 'has-sidebar' : $sidebar_class = '' ;
  $col_class = ( is_active_sidebar( 'sidebar-1' ) ) ? $col_class = 'col-lg-8' : $col_class = 'col-lg-12' ;
?>
<div id="content" class="<?php echo esc_attr( $sidebar_class ); ?>">
  <div class="container">
    <div class="row">
      <main id="main" class="<?php echo esc_attr( $col_class ); ?>">
        <?php while( have_posts() ) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php if( has_post_thumbnail() ) : ?>
              <div class="post-thumbnail">
                <?php the_post_thumbnail('artsy-large-image-cropped'); ?>
              </div>
            <?php endif; ?>
            <h1 class="post-title"><?php the_title(); ?></h1>
            <div class="post-entry">
              <?php the_content(); ?>
              <?php
                wp_link_pages( array (
                  'before' => '<div class="page-links">',
                  'after' => '</div>',
                  'link_before' => '<span class="page-link-item">',
                  'link_after' => '</span>',
                ) );
              ?>
            </div>
            <?php if ( (comments_open() || get_comments_number() ) ) : ?>
              <?php comments_template( '', true ); ?>
            <?php endif; ?>
	          
          </article>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      </main><!-- #main -->
      <?php get_sidebar(); ?>
    </div><!-- .row -->
  </div><!-- .container -->
</div><!-- #content -->
