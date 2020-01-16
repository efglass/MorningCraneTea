<?php

/* ==========================================================================
  Body Typography Settings
=========================================================================== */

$body_font_css = '';
$body_font_css .= 'font-family: ' . get_theme_mod( 'artsy_typography_body_font', 'Open Sans' ) . ';';
$body_font_css .= 'font-size: ' . get_theme_mod( 'artsy_typography_body_font_size', '14px' ) . ';';
echo 'body {' . $body_font_css . '}';



/* ==========================================================================
  Heading Typography Settings
=========================================================================== */

$heading_font_css = '';
$heading_font_css .= 'font-family: ' . get_theme_mod( 'artsy_typography_heading_font', 'Montserrat' ) . ';';
$heading_font_css .= 'letter-spacing: ' . get_theme_mod( 'artsy_typography_heading_letter_spacing', 0 ) . 'px;';
if( get_theme_mod( 'artsy_typography_heading_bold_toggle', 1 ) == 1 ) {
  $heading_font_css .= 'font-weight: 700;';
} else {
  $heading_font_css .= 'font-weight: 400;';
}
if( get_theme_mod( 'artsy_typography_heading_uppercase_toggle', 0 ) == 1 ) {
  $heading_font_css .= 'text-transform: uppercase;';
} else {
  $heading_font_css .= 'text-transform: none;';
}
echo 'h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6, .header .logo-wrapper, .product-title, .woocommerce ul.product_list_widget li a  {' . $heading_font_css . '}';


/* Font Size */
$heading_base_font_size = get_theme_mod( 'artsy_typography_heading_font_size', '18px' );
/* H1 */
$h1_font_size_css = '';
$h1_font_size_css .= 'font-size: calc('.$heading_base_font_size.' * 1.602)';
echo 'h1, .h1, .header .logo-wrapper {' . $h1_font_size_css . '}';
/* H2 */
$h2_font_size_css = '';
$h2_font_size_css .= 'font-size: calc('.$heading_base_font_size.' * 1.424)';
echo 'h2, .h2 {' . $h2_font_size_css . '}';
/* H3 */
$h3_font_size_css = '';
$h3_font_size_css .= 'font-size: calc('.$heading_base_font_size.' * 1.266)';
echo 'h3, .h3, .woocommerce-cart .page-title {' . $h3_font_size_css . '}';
/* H4 */
$h4_font_size_css = '';
$h4_font_size_css .= 'font-size: calc('.$heading_base_font_size.' * 1.125)';
echo 'h4, .h4, #comments h2, #respond h3, .woocommerce-Tabs-panel > h2, .woocommerce .related.products > h2, .woocommerce .woocommerce-Reviews-title, .woocommerce #reply-title {' . $h4_font_size_css . '}';
/* H5 */
$h5_font_size_css = '';
$h5_font_size_css .= 'font-size: calc('.$heading_base_font_size.' * 1)';
echo 'h5, .h5, .woocommerce ul.products li.product h3, .woocommerce-cart .cart_totals h2 {' . $h5_font_size_css . '}';
/* H6 */
$h6_font_size_css = '';
$h6_font_size_css .= 'font-size: calc('.$heading_base_font_size.' * 0.889)';
echo 'h6, .h6 {' . $h6_font_size_css . '}';
