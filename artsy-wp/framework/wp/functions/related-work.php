<?php
function artsy_related_work() {

  global $post;

  $args = array(
    'posts_per_page' => '3',
    'post_type' => 'portfolio',
    'order' => 'DESC'
  );
  $portfolio_posts = new WP_Query( $args );

?>

  <?php if ( $portfolio_posts->have_posts() && has_post_thumbnail() ) : ?>
    <div class="related-articles">
      <h4 class="related-title"><?php esc_html_e('Related Work', 'artsy-wp'); ?></h4>
      <div class="row">
        <?php while( $portfolio_posts->have_posts() ) : $portfolio_posts->the_post(); ?>
          <?php if ( has_post_thumbnail() ) : ?>
            <div class="col-lg-4 col-md-4 col-sm-4 col-inline">
              <article id="post-<?php the_ID(); ?>" <?php post_class('post-item post-grid-item'); ?>>
                <?php if ( has_post_thumbnail() ) : ?>
                  <div class="post-thumbnail">
                    <a href="<?php the_permalink(); ?>">
                      <?php the_post_thumbnail('artsy-medium-image-cropped'); ?>
                    </a>
                  </div>
                <?php endif; ?>
                <h2 class="post-title h5">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
              </article>
            </div>
          <?php endif;?>
        <?php endwhile; ?>
      </div>
    </div>
  <?php endif; ?>

<?php wp_reset_postdata(); ?>

<?php } ?>
