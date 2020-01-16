<?php
  $author_id = $post->post_author;
  $post_author_toggle = get_theme_mod( 'artsy_post_author_toggle', 1 );
  $post_date_toggle = get_theme_mod( 'artsy_post_date_toggle', 1 );
  $post_category_toggle = get_theme_mod( 'artsy_post_category_toggle', 1 );
  $post_excerpt_toggle = get_theme_mod( 'artsy_post_excerpt_toggle', 1 );
?>
<div id="content">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <main id="main">
          <?php while( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('post-classic'); ?>>
              <?php if( has_post_thumbnail() ) : ?>
                <div class="post-thumbnail">
                  <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('artsy-large-image-cropped'); ?>
                  </a>
                </div>
              <?php endif; ?>
              <?php if ($post_category_toggle == 1) : ?>
                <div class="post-category">
                  <?php the_category(', '); ?>
                </div>
              <?php endif; ?>
              <h2 class="post-title h1">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h2>
              <?php if ($post_date_toggle == 1) : ?>
                <div class="post-date">
                  <a href="<?php the_permalink(); ?>"><?php echo get_the_date(); ?></a>
                </div>
              <?php endif; ?>
              <div class="post-entry">
                <?php the_content(); ?>
              </div>
            </article>
          <?php endwhile; ?>
          <?php artsy_pagination(); ?>
          <?php wp_reset_postdata(); ?>
        </main>
      </div>
      <?php get_sidebar(); ?>      
    </div>
  </div>
</div>
