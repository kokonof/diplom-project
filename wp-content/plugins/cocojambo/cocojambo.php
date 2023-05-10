<?php
/*
Plugin Name: Cocojambo
Plugin URI:
Description: Короткий опис про плагін
Version: 0.0.1
Author: Волков Гріша
Author URI:
*/

if (!defined('ABSPATH')) exit;

require_once 'autoload.php';

$cocojambo_study = new CocojamboStudy();
$cocojambo_study->convertTitle();
$cocojambo_study->addPrefixToPostTitle();

$cocojambo_menu = new CocojamboLeftMenu();
