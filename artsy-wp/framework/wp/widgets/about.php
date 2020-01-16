<?php

class Artsy_Sidebar_Widget_About extends WP_Widget {

  /* Construct the widget */
  function __construct() {

    $widget_ops = array('classname' => 'artsy-about-widget', 'description' => esc_html__('A simple about widget for your sidebar.', 'artsy-wp'));
    $control_ops = array('width' => 400, 'height' => 350);

    parent::__construct('artsy-about-widget', esc_html__('Artsy - Sidebar: About', 'artsy-wp'), $widget_ops, $control_ops);

    add_action('admin_enqueue_scripts', array($this, 'upload_scripts'));

  }

  public function upload_scripts()
  {
      wp_enqueue_script('media-upload');
      wp_enqueue_script('thickbox');
      wp_enqueue_script('artsy_upload_media_script', get_template_directory_uri().'/framework/js/upload-media.js', array('jquery'));

      wp_enqueue_style('thickbox');
  }

  /* Front-end */
  function widget( $args, $instance ) {

    $title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : esc_html__( 'About', 'artsy-wp' );
    $title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : esc_html__( 'Recent Posts', 'artsy-wp' );

    extract($args);
    echo $before_widget;
    echo $before_title . esc_html($title) . $after_title;
    ?>

    <div class="artsy-widget-about">
      <div class="artsy-widget-about-image">
        <img src="<?php echo esc_url($instance['image']); ?>" alt="<?php echo esc_attr($instance['alt_text']); ?>" />
      </div>
      <div class="artsy-widget-about-entry">
        <p><?php echo esc_html($instance['content']); ?></p>
      </div>
    </div>

    <?php

    echo $after_widget;
  }

  /* Back-end */
  function form ( $instance ) {

    $instance = wp_parse_args( (array) $instance, array( 'title' => '', 'depth' => '' ) );
    $instance = wp_parse_args( (array) $instance, array( 'image' => '', 'depth' => '' ) );
    $instance = wp_parse_args( (array) $instance, array( 'alt_text' => '', 'depth' => '' ) );
    $instance = wp_parse_args( (array) $instance, array( 'content' => '', 'depth' => '' ) );
    
    $title = $instance['title'];
    $image = $instance[ 'image' ];
    $alt_text = $instance[ 'alt_text' ];
    $content = $instance[ 'content' ];

    ?>

      <p>
        <label for="<?php echo $this->get_field_id('title'); ?>"><?php esc_html_e('Title:', 'artsy-wp'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
      </p>

      <p>
        <label for="<?php echo $this->get_field_name( 'image' ); ?>"><?php esc_html_e( 'Image:', 'artsy-wp' ); ?></label>
        <input name="<?php echo $this->get_field_name( 'image' ); ?>" id="<?php echo $this->get_field_id( 'image' ); ?>" class="widefat" type="text" size="36"  value="<?php echo esc_url( $image ); ?>" />
        <input class="upload_image_button button button-primary" type="button" value="Upload Image" />

      </p>

      <p>
        <label for="<?php echo $this->get_field_id('alt_text'); ?>"><?php esc_html_e('About Image Alt Text:', 'artsy-wp'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('alt_text'); ?>" name="<?php echo $this->get_field_name('alt_text'); ?>" type="text" value="<?php echo esc_attr($alt_text); ?>" />
      </p>

      <p>
        <label for="<?php echo $this->get_field_id( 'content' ); ?>"><?php esc_html_e( 'About Content:', 'artsy-wp' ); ?></label>
        <textarea class="widefat" rows="16" cols="20" id="<?php echo $this->get_field_id('content'); ?>" name="<?php echo $this->get_field_name('content'); ?>"><?php echo esc_textarea($content); ?></textarea>
      </p>

    <?php
  }

  /* Update */
  function update ( $new_instance, $old_instance ) {

    $instance = $old_instance;

    $instance['title'] = strip_tags($new_instance['title']);
    $instance['image'] = strip_tags($new_instance['image']);
    $instance['alt_text'] = strip_tags($new_instance['alt_text']);
    $instance['content'] = strip_tags($new_instance['content']);

    return $instance;

  }

}
