<?php
  /* Template Name: Slider */
  $portfolio_posts = get_theme_mod('artsy_slider_portfolio_toggle', 1);
?>
<?php get_header(); ?>

  <?php
  if ($portfolio_posts == 1) {
    $post_slider_query = new WP_Query( array(
      'post_type' => 'portfolio',
      'posts_per_page' => 5,
      'ignore_sticky_posts' => true
    ));
  } else {
    $post_slider_query = new WP_Query( array(
      'post_type' => 'post',
      'posts_per_page' => 5,
      'ignore_sticky_posts' => true
    ));
  }
  ?>

  <div class="featured-slider">

    <div class="featured-slider-items">
      <?php if ( $post_slider_query->have_posts() ) : ?>
        <?php while ( $post_slider_query->have_posts()) : $post_slider_query->the_post(); ?>
          <?php
            global $post;
            $thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
          ?>
          <div class="featured-slider-item" style="background-image: url(<?php echo esc_url($thumbnail_url); ?>);">
            <div class="featured-slider-content">
              <h2 class="featured-slider-title h1">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h2>
              <a class="btn" href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod( 'artsy_slider_button_text', 'Read More' )); ?></a>
            </div>
            <div class="mask"></div>
          </div>

        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php else : ?>
        <?php esc_html_e( 'Sorry, no posts matched your criteria.', 'artsy-wp' ); ?>
      <?php endif; ?>

    </div>
  </div>
<?php get_footer(); ?>
