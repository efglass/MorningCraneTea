<?php
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $category_toggle = get_theme_mod('artsy_portfolio_category_toggle', 1);
?>
<?php get_header(); ?>
<div id="content">
  <div class="container">

    <div class="row portfolio-grid">

      <?php while( have_posts() ) : the_post(); ?>

        <div class="col-lg-4 col-md-6 col-sm-6">
          <article id="post-<?php the_ID(); ?>" <?php post_class('portfolio-item portfolio-grid-item'); ?>>
            <?php if ( has_post_thumbnail() ) : ?>
              <div class="portfolio-image">
                <?php the_post_thumbnail(); ?>
              </div>
            <?php endif; ?>
            <div class="portfolio-details">
              <h2 class="portfolio-title h4"><?php the_title(); ?></h2>
              <?php if ( $category_toggle == 1 ) : ?>
                <div class="portfolio-cat">
                  <?php the_terms( $post->ID, 'portfolio_category', '', ', ' ); ?>
                </div>
              <?php endif; ?>
            </div>
            <a href="<?php the_permalink(); ?>"><?php esc_html_e( 'View More', 'artsy-wp' ); ?></a>
          </article>
        </div>

      <?php endwhile; ?>

    </div>

    <?php artsy_pagination(); ?>

  </div>
</div>
<?php get_footer(); ?>
