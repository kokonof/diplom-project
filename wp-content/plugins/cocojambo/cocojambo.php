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

register_activation_hook( __FILE__, 'activationPlugin' );

$cocojambo_study = new CocojamboStudy();
$cocojambo_study->convertTitle();
$cocojambo_study->addPrefixToPostTitle();

$cocojambo_menu = new CocojamboLeftMenu();
