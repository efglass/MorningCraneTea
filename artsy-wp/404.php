<?php get_header(); ?>

<div id="content">
  <div class="container">
    <main id="main" role="main" class="main">
      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="error-container">
          <h1 class="error-title"><?php echo esc_html__( 'Oops! - Page Not Found', 'artsy-wp' ); ?></h1>
          <div class="error-text">
            <p><?php echo esc_html__( 'The page you are looking for cannot be found.', 'artsy-wp' ); ?></p>
            <div><a class="btn" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html__( 'Back to Home Page', 'artsy-wp' ); ?></a></div>
          </div><!-- .post-entry -->
        </div><!-- .post-content -->
      </div><!-- .post -->
    </main>
  </div>
</div>

<?php get_footer(); ?>
