<?php
  $sidebar_toggle = get_theme_mod( 'artsy_shop_collection_sidebar_toggle', 1 );
  $sidebar_class = ( is_shop() && is_active_sidebar( 'shop-sidebar') && $sidebar_toggle == 1 ) ? $sidebar_class = 'has-sidebar' : $sidebar_class = '';
  $col_class = ( is_shop() && is_active_sidebar( 'shop-sidebar') && $sidebar_toggle == 1 ) ? $col_class = 'col-lg-8' : $col_class = 'col-lg-12' ;
?>
<?php get_header(); ?>
<div id="content" class="<?php echo esc_attr( $sidebar_class ); ?>">
  <div class="container">
    <div class="row">
      <div class="<?php echo esc_attr( $col_class ); ?>">
        <main id="main">
          <?php woocommerce_content(); ?>
        </main>
      </div>
      <?php if ( is_shop() && is_active_sidebar( 'shop-sidebar' ) && $sidebar_toggle == 1 ) : ?>
        <div class="col-md-4">
          <aside id="sidebar">
            <?php dynamic_sidebar( 'shop-sidebar' ); ?>
          </aside>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
