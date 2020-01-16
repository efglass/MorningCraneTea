<?php


  /* ==========================================================================
    One Click Demo Import
  =========================================================================== */

  function artsy_import_demo_files() {
    return array(
      array(
        'import_file_name' => esc_html__( 'Primary Demo Import', 'artsy-wp' ),
        'categories' => array( esc_html__( 'Category 1', 'artsy-wp' ), esc_html__( 'Category 2', 'artsy-wp' ) ),
        'local_import_file' => trailingslashit( get_template_directory() ) . 'framework/ocdi/artsy-demo-content.xml',
        'local_import_widget_file' => trailingslashit( get_template_directory() ) . 'framework/ocdi/artsy-demo-widgets.wie',
        'import_preview_image_url' => '',
        'import_notice' => '',
      ),
    );
  }
  add_filter( 'pt-ocdi/import_files', 'artsy_import_demo_files' );


  /* ==========================================================================
    Required Plugins Activation
  =========================================================================== */

  require_once get_template_directory() . '/framework/lib/tgm-plugin-activation/class-tgm-plugin-activation.php';

  function artsy_register_required_plugins() {
  	$plugins = array(
  		array(
  			'name' => esc_html__( 'RD Portfolio', 'artsy-wp' ),
  			'slug' => 'rd-portfolio',
  			'source' => esc_url('http://demos.reveldev.com/downloads/plugins/artsy/rd-portfolio.zip'),
  			'required' => false,
  			'version' => '',
  			'force_activation' => false,
  			'force_deactivation' => false,
  			'external_url' => '',
  			'is_callable' => '',
  		),
      array(
  			'name' => esc_html__( 'One Click Demo Import', 'artsy-wp' ),
  			'slug' => 'one-click-demo-import',
  			'source' => esc_url('https://downloads.wordpress.org/plugin/one-click-demo-import.2.2.0.zip'),
  			'required' => false,
  			'version' => '',
  			'force_activation' => false,
  			'force_deactivation' => false,
  			'external_url' => '',
  			'is_callable' => '',
  		),
      array(
  			'name' => esc_html__( 'WooCommerce', 'artsy-wp' ),
  			'slug' => 'woocommerce',
  			'source' => esc_url('https://downloads.wordpress.org/plugin/woocommerce.2.6.14.zip'),
  			'required' => false,
  			'version' => '',
  			'force_activation' => false,
  			'force_deactivation' => false,
  			'external_url' => '',
  			'is_callable' => '',
  		),
  	);
  	$config = array(
  		'id' => 'artsy-wp',
  		'default_path' => '',
  		'menu' => 'tgmpa-install-plugins',
  		'has_notices' => true,
  		'dismissable' => true,
  		'dismiss_msg' => '',
  		'is_automatic' => false,
  		'message' => '',
  	);
  	tgmpa( $plugins, $config );
  }
  add_action( 'tgmpa_register', 'artsy_register_required_plugins' );


  /* ==========================================================================
    Add SVG Support
  =========================================================================== */

  function artsy_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
  add_filter('upload_mimes', 'artsy_mime_types');


  /* ==========================================================================
    Include Custom Functions
  =========================================================================== */

  include( get_template_directory() . '/framework/wp/functions/init.php' );


  /* ==========================================================================
    Initialize Customizer Controls
  =========================================================================== */

  include( get_template_directory() . '/framework/wp/customizer/controls/init.php' );


  /* ==========================================================================
    Register Customizer Settings
  =========================================================================== */

  include( get_template_directory() . '/framework/wp/customizer/register.php' );


  /* ==========================================================================
    Initialize Custom Widgets
  =========================================================================== */

  include( get_template_directory() . '/framework/wp/widgets/init.php' );


  /* ==========================================================================
    Set Content Width
  =========================================================================== */

  if ( ! isset( $content_width ) ) {
    $content_width = 690;
  }


  /* ==========================================================================
    Image Sizes
  =========================================================================== */

  add_image_size( 'artsy-large-image', 900 );
  add_image_size( 'artsy-large-image-cropped', 900, 630, true );
  add_image_size( 'artsy-medium-image', 768 );
  add_image_size( 'artsy-medium-image-cropped', 768, 538, true );
  add_image_size( 'artsy-small-image', 150, 150, true );

  /* ==========================================================================
    Load Theme Text Domain
  =========================================================================== */

  load_theme_textdomain( 'artsy-wp', get_template_directory().'/languages' );


  /* ==========================================================================
    Add Menu Support
  =========================================================================== */

  add_theme_support( 'menus' );

  /* ==========================================================================
    Add Post thumbnail Support
  =========================================================================== */

  add_theme_support( 'post-thumbnails' );


  /* ==========================================================================
    Add RSS Support
  =========================================================================== */

  add_theme_support( 'automatic-feed-links' );


  /* ==========================================================================
    Add Title Tag Support
  =========================================================================== */

  add_theme_support( 'title-tag' );


  /* ==========================================================================
    Add HTML5 Support
  =========================================================================== */

  add_theme_support( 'html5' );


  /* ==========================================================================
    Enqueue
  =========================================================================== */

  include( get_template_directory() . '/framework/wp/enqueue/enqueue-styles.php' );
  include( get_template_directory() . '/framework/wp/enqueue/enqueue-scripts.php' );
  include( get_template_directory() . '/framework/wp/enqueue/enqueue-customizer-styles.php' );
  include( get_template_directory() . '/framework/wp/enqueue/enqueue-admin-scripts.php' );


  /* ==========================================================================
    Set Excerpt Length
  =========================================================================== */

  function artsy_excerpt_length( $length ) {
    return get_theme_mod( 'artsy_blog_post_excerpt_length', 15 );
  }
  add_filter( 'excerpt_length', 'artsy_excerpt_length', 999 );


  /* ==========================================================================
    Excerpt Read More
  =========================================================================== */

  function artsy_excerpt_more($more) {
    global $post;
    return '...';
  }
  add_filter( 'excerpt_more', 'artsy_excerpt_more' );


  /* ==========================================================================
    Content Read More
  =========================================================================== */

  function artsy_content_more() {
    return '<div class="post-more-link"><a class="btn" href="' . get_permalink() . '">'. get_theme_mod( 'artsy_read_more_button_text', esc_html__( 'Continue Reading', 'artsy-wp' ) ) .'</a></div>';
  }
  add_filter( 'the_content_more_link', 'artsy_content_more' );


  /* ==========================================================================
    Register Menus
  =========================================================================== */

  function artsy_register_menus() {
    register_nav_menus(
      array(
        'primary_menu' => esc_html__( 'Primary Menu', 'artsy-wp' )
      )
    );
  }
  
  add_action( 'init', 'artsy_register_menus' );


  /* ==========================================================================
    Register Widgets
  =========================================================================== */

  function artsy_widgets_init() {

    register_sidebar( array(
      'name' => esc_html__( 'Primary Sidebar', 'artsy-wp' ),
      'id' => 'sidebar-1',
      'description' => esc_html__( 'Add widgets here to appear in your sidebar.', 'artsy-wp' ),
      'before_widget' => '<div class="widget">',
      'after_widget' => '</div>',
      'before_title' => '<h4 class="widget-title">',
      'after_title' => '</h4>'
    ));

    register_sidebar( array(
      'name' => esc_html__( 'Shop Sidebar', 'artsy-wp' ),
      'id' => 'shop-sidebar',
      'description' => esc_html__( 'Add widgets here to appear in your sidebar.', 'artsy-wp' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h4 class="widget-title">',
      'after_title' => '</h4>'
    ));

  }
  add_action( 'widgets_init', 'artsy_widgets_init' );


  /* ==========================================================================
    Artsy Comments
  =========================================================================== */

  function artsy_comment( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
    ?>
    <?php if ( $comment->comment_approved == '1' ): ?>

    <li class="comment" id="comment-<?php comment_ID() ?>">
      <?php if (get_avatar($comment)) : ?>
        <div class="comment-avatar"><?php echo get_avatar( $comment ); ?></div>
      <?php endif; ?>
      <div class="comment-body">
        <div class="comment-header">
          <span class="comment-header-author"><?php comment_author_link(); ?> -</span>
          <span class="comment-header-date"><?php echo human_time_diff( get_comment_time('U'), current_time('timestamp') ) . esc_html__(' ago', 'artsy-wp'); ?></span>
        </div>
        <div class="comment-entry">
          <?php comment_text(); ?>
        </div>
        <div class="comment-footer">
          <span class="reply"><?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></span>
        </div>
      </div>

  <?php else : ?>
    <li class="comment" id="comment-<?php comment_ID() ?>">
      <div class="comment-avatar"><?php echo get_avatar( $comment ); ?></div>
      <div class="comment-body">
        <div class="comment-header">
          <span class="comment-header-author"><?php comment_author_link(); ?> -</span>
          <span class="comment-header-date"><?php echo human_time_diff( get_comment_time('U'), current_time('timestamp') ) . esc_html__(' ago', 'artsy-wp'); ?></span>
        </div>
        <p><?php esc_html_e('This comment is pending moderation', 'artsy-wp' ); ?></p>
      </div>
  <?php endif;
  }

  /* ==========================================================================
    Wrap embeds with <div class="embed-container">
  =========================================================================== */

  function artsy_custom_oembed_filter($html, $url, $attr, $post_ID) {
    $return = '<div class="artsy-embed-container">'.$html.'</div>';
    return $return;
  }
  add_filter( 'embed_oembed_html', 'artsy_custom_oembed_filter', 10, 4 ) ;


  /* ==========================================================================
    Remove the <br> Tag from the Gallery
  =========================================================================== */

  function artsy_remove_br_gallery($output) {
    return preg_replace('/<br style=(.*)>/mi','',$output);
  }
  add_filter( 'the_content', 'artsy_remove_br_gallery', 11, 2);


  /* ==========================================================================
    Woocommerce - Declare Support
  =========================================================================== */

  function artsy_woocommerce_support() {
    add_theme_support( 'woocommerce' );
  }
  add_action( 'after_setup_theme', 'artsy_woocommerce_support' );

  /* ==========================================================================
    Woocommerce - Remove Related Products
  =========================================================================== */

  if ( get_theme_mod( 'artsy_shop_product_show_related', 1 ) == 0 ) {
    function artsy_remove_related_products( $args ) {
    	return array();
    }
    add_filter('woocommerce_related_products_args','artsy_remove_related_products', 10);
  }


  /* ==========================================================================
    Woocommerce - Set Number Of Products To Display
  =========================================================================== */

  function artsy_products_per_page( ) {
    return get_theme_mod('artsy_shop_collection_products_per_page', 9);
  }
  add_filter( 'loop_shop_per_page', 'artsy_products_per_page' );


  /* ==========================================================================
    WooCommerce - Cart Count
  =========================================================================== */

  function artsy_add_to_cart_fragment( $fragments ) {

    ob_start();
    $count = WC()->cart->cart_contents_count;
    ?>
    <a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php esc_html_e( 'View your shopping cart', 'artsy-wp' ); ?>">
      <span class="cart-contents-count">(<?php echo esc_html( $count ); ?>)</span>
    </a>
    <?php
    $fragments['a.cart-contents'] = ob_get_clean();
    return $fragments;
  }
  add_filter( 'woocommerce_add_to_cart_fragments', 'artsy_add_to_cart_fragment' );


  /* ==========================================================================
    WooCommerce - Set Image Dimensions
  =========================================================================== */

  function artsy_woocommerce_image_dimensions() {
    	$catalog = array(
  		'width' => '600',
  		'height' => '600',
  		'crop' => 1
  	);
  	$single = array(
  		'width' => '600',
  		'height' => '600',
  		'crop' => 1
  	);
  	$thumbnail = array(
  		'width' => '120',
  		'height' => '120',
  		'crop' => 1
  	);
  	update_option( 'shop_catalog_image_size', $catalog );
  	update_option( 'shop_single_image_size', $single );
  	update_option( 'shop_thumbnail_image_size', $thumbnail );
  }
  add_action( 'init', 'artsy_woocommerce_image_dimensions', 1 );


  /* ==========================================================================
    WooCommerce - Remove Related Products
  =========================================================================== */

  if (get_theme_mod('artsy_shop_product_show_related', 1) == 0) {
    function artsy_woocommerce_remove_related_products( $args ) {
      return array();
    }
    add_filter('woocommerce_related_products_args','artsy_woocommerce_remove_related_products', 10);
  }


  /* ==========================================================================
    Portfolio Archive
  =========================================================================== */

  function artsy_portfolio_archive_query( $query ) {
    if( ! is_admin() && $query->is_tax( 'portfolio_category' ) && $query->is_main_query() ) {
      $query->set( 'posts_per_page', 9 );
    }
  }
  add_action( 'pre_get_posts', 'artsy_portfolio_archive_query' );
