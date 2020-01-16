<?php
  $excerpt = $post->post_excerpt;
  $thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );  
  $category_toggle = get_theme_mod('artsy_portfolio_single_category_toggle', 1);
  $share_toggle = get_theme_mod('artsy_portfolio_single_share_toggle', 1);
  $related_work_toggle = get_theme_mod('artsy_portfolio_single_related_toggle', 1);
?>

<?php get_header(); ?>

<?php if ( has_post_thumbnail() ) : ?>
  <div class="portfolio-banner">
    <div class="portfolio-banner-image" style="background-image: url(<?php echo esc_url($thumbnail_url); ?>);">
      <div class="portfolio-header">
        <div class="portfolio-header-inner">
          <h1 class="post-title"><?php the_title(); ?></h1>
          <?php if ( $category_toggle == 1 ) : ?>
            <div class="post-category">
              <?php the_terms( $post->ID, 'portfolio_category', '', ', ' ); ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
<?php endif;?>
<div class="portfolio-content">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <?php while( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('portfolio-single post-classic'); ?>>
          <div class="entry-content">
            <?php the_content(); ?>
          </div>
        </article>
        <?php if ( $share_toggle == 1 ) : ?>
          <div class="portfolio-share">
            <h5><?php echo esc_html__( 'Share this', 'artsy-wp' ); ?></h5>
            <ul>
              <li class="share-twitter">
                <a href="https://twitter.com/home?status=Check%20out%20this%20article:<?php echo get_permalink(); ?>" target="_blank">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="share-facebook">
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>" target="_blank">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="share-pinterest">
                <a data-pin-do="skipLink" target="_blank" href="https://pinterest.com/pin/create/button/?url=<?php echo get_permalink(); ?>&amp;media=<?php echo esc_url($thumbnail_url); ?>">
                  <i class="fa fa-pinterest"></i>
                </a>
              </li>
              <li class="share-googleplus">
                <a href="https://plus.google.com/share?url=<?php echo get_permalink(); ?>" target="_blank">
                  <i class="fa fa-google-plus"></i>
                </a>
              </li>
            </ul>
          </div>
        <?php endif; ?>
        <?php if ( $related_work_toggle == 1 ) : ?>
          <?php artsy_related_work(); ?>
        <?php endif; ?>
      <?php endwhile; ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
