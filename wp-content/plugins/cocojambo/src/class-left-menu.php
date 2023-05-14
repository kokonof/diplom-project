<?php

class Cocojambo_Left_Menu {

	public function __construct() {
		$this->addMenuItem();
	}

	public function addMenuItem() {
		add_action( 'admin_menu', [ $this, 'addPrefixMenuItem' ] );
	}

	public function addPrefixMenuItem() {
		add_menu_page(
			__('Create Slide','cocojambo'),
			__('Create Slide','cocojambo'),
			'manage_options',
			'add-new-slide',
			[ $this, 'addNewSlide'],
			'dashicons-embed-photo'
		);
		add_submenu_page(
			'add-new-slide',
			__('Set Slide','cocojambo'),
			__('Set Slide','cocojambo'),
			'manage_options',
			'add-new-slide',
			[ $this, 'addNewSlide' ]
		);

		add_submenu_page(
			'add-new-slide',
			__('Slide Settings','cocojambo'),
			__('Slide Settings','cocojambo'),
			'manage_options',
			'slide-settings',
			[ $this, 'addSettings' ]
		);
	}

	public function addNewSlide() {
		$this->requireTemplate('add-new-slide');
	}

	public function addSettings() {
		$this->requireTemplate('slide-settings');
	}

	protected function requireTemplate($fileName) {
		return require_once plugin_dir_path( __FILE__ ) .'../templates/'. $fileName.'.php';
	}
}


