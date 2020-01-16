<?php
  $author_id = $post->post_author;
  $thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
  $post_date_toggle = get_theme_mod( 'artsy_single_post_date_toggle', 1 );
  $post_category_toggle = get_theme_mod( 'artsy_single_post_category_toggle', 1 );
  $share_bar_toggle = get_theme_mod( 'artsy_single_post_share_bar_toggle', 1 );
  $author_bio_toggle = get_theme_mod( 'artsy_single_post_author_bio_toggle', 1 );
  $related_posts_toggle = get_theme_mod( 'artsy_single_post_related_toggle', 1 );
  $share_bar_toggle = get_theme_mod( 'artsy_single_post_share_bar_toggle', 1 );
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
                  <?php the_post_thumbnail('artsy-large-image-cropped'); ?>
                </div>
              <?php endif; ?>
              <?php if ($post_category_toggle == 1) : ?>
                <div class="post-category">
                  <?php the_category(', '); ?>
                </div>
              <?php endif; ?>
              <h1 class="post-title"><?php the_title(); ?></h1>
              <?php if ($post_date_toggle == 1) : ?>
                <div class="post-date">
                  <a href="<?php the_permalink(); ?>"><?php echo get_the_date(); ?></a>
                </div>
              <?php endif; ?>
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
              <?php if ( has_tag() ) : ?>
                <?php the_tags( '<ul class="post-tags"><li>', '</li><li>', '</li></ul>' ); ?>
              <?php endif; ?>
              <?php if ($share_bar_toggle == 1) : ?>
                <footer class="post-footer">
                  <div class="post-comments-number">
                    <i class="material-icons">&#xE0CB;</i>
                    <a href="<?php the_permalink(); ?>/#respond"><?php comments_number( '0 ' . esc_html( 'Comments', 'artsy-wp' ), '1 ' . esc_html( 'Comment', 'artsy-wp' ), '% ' . esc_html( 'Comments', 'artsy-wp' ) ); ?></a>
                  </div>
                  <div class="post-share header-social">
	                  <?php if( get_theme_mod('artsy_behance_url') ) : ?>
		                  <div class="icon-social icon-behance">
			                  <a href="<?php echo esc_url( get_theme_mod('artsy_behance_url') ); ?>" target="_blank"><i class="fa fa-behance"></i></a>
		                  </div>
	                  <?php endif; ?>
	                  <?php if( get_theme_mod('artsy_deviantart_url') ) : ?>
		                  <div class="icon-social icon-deviantart">
			                  <a href="<?php echo esc_url( get_theme_mod('artsy_deviantart_url') ); ?>" target="_blank"><i class="fa fa-deviantart"></i></a>
		                  </div>
	                  <?php endif; ?>
	                  <?php if( get_theme_mod('artsy_dribbble_url') ) : ?>
		                  <div class="icon-social icon-dribbble">
			                  <a href="<?php echo esc_url( get_theme_mod('artsy_dribbble_url') ); ?>" target="_blank"><i class="fa fa-dribbble"></i></a>
		                  </div>
	                  <?php endif; ?>
	                  <?php if( get_theme_mod('artsy_facebook_url') ) : ?>
		                  <div class="icon-social icon-facebook">
			                  <a href="<?php echo esc_url( get_theme_mod('artsy_facebook_url') ); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
		                  </div>
	                  <?php endif; ?>
	                  <?php if( get_theme_mod('artsy_flickr_url') ) : ?>
		                  <div class="icon-social icon-flickr">
			                  <a href="<?php echo esc_url( get_theme_mod('artsy_flickr_url') ); ?>" target="_blank"><i class="fa fa-flickr"></i></a>
		                  </div>
	                  <?php endif; ?>
	                  <?php if( get_theme_mod('artsy_github_url') ) : ?>
		                  <div class="icon-social icon-behance">
			                  <a href="<?php echo esc_url( get_theme_mod('artsy_github_url') ); ?>" target="_blank"><i class="fa fa-github"></i></a>
		                  </div>
	                  <?php endif; ?>
	                  <?php if( get_theme_mod('artsy_google_plus_url') ) : ?>
		                  <div class="icon-social icon-github">
			                  <a href="<?php echo esc_url( get_theme_mod('artsy_google_plus_url') ); ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
		                  </div>
	                  <?php endif; ?>
	                  <?php if( get_theme_mod('artsy_instagram_url') ) : ?>
		                  <div class="icon-social icon-instagram">
			                  <a href="<?php echo esc_url( get_theme_mod('artsy_instagram_url') ); ?>" target="_blank"><i class="fa fa-instagram"></i></a>
		                  </div>
	                  <?php endif; ?>
	                  <?php if( get_theme_mod('artsy_last_fm_url') ) : ?>
		                  <div class="icon-social icon-lastfm">
			                  <a href="<?php echo esc_url( get_theme_mod('artsy_last_fm_url') ); ?>" target="_blank"><i class="fa fa-lastfm"></i></a>
		                  </div>
	                  <?php endif; ?>
	                  <?php if( get_theme_mod('artsy_linkedin_url') ) : ?>
		                  <div class="icon-social icon-linkedin">
			                  <a href="<?php echo esc_url( get_theme_mod('artsy_linkedin_url') ); ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
		                  </div>
	                  <?php endif; ?>
	                  <?php if( get_theme_mod('artsy_pinterest_url') ) : ?>
		                  <div class="icon-social icon-pinterest">
			                  <a href="<?php echo esc_url( get_theme_mod('artsy_pinterest_url') ); ?>" target="_blank"><i class="fa fa-pinterest"></i></a>
		                  </div>
	                  <?php endif; ?>
	                  <?php if( get_theme_mod('artsy_reddit_url') ) : ?>
		                  <div class="icon-social icon-reddit">
			                  <a href="<?php echo esc_url( get_theme_mod('artsy_reddit_url') ); ?>" target="_blank"><i class="fa fa-reddit"></i></a>
		                  </div>
	                  <?php endif; ?>
	                  <?php if( get_theme_mod('artsy_soundcloud_url') ) : ?>
		                  <div class="icon-social icon-soundcloud">
			                  <a href="<?php echo esc_url( get_theme_mod('artsy_soundcloud_url') ); ?>" target="_blank"><i class="fa fa-soundcloud"></i></a>
		                  </div>
	                  <?php endif; ?>
	                  <?php if( get_theme_mod('artsy_tumblr_url') ) : ?>
		                  <div class="icon-social icon-tumblr">
			                  <a href="<?php echo esc_url( get_theme_mod('artsy_tumblr_url') ); ?>" target="_blank"><i class="fa fa-tumblr"></i></a>
		                  </div>
	                  <?php endif; ?>
	                  <?php if( get_theme_mod('artsy_twitter_url') ) : ?>
		                  <div class="icon-social icon-twitter">
			                  <a href="<?php echo esc_url( get_theme_mod('artsy_twitter_url') ); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
		                  </div>
	                  <?php endif; ?>
	                  <?php if( get_theme_mod('artsy_vimeo_url') ) : ?>
		                  <div class="icon-social icon-vimeo">
			                  <a href="<?php echo esc_url( get_theme_mod('artsy_vimeo_url') ); ?>" target="_blank"><i class="fa fa-vimeo"></i></a>
		                  </div>
	                  <?php endif; ?>
	                  <?php if( get_theme_mod('artsy_youtube_url') ) : ?>
		                  <div class="icon-social icon-youtube">
			                  <a href="<?php echo esc_url( get_theme_mod('artsy_youtube_url') ); ?>" target="_blank"><i class="fa fa-youtube"></i></a>
		                  </div>
	                  <?php endif; ?>
                  </div>
                </footer>
              <?php endif; ?>
              <?php if ( $author_bio_toggle == 1 && get_the_author_meta( 'description', $author_id ) ) : ?>
                <div class="author-bio">
                  <div class="author-bio-inner">
                    <div class="author-bio-avatar">
                      <?php echo get_avatar($author_id); ?>
                    </div>
                    <div class="author-bio-info">
                      <h5 class="author-bio-info-title">
                        <?php the_author_posts_link(); ?>
                      </h5>
                      <div class="author-bio-info-desc">
                        <p><?php the_author_meta('description'); ?></p>
                      </div>
                    </div>
                  </div>
                </div><!-- .author-bio -->
              <?php endif; ?>
              <?php if ($related_posts_toggle == 1) : ?>
                <?php artsy_related_posts(); ?>
              <?php endif ?>
              <?php if ( (comments_open() || get_comments_number() ) ) : ?>
                <?php comments_template( '', true ); ?>
              <?php endif; ?>
            </article>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        </main><!-- #main -->
      </div>
      <?php get_sidebar(); ?>
    </div><!-- .row -->
  </div><!-- .container -->
</div><!-- #content -->
