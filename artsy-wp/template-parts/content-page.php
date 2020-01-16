<?php

$partial_path = 'template-parts/page/layout';

if ( class_exists( 'WooCommerce' ) ) {
  if ( is_cart() || is_checkout() || is_account_page() ) {
    get_template_part( $partial_path, 'woocommerce' );
  } else {
    get_template_part( $partial_path, 'default' );
  }
} else {
  get_template_part( $partial_path, 'default' );
}
