<?php
/*
Plugin Name: Cocojambo
Plugin URI:
Description: Короткий опис про плагін
Version: 0.0.1
Author: Волков Гріша
Author URI:
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
define( 'COCOJAMBO_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

require_once 'autoload.php';

function activationPlugin() {
	if ( PHP_MAJOR_VERSION < 7 ) {
		die( ' Потрібно PHP >= 7' );
	}

	global $wpdb;
	$query = "CREATE TABLE IF NOT EXISTS `{$wpdb->prefix}test`
				(
				    `id` INT NOT NULL AUTO_INCREMENT ,
					 `name` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)
    			) ENGINE = InnoDB;";
	$wpdb->query( $query );
}

function deactivationPlugin() {
	file_put_contents( COCOJAMBO_PLUGIN_DIR . 'log.txt', "Plugin Deactivated\n", FILE_APPEND );
}

register_activation_hook( __FILE__, 'activationPlugin' );
register_deactivation_hook( __FILE__, 'deactivationPlugin' );

add_action( 'admin_menu', 'cocojambo_admin_pages' );
add_action( 'wp_enqueue_scripts', 'cocojambo_scripts_front' );
add_action( 'admin_enqueue_scripts', 'cocojambo_scripts_admin' );

function cocojambo_admin_pages() {

}

function cocojambo_scripts_front() {
	wp_enqueue_style( 'cocojambo-public', plugins_url( '/assets/public/public.css', __FILE__ ), 20 );
	wp_enqueue_script( 'cocojambo-public', plugins_url( '/assets/public/public.js', __FILE__ ), [ 'jquery' ], false, true );
}

function cocojambo_scripts_admin( $hook_suffix ) {
	var_dump($hook_suffix);
	if ( ! in_array( $hook_suffix, [ 'toplevel_page_add-prefix-to-post-title', 'toplevel_page_add-prefix-to-post' ] ) ) {
		return;
	}
	wp_enqueue_style( 'cocojambo-admin', plugins_url( '/assets/admin/admin.css', __FILE__ ) );
	wp_enqueue_script( 'cocojambo-admin', plugins_url( '/assets/admin/admin.js', __FILE__ ) );
}


$cocojambo_study = new CocojamboStudy();
$cocojambo_study->convertTitle();
$cocojambo_study->addPrefixToPostTitle();

$cocojambo_menu = new CocojamboLeftMenu();
