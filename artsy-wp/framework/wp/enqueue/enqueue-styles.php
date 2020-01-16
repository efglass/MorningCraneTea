<?php

/* Site Styles */
function artsy_enqueue_styles() {

  $body_font_family = get_theme_mod( 'artsy_typography_body_font', 'Open Sans' );
  $body_font_family = str_replace(' ', '+', $body_font_family);
  $body_font_family_url = '//fonts.googleapis.com/css?family='.$body_font_family.':400,700';
  wp_enqueue_style( 'artsy_body_font_stylesheet', $body_font_family_url );


  $heading_font_family = get_theme_mod( 'artsy_typography_heading_font', 'Montserrat' );
  $heading_font_family = str_replace(' ', '+', $heading_font_family);
  $heading_font_family_url = '//fonts.googleapis.com/css?family='.$heading_font_family.':400,700';
  if ($heading_font_family != $body_font_family) {
    wp_enqueue_style( 'artsy_title_font_stylesheet', $heading_font_family_url );
  }

  $menu_font_family = get_theme_mod( 'artsy_header_menu_font_family', 'Montserrat' );
  $menu_font_family = str_replace(' ', '+', $menu_font_family);
  $menu_font_family_url = '//fonts.googleapis.com/css?family='.$menu_font_family.':400,700';
  if ($menu_font_family != $body_font_family || $menu_font_family != $heading_font_family) {
    wp_enqueue_style( 'artsy_menu_font_stylesheet', $menu_font_family_url );
  }

  wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/framework/lib/font-awesome/css/font-awesome.min.css' );
  wp_enqueue_style( 'material-icons', '//fonts.googleapis.com/icon?family=Material+Icons' );
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/framework/lib/bootstrap/css/bootstrap.min.css' );
  wp_enqueue_style( 'slick', get_template_directory_uri() . '/framework/lib/slick/slick.css' );

  wp_enqueue_style( 'artsy_main_style', get_template_directory_uri() . '/framework/css/main.css' );

  if ( is_child_theme() ) {
    wp_enqueue_style( 'artsy_parent_style', trailingslashit( get_template_directory_uri() ) . 'style.css' );
  }
  wp_enqueue_style( 'artsy_style', get_stylesheet_uri() );

  if( get_option( 'thread_comments' ) )  {
    wp_enqueue_script( 'comment-reply' );
  }

}
add_action( 'wp_enqueue_scripts', 'artsy_enqueue_styles' );


/* Admin Styles */
function artsy_enqueue_admin_styles() {
  wp_register_style( 'artsy_admin_style', get_template_directory_uri() . '/framework/css/admin.css' );
  wp_enqueue_style( 'artsy_admin_style' );
}
add_action( 'admin_enqueue_scripts', 'artsy_enqueue_admin_styles' );
