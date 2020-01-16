<?php

function artsy_customizer_styles() {
  ob_start();
  require_once( trailingslashit( get_template_directory() ). '/framework/wp/customizer/css/init.php' );
  $customizer_css = ob_get_clean();
  $customizer_css_output = preg_replace( '#/\*.*?\*/#s', '', $customizer_css );
  $customizer_css_output = preg_replace( '/\s*([{}|:;,])\s+/', '$1', $customizer_css_output );
  $customizer_css_output = preg_replace( '/\s\s+(.*)/', '$1', $customizer_css_output );
  wp_add_inline_style( 'artsy_style', $customizer_css_output );
}
add_action( 'wp_enqueue_scripts', 'artsy_customizer_styles' );
