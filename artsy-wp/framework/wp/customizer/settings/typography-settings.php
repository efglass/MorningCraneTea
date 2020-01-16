<?php

  /* ==========================================================================
    Add Section
  =========================================================================== */

  $wp_customize->add_section( 'artsy_typography_settings', array(
    'title' => esc_html__( 'Typography Settings', 'artsy-wp' ),
    'priority' => 2
  ));


  /* ==========================================================================
    Title Typography Settings
  =========================================================================== */

  // Title Typography Section Title
  $wp_customize->add_setting( 'artsy_section_title_heading_typography', array(
    'sanitize_callback' => 'artsy_sanitize_section_title_heading_typography',
  ));
  $wp_customize->add_control( new WP_Customize_Section_Title_Control($wp_customize, 'artsy_section_title_heading_typography',
    array(
    'label' => esc_html__( 'Heading Typography', 'artsy-wp' ),
    'section' => 'artsy_typography_settings'
  )));
  function artsy_sanitize_section_title_heading_typography( $input ) {
    return wp_strip_all_tags( $input );
  }

  // Title Font Family
  $wp_customize->add_setting( 'artsy_typography_heading_font' , array(
    'sanitize_callback' => 'artsy_sanitize_typography_heading_font',
    'transport' => 'refresh',
    'default' => 'Montserrat'
  ));
  $wp_customize->add_control( new WP_Customize_Google_Font_Control($wp_customize, 'artsy_typography_heading_font',
    array(
    'label' => esc_html__( 'Font Family', 'artsy-wp' ),
    'section' => 'artsy_typography_settings'
  )));
  function artsy_sanitize_typography_heading_font( $input ) {
    return wp_strip_all_tags( $input );
  }

  // Title Font Size
  $wp_customize->add_setting( 'artsy_typography_heading_font_size', array(
    'sanitize_callback' => 'artsy_sanitize_typography_heading_font_size',
    'transport' => 'refresh',
    'default' => '18px'
  ));
  $wp_customize->add_control( 'artsy_typography_heading_font_size', array(
    'label' => esc_html__( 'Base Font Size', 'artsy-wp' ),
    'section' => 'artsy_typography_settings',
    'type' => 'select',
    'choices' => array(
      '16px' => esc_html__( '16px', 'artsy-wp' ),
      '17px' => esc_html__( '17px', 'artsy-wp' ),
      '18px' => esc_html__( '18px', 'artsy-wp' ),
      '19px' => esc_html__( '19px', 'artsy-wp' ),
      '20px' => esc_html__( '20px', 'artsy-wp' ),
      '21px' => esc_html__( '21px', 'artsy-wp' ),
      '22px' => esc_html__( '22px', 'artsy-wp' ),
      '23px' => esc_html__( '23px', 'artsy-wp' ),
      '24px' => esc_html__( '24px', 'artsy-wp' )
    )
  ));
  function artsy_sanitize_typography_heading_font_size( $input, $setting ) {
    $input = sanitize_key( $input );
  	$choices = $setting->manager->get_control( $setting->id )->choices;
  	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
  }

  // Title Font Weight
  $wp_customize->add_setting( 'artsy_typography_heading_bold_toggle', array(
    'sanitize_callback' => 'artsy_sanitize_typography_heading_bold_toggle',
    'transport' => 'refresh',
    'default' => 0
  ));
  $wp_customize->add_control( 'artsy_typography_heading_bold_toggle', array(
    'label' => esc_html__( 'Bold', 'artsy-wp' ),
    'section' => 'artsy_typography_settings',
    'type' => 'checkbox'
  ));
  function artsy_sanitize_typography_heading_bold_toggle( $checked ) {
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
  }

  // Title Font Weight
  $wp_customize->add_setting( 'artsy_typography_heading_uppercase_toggle', array(
    'sanitize_callback' => 'artsy_sanitize_typography_heading_uppercase_toggle',
    'transport' => 'refresh',
    'default' => 0
  ));
  $wp_customize->add_control( 'artsy_typography_heading_uppercase_toggle', array(
    'label' => esc_html__( 'Uppercase', 'artsy-wp' ),
    'section' => 'artsy_typography_settings',
    'type' => 'checkbox'
  ));
  function artsy_sanitize_typography_heading_uppercase_toggle( $checked ) {
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
  }

  // Title Letter Spacing
  $wp_customize->add_setting( 'artsy_typography_heading_letter_spacing', array(
    'sanitize_callback' => 'artsy_sanitize_typography_heading_letter_spacing',
    'transport' => 'refresh',
    'default' => 0
  ));
  $wp_customize->add_control( 'artsy_typography_heading_letter_spacing', array(
    'label' => esc_html__( 'Letter Spacing (px)', 'artsy-wp' ),
    'section' => 'artsy_typography_settings',
    'type' => 'range',
    'input_attrs' => array(
      'step' => 0.25,
      'min' => 0,
      'max' => 4
    )
  ));
  function artsy_sanitize_typography_heading_letter_spacing( $number, $setting ) {
    $number = intval( $number );
  	$atts = $setting->manager->get_control( $setting->id )->input_attrs;
  	$min = ( isset( $atts['min'] ) ? $atts['min'] : $number );
  	$max = ( isset( $atts['max'] ) ? $atts['max'] : $number );
  	$step = ( isset( $atts['step'] ) ? $atts['step'] : 1 );
  	return ( $min <= $number && $number <= $max && is_int( $number / $step ) ? $number : $setting->default );
  }


  /* ==========================================================================
    Body Typography Settings
  =========================================================================== */

  // Body Typography Section Title
  $wp_customize->add_setting( 'artsy_section_title_body_typography', array(
    'sanitize_callback' => 'artsy_sanitize_section_title_body_typography',
  ));
  $wp_customize->add_control( new WP_Customize_Section_Title_Control($wp_customize, 'artsy_section_title_body_typography',
    array(
    'label' => esc_html__( 'Body Typography', 'artsy-wp' ),
    'section' => 'artsy_typography_settings'
  )));
  function artsy_sanitize_section_title_body_typography( $input ) {
    return wp_strip_all_tags( $input );
  }

  // Body Font Family
  $wp_customize->add_setting( 'artsy_typography_body_font' , array(
    'sanitize_callback' => 'artsy_sanitize_typography_body_font',
    'transport' => 'refresh',
    'default' => 'Open Sans'
  ));
  $wp_customize->add_control( new WP_Customize_Google_Font_Control($wp_customize, 'artsy_typography_body_font',
    array(
    'label' => esc_html__( 'Font Family', 'artsy-wp' ),
    'section' => 'artsy_typography_settings'
  )));
  function artsy_sanitize_typography_body_font( $input ) {
    return wp_strip_all_tags( $input );
  }

  // Body Font Size
  $wp_customize->add_setting( 'artsy_typography_body_font_size', array(
    'sanitize_callback' => 'artsy_sanitize_typography_body_font_size',
    'transport' => 'refresh',
    'default' => '14px'
  ));
  $wp_customize->add_control( 'artsy_typography_body_font_size', array(
    'label' => esc_html__( 'Base Font Size', 'artsy-wp' ),
    'section' => 'artsy_typography_settings',
    'type' => 'select',
    'choices' => array(
      '12px' => esc_html__( '12px', 'artsy-wp' ),
      '13px' => esc_html__( '13px', 'artsy-wp' ),
      '14px' => esc_html__( '14px', 'artsy-wp' ),
      '15px' => esc_html__( '15px', 'artsy-wp' ),
      '16px' => esc_html__( '16px', 'artsy-wp' ),
      '17px' => esc_html__( '17px', 'artsy-wp' ),
      '18px' => esc_html__( '18px', 'artsy-wp' )
    )
  ));
  function artsy_sanitize_typography_body_font_size( $input, $setting ) {
    $input = sanitize_key( $input );
  	$choices = $setting->manager->get_control( $setting->id )->choices;
  	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
  }
