<?php
if (class_exists('WP_Customize_Control')) {
  class WP_Customize_Section_Title_Control extends WP_Customize_Control {

    public $type = 'textarea';

    public function render_content() {
      ?>
        <span class="customize-control-title artsy-customize-control-title">
          <h4><?php echo esc_html( $this->label ); ?></h4>
        </span>
      <?php
    }
  }
}

?>
