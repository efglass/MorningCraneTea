<?php

  /* ==========================================================================
    Add Section
  =========================================================================== */

  $wp_customize->add_section( 'artsy_blog_settings', array(
    'title' => esc_html__( 'Blog Settings', 'artsy-wp' ),
    'priority' => 5
  ));

  /* ==========================================================================
    General Settings
  =========================================================================== */

  // Add Section Title
  $wp_customize->add_setting( 'artsy_section_title_blog_general', array(
    'sanitize_callback' => 'artsy_sanitize_section_title_blog_general',
  ));
  $wp_customize->add_control( new WP_Customize_Section_Title_Control($wp_customize, 'artsy_section_title_blog_general',
    array(
    'label' => esc_html__( 'General Posts', 'artsy-wp' ),
    'section' => 'artsy_blog_settings'
  )));
  function artsy_sanitize_section_title_blog_general( $input ) {
    return wp_strip_all_tags( $input );
  }

  // Post Layout
  $wp_customize->add_setting( 'artsy_blog_post_layout', array(
    'sanitize_callback' => 'artsy_sanitize_blog_post_layout',
    'transport' => 'refresh',
    'default' => 'grid'
  ));
  $wp_customize->add_control( 'artsy_blog_post_layout', array(
    'label' => esc_html__( 'Blog layout', 'artsy-wp' ),
    'section' => 'artsy_blog_settings',
    'type' => 'select',
    'choices' => array(
      'classic' => esc_html__( 'Classic', 'artsy-wp' ),
      'grid' => esc_html__( 'Grid', 'artsy-wp' ),
      'masonry' => esc_html__( 'Masonry', 'artsy-wp' ),
      'list' => esc_html__( 'List', 'artsy-wp' )
    )
  ));
  function artsy_sanitize_blog_post_layout( $input, $setting ) {
  	$input = sanitize_key( $input );
  	$choices = $setting->manager->get_control( $setting->id )->choices;
  	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
  }

  // Sidebar Toggle
  $wp_customize->add_setting( 'artsy_blog_sidebar_toggle', array(
    'sanitize_callback' => 'artsy_sanitize_blog_sidebar_toggle',
    'transport' => 'refresh',
    'default' => 1
  ));
  $wp_customize->add_control( 'artsy_blog_sidebar_toggle', array(
    'label' => esc_html__( 'Show Sidebar', 'artsy-wp' ),
    'section' => 'artsy_blog_settings',
    'type' => 'checkbox'
  ));
  function artsy_sanitize_blog_sidebar_toggle( $checked ) {
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
  }

  // Date Toggle
  $wp_customize->add_setting( 'artsy_post_date_toggle', array(
    'sanitize_callback' => 'artsy_sanitize_post_date_toggle',
    'transport' => 'refresh',
    'default' => 1
  ));
  $wp_customize->add_control( 'artsy_post_date_toggle', array(
    'label' => esc_html__( 'Show Post Date', 'artsy-wp' ),
    'section' => 'artsy_blog_settings',
    'type' => 'checkbox'
  ));
  function artsy_sanitize_post_date_toggle( $checked ) {
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
  }

  // Category Toggle
  $wp_customize->add_setting( 'artsy_post_category_toggle', array(
    'sanitize_callback' => 'artsy_sanitize_post_category_toggle',
    'transport' => 'refresh',
    'default' => 1
  ));
  $wp_customize->add_control( 'artsy_post_category_toggle', array(
    'label' => esc_html__( 'Show Post Categories', 'artsy-wp' ),
    'section' => 'artsy_blog_settings',
    'type' => 'checkbox'
  ));
  function artsy_sanitize_post_category_toggle( $checked ) {
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
  }

  // Excerpt Toggle
  $wp_customize->add_setting( 'artsy_post_excerpt_toggle', array(
    'sanitize_callback' => 'artsy_sanitize_post_excerpt_toggle',
    'transport' => 'refresh',
    'default' => 1
  ));
  $wp_customize->add_control( 'artsy_post_excerpt_toggle', array(
    'label' => esc_html__( 'Show Post Excerpt', 'artsy-wp' ),
    'section' => 'artsy_blog_settings',
    'type' => 'checkbox'
  ));
  function artsy_sanitize_post_excerpt_toggle( $checked ) {
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
  }

  // Excerpt Length
  $wp_customize->add_setting( 'artsy_blog_post_excerpt_length', array(
    'sanitize_callback' => 'artsy_sanitize_blog_post_excerpt_length',
    'transport' => 'refresh',
    'default' => 15
  ));
  $wp_customize->add_control( 'artsy_blog_post_excerpt_length', array(
    'label' => esc_html__( 'Post Excerpt Length', 'artsy-wp' ),
    'section' => 'artsy_blog_settings',
    'type' => 'number'
  ));
  function artsy_sanitize_blog_post_excerpt_length( $number, $setting ) {
  	$number = absint( $number );
  	return ( $number ? $number : $setting->default );
  }

  // Pagination Display
  $wp_customize->add_setting( 'artsy_post_pagination_display', array(
    'sanitize_callback' => 'artsy_sanitize_post_pagination_display',
    'transport' => 'refresh',
    'default' => 'numbered'
  ));
  $wp_customize->add_control( 'artsy_post_pagination_display', array(
    'label' => esc_html__( 'Pagination Display', 'artsy-wp' ),
    'section' => 'artsy_blog_settings',
    'type' => 'select',
    'choices' => array(
      'numbered' => esc_html__( 'Numbered', 'artsy-wp' ),
      'newer-older' => esc_html__( 'Newer/Older', 'artsy-wp' )
    )
  ));
  function artsy_sanitize_post_pagination_display( $input, $setting ) {
    $input = sanitize_key( $input );
  	$choices = $setting->manager->get_control( $setting->id )->choices;
  	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
  }

  /* ==========================================================================
    Single Post Settings
  =========================================================================== */

  // Add Section Title
  $wp_customize->add_setting( 'artsy_section_title_blog_single', array(
    'sanitize_callback' => 'artsy_sanitize_section_title_blog_single',
  ));
  $wp_customize->add_control( new WP_Customize_Section_Title_Control($wp_customize, 'artsy_section_title_blog_single',
    array(
    'label' => esc_html__( 'Single Posts', 'artsy-wp' ),
    'section' => 'artsy_blog_settings'
  )));
  function artsy_sanitize_section_title_blog_single( $input ) {
    return wp_strip_all_tags( $input );
  }

  // Sidebar Toggle
  $wp_customize->add_setting( 'artsy_single_post_sidebar_toggle', array(
    'sanitize_callback' => 'artsy_sanitize_single_post_sidebar_toggle',
    'transport' => 'refresh',
    'default' => 1
  ));
  $wp_customize->add_control( 'artsy_single_post_sidebar_toggle', array(
    'label' => esc_html__( 'Show Sidebar', 'artsy-wp' ),
    'section' => 'artsy_blog_settings',
    'type' => 'checkbox'
  ));
  function artsy_sanitize_single_post_sidebar_toggle( $checked ) {
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
  }

  // Category Toggle
  $wp_customize->add_setting( 'artsy_single_post_category_toggle', array(
    'sanitize_callback' => 'artsy_sanitize_single_post_category_toggle',
    'transport' => 'refresh',
    'default' => 1
  ));
  $wp_customize->add_control( 'artsy_single_post_category_toggle', array(
    'label' => esc_html__( 'Show Post Categories', 'artsy-wp' ),
    'section' => 'artsy_blog_settings',
    'type' => 'checkbox'
  ));
  function artsy_sanitize_single_post_category_toggle( $checked ) {
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
  }

  // Date Toggle
  $wp_customize->add_setting( 'artsy_single_post_date_toggle', array(
    'sanitize_callback' => 'artsy_single_sanitize_post_date_toggle',
    'transport' => 'refresh',
    'default' => 1
  ));
  $wp_customize->add_control( 'artsy_single_post_date_toggle', array(
    'label' => esc_html__( 'Show Post Date', 'artsy-wp' ),
    'section' => 'artsy_blog_settings',
    'type' => 'checkbox'
  ));
  function artsy_single_sanitize_post_date_toggle( $checked ) {
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
  }

  // Share Bar Toggle
  $wp_customize->add_setting( 'artsy_single_post_share_bar_toggle', array(
    'sanitize_callback' => 'artsy_sanitize_single_post_share_bar_toggle',
    'transport' => 'refresh',
    'default' => 1
  ));
  $wp_customize->add_control( 'artsy_single_post_share_bar_toggle', array(
    'label' => esc_html__( 'Show Share Bar', 'artsy-wp' ),
    'section' => 'artsy_blog_settings',
    'type' => 'checkbox'
  ));
  function artsy_sanitize_single_post_share_bar_toggle( $checked ) {
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
  }

  // Author Toggle
  $wp_customize->add_setting( 'artsy_single_post_author_bio_toggle', array(
    'sanitize_callback' => 'artsy_sanitize_single_post_author_bio_toggle',
    'transport' => 'refresh',
    'default' => 1
  ));
  $wp_customize->add_control( 'artsy_single_post_author_bio_toggle', array(
    'label' => esc_html__( 'Show Author Bio', 'artsy-wp' ),
    'section' => 'artsy_blog_settings',
    'type' => 'checkbox'
  ));
  function artsy_sanitize_single_post_author_bio_toggle( $checked ) {
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
  }

  // Related Posts Toggle
  $wp_customize->add_setting( 'artsy_single_post_related_toggle', array(
    'sanitize_callback' => 'artsy_sanitize_single_post_related_toggle',
    'transport' => 'refresh',
    'default' => 1
  ));
  $wp_customize->add_control( 'artsy_single_post_related_toggle', array(
    'label' => esc_html__( 'Show Related Posts', 'artsy-wp' ),
    'section' => 'artsy_blog_settings',
    'type' => 'checkbox'
  ));
  function artsy_sanitize_single_post_related_toggle( $checked ) {
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
  }

?>
