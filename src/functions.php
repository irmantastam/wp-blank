<?php

/**
 * Add theme support for various WordPress features.
 *
 * @return void
 */
function wp_blank_setup() {
	// Support programmable title tag.
	add_theme_support( 'title-tag' );

	// Support custom logo.
	add_theme_support( 'custom-logo' );

	/**
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on wp-blank, use a find and replace
	 * to change 'wp-blank' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'wp-blank', get_template_directory() . '/languages' );

	// Register top menu.
	register_nav_menus(
		array(
			'top' => esc_html__( 'Top Menu', 'wp-blank' ),
		)
	);
}
add_action( 'after_setup_theme', 'wp_blank_setup' );

/**
 * Specify JS bundle path.
 *
 * @return void
 */
function wp_blank_load_scripts() {
	wp_enqueue_script( 'main', get_template_directory_uri() . '/../dist/bundle.js' );
}
add_action( 'wp_enqueue_scripts', 'wp_blank_load_scripts' );

/**
 * Specify CSS bundle path.
 *
 * @return void
 */
function wp_blank_load_styles() {
	wp_enqueue_style( 'main', get_template_directory_uri() . '/../dist/bundle.css' );
}
add_action( 'wp_enqueue_scripts', 'wp_blank_load_styles' );

/**
 * Register widget area.
 *
 * @return void
 */
function wp_blank_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'wp-blank' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here to appear in your sidebar.', 'wp-blank' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'wp_blank_widgets_init' );

?>
