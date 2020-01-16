<?php

  /* ==========================================================================
    Add Section
  =========================================================================== */

  $wp_customize->add_section( 'artsy_color_settings', array(
    'title' => esc_html__( 'Color Settings', 'artsy-wp' ),
    'priority' => 1
  ));

  /* ==========================================================================
    Text
  =========================================================================== */

  // Add Section Title
  $wp_customize->add_setting( 'artsy_section_title_colors_text', array(
    'sanitize_callback' => 'artsy_sanitize_section_title_colors_text',
  ));
  $wp_customize->add_control( new WP_Customize_Section_Title_Control($wp_customize, 'artsy_section_title_colors_text',
    array(
    'label' => esc_html__( 'Text', 'artsy-wp' ),
    'section' => 'artsy_color_settings'
  )));
  function artsy_sanitize_section_title_colors_text( $input ) {
    return wp_strip_all_tags( $input );
  }

  // Heading Text
  $wp_customize->add_setting( 'artsy_colors_heading_text' , array(
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'refresh',
    'default' => '#333333'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'artsy_colors_heading_text', array(
    'label' => esc_html__( 'Headings', 'artsy-wp' ),
    'section' => 'artsy_color_settings',
    'settings' => 'artsy_colors_heading_text'
  )));

  // Body Text
  $wp_customize->add_setting( 'artsy_colors_body_text' , array(
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'refresh',
    'default' => '#555555'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'artsy_colors_body_text', array(
    'label' => esc_html__( 'Body', 'artsy-wp' ),
    'section' => 'artsy_color_settings',
    'settings' => 'artsy_colors_body_text'
  )));

  // Links
  $wp_customize->add_setting( 'artsy_colors_links' , array(
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'refresh',
    'default' => '#C39F76'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'artsy_colors_links', array(
    'label' => esc_html__( 'Links', 'artsy-wp' ),
    'section' => 'artsy_color_settings',
    'settings' => 'artsy_colors_links'
  )));


  /* ==========================================================================
    Buttons
  =========================================================================== */

  // Add Section Title
  $wp_customize->add_setting( 'artsy_section_title_colors_buttons', array(
    'sanitize_callback' => 'artsy_sanitize_section_title_colors_buttons',
  ));
  $wp_customize->add_control( new WP_Customize_Section_Title_Control($wp_customize, 'artsy_section_title_colors_buttons',
    array(
    'label' => esc_html__( 'Buttons', 'artsy-wp' ),
    'section' => 'artsy_color_settings'
  )));
  function artsy_sanitize_section_title_colors_buttons( $input ) {
    return wp_strip_all_tags( $input );
  }

  // Buttons
  $wp_customize->add_setting( 'artsy_colors_button_bg' , array(
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'refresh',
    'default' => '#333333'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'artsy_colors_button_bg', array(
    'label' => esc_html__( 'Background', 'artsy-wp' ),
    'section' => 'artsy_color_settings',
    'settings' => 'artsy_colors_button_bg'
  )));

  // Button hover
  $wp_customize->add_setting( 'artsy_colors_button_bg_hover' , array(
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'refresh',
    'default' => '#000000'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'artsy_colors_button_bg_hover', array(
    'label' => esc_html__( 'Background Hover', 'artsy-wp' ),
    'section' => 'artsy_color_settings',
    'settings' => 'artsy_colors_button_bg_hover'
  )));

  // Button Text
  $wp_customize->add_setting( 'artsy_colors_button_text' , array(
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'refresh',
    'default' => '#ffffff'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'artsy_colors_button_text', array(
    'label' => esc_html__( 'Text', 'artsy-wp' ),
    'section' => 'artsy_color_settings',
    'settings' => 'artsy_colors_button_text'
  )));


  /* ==========================================================================
    Header
  =========================================================================== */

  // Add Section Title
  $wp_customize->add_setting( 'artsy_section_title_colors_header', array(
    'sanitize_callback' => 'artsy_sanitize_section_title_colors_header',
  ));
  $wp_customize->add_control( new WP_Customize_Section_Title_Control($wp_customize, 'artsy_section_title_colors_header',
    array(
    'label' => esc_html__( 'Header', 'artsy-wp' ),
    'section' => 'artsy_color_settings'
  )));
  function artsy_sanitize_section_title_colors_header( $input ) {
    return wp_strip_all_tags( $input );
  }

  // Header Background
  $wp_customize->add_setting( 'artsy_colors_header_bg' , array(
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'refresh',
    'default' => '#fbfbfb'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'artsy_colors_header_bg', array(
    'label' => esc_html__( 'Background', 'artsy-wp' ),
    'section' => 'artsy_color_settings',
    'settings' => 'artsy_colors_header_bg'
  )));

  // Shop Icons
  $wp_customize->add_setting( 'artsy_colors_header_shop_icons' , array(
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'refresh',
    'default' => '#cccccc'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'artsy_colors_header_shop_icons', array(
    'label' => esc_html__( 'Shop Icons', 'artsy-wp' ),
    'section' => 'artsy_color_settings',
    'settings' => 'artsy_colors_header_shop_icons'
  )));

  // Shop Icons Hover
  $wp_customize->add_setting( 'artsy_colors_header_shop_icons_hover' , array(
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'refresh',
    'default' => '#333333'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'artsy_colors_header_shop_icons_hover', array(
    'label' => esc_html__( 'Shop Icons Hover', 'artsy-wp' ),
    'section' => 'artsy_color_settings',
    'settings' => 'artsy_colors_header_shop_icons_hover'
  )));

  // Shop Icons Cart
  $wp_customize->add_setting( 'artsy_colors_header_cart_count_background' , array(
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'refresh',
    'default' => '#333333'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'artsy_colors_header_cart_count_background', array(
    'label' => esc_html__( 'Cart Count Background', 'artsy-wp' ),
    'section' => 'artsy_color_settings',
    'settings' => 'artsy_colors_header_cart_count_background'
  )));

  // Shop Icons Cart Number
  $wp_customize->add_setting( 'artsy_colors_header_cart_count_number' , array(
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'refresh',
    'default' => '#ffffff'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'artsy_colors_header_cart_count_number', array(
    'label' => esc_html__( 'Cart Count Number', 'artsy-wp' ),
    'section' => 'artsy_color_settings',
    'settings' => 'artsy_colors_header_cart_count_number'
  )));

  // Menu Links
  $wp_customize->add_setting( 'artsy_colors_header_menu_links' , array(
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'refresh',
    'default' => '#333333'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'artsy_colors_header_menu_links', array(
    'label' => esc_html__( 'Menu Links', 'artsy-wp' ),
    'section' => 'artsy_color_settings',
    'settings' => 'artsy_colors_header_menu_links'
  )));

  // Menu Links Hover
  $wp_customize->add_setting( 'artsy_colors_header_menu_links_hover' , array(
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'refresh',
    'default' => '#333333'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'artsy_colors_header_menu_links_hover', array(
    'label' => esc_html__( 'Menu Links Hover', 'artsy-wp' ),
    'section' => 'artsy_color_settings',
    'settings' => 'artsy_colors_header_menu_links_hover'
  )));

  // Social Icons
  $wp_customize->add_setting( 'artsy_colors_header_social_icons' , array(
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'refresh',
    'default' => '#333333'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'artsy_colors_header_social_icons', array(
    'label' => esc_html__( 'Social Icons', 'artsy-wp' ),
    'section' => 'artsy_color_settings',
    'settings' => 'artsy_colors_header_social_icons'
  )));

  // Social Icons Hover
  $wp_customize->add_setting( 'artsy_colors_header_social_icons_hover' , array(
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'refresh',
    'default' => '#555555'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'artsy_colors_header_social_icons_hover', array(
    'label' => esc_html__( 'Social Icons Hover', 'artsy-wp' ),
    'section' => 'artsy_color_settings',
    'settings' => 'artsy_colors_header_social_icons_hover'
  )));

  // Social Icons Brand
  $wp_customize->add_setting( 'artsy_colors_header_social_icons_brand' , array(
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'refresh',
    'default' => '#ffffff'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'artsy_colors_header_social_icons_brand', array(
    'label' => esc_html__( 'Social Icons Brand', 'artsy-wp' ),
    'section' => 'artsy_color_settings',
    'settings' => 'artsy_colors_header_social_icons_brand'
  )));

  // Copyright Text
  $wp_customize->add_setting( 'artsy_colors_header_copyright' , array(
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'refresh',
    'default' => '#999999'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'artsy_colors_header_copyright', array(
    'label' => esc_html__( 'Copyright', 'artsy-wp' ),
    'section' => 'artsy_color_settings',
    'settings' => 'artsy_colors_header_copyright'
  )));
