<?php
/*
Plugin Name: Cocojambo
Plugin URI:
Description: Короткий опис про плагін
Version: 0.0.1
Author: Волков Гріша
Author URI:
*/

function add_prefix_menu_item() {
	add_menu_page(
		'Мощний плагін', // назва, яка буде відображена в меню
		'Мощний плагін', // назва, яка буде відображена в меню
		'manage_options', // рівень доступу користувачів до пункту меню
		'add-prefix-to-post-title', // унікальний ідентифікатор пункту меню
		'add_prefix_to_post' // функція, яка викликається при виборі пункту меню
	);
	add_submenu_page(
		'add-prefix-to-post-title',
		'Підпункт для меню', // назва, яка буде відображена в меню
		'Підпункт для меню', // назва, яка буде відображена в меню
		'manage_options', // рівень доступу користувачів до пункту меню
		'add_prefix_to_post', // унікальний ідентифікатор пункту меню
		'add_prefix_to_post' // функція, яка викликається при виборі пункту меню
	);
}
function add_prefix_to_post() {
	echo 'Тут інформація про плагін якісь дашборди';
}
add_action('admin_menu', 'add_prefix_menu_item');
function add_prefix_to_post_title($title, $id = null) {
	if (!is_admin() && 'post' === get_post_type($id)) {
		$prefix = 'Префікс: '; // вкажіть свій префікс
		$title = $prefix . $title;
	}
	return $title;
}
add_filter('the_title', 'add_prefix_to_post_title', 10, 2);