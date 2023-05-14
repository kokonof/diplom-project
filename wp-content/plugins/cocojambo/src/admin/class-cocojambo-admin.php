<?php

class Cocojambo_Admin {
	public function __construct(  ) {
		add_action( 'admin_enqueue_scripts', [$this, 'cocojambo_scripts_admin'] );
	}

	public function cocojambo_scripts_admin( $hook_suffix ) {
		if ( ! in_array( $hook_suffix, [
			'toplevel_page_add-new-slide',
			'toplevel_page_add-prefix-to-post'
		] ) ) {
			return;
		}
		wp_enqueue_style( 'cocojambo-admin',
			COCOJAMBO_PLUGIN_URL . '/assets/admin/admin.css'  );
		wp_enqueue_script( 'cocojambo-admin',
			COCOJAMBO_PLUGIN_URL . '/assets/admin/admin.js', ['jquery']  );
	}
}