<?php

/**
 * @method have_posts()
 * @method the_post()
 * @property $found_posts
 * @property $max_num_pages
 */
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

	public function get_posts(): WP_Query {
		return new WP_Query([
			'post_type' => 'post',
			'order_by' => 'ID',
			'order' => 'DESC',
			'paged' => $_GET['paged'] ?? 1
 		]);
	}
}