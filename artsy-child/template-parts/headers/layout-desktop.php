<?php
$header_account_toggle = get_theme_mod( 'artsy_header_account_toggle', 1 );
$header_cart_toggle    = get_theme_mod( 'artsy_header_cart_toggle', 1 );
$header_search_toggle  = get_theme_mod( 'artsy_header_search_toggle', 1 );
$header_social_toggle  = get_theme_mod( 'artsy_header_social_toggle', 1 );
$header_icons_toggle   = ( $header_account_toggle == 1 || $header_cart_toggle == 1 || $header_search_toggle == 1 ) ? true : false;
?>
<header class="header">
	
	<div class="logo-wrapper">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<img src="<?php echo get_theme_mod( 'artsy_header_logo_retina_image' ); ?>"
			     srcset="<?php echo get_theme_mod( 'artsy_header_logo_retina_image' ); ?> 1x, <?php echo get_theme_mod( 'artsy_header_logo_retina_image' ); ?> 2x"
			     alt="<?php bloginfo( 'name' ) ?>">
		</a>
	</div><!-- .logo-wrapper -->
	<div class="title-wrapper">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<h1><?php bloginfo( 'name' ) ?></h1>
		</a>
	</div>
	
	<?php if ( $header_icons_toggle == 1 ) : ?>
		<div class="header-icons">
			<?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) : ?>
				<?php if ( $header_account_toggle == 1 ) : ?>
					<div class="icon-account">
						<a href="<?php echo get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ); ?>"
						   title="<?php esc_html_e( 'View your account', 'artsy-wp' ); ?>"><i
									class="material-icons icon-hover-circle">&#xE7FD;</i>
						</a>
					</div>
				<?php endif; ?>
				<?php $count = WC()->cart->cart_contents_count; ?>
				<?php if ( $header_cart_toggle == 1 ) : ?>
					<div class="icon-cart">
						<a href="<?php echo WC()->cart->get_cart_url(); ?>"
						   title="<?php esc_html_e( 'View your shopping cart', 'artsy-wp' ); ?>">
							<i class="material-icons icon-hover-circle">&#xE8CC;</i>
							<span class="cart-contents-count"><?php echo esc_html( $count ); ?></span>
						</a>
					</div>
				<?php endif; ?>
				<?php if ( $header_search_toggle == 1 ) : ?>
					<div class="icon-search">
						<a href="#"
						   title="<?php esc_html_e( 'Search', 'artsy-wp' ); ?>"><i
									class="material-icons icon-hover-circle">&#xE8B6;</i></a>
					</div>
				<?php endif; ?>
			<?php endif; ?>
		</div>
	<?php endif; ?>
	
	<?php if ( $header_search_toggle == 1 ) : ?>
		<div class="header-search">
			<?php get_search_form(); ?>
		</div>
	<?php endif; ?>
	
	<?php if ( has_nav_menu( 'primary_menu' ) ) : ?>
		<div class="primary-menu">
			<?php
			wp_nav_menu( array(
				'theme_location'  => 'primary_menu',
				'container_class' => 'bracket-slide'
			) );
			?>
		</div><!-- .primary-menu -->
	<?php endif; ?>
	
	<?php if ( $header_social_toggle == 1 ) : ?>
		<div class="header-social">
			<?php artsy_social_icons(); ?>
		</div>
	<?php endif; ?>
	
	<div class="header-copyright">
		<p>&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ) ?>
		   . <?php esc_html_e( 'All Rights Reserved.', 'artsy-wp' ); ?></p>
	</div>


</header><!-- .header -->
