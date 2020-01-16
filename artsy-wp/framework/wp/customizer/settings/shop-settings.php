<?php

  /* ==========================================================================
    Add Section
  =========================================================================== */

  $wp_customize->add_section( 'artsy_shop_settings', array(
    'title' => esc_html__( 'Shop Settings', 'artsy-wp' ),
    'priority' => 7
  ));

  /* ==========================================================================
    Collection Settings
  =========================================================================== */

  // Add Section Title
  $wp_customize->add_setting( 'artsy_section_title_shop_collection', array(
    'sanitize_callback' => 'artsy_sanitize_section_title_shop_collection',
  ));
  $wp_customize->add_control( new WP_Customize_Section_Title_Control($wp_customize, 'artsy_section_title_shop_collection',
    array(
    'label' => esc_html__( 'Shop Page', 'artsy-wp' ),
    'section' => 'artsy_shop_settings'
  )));
  function artsy_sanitize_section_title_shop_collection( $input ) {
    return wp_strip_all_tags( $input );
  }

  // Products Per Page
  $wp_customize->add_setting( 'artsy_shop_collection_products_per_page' , array(
    'sanitize_callback' => 'artsy_sanitize_shop_collection_products_per_page',
    'transport' => 'refresh',
    'default' => 9
  ));
  $wp_customize->add_control( 'artsy_shop_collection_products_per_page', array(
    'label' => esc_html__( 'Products Per Page', 'artsy-wp' ),
    'section' => 'artsy_shop_settings',
    'type' => 'number'
  ));
  function artsy_sanitize_shop_collection_products_per_page( $number, $setting ) {
  	$number = absint( $number );
  	return ( $number ? $number : $setting->default );
  }

  // Show Sidebar
  $wp_customize->add_setting( 'artsy_shop_collection_sidebar_toggle', array(
    'sanitize_callback' => 'artsy_sanitize_shop_collection_sidebar_toggle',
    'transport' => 'refresh',
    'default' => 1
  ));
  $wp_customize->add_control( 'artsy_shop_collection_sidebar_toggle', array(
    'label' => esc_html__( 'Show Sidebar', 'artsy-wp' ),
    'section' => 'artsy_shop_settings',
    'type' => 'checkbox'
  ));
  function artsy_sanitize_shop_collection_sidebar_toggle( $checked ) {
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
  }

  /* ==========================================================================
    Product Settings
  =========================================================================== */

  // Add Section Title
  $wp_customize->add_setting( 'artsy_section_title_shop_product', array(
    'sanitize_callback' => 'artsy_sanitize_section_title_shop_product',
  ));
  $wp_customize->add_control( new WP_Customize_Section_Title_Control($wp_customize, 'artsy_section_title_shop_product',
    array(
    'label' => esc_html__( 'Product Page', 'artsy-wp' ),
    'section' => 'artsy_shop_settings'
  )));
  function artsy_sanitize_section_title_shop_product( $input ) {
    return wp_strip_all_tags( $input );
  }

  // Show Related Products
  $wp_customize->add_setting( 'artsy_shop_product_show_related', array(
    'sanitize_callback' => 'artsy_sanitize_shop_product_show_related',
    'transport' => 'refresh',
    'default' => 1
  ));
  $wp_customize->add_control( 'artsy_shop_product_show_related', array(
    'label' => esc_html__( 'Show Related Products', 'artsy-wp' ),
    'section' => 'artsy_shop_settings',
    'type' => 'checkbox'
  ));
  function artsy_sanitize_shop_product_show_related( $checked ) {
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
  }
