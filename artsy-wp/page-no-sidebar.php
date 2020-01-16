<?php
  /* Template Name: Default - No Sidebar */
?>
<?php get_header(); ?>
<?php
  $author_id = $post->post_author;
  $thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <?php if( has_post_thumbnail() ) : ?>
        <div class="post-thumbnail post-thumbnail-full">
          <?php the_post_thumbnail('artsy-large-image-cropped'); ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <?php while( have_posts() ) : the_post(); ?>
        <div class="post-content post-content-full">
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="post-content">
              <h1 class="post-title">
                <?php the_title(); ?>
              </h1>
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
            </div>
          </article>
        </div>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    </div><!-- #main -->
  </div>
</div><!-- .container -->
<?php get_footer(); ?>
