<?php get_header(); ?>
<div id="content">
  <div class="container">

    <main id="main" role="main" class="main">

      <h1 class="page-title page-title-archive h5"><?php esc_html_e('Search Results for', 'artsy-wp' ); ?> &ldquo;<?php echo get_search_query(); ?>&rdquo;</h1></h1>
      <?php if ( have_posts() ) : ?>
        <?php while( have_posts() ) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class( 'post-list-item post-search-item' ); ?>>
            <?php if ( has_post_thumbnail() ) : ?>
              <div class="post-thumbnail">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('artsy-small-image'); ?>
                </a>
              </div>
            <?php endif; ?>
            <div class="post-content">

              <div class="post-category">
                <?php the_category(', '); ?>
              </div>

              <h2 class="post-title h6">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h2>

              <div class="post-entry">
                <?php the_excerpt(); ?>
              </div>

              <div class="post-date">
                <a href="<?php the_permalink(); ?>"><?php echo get_the_date(); ?></a>
              </div>

            </div>
          </article>
        <?php endwhile; ?>
        <?php artsy_pagination(); ?>
        <?php wp_reset_postdata(); ?>

      <?php else : ?>
        <p><?php esc_html_e('No Results found.', 'artsy-wp' ); ?></p>
      <?php endif; ?>

    </main>
  </div>
</div>
<?php get_footer(); ?>
