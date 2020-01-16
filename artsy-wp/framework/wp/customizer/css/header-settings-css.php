<?php

/* ==========================================================================
  Header Settings - Layout
=========================================================================== */

$header_menu_css = '';
$header_menu_css .= 'font-family: ' . get_theme_mod( 'artsy_header_menu_font_family', 'Montserrat' ) . ';';
$header_menu_css .= 'font-size: ' . get_theme_mod( 'artsy_header_menu_font_size', '14px' ) . ';';
$header_menu_css .= 'letter-spacing: ' . get_theme_mod( 'artsy_header_menu_letter_spacing', 0.75 ) . 'px;';
if( get_theme_mod( 'artsy_header_menu_bold_toggle', 1 ) == 1 ) {
  $header_menu_css .= 'font-weight: 700;';
} else {
  $header_menu_css .= 'font-weight: 400;';
}
if( get_theme_mod( 'artsy_header_menu_uppercase_toggle', 1 ) == 1 ) {
  $header_menu_css .= 'text-transform: uppercase;';
} else {
  $header_menu_css .= 'text-transform: none;';
}
echo '.header .primary-menu, .mobile-menu {' . $header_menu_css . '}';
