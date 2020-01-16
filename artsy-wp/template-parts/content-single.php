<?php

$single_post_sidebar_toggle = get_theme_mod('artsy_single_post_sidebar_toggle', 1);
$partial_path = 'template-parts/single/layout';

if ( is_active_sidebar( 'sidebar-1' ) && $single_post_sidebar_toggle == 1 ) {
  get_template_part( $partial_path, 'default' );
} else {
  get_template_part( $partial_path, 'default-no-sidebar' );
}
