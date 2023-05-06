<?php
require_once __DIR__ . '/class/Cocojambo_Walker.php';
add_action('wp_enqueue_scripts', 'cocojambo_require_scripts');
add_action('after_setup_theme', 'cocojambo_add_post_thumbnails_setup');
add_action('widgets_init', 'cocojambo_widgets_init');
add_action('customize_register', 'cocojambo_customize_register');
add_action('wp_head', 'cocojambo_customize_css');
add_action('customize_preview_init', 'cocojambo_customize_js');
add_filter( 'navigation_markup_template', 'cocojambo_navigation_markup_template_filter', 10, 2 );






function cocojambo_require_scripts() {
	wp_enqueue_style('cocojambo-style-bootstrap',
		get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style('cocojambo-style', get_stylesheet_uri());

	wp_enqueue_script('cocojambo-script-bootstrap',
		get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js');
}
function cocojambo_add_post_thumbnails_setup() {
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo', [
		'width' =>'156',
		'height' =>'46'
	]);
	add_theme_support( 'custom-background', [
		'default-color' =>'ffffff',
	]);
	add_theme_support( 'custom-header', [
		'default-color' =>'ffffff',
	]);
	register_nav_menus([
		'header_menu' => 'Верхнє меню',
		'right_menu' => 'Меню з права',
		'footer_menu' => 'Нижнє меню',
	]);
}

function cocojambo_navigation_markup_template_filter( $template, $css_class ): string {

	return '
	<nav class="navigation" aria-label="%4$s">
		<div class="nav-links">%3$s</div>
	</nav>';
}

function cocojambo_widgets_init() {
	register_sidebar([
		'name' =>'Сайдбар з права',
		'id' =>'right_sidebar',
		'description' =>'Віджети з права на головні сторінці'
	]);
}

function cocojambo_customize_register($wp_customize) {
	$wp_customize->add_setting('cocojambo_link_color', [
		'default'           => '#007bff',
		'sanitize_callback' => 'sanitize_hex_color',
//		'transport'         => 'postMessage' // для динамічного відображення кастомізації (js не підтягує)
	]);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(  // WP_Customize_Control буде як інпут
			$wp_customize,
			'cocojambo_link_color',
			[
				'label'   => 'Колір посилань',
				'section' => 'colors',
				'setting' => 'cocojambo_link_color'
			]
		)
	);
}

function cocojambo_customize_css() {

	$cocojambo_link_color = get_theme_mod('cocojambo_link_color');
	echo '
	<style type="text/css">
		a { color: ' . $cocojambo_link_color . ' }
	</style>';
}

function cocojambo_customize_js() {
	wp_enqueue_script('cocojambo_customizer',
		get_template_directory_uri() . '/assets/js/cocojambo_customize.js',
		['jquery', 'customize_preview'],
	'',
	true
	);
}