<?php

/* ==========================================================================
  Color Settings - Text
=========================================================================== */

// Text Color
$slider_text_color = '';
$slider_text_color .= 'color: ' . get_theme_mod( 'artsy_slider_text_color', '#333333' ) . ';';
echo '.featured-slider, .featured-slider-title a {' . $slider_text_color . '}';
echo '.featured-slider .slick-dots li button {' . $slider_text_color . '}';

// Overlay
$slider_overlay_color = '';
$slider_overlay_opacity = '';
$slider_overlay_color .= 'background-color: ' . get_theme_mod( 'artsy_slider_overlay_color', '#ffffff' ) . ';';
$slider_overlay_opacity .= 'opacity: ' . get_theme_mod( 'artsy_slider_overlay_opacity', '0.4' ) . ';';
echo '.featured-slider-item .mask, .artsy-post-gallery .mask {' . $slider_overlay_color . $slider_overlay_opacity . '}';
