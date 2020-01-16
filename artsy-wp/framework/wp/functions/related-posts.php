<?php
function artsy_related_posts() {

  global $post;
  $categories = get_the_category($post->ID);

  if ($categories) :

  $category_ids = array();

  foreach( $categories as $individual_category ) $category_ids[] = $individual_category->term_id;

  $args = array(
    'category__in' => $category_ids,
    'post__not_in' => array($post->ID),
    'posts_per_page' => 3,
    'ignore_sticky_posts' => 1
  );

  $my_query = new wp_query( $args );

?>

  <?php if ( $my_query->have_posts() && has_post_thumbnail() ) : ?>
    <div class="related-articles">
      <h4 class="related-title"><?php esc_html_e('More Articles Like This', 'artsy-wp'); ?></h4>
      <div class="row">
        <?php while( $my_query->have_posts() ) : $my_query->the_post(); ?>
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
                <div class="post-date">
                  <a href="<?php the_permalink(); ?>"><?php echo get_the_date(); ?></a>
                </div>
              </article>
            </div>
          <?php endif;?>
        <?php endwhile; ?>
      </div>
    </div>
  <?php endif; ?>

<?php endif; ?>

<?php wp_reset_postdata(); ?>

<?php } ?>
