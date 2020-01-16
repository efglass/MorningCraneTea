<?php

if (class_exists( 'WP_Customize_Control' )) {

    class WP_Customize_Google_Font_Control extends WP_Customize_Control {

      private $fonts = false;

      public function __construct($manager, $id, $args = array(), $options = array()) {
        $this->fonts = $this->get_fonts();
        parent::__construct( $manager, $id, $args );
      }

      public function render_content() {
        if(!empty($this->fonts)) {
          ?>
            <label>
              <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
              <select <?php $this->link(); ?>>
                <optgroup label="Sans Serif">
                  <?php foreach ( $this->fonts as $k => $v ) : ?>
                    <?php if ($v->category == 'sans-serif') : ?>
                      <?php printf('<option value="%s" %s>%s</option>', $v->family, selected($this->value(), $k, false), $v->family); ?>
                    <?php endif; ?>
                  <?php endforeach;?>
                </optgroup>
                <optgroup label="Serif">
                  <?php foreach ( $this->fonts as $k => $v ) : ?>
                    <?php if ($v->category == 'serif') : ?>
                      <?php printf('<option value="%s" %s>%s</option>', $v->family, selected($this->value(), $k, false), $v->family); ?>
                    <?php endif; ?>
                  <?php endforeach;?>
                </optgroup>
              </select>

            </label>
          <?php
        }
      }

      public function get_fonts() {
        $fontFile = get_template_directory() . '/framework/wp/customizer/controls/google-web-fonts.txt';
        if(file_exists($fontFile)) {
          ob_start();
          include $fontFile;
          $contents = ob_get_clean();
          $content = json_decode($contents);
        }
        return array_slice($content->items, 0);
      }
    }
}

?>
