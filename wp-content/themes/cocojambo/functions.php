<?php
require_once __DIR__ . '/class/Cocojambo_Walker.php';
add_action('wp_enqueue_scripts', 'cocojambo_require_scripts');
add_action('after_setup_theme', 'cocojambo_setup');
add_action('widgets_init', 'cocojambo_widgets_init');
add_action('customize_register', 'cocojambo_customize_register');
add_action('wp_head', 'cocojambo_customize_css');
add_action('customize_preview_init', 'cocojambo_customize_js');
add_filter( 'navigation_markup_template',
	'cocojambo_navigation_markup_template_filter', 10, 2 );






function cocojambo_require_scripts() {
	wp_enqueue_style('cocojambo-style-bootstrap',
		get_template_directory_uri() . '/assets/css/bootstrap.min.css');
//	wp_enqueue_style('cocojambo-style-font',
//		get_template_directory_uri() . '/assets/font/css/all.css');
	wp_enqueue_style('cocojambo-style', get_stylesheet_uri());

	wp_enqueue_script('cocojambo-script-bootstrap',
		get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js');
//	wp_enqueue_script('cocojambo-script-font',
//		get_template_directory_uri() . '/assets/font/js/all.js');
}
function cocojambo_setup() {
	load_theme_textdomain('cocojambo', get_template_directory() . '/languages');
	add_theme_support('post-formats', [
		'aside', 'gallery', 'link', 'image',
		'quote', 'status', 'video', 'audio', 'chat'
	]);
	add_theme_support( 'post-thumbnails' );
//	add_image_size( 'spec_thumb', 240, 240, false );
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

	//custom section
	$wp_customize->add_section('cocojambo_site_data', [
		'title' => 'Інформація про сайт',

	]);
	$wp_customize->add_setting('cocojambo_site_phone', [
		'default'           => '+38 (000) 00 00 000',
	]);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'cocojambo_site_phone',
			[
				'label'   => 'Контактний номер телефону',
				'section' => 'cocojambo_site_data',
				'type' => 'text',
				'setting' => 'cocojambo_site_phone'
			]
		)
	);

	$wp_customize->add_setting('cocojambo_show_site_phone', [
		'default'           => true,
	]);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'cocojambo_show_site_phone',
			[
				'label'   => 'Відображати телефон',
				'section' => 'cocojambo_site_data',
				'type' => 'checkbox',
				'setting' => 'cocojambo_show_site_phone'
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