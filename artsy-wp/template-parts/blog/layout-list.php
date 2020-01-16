<?php
  $author_id = $post->post_author;
  $post_author_toggle = get_theme_mod( 'artsy_post_author_toggle', 1 );
  $post_date_toggle = get_theme_mod( 'artsy_post_date_toggle', 1 );
  $post_category_toggle = get_theme_mod( 'artsy_post_category_toggle', 1 );
  $post_excerpt_toggle = get_theme_mod( 'artsy_post_excerpt_toggle', 1 );
  $sidebar_toggle = get_theme_mod( 'artsy_blog_sidebar_toggle', 1 );
  $sidebar_class = ( is_active_sidebar( 'sidebar-1' ) && get_theme_mod( 'artsy_blog_sidebar_toggle', 1 ) == 1 ) ? $sidebar_class = 'has-sidebar' : $sidebar_class = '' ;
  $col_class = ( is_active_sidebar( 'sidebar-1' ) && get_theme_mod( 'artsy_blog_sidebar_toggle', 1 ) == 1 ) ? $col_class = 'col-lg-8' : $col_class = 'col-lg-12' ;
?>
<div id="content" class="<?php echo esc_attr( $sidebar_class ); ?>">
  <div class="container">
    <div class="row">
      <main id="main" class="<?php echo esc_attr( $col_class ); ?>">
        <?php while( have_posts() ) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class( 'post-list-item' ); ?>>
            <?php if ( has_post_thumbnail() ) : ?>
              <div class="post-thumbnail">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('artsy-medium-image-cropped'); ?>
                </a>
              </div>
            <?php endif; ?>
            <div class="post-list-content">
              <?php if ($post_category_toggle == 1) : ?>
                <div class="post-category">
                  <?php the_category(', '); ?>
                </div>
              <?php endif; ?>
              <h2 class="post-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h2>
              <?php if ($post_excerpt_toggle == 1) : ?>
                <div class="post-entry">
                  <?php the_excerpt(); ?>
                </div>
              <?php endif; ?>
              <?php if ($post_date_toggle == 1) : ?>
                <div class="post-date">
                  <a href="<?php the_permalink(); ?>"><?php echo get_the_date(); ?></a>
                </div>
              <?php endif; ?>
            </div>
          </article>
        <?php endwhile; ?>
        <?php artsy_pagination(); ?>
        <?php wp_reset_postdata(); ?>
      </main>
      <?php if ($sidebar_toggle == 1) : ?>
        <?php get_sidebar(); ?>
      <?php endif; ?>
    </div>
  </div>
</div>
