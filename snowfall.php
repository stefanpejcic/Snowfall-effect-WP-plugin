<?php
/*
Plugin Name: Snowfall
Plugin URI: https://wpxss.com.com/wp-content/plugins/snowfall
Description: Shows snowfalls on the website when activated.
Version: 1.0
Author: Stefan Pejcic
Author URI: https://pejcic.rs
*/

function snowfall_enqueue_scripts() {
  // Enqueue the CSS file
  wp_enqueue_style( 'snowfall', plugin_dir_url( __FILE__ ) . 'snowfall.css' );
  // Enqueue the JavaScript file
  wp_enqueue_script( 'snowfall', plugin_dir_url( __FILE__ ) . 'snowfall.js', array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'snowfall_enqueue_scripts' );

function snowfall_display() {
  ?>
  <div id="snowfall">
    <div class="snowflake"></div>
    <div class="snowflake"></div>
    <div class="snowflake"></div>
    <div class="snowflake"></div>
    <div class="snowflake"></div>
    <div class="snowflake"></div>
    <div class="snowflake"></div>
    <div class="snowflake"></div>
    <div class="snowflake"></div>
    <div class="snowflake"></div>
</div>
  <?php
}

function snowfall_shortcode() {
  ob_start();
  snowfall_display();
  return ob_get_clean();
}
add_shortcode( 'snowfall', 'snowfall_shortcode' );
