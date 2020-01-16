<?php

function artsy_enqueue_admin_scripts() {

  wp_enqueue_style( 'wp-color-picker' );

  wp_enqueue_script( 'artsy_script', get_template_directory_uri().'/framework/js/admin.js', array( 'wp-color-picker' ), false, true );

}
add_action( 'admin_enqueue_scripts', 'artsy_enqueue_admin_scripts' );
