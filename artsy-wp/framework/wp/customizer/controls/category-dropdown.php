<?php
if (class_exists('WP_Customize_Control')) {
  class WP_Customize_Category_Control extends WP_Customize_Control {

    public function render_content() {
      $dropdown = wp_dropdown_categories(
        array(
        'name' => '_customize-dropdown-categories-' . $this->id,
        'echo' => 0,
        'show_option_none' => esc_html__( '- Select -', 'artsy-wp' ),
        'option_none_value' => '1',
        'selected' => $this->value(),
      ) );

      $dropdown = str_replace( '<select', '<select ' . $this->get_link(), $dropdown );

      printf(
      '<label class="customize-control-select"><span class="customize-control-title">%s</span> %s</label>',
      $this->label,
      $dropdown
      );
    }
  }
}

?>
