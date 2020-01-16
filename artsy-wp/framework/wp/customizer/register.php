<?php
  function artsy_customize_register( $wp_customize ) {
    include( get_template_directory() . '/framework/wp/customizer/settings/color-settings.php' );
    include( get_template_directory() . '/framework/wp/customizer/settings/typography-settings.php' );
    include( get_template_directory() . '/framework/wp/customizer/settings/header-settings.php' );
    include( get_template_directory() . '/framework/wp/customizer/settings/slider-settings.php' );
    include( get_template_directory() . '/framework/wp/customizer/settings/portfolio-settings.php' );
    include( get_template_directory() . '/framework/wp/customizer/settings/blog-settings.php' );
    include( get_template_directory() . '/framework/wp/customizer/settings/shop-settings.php' );
    include( get_template_directory() . '/framework/wp/customizer/settings/social-settings.php' );
  }
  add_action( 'customize_register', 'artsy_customize_register' );
?>
