<?php

/*
Plugin Name:   Custom CSS and JS Plugin
Plugin URI:    https://github.com/jpen365/custom-css-and-js-plugin
Description:   Add a custom CSS stylesheet and JavaScript file to WordPress
Version:       1.0
Author:        Jon Penland
Author URI:    http://premium.wpmudev.org/blog/author/jonpenland
*/

function custom_css_js_enqueue_scripts() {

  /* enqueue the custom-style.css file */
  wp_enqueue_style( 'custom-css', plugins_url( '/css/custom-style.css', __FILE__ ), $ver = false );

  /* enqueue the custom-scripts.js file */
  wp_enqueue_script( 'custom-js', plugins_url( '/js/custom-scripts.js', __FILE__ ), $deps = array( 'jquery' ), $ver = false, $in_footer = true );
}
add_action( 'wp_enqueue_scripts', 'custom_css_js_enqueue_scripts' );