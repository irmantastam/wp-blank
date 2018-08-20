<?php

/* Specify CSS bundle path */
function loadStyles() {
  wp_enqueue_style('main', get_template_directory_uri() . '/../dist/bundle.css');
}

/* Specify JS bundle path */
function loadScripts() {
  wp_register_script('main', get_template_directory_uri() . '/../dist/bundle.js', array('jquery'), '1.0.0');
  wp_enqueue_script('main');
}

/* Support programmable title tag */
add_theme_support('title-tag');

/* Register styles and scripts */
add_action('wp_enqueue_scripts', 'loadStyles');
add_action('wp_enqueue_scripts', 'loadScripts');

if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Sidebar',
		'id'   => 'sidebar-1',
		'description'   => 'Add widgets here to appear in your sidebar.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
  ));
}

?>
