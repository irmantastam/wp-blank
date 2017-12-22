<?php

// Add bundle CSS
function loadStyles() {
  wp_enqueue_style('main', get_template_directory_uri() . '/dist/bundle.css');
}

// Add bundle JS
function loadScripts() {
  wp_register_script('main', get_template_directory_uri() . '/dist/bundle.js', array('jquery'), '1.0.0');
  wp_enqueue_script('main');
}

add_action('wp_enqueue_scripts', 'loadStyles');
add_action('wp_enqueue_scripts', 'loadScripts');

?>
