<?php

function artsy_enqueue_scripts() {

  wp_enqueue_script( 'masonry', get_template_directory_uri().'/framework/lib/masonry/masonry.pkgd.min.js', array( 'jquery' ),'', false );
  wp_enqueue_script( 'infinite-scroll', get_template_directory_uri().'/framework/lib/infinite-scroll/jquery.infinitescroll.min.js', array( 'jquery' ),'', false );
  wp_enqueue_script( 'jquery-slick', get_template_directory_uri().'/framework/lib/slick/slick.min.js', array( 'jquery' ),'', false );
  wp_enqueue_script( 'artsy_script', get_template_directory_uri().'/framework/js/main.js', array( 'jquery' ),'', false );

}
add_action( 'wp_enqueue_scripts', 'artsy_enqueue_scripts' );
