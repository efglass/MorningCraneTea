<?php
if (class_exists('WP_Customize_Control')) {
  class WP_Customize_Section_Description_Control extends WP_Customize_Control {

    public function render_content() {
      ?>
        <span class="customize-control-description artsy-customize-control-description">
          <p><?php echo esc_html( $this->description ); ?></p>
        </span>
      <?php
    }
  }
}

?>
