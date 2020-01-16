<?php

class Artsy_Sidebar_Widget_Social extends WP_Widget {

  /* Construct the widget */
  function __construct() {

    $widget_ops = array('classname' => 'artsy-social-widget', 'description' => esc_html__('A simple social widget for your sidebar.', 'artsy-wp'));
    $control_ops = array('width' => 400, 'height' => 350);

    parent::__construct('artsy-social-widget', esc_html__('Artsy - Sidebar: Social', 'artsy-wp'), $widget_ops, $control_ops);

  }

  /* Front-end */
  function widget( $args, $instance ) {

    $title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : esc_html__( 'Social', 'artsy-wp' );

    extract($args);
    echo $before_widget;
    echo $before_title . esc_html($title) . $after_title;
    ?>

    <div class="artsy-widget-social">
      <?php artsy_social_icons(); ?>
    </div>

    <?php

    echo $after_widget;
  }

  /* Back-end */
  function form ( $instance ) {

    $instance = wp_parse_args( (array) $instance, array( 'title' => '', 'depth' => '' ) );
    
    $title = $instance['title'];

    ?>

      <p>
        <label for="<?php echo $this->get_field_id('title'); ?>"><?php esc_html_e('Title:', 'artsy-wp'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
      </p>

    <?php
  }

  /* Update */
  function update ( $new_instance, $old_instance ) {

    $instance = $old_instance;

    $instance['title'] = strip_tags($new_instance['title']);

    return $instance;

  }

}
