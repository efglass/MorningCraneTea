<?php

  /* ==========================================================================
    Add Section
  =========================================================================== */

  $wp_customize->add_section( 'artsy_slider_settings', array(
    'title' => esc_html__( 'Slider Settings', 'artsy-wp' ),
    'priority' => 4
  ));

  /* ==========================================================================
    General Settings
  =========================================================================== */

  // Add Section Title
  $wp_customize->add_setting( 'artsy_section_title_slider_general', array(
    'sanitize_callback' => 'artsy_sanitize_section_title_slider_general',
  ));
  $wp_customize->add_control( new WP_Customize_Section_Title_Control($wp_customize, 'artsy_section_title_slider_general',
    array(
    'label' => esc_html__( 'General', 'artsy-wp' ),
    'section' => 'artsy_slider_settings'
  )));
  function artsy_sanitize_section_title_slider_general( $input ) {
    return wp_strip_all_tags( $input );
  }

  // Use Portfolio Posts
  $wp_customize->add_setting( 'artsy_slider_portfolio_toggle', array(
    'sanitize_callback' => 'artsy_sanitize_slider_portfolio_toggle',
    'transport' => 'refresh',
    'default' => 1
  ));
  $wp_customize->add_control( 'artsy_slider_portfolio_toggle', array(
    'label' => esc_html__( 'Slider Posts', 'artsy-wp' ),
    'section' => 'artsy_slider_settings',
    'type' => 'radio',
    'choices' => array(
      1 => esc_html__( 'Use Portfolio Posts', 'artsy-wp' ),
      0 => esc_html__( 'Use Blog Posts', 'artsy-wp' )
    )
  ));
  function artsy_sanitize_slider_portfolio_toggle( $input, $setting ) {
    $input = sanitize_key( $input );
  	$choices = $setting->manager->get_control( $setting->id )->choices;
  	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
  }

  // Text Color
  $wp_customize->add_setting( 'artsy_slider_text_color' , array(
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'refresh',
    'default' => '#333333'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'artsy_slider_text_color', array(
    'label' => esc_html__( 'Text Color', 'artsy-wp' ),
    'section' => 'artsy_slider_settings',
    'settings' => 'artsy_slider_text_color'
  )));

  // Button Text
  $wp_customize->add_setting( 'artsy_slider_button_text' , array(
    'sanitize_callback' => 'artsy_sanitize_slider_button_text',
    'transport' => 'refresh',
    'default' => esc_html__( 'Read More', 'artsy-wp' ),
  ));
  $wp_customize->add_control( 'artsy_slider_button_text', array(
    'label' => esc_html__( 'Button Text', 'artsy-wp' ),
    'section' => 'artsy_slider_settings',
    'type' => 'text'
  ));
  function artsy_sanitize_slider_button_text( $input ) {
    return wp_strip_all_tags( $input );
  }

  // Overlay Color
  $wp_customize->add_setting( 'artsy_slider_overlay_color' , array(
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'refresh',
    'default' => '#ffffff'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'artsy_slider_overlay_color', array(
    'label' => esc_html__( 'Overlay Color', 'artsy-wp' ),
    'section' => 'artsy_slider_settings',
    'settings' => 'artsy_slider_overlay_color'
  )));

  // Overlay Opacity
  $wp_customize->add_setting( 'artsy_slider_overlay_opacity', array(
    'sanitize_callback' => 'artsy_sanitize_overlay_opacity',
    'transport' => 'refresh',
    'default' => '0.4'
  ));
  $wp_customize->add_control( 'artsy_slider_overlay_opacity', array(
    'label' => esc_html__( 'Overlay Opacity', 'artsy-wp' ),
    'section' => 'artsy_slider_settings',
    'type' => 'select',
    'choices' => array(
      '0.05' => esc_html__( '5%', 'artsy-wp' ),
      '0.1' => esc_html__( '10%', 'artsy-wp' ),
      '0.15' => esc_html__( '15%', 'artsy-wp' ),
      '0.2' => esc_html__( '20%', 'artsy-wp' ),
      '0.25' => esc_html__( '25%', 'artsy-wp' ),
      '0.3' => esc_html__( '30%', 'artsy-wp' ),
      '0.35' => esc_html__( '35%', 'artsy-wp' ),
      '0.4' => esc_html__( '40%', 'artsy-wp' ),
      '0.45' => esc_html__( '45%', 'artsy-wp' ),
      '0.5' => esc_html__( '50%', 'artsy-wp' ),
      '0.55' => esc_html__( '55%', 'artsy-wp' ),
      '0.6' => esc_html__( '60%', 'artsy-wp' ),
      '0.65' => esc_html__( '65%', 'artsy-wp' ),
      '0.7' => esc_html__( '70%', 'artsy-wp' ),
      '0.75' => esc_html__( '75%', 'artsy-wp' ),
      '0.8' => esc_html__( '80%', 'artsy-wp' ),
      '0.85' => esc_html__( '85%', 'artsy-wp' ),
      '0.9' => esc_html__( '90%', 'artsy-wp' ),
      '0.95' => esc_html__( '95%', 'artsy-wp' ),
      '1' => esc_html__( '100%', 'artsy-wp' )
    )
  ));
  function artsy_sanitize_overlay_opacity( $input, $setting ) {
  	$choices = $setting->manager->get_control( $setting->id )->choices;
  	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
  }

?>
