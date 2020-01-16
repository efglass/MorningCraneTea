<?php

$archive_layout = get_theme_mod('artsy_blog_post_layout', 'grid');
$partial_path = 'template-parts/blog/layout';

get_template_part( $partial_path, $archive_layout );
