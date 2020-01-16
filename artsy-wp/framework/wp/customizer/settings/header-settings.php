<?php

  /* ==========================================================================
    Add Section
  =========================================================================== */

  $wp_customize->add_section( 'artsy_header_settings', array(
    'title' => esc_html__( 'Header Settings', 'artsy-wp' ),
    'priority' => 3
  ));

  /* ==========================================================================
    Logo Settings
  =========================================================================== */

  // Title
  $wp_customize->add_setting( 'artsy_section_title_header_logo', array(
    'sanitize_callback' => 'artsy_sanitize_section_title_header_logo',
  ));
  $wp_customize->add_control( new WP_Customize_Section_Title_Control($wp_customize, 'artsy_section_title_header_logo',
    array(
    'label' => esc_html__( 'Logo', 'artsy-wp' ),
    'section' => 'artsy_header_settings'
  )));
  function artsy_sanitize_section_title_header_logo( $input ) {
    return wp_strip_all_tags( $input );
  }

  // Header Retina Logo
  $wp_customize->add_setting( 'artsy_header_logo_retina_image', array(
    'sanitize_callback' => 'artsy_sanitize_header_logo_retina_image',
    'transport' => 'refresh'
  ));
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'artsy_header_logo_retina_image', array(
    'label' => esc_html__( 'Desktop Logo (Retina Image)', 'artsy-wp' ),
    'description' => esc_html__( 'Upload an image that is 2 times the desired logo size.', 'artsy-wp' ),
    'section' => 'artsy_header_settings',
    'settings' => 'artsy_header_logo_retina_image'
  )));
  function artsy_sanitize_header_logo_retina_image( $image, $setting ) {
    $mimes = array(
      'jpg|jpeg|jpe' => 'image/jpeg',
      'gif' => 'image/gif',
      'png' => 'image/png',
      'bmp' => 'image/bmp',
      'tif|tiff' => 'image/tiff',
      'ico' => 'image/x-icon'
    );
    $file = wp_check_filetype( $image, $mimes );
    return ( $file['ext'] ? $image : $setting->default );
  }

  // Header Mobile Logo Width
  $wp_customize->add_setting( 'artsy_header_mobile_logo_retina_image', array(
    'sanitize_callback' => 'artsy_sanitize_header_mobile_logo_retina_image',
    'transport' => 'refresh'
  ));
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'artsy_header_mobile_logo_retina_image', array(
    'label' => esc_html__( 'Mobile Logo (Retina Image)', 'artsy-wp' ),
    'description' => esc_html__( 'Upload an image that is 2 times the desired logo size.', 'artsy-wp' ),
    'section' => 'artsy_header_settings',
    'settings' => 'artsy_header_mobile_logo_retina_image'
  )));
  function artsy_sanitize_header_mobile_logo_retina_image( $image ) {
    $mimes = array(
      'jpg|jpeg|jpe' => 'image/jpeg',
      'gif' => 'image/gif',
      'png' => 'image/png',
      'bmp' => 'image/bmp',
      'tif|tiff' => 'image/tiff',
      'ico' => 'image/x-icon'
    );
    $file = wp_check_filetype( $image, $mimes );
    return ( $file['ext'] ? $image : $setting->default );
  }

  /* ==========================================================================
    Menu Settings
  =========================================================================== */

  // Title
  $wp_customize->add_setting( 'artsy_section_title_header_menu', array(
    'sanitize_callback' => 'artsy_sanitize_section_title_header_menu',
  ));
  $wp_customize->add_control( new WP_Customize_Section_Title_Control($wp_customize, 'artsy_section_title_header_menu',
    array(
    'label' => esc_html__( 'Menu', 'artsy-wp' ),
    'section' => 'artsy_header_settings'
  )));
  function artsy_sanitize_section_title_header_menu( $input ) {
    return wp_strip_all_tags( $input );
  }

  // Header Menu Font Family
  $wp_customize->add_setting( 'artsy_header_menu_font_family', array(
    'sanitize_callback' => 'artsy_sanitize_header_menu_font_family',
    'transport' => 'refresh',
    'default' => 'Montserrat'
  ));
  $wp_customize->add_control( new WP_Customize_Google_Font_Control($wp_customize, 'artsy_header_menu_font_family',
    array(
    'label' => esc_html__( 'Font Family', 'artsy-wp' ),
    'section' => 'artsy_header_settings'
  )));
  function artsy_sanitize_header_menu_font_family( $input ) {
    return wp_strip_all_tags( $input );
  }

  // Header Menu Font Size
  $wp_customize->add_setting( 'artsy_header_menu_font_size', array(
    'sanitize_callback' => 'artsy_sanitize_heading_menu_font_size',
    'transport' => 'refresh',
    'default' => '14px'
  ));
  $wp_customize->add_control( 'artsy_header_menu_font_size', array(
    'label' => esc_html__( 'Font Size', 'artsy-wp' ),
    'section' => 'artsy_header_settings',
    'type' => 'select',
    'choices' => array(
      '12px' => esc_html__( '12px', 'artsy-wp' ),
      '13px' => esc_html__( '13px', 'artsy-wp' ),
      '14px' => esc_html__( '14px', 'artsy-wp' ),
      '15px' => esc_html__( '15px', 'artsy-wp' ),
      '16px' => esc_html__( '16px', 'artsy-wp' )
    )
  ));
  function artsy_sanitize_heading_menu_font_size( $input, $setting ) {
    $input = sanitize_key( $input );
  	$choices = $setting->manager->get_control( $setting->id )->choices;
  	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
  }

  // Header Menu Font Weight
  $wp_customize->add_setting( 'artsy_header_menu_bold_toggle', array(
    'sanitize_callback' => 'artsy_sanitize_header_menu_bold_toggle',
    'transport' => 'refresh',
    'default' => 1
  ));
  $wp_customize->add_control( 'artsy_header_menu_bold_toggle', array(
    'label' => esc_html__( 'Bold', 'artsy-wp' ),
    'section' => 'artsy_header_settings',
    'type' => 'checkbox'
  ));
  function artsy_sanitize_header_menu_bold_toggle( $checked ) {
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
  }

  // Header Menu Font Case
  $wp_customize->add_setting( 'artsy_header_menu_uppercase_toggle', array(
    'sanitize_callback' => 'artsy_sanitize_header_menu_uppercase_toggle',
    'transport' => 'refresh',
    'default' => 1
  ));
  $wp_customize->add_control( 'artsy_header_menu_uppercase_toggle', array(
    'label' => esc_html__( 'Uppercase', 'artsy-wp' ),
    'section' => 'artsy_header_settings',
    'type' => 'checkbox'
  ));
  function artsy_sanitize_header_menu_uppercase_toggle( $checked ) {
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
  }

  // Header Menu Letter Spacing
  $wp_customize->add_setting( 'artsy_header_menu_letter_spacing', array(
    'sanitize_callback' => 'artsy_sanitize_header_menu_letter_spacing',
    'transport' => 'refresh',
    'default' => 0.75
  ));
  $wp_customize->add_control( 'artsy_header_menu_letter_spacing', array(
    'label' => esc_html__( 'Letter spacing (px)', 'artsy-wp' ),
    'section' => 'artsy_header_settings',
    'type' => 'range',
    'input_attrs' => array(
      'step' => 0.25,
      'min' => 0,
      'max' => 4
    )
  ));
  function artsy_sanitize_header_menu_letter_spacing( $number, $setting ) {
  	$number = intval( $number );
  	$atts = $setting->manager->get_control( $setting->id )->input_attrs;
  	$min = ( isset( $atts['min'] ) ? $atts['min'] : $number );
  	$max = ( isset( $atts['max'] ) ? $atts['max'] : $number );
  	$step = ( isset( $atts['step'] ) ? $atts['step'] : 1 );
  	return ( $min <= $number && $number <= $max && is_int( $number / $step ) ? $number : $setting->default );
  }

  /* ==========================================================================
    Header Display Settings
  =========================================================================== */

  // Title
  $wp_customize->add_setting( 'artsy_section_title_header_display', array(
    'sanitize_callback' => 'artsy_sanitize_section_title_header_display',
  ));
  $wp_customize->add_control( new WP_Customize_Section_Title_Control($wp_customize, 'artsy_section_title_header_display',
    array(
    'label' => esc_html__( 'Displays', 'artsy-wp' ),
    'section' => 'artsy_header_settings'
  )));
  function artsy_sanitize_section_title_header_display( $input ) {
    return wp_strip_all_tags( $input );
  }

  // Header Account Toggle
  $wp_customize->add_setting( 'artsy_header_account_toggle', array(
    'sanitize_callback' => 'artsy_sanitize_header_account_toggle',
    'transport' => 'refresh',
    'default' => 1
  ));
  $wp_customize->add_control( 'artsy_header_account_toggle', array(
    'label' => esc_html__( 'Show Account Icon', 'artsy-wp' ),
    'section' => 'artsy_header_settings',
    'type' => 'checkbox'
  ));
  function artsy_sanitize_header_account_toggle( $checked ) {
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
  }

  // Header Cart Toggle
  $wp_customize->add_setting( 'artsy_header_cart_toggle', array(
    'sanitize_callback' => 'artsy_sanitize_header_cart_toggle',
    'transport' => 'refresh',
    'default' => 1
  ));
  $wp_customize->add_control( 'artsy_header_cart_toggle', array(
    'label' => esc_html__( 'Show Cart Icon', 'artsy-wp' ),
    'section' => 'artsy_header_settings',
    'type' => 'checkbox'
  ));
  function artsy_sanitize_header_cart_toggle( $checked ) {
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
  }

  // Header Search Toggle
  $wp_customize->add_setting( 'artsy_header_search_toggle', array(
    'sanitize_callback' => 'artsy_sanitize_header_search_toggle',
    'transport' => 'refresh',
    'default' => 1
  ));
  $wp_customize->add_control( 'artsy_header_search_toggle', array(
    'label' => esc_html__( 'Show Search Icon', 'artsy-wp' ),
    'section' => 'artsy_header_settings',
    'type' => 'checkbox'
  ));
  function artsy_sanitize_header_search_toggle( $checked ) {
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
  }

  // Header Social Toggle
  $wp_customize->add_setting( 'artsy_header_social_toggle', array(
    'sanitize_callback' => 'artsy_sanitize_header_social_toggle',
    'transport' => 'refresh',
    'default' => 1
  ));
  $wp_customize->add_control( 'artsy_header_social_toggle', array(
    'label' => esc_html__( 'Show Social Icons', 'artsy-wp' ),
    'section' => 'artsy_header_settings',
    'type' => 'checkbox'
  ));
  function artsy_sanitize_header_social_toggle( $checked ) {
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
  }
