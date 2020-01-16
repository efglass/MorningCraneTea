<?php

  $home_layout = get_theme_mod('artsy_home_page_layout', 'default');
  $partial_path = 'template-parts/home/layout';

  get_template_part( $partial_path, $home_layout );

?>
