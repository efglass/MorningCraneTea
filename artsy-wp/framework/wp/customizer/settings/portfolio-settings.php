<?php

  /* ==========================================================================
    Add Section
  =========================================================================== */

  $wp_customize->add_section( 'artsy_portfolio_settings', array(
    'title' => esc_html__( 'Portfolio Settings', 'artsy-wp' ),
    'priority' => 7
  ));

  /* ==========================================================================
    General Settings
  =========================================================================== */

  // Add Section Title
  $wp_customize->add_setting( 'artsy_section_title_portfolio_general', array(
    'sanitize_callback' => 'artsy_sanitize_section_title_portfolio_general',
  ));
  $wp_customize->add_control( new WP_Customize_Section_Title_Control($wp_customize, 'artsy_section_title_portfolio_general',
    array(
    'label' => esc_html__( 'General', 'artsy-wp' ),
    'section' => 'artsy_portfolio_settings'
  )));
  function artsy_sanitize_section_title_portfolio_general( $input ) {
    return wp_strip_all_tags( $input );
  }

  // Category Toggle
  $wp_customize->add_setting( 'artsy_portfolio_category_toggle', array(
    'sanitize_callback' => 'artsy_sanitize_portfolio_category_toggle',
    'transport' => 'refresh',
    'default' => 1
  ));
  $wp_customize->add_control( 'artsy_portfolio_category_toggle', array(
    'label' => esc_html__( 'Show Categories', 'artsy-wp' ),
    'section' => 'artsy_portfolio_settings',
    'type' => 'checkbox'
  ));
  function artsy_sanitize_portfolio_category_toggle( $checked ) {
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
  }

  /* ==========================================================================
    Single Settings
  =========================================================================== */

  // Add Section Title
  $wp_customize->add_setting( 'artsy_section_title_portfolio_single', array(
    'sanitize_callback' => 'artsy_sanitize_section_title_portfolio_single',
  ));
  $wp_customize->add_control( new WP_Customize_Section_Title_Control($wp_customize, 'artsy_section_title_portfolio_single',
    array(
    'label' => esc_html__( 'Single', 'artsy-wp' ),
    'section' => 'artsy_portfolio_settings'
  )));
  function artsy_sanitize_section_title_portfolio_single( $input ) {
    return wp_strip_all_tags( $input );
  }

  // Category Toggle
  $wp_customize->add_setting( 'artsy_portfolio_single_category_toggle', array(
    'sanitize_callback' => 'artsy_sanitize_portfolio_single_category_toggle',
    'transport' => 'refresh',
    'default' => 1
  ));
  $wp_customize->add_control( 'artsy_portfolio_single_category_toggle', array(
    'label' => esc_html__( 'Show Categories', 'artsy-wp' ),
    'section' => 'artsy_portfolio_settings',
    'type' => 'checkbox'
  ));
  function artsy_sanitize_portfolio_single_category_toggle( $checked ) {
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
  }

  // Share Toggle
  $wp_customize->add_setting( 'artsy_portfolio_single_share_toggle', array(
    'sanitize_callback' => 'artsy_sanitize_portfolio_sinlge_share_toggle',
    'transport' => 'refresh',
    'default' => 1
  ));
  $wp_customize->add_control( 'artsy_portfolio_single_share_toggle', array(
    'label' => esc_html__( 'Show Share Bar', 'artsy-wp' ),
    'section' => 'artsy_portfolio_settings',
    'type' => 'checkbox'
  ));
  function artsy_sanitize_portfolio_sinlge_share_toggle( $checked ) {
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
  }

  // Related Toggle
  $wp_customize->add_setting( 'artsy_portfolio_single_related_toggle', array(
    'sanitize_callback' => 'artsy_sanitize_portfolio_single_related_toggle',
    'transport' => 'refresh',
    'default' => 1
  ));
  $wp_customize->add_control( 'artsy_portfolio_single_related_toggle', array(
    'label' => esc_html__( 'Show Related Work', 'artsy-wp' ),
    'section' => 'artsy_portfolio_settings',
    'type' => 'checkbox'
  ));
  function artsy_sanitize_portfolio_single_related_toggle( $checked ) {
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
  }
