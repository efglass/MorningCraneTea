<?php

  include( get_template_directory() . '/framework/wp/widgets/about.php' );
  include( get_template_directory() . '/framework/wp/widgets/recent-posts.php' );
  include( get_template_directory() . '/framework/wp/widgets/social.php' );

  function artsy_custom_widgets_init () {
    register_widget('Artsy_Sidebar_Widget_About');
		register_widget('Artsy_Sidebar_Widget_Recent_Posts');
    register_widget('Artsy_Sidebar_Widget_Social');    
	}

	add_action('widgets_init', 'artsy_custom_widgets_init');
