<?php
/*
Plugin Name: cocojambo
Description: Description
Version: 0.0.1
Author: Volkov Grisha
Requires PHP: 7.4
Text Domain: cocojambo
Domain Path: /languages/
Tags: cocojambo
Text Domain: cocojambo
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
define( 'COCOJAMBO_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

require_once 'autoload.php';

function activationPlugin() {
	if ( PHP_MAJOR_VERSION < 7 ) {
		die( __( 'Need PHP >= 7', 'cocojambo' ) );
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
	file_put_contents( COCOJAMBO_PLUGIN_DIR . 'log.txt', __( "Plugin Deactivated\n" ), FILE_APPEND );
}

register_activation_hook( __FILE__, 'activationPlugin' );
register_deactivation_hook( __FILE__, 'deactivationPlugin' );
add_action( 'plugins_loaded', 'loaded_textdomain' );
add_action( 'admin_menu', 'cocojambo_admin_pages' );
add_action( 'wp_enqueue_scripts', 'cocojambo_scripts_front' );
add_action( 'admin_enqueue_scripts', 'cocojambo_scripts_admin' );
add_action( 'admin_init', 'cocojambo_add_settings' );
add_action('init', 'gutenberg_examples_block');
function gutenberg_examples_block() {
	var_dump(__DIR__);
	register_block_type(__DIR__ . '/block/first');
}

function cocojambo_add_settings() {
	register_setting( 'cocojambo_main_group', 'cocojambo_main_email' );

	add_settings_section( 'cocojambo_main_first',
		__( 'Main Section One', 'cocojambo' ),
		function () {
			echo '<p>' . __( 'Main Section Description', 'cocojambo' ) . ' </p>';},
		'add-prefix-to-post-title' );

	add_settings_field(
		'cocojambo_main_email',
		__('Email', 'cocojambo'),
		'main_email_field',
		'add-prefix-to-post-title',
		'cocojambo_main_first',
		['label_for' => 'cocojambo_main_email']
	);
}

function main_email_field() {
	echo "Email Field";
}

function loaded_textdomain() {
	load_plugin_textdomain( 'cocojambo' );
}

function cocojambo_admin_pages() {

}

function cocojambo_scripts_front() {
	wp_enqueue_style( 'cocojambo-public', plugins_url( '/assets/public/public.css', __FILE__ ), 20 );
	wp_enqueue_script( 'cocojambo-public', plugins_url( '/assets/public/public.js', __FILE__ ), [ 'jquery' ], false, true );
}

function cocojambo_scripts_admin( $hook_suffix ) {
	if ( ! in_array( $hook_suffix, [
		'toplevel_page_add-prefix-to-post-title',
		'toplevel_page_add-prefix-to-post'
	] ) ) {
		return;
	}
	wp_enqueue_style( 'cocojambo-admin', plugins_url( '/assets/admin/admin.css', __FILE__ ) );
	wp_enqueue_script( 'cocojambo-admin', plugins_url( '/assets/admin/admin.js', __FILE__ ) );
}


$cocojambo_study = new CocojamboStudy();
$cocojambo_study->convertTitle();
$cocojambo_study->addPrefixToPostTitle();

$cocojambo_menu = new CocojamboLeftMenu();
