<?php
require_once __DIR__ . '/class/Cocojambo_Walker.php';
add_action('wp_enqueue_scripts', 'cocojambo_require_scripts');
add_action('after_setup_theme', 'add_post_thumbnails_setup');

add_filter( 'navigation_markup_template', 'navigation_markup_template_filter', 10, 2 );
function cocojambo_require_scripts() {
	wp_enqueue_style('cocojambo-style-bootstrap',
		get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style('cocojambo-style', get_stylesheet_uri());

	wp_enqueue_script('cocojambo-script-bootstrap',
		get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js');
}
function add_post_thumbnails_setup() {
	add_theme_support( 'post-thumbnails' );
	register_nav_menus([
		'header_menu' => 'Верхнє меню',
		'right_menu' => 'Меню з права',
		'footer_menu' => 'Нижнє меню',
	]);
}

function navigation_markup_template_filter( $template, $css_class ): string {

	return '
	<nav class="navigation" aria-label="%4$s">
		<div class="nav-links">%3$s</div>
	</nav>';
}
