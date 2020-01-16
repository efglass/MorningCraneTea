<?php

class Artsy_Sidebar_Widget_Recent_Posts extends WP_Widget {

  /* Construct the widget */
  function __construct() {
    $widget_ops = array('classname' => 'artsy-recent-posts-widget', 'description' => esc_html__('A simple Recent Posts widget for your sidebar.', 'artsy-wp'));
    $control_ops = array('width' => 400, 'height' => 350);
    parent::__construct('artsy-recent-posts-widget', esc_html__('Artsy - Sidebar: Recent Posts', 'artsy-wp'), $widget_ops, $control_ops);
  }

  /* Front-end widget code */
  function widget( $args, $instance ) {

    $title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : esc_html__( 'Recent Posts', 'artsy-wp' );
    $num_posts = isset( $instance['num_posts'] ) ? $instance['num_posts'] : 5;
    $show_date = isset( $instance['show_date'] ) ? $instance['show_date'] : false;

    extract($args);
    echo $before_widget;
    echo $before_title . esc_html($title) . $after_title;
    ?>

    <?php
    $rp_query = new WP_Query( apply_filters( 'widget_posts_args', array(
      'posts_per_page' => $num_posts,
      'no_found_rows' => true,
      'post_status' => 'publish',
      'ignore_sticky_posts' => true
    ) ) );
    ?>

    <?php if ( $rp_query->have_posts() ) : ?>

    <div class="artsy-widget-recent-posts">
      <?php while ( $rp_query->have_posts()) : $rp_query->the_post(); ?>

      <div class="artsy-widget-recent-post">
        <div class="artsy-widget-recent-post-thumbnail">
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail( 'artsy-small-image' ); ?>
          </a>
        </div>
        <div class="artsy-widget-recent-post-entry">
          <div class="title-wrapper">
            <h3 class="artsy-widget-recent-post-title">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
          </div>
          <?php if ( $show_date ) : ?>
            <span class="artsy-widget-recent-post-date"><?php echo get_the_date(); ?></span>
          <?php endif; ?>
        </div>
      </div>
      <?php endwhile; ?>
    </div>

    <?php else : ?>

    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'artsy-wp' ); ?></p>

    <?php endif; ?>

    <?php wp_reset_postdata(); ?>

    <?php

    echo $after_widget;
  }

  /* Back-end widget code */
  function form ( $instance ) {

    $instance = wp_parse_args( (array) $instance, array( 'title' => '', 'depth' => '' ) );

    $title = $instance[ 'title' ];
    $num_posts = isset( $instance['num_posts'] ) ? $instance['num_posts'] : 5;
    $show_date = isset( $instance['show_date'] ) ? (bool) $instance['show_date'] : false;

    ?>
    <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php esc_html_e('Title:', 'artsy-wp'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>

    <p><label for="<?php echo $this->get_field_id('num_posts'); ?>"><?php esc_html_e('Number of Posts:', 'artsy-wp'); ?></label>
    <input id="<?php echo $this->get_field_id('num_posts'); ?>" name="<?php echo $this->get_field_name('num_posts'); ?>" type="text" value="<?php echo esc_attr($num_posts); ?>" size="3" /></p>

    <p><input class="checkbox" type="checkbox" <?php checked( $show_date ); ?> id="<?php echo $this->get_field_id( 'show_date' ); ?>" name="<?php echo $this->get_field_name( 'show_date' ); ?>" />
    <label for="<?php echo $this->get_field_id( 'show_date' ); ?>"><?php esc_html_e( 'Display post date?', 'artsy-wp' ); ?></label></p>

    <?php

  }

  /* Update */
  function update ( $new_instance, $old_instance ) {

    $instance = $old_instance;

    $instance['title'] = strip_tags($new_instance['title']);
    $instance['num_posts'] = (int) $new_instance['num_posts'];
    $instance['show_date'] = isset( $new_instance['show_date'] ) ? (bool) $new_instance['show_date'] : false;

    return $instance;

  }

}
