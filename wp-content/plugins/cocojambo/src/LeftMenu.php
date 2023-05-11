<?php

class CocojamboLeftMenu {

	public function __construct() {
		$this->addMenuItem();
	}

	public function addMenuItem() {
		add_action( 'admin_menu', [ $this, 'addPrefixMenuItem' ] );
	}

	public function addPrefixMenuItem() {
		add_menu_page(
			__('Create New Recommendation','cocojambo'), // назва, яка буде відображена в меню
			__('Create New Recommendation','cocojambo'), // назва, яка буде відображена в меню
			'manage_options', // рівень доступу користувачів до пункту меню
			'add-prefix-to-post-title', // унікальний ідентифікатор пункту меню
			[ $this, 'addPrefixToPost' ] // функція, яка викликається при виборі пункту меню
		);
		add_submenu_page(
			'add-prefix-to-post-title',
			__('Settings','cocojambo'), // назва, яка буде відображена в меню
			__('Settings','cocojambo'), // назва, яка буде відображена в меню
			'manage_options', // рівень доступу користувачів до пункту меню
			'add_prefix_to_post', // унікальний ідентифікатор пункту меню
			[ $this, 'addPrefixToPost' ] // функція, яка викликається при виборі пункту меню
		);
	}

	public function addPrefixToPost() {
		echo '<div class="wrap"> <h2>' . __('Create New Recommendation','cocojambo') . ' </h2></div>';
	}

}


