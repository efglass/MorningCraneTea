<?php

  /* ==========================================================================
    Add Section
  =========================================================================== */

  $wp_customize->add_section('artsy_social_settings' , array(
    'title' => esc_html__( 'Social Settings', 'artsy-wp' ),
    'priority' => 8
  ));

  /* ==========================================================================
    Add Settings
  =========================================================================== */

  // Behance
  $wp_customize->add_setting('artsy_behance_url' , array(
    'sanitize_callback' => 'artsy_sanitize_behance_url',
    'transport' => 'refresh',
    'default' => ''
  ));
  $wp_customize->add_control('artsy_behance_url', array(
    'label' => esc_html__( 'Behance Url', 'artsy-wp' ),
    'section' => 'artsy_social_settings',
    'type' => 'text'
  ));
  function artsy_sanitize_behance_url( $input ) {
    return strip_tags( $input );
  }

  // Deviantart
  $wp_customize->add_setting('artsy_deviantart_url' , array(
    'sanitize_callback' => 'artsy_sanitize_deviantart_url',
    'transport' => 'refresh',
    'default' => ''
  ));
  $wp_customize->add_control('artsy_deviantart_url', array(
    'label' => esc_html__( 'Deviantart Url', 'artsy-wp' ),
    'section' => 'artsy_social_settings',
    'type' => 'text'
  ));
  function artsy_sanitize_deviantart_url( $input ) {
    return strip_tags( $input );
  }

  // Dribbble
  $wp_customize->add_setting('artsy_dribbble_url' , array(
    'sanitize_callback' => 'artsy_sanitize_dribbble_url',
    'transport' => 'refresh',
    'default' => ''
  ));
  $wp_customize->add_control('artsy_dribbble_url', array(
    'label' => esc_html__( 'Dribbble Url', 'artsy-wp' ),
    'section' => 'artsy_social_settings',
    'type' => 'text'
  ));
  function artsy_sanitize_dribbble_url( $input ) {
    return strip_tags( $input );
  }

  // Facebook
  $wp_customize->add_setting('artsy_facebook_url' , array(
    'sanitize_callback' => 'artsy_sanitize_facebook_url',
    'transport' => 'refresh',
    'default' => ''
  ));
  $wp_customize->add_control('artsy_facebook_url', array(
    'label' => esc_html__( 'Facebook Url', 'artsy-wp' ),
    'section' => 'artsy_social_settings',
    'type' => 'text'
  ));
  function artsy_sanitize_facebook_url( $input ) {
    return strip_tags( $input );
  }

  // Flickr
  $wp_customize->add_setting('artsy_flickr_url' , array(
    'sanitize_callback' => 'artsy_sanitize_flickr_url',
    'transport' => 'refresh',
    'default' => ''
  ));
  $wp_customize->add_control('artsy_flickr_url', array(
    'label' => esc_html__( 'Flickr Url', 'artsy-wp' ),
    'section' => 'artsy_social_settings',
    'type' => 'text'
  ));
  function artsy_sanitize_flickr_url( $input ) {
    return strip_tags( $input );
  }

  // Github
  $wp_customize->add_setting('artsy_github_url' , array(
    'sanitize_callback' => 'artsy_sanitize_github_url',
    'transport' => 'refresh',
    'default' => ''
  ));
  $wp_customize->add_control('artsy_github_url', array(
    'label' => esc_html__( 'Github Url', 'artsy-wp' ),
    'section' => 'artsy_social_settings',
    'type' => 'text'
  ));
  function artsy_sanitize_github_url( $input ) {
    return strip_tags( $input );
  }


  // Google+
  $wp_customize->add_setting('artsy_google_plus_url' , array(
    'sanitize_callback' => 'artsy_sanitize_google_plus_url',
    'transport' => 'refresh',
    'default' => ''
  ));
  $wp_customize->add_control('artsy_google_plus_url', array(
    'label' => esc_html__( 'Google+ Url', 'artsy-wp' ),
    'section' => 'artsy_social_settings',
    'type' => 'text'
  ));
  function artsy_sanitize_google_plus_url( $input ) {
    return strip_tags( $input );
  }

  // Instagram
  $wp_customize->add_setting('artsy_instagram_url' , array(
    'sanitize_callback' => 'artsy_sanitize_instagram_url',
    'transport' => 'refresh',
    'default' => ''
  ));
  $wp_customize->add_control('artsy_instagram_url', array(
    'label' => esc_html__( 'Instagram Url', 'artsy-wp' ),
    'section' => 'artsy_social_settings',
    'type' => 'text'
  ));
  function artsy_sanitize_instagram_url( $input ) {
    return strip_tags( $input );
  }

  // Last.fm
  $wp_customize->add_setting('artsy_last_fm_url' , array(
    'sanitize_callback' => 'artsy_sanitize_last_fm_url',
    'transport' => 'refresh',
    'default' => ''
  ));
  $wp_customize->add_control('artsy_last_fm_url', array(
    'label' => esc_html__( 'Last.fm Url', 'artsy-wp' ),
    'section' => 'artsy_social_settings',
    'type' => 'text'
  ));
  function artsy_sanitize_last_fm_url( $input ) {
    return strip_tags( $input );
  }

  // LinkedIn
  $wp_customize->add_setting('artsy_linkedin_url' , array(
    'sanitize_callback' => 'artsy_sanitize_linkedin_url',
    'transport' => 'refresh',
    'default' => ''
  ));
  $wp_customize->add_control('artsy_linkedin_url', array(
    'label' => esc_html__( 'LinkedIn Url', 'artsy-wp' ),
    'section' => 'artsy_social_settings',
    'type' => 'text'
  ));
  function artsy_sanitize_linkedin_url( $input ) {
    return strip_tags( $input );
  }

  // Pinterest
  $wp_customize->add_setting('artsy_pinterest_url' , array(
    'sanitize_callback' => 'artsy_sanitize_pinterest_url',
    'transport' => 'refresh',
    'default' => ''
  ));
  $wp_customize->add_control('artsy_pinterest_url', array(
    'label' => esc_html__( 'Pinterest Url', 'artsy-wp' ),
    'section' => 'artsy_social_settings',
    'type' => 'text'
  ));
  function artsy_sanitize_pinterest_url( $input ) {
    return strip_tags( $input );
  }

  // Reddit
  $wp_customize->add_setting('artsy_reddit_url' , array(
    'sanitize_callback' => 'artsy_sanitize_reddit_url',
    'transport' => 'refresh',
    'default' => ''
  ));
  $wp_customize->add_control('artsy_reddit_url', array(
    'label' => esc_html__( 'Reddit Url', 'artsy-wp' ),
    'section' => 'artsy_social_settings',
    'type' => 'text'
  ));
  function artsy_sanitize_reddit_url( $input ) {
    return strip_tags( $input );
  }

  // SoundCloud
  $wp_customize->add_setting('artsy_soundcloud_url' , array(
    'sanitize_callback' => 'artsy_sanitize_soundcloud_url',
    'transport' => 'refresh',
    'default' => ''
  ));
  $wp_customize->add_control('artsy_soundcloud_url', array(
    'label' => esc_html__( 'SoundCloud Url', 'artsy-wp' ),
    'section' => 'artsy_social_settings',
    'type' => 'text'
  ));
  function artsy_sanitize_soundcloud_url( $input ) {
    return strip_tags( $input );
  }

  // Tumblr
  $wp_customize->add_setting('artsy_tumblr_url' , array(
    'sanitize_callback' => 'artsy_sanitize_tumblr_url',
    'transport' => 'refresh',
    'default' => ''
  ));
  $wp_customize->add_control('artsy_tumblr_url', array(
    'label' => esc_html__( 'Tumblr Url', 'artsy-wp' ),
    'section' => 'artsy_social_settings',
    'type' => 'text'
  ));
  function artsy_sanitize_tumblr_url( $input ) {
    return strip_tags( $input );
  }

  // Twitter
  $wp_customize->add_setting('artsy_twitter_url' , array(
    'sanitize_callback' => 'artsy_sanitize_twitter_url',
    'transport' => 'refresh',
    'default' => ''
  ));
  $wp_customize->add_control('artsy_twitter_url', array(
    'label' => esc_html__( 'Twitter Url', 'artsy-wp' ),
    'section' => 'artsy_social_settings',
    'type' => 'text'
  ));
  function artsy_sanitize_twitter_url( $input ) {
    return strip_tags( $input );
  }

  // Vimeo
  $wp_customize->add_setting('artsy_vimeo_url' , array(
    'sanitize_callback' => 'artsy_sanitize_vimeo_url',
    'transport' => 'refresh',
    'default' => ''
  ));
  $wp_customize->add_control('artsy_vimeo_url', array(
    'label' => esc_html__( 'Vimeo Url', 'artsy-wp' ),
    'section' => 'artsy_social_settings',
    'type' => 'text'
  ));
  function artsy_sanitize_vimeo_url( $input ) {
    return strip_tags( $input );
  }

  // YouTube
  $wp_customize->add_setting('artsy_youtube_url' , array(
    'sanitize_callback' => 'artsy_sanitize_youtube_url',
    'transport' => 'refresh',
    'default' => ''
  ));
  $wp_customize->add_control('artsy_youtube_url', array(
    'label' => esc_html__( 'YouTube Url', 'artsy-wp' ),
    'section' => 'artsy_social_settings',
    'type' => 'text'
  ));
  function artsy_sanitize_youtube_url( $input ) {
    return strip_tags( $input );
  }
