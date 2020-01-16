<?php

$blog_layout = get_theme_mod('artsy_blog_post_layout', 'grid');
$partial_path = 'template-parts/blog/layout';
$sidebar_toggle = get_theme_mod( 'artsy_blog_sidebar_toggle', 1 );

if ( $blog_layout == 'classic' && ($sidebar_toggle == 0 || !is_active_sidebar( 'sidebar-1' )) ) {
  get_template_part( $partial_path, 'classic-no-sidebar' );
} else {
  get_template_part( $partial_path, $blog_layout );
}


