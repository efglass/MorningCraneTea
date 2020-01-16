<?php

/* ==========================================================================
  Color Settings - Text
=========================================================================== */

// Heading Text
$colors_heading_text_css = '';
$colors_heading_text_css .= 'color: ' . get_theme_mod( 'artsy_colors_heading_text', '#333333' ) . ';';
echo 'h1, h2, h3, h4, h5, h6, h1 a, h2 a, h3 a, h4 a, h5 a, h6 a, .h1, .h2, .h3, .h4, .h5, .h6, .h1 a, .h2 a, .h3 a, .h4 a, .h5 a, .h6 a, h1 a:hover, h2 a:hover, h3 a:hover, h4 a:hover, h5 a:hover, h6 a:hover, .h1 a:hover, .h2 a:hover, .h3 a:hover, .h4 a:hover, .h5 a:hover, .h6 a:hover, .header .logo-wrapper a, .woocommerce ul.product_list_widget li a {' . $colors_heading_text_css . '}';

// Body Text
$colors_body_text_css = '';
$colors_body_text_css .= 'color: ' . get_theme_mod( 'artsy_colors_body_text', '#555555' ) . ';';
echo 'body, .woocommerce.widget_product_categories li a {' . $colors_body_text_css . '}';

// Links
$colors_links_css = '';
$colors_links_css .= 'color: ' . get_theme_mod( 'artsy_colors_links', '#C39F76' ) . ';';
echo 'a, a:hover, a:focus {' . $colors_links_css . '}';


/* ==========================================================================
  Color Settings - Buttons
=========================================================================== */

// Button Background
$colors_button_bg_css = '';
$colors_button_bg_css .= 'background: ' . get_theme_mod( 'artsy_colors_button_bg', '#333333' ) . ';';
echo '.btn, .button, input[type="submit"], .woocommerce .widget_price_filter .price_slider_amount .button, .woocommerce div.product form.cart .button, #add_payment_method .wc-proceed-to-checkout a.checkout-button, .woocommerce-cart .wc-proceed-to-checkout a.checkout-button, .woocommerce-checkout .wc-proceed-to-checkout a.checkout-button, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, #respond .form-submit #submit, .woocommerce #respond input#submit.disabled, .woocommerce #respond input#submit:disabled, .woocommerce #respond input#submit:disabled[disabled], .woocommerce a.button.disabled, .woocommerce a.button:disabled, .woocommerce a.button:disabled[disabled], .woocommerce button.button.disabled, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled], .woocommerce input.button.disabled, .woocommerce input.button:disabled, .woocommerce input.button:disabled[disabled] {' . $colors_button_bg_css . '}';

// Button Background Hover
$colors_button_bg_hover_css = '';
$colors_button_bg_hover_css .= 'background: ' . get_theme_mod( 'artsy_colors_button_bg_hover', '#000000' ) . ';';
echo '.btn:hover, .button:hover, input[type="submit"]:hover, .woocommerce .widget_price_filter .price_slider_amount .button:hover, .woocommerce div.product form.cart .button:hover, #add_payment_method .wc-proceed-to-checkout a.checkout-button:hover, .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, .woocommerce-checkout .wc-proceed-to-checkout a.checkout-button:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, #respond .form-submit #submit:hover, .woocommerce #respond input#submit.disabled:hover, .woocommerce #respond input#submit:disabled:hover, .woocommerce #respond input#submit:disabled[disabled]:hover, .woocommerce a.button.disabled:hover, .woocommerce a.button:disabled:hover, .woocommerce a.button:disabled[disabled]:hover, .woocommerce button.button.disabled:hover, .woocommerce button.button:disabled:hover, .woocommerce button.button:disabled[disabled]:hover, .woocommerce input.button.disabled:hover, .woocommerce input.button:disabled:hover, .woocommerce input.button:disabled[disabled]:hover {' . $colors_button_bg_hover_css . '}';

// Button Text
$colors_button_text_css = '';
$colors_button_text_css .= 'color: ' . get_theme_mod( 'artsy_colors_button_text', '#ffffff' ) . ';';
echo '.btn, .button, input[type="submit"], .woocommerce .widget_price_filter .price_slider_amount .button, .woocommerce div.product form.cart .button, #add_payment_method .wc-proceed-to-checkout a.checkout-button, .woocommerce-cart .wc-proceed-to-checkout a.checkout-button, .woocommerce-checkout .wc-proceed-to-checkout a.checkout-button, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, #respond .form-submit #submit, .woocommerce #respond input#submit.disabled, .woocommerce #respond input#submit:disabled, .woocommerce #respond input#submit:disabled[disabled], .woocommerce a.button.disabled, .woocommerce a.button:disabled, .woocommerce a.button:disabled[disabled], .woocommerce button.button.disabled, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled], .woocommerce input.button.disabled, .woocommerce input.button:disabled, .woocommerce input.button:disabled[disabled], .btn:hover, .button:hover, .woocommerce .widget_price_filter .price_slider_amount .button:hover, .woocommerce div.product form.cart .button:hover, #add_payment_method .wc-proceed-to-checkout a.checkout-button:hover, .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, .woocommerce-checkout .wc-proceed-to-checkout a.checkout-button:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, #respond .form-submit #submit:hover, .woocommerce #respond input#submit.disabled:hover, .woocommerce #respond input#submit:disabled:hover, .woocommerce #respond input#submit:disabled[disabled]:hover, .woocommerce a.button.disabled:hover, .woocommerce a.button:disabled:hover, .woocommerce a.button:disabled[disabled]:hover, .woocommerce button.button.disabled:hover, .woocommerce button.button:disabled:hover, .woocommerce button.button:disabled[disabled]:hover, .woocommerce input.button.disabled:hover, .woocommerce input.button:disabled:hover, .woocommerce input.button:disabled[disabled]:hover {' . $colors_button_text_css . '}';

/* ==========================================================================
  Color Settings - Header
=========================================================================== */

// Header Background
$colors_header_bg_css = '';
$colors_header_bg_css .= 'background: ' . get_theme_mod( 'artsy_colors_header_bg', '#fbfbfb' ) . ';';
echo '.header, .header-mobile {' . $colors_header_bg_css . '}';

// Header Shop Icons
$colors_header_shop_icons = '';
$colors_header_shop_icons .= 'color: ' . get_theme_mod( 'artsy_colors_header_shop_icons', '#cccccc' ) . ';';
echo '.header-icons .icon-account a, .header-icons .icon-cart a, .header-icons .icon-search a, .header-mobile-icons .icon-account a, .header-mobile-icons .icon-cart a, .header-mobile-icons .icon-search a {' . $colors_header_shop_icons . '}';

// Header Mobile Bar
$colors_header_mobile_bar = '';
$colors_header_mobile_bar .= 'background: ' . get_theme_mod( 'artsy_colors_header_shop_icons', '#cccccc' ) . ';';
echo '.header-mobile .toggle-button-bars i {' . $colors_header_mobile_bar . '}';

// Header Shop Icons Hover
$colors_header_shop_icons_hover = '';
$colors_header_shop_icons_hover .= 'color: ' . get_theme_mod( 'artsy_colors_header_shop_icons_hover', '#999999' ) . ';';
echo '.header-icons .icon-account a:hover, .header-icons .icon-cart a:hover, .header-icons .icon-search a:hover, .header-mobile-icons .icon-account a:hover, .header-mobile-icons .icon-cart a:hover, .header-mobile-icons .icon-search a:hover {' . $colors_header_shop_icons_hover . '}';

// Header Shop Icons Count Background
$colors_header_cart_count_background = '';
$colors_header_cart_count_background .= 'background: ' . get_theme_mod( 'artsy_colors_header_cart_count_background', '#000000' ) . ';';
echo '.header-icons .icon-cart span, .header-mobile-icons .icon-cart span {' . $colors_header_cart_count_background . '}';

// Header Shop Icons Count Number
$colors_header_cart_count_number = '';
$colors_header_cart_count_number .= 'color: ' . get_theme_mod( 'artsy_colors_header_cart_count_number', '#ffffff' ) . ';';
echo '.header-icons .icon-cart span, .header-mobile-icons .icon-cart span {' . $colors_header_cart_count_number . '}';

// Header Menu Links
$colors_header_menu_links = '';
$colors_header_menu_links .= 'color: ' . get_theme_mod( 'artsy_colors_header_menu_links', '#333333' ) . ';';
echo '.header .primary-menu a, .mobile-menu ul li a {' . $colors_header_menu_links . '}';

// Header Menu Links Hover
$colors_header_menu_links_hover = '';
$colors_header_menu_links_hover .= 'color: ' . get_theme_mod( 'artsy_colors_header_menu_links_hover', '#333333' ) . ';';
echo '.header .primary-menu a:hover, .mobile-menu ul li a:hover {' . $colors_header_menu_links_hover . '}';

// Header Menu Social Icons
$colors_header_social_icons = '';
$colors_header_social_icons .= 'background: ' . get_theme_mod( 'artsy_colors_header_social_icons', '#333333' ) . ';';
echo '.header-social .icon-social a {' . $colors_header_social_icons . '}';

// Header Menu Social Icons Hover
$colors_header_social_icons_hover = '';
$colors_header_social_icons_hover .= 'background: ' . get_theme_mod( 'artsy_colors_header_social_icons_hover', '#000000' ) . ';';
echo '.header-social .icon-social a:hover {' . $colors_header_social_icons_hover . '}';

// Header Menu Social Icons Brand
$colors_header_social_icons_brand = '';
$colors_header_social_icons_brand .= 'color: ' . get_theme_mod( 'artsy_colors_header_social_icons_brand', '#ffffff' ) . ';';
echo '.header-social .icon-social a {' . $colors_header_social_icons_brand . '}';

// Header Copyright
$colors_header_copyright = '';
$colors_header_copyright .= 'color: ' . get_theme_mod( 'artsy_colors_header_copyright', '#555555' ) . ';';
echo '.header-copyright {' . $colors_header_copyright . '}';
