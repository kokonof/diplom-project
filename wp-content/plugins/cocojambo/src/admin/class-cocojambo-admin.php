<?php

/**
 * @method have_posts()
 * @method the_post()
 * @property $found_posts
 * @property $max_num_pages
 */
class Cocojambo_Admin {
	public function __construct() {
		add_action( 'admin_enqueue_scripts', [ $this, 'cocojambo_scripts_admin' ] );
		add_action( 'admin_post_save_slide', [ $this, 'save_slide' ] );
	}

	public function cocojambo_scripts_admin( $hook_suffix ) {

		wp_enqueue_style( 'cocojambo-admin',
			COCOJAMBO_PLUGIN_URL . 'assets/admin/jquery-ui-accordion/jquery-ui.min.css' );
		wp_enqueue_style( 'cocojambo-admin-main',
			COCOJAMBO_PLUGIN_URL . 'assets/admin/admin.css' );

		wp_enqueue_script( 'cocojambo-admin',
			COCOJAMBO_PLUGIN_URL . 'assets/admin/jquery-ui-accordion/jquery-ui.min.js', [ 'jquery' ] );
		wp_enqueue_script( 'cocojambo-admin-main',
			COCOJAMBO_PLUGIN_URL . 'assets/admin/admin.js', [ 'jquery' ] );
	}

	public function get_posts(): WP_Query {
		return new WP_Query( [
			'post_type' => 'post',
			'order_by'  => 'ID',
			'order'     => 'DESC',
			'paged'     => $_GET['paged'] ?? 1
		] );
	}

	public function save_slide() {
		if ( ! isset( $_POST['cocojambo_add_slide'] ) ||
		     ! wp_verify_nonce( $_POST['cocojambo_add_slide'], 'cocojambo_action' ) ) {
			wp_die( __( 'Error!', 'cocojambo' ) );
		}

		$slide_title   = isset( $_POST['slide_title'] ) ? trim( $_POST['slide_title'] ) : '';
		$slide_content = isset( $_POST['slide_content'] ) ? trim( $_POST['slide_content'] ) : '';
		$slide_id      = isset( $_POST['slide_id'] ) ? (int) $_POST['slide_id'] : 0;

		if ( empty( $slide_title ) || empty( $slide_content ) ) {
			set_transient( 'cocojambo_form_errors', __( 'Form fields are required', 'cocojambo' ), 30 );
		} else {
			$slide_title   = wp_unslash( $slide_title );
			$slide_content = wp_unslash( $slide_content );
			global $wpdb;

			if ( $slide_id ) {
				$query = "UPDATE {$wpdb->prefix}cocojambo_panel SET title = %s, content = %s WHERE id = $slide_id";
			} else {
				$query = "INSERT INTO {$wpdb->prefix}cocojambo_panel (title, content) VALUES (%s, %s)";
			}

			if ( false !== $wpdb->query( $wpdb->prepare(
				$query, $slide_title, $slide_content
			) ) ) {
				set_transient( 'cocojambo_form_success', __( 'Slide saved', 'cocojambo' ), 30 );
			} else {
				set_transient( 'cocojambo_form_errors', __( 'Error saving slide', 'cocojambo' ), 30 );
			}
		}

		wp_redirect( $_POST['_wp_http_referer'] );
	}

	public function get_slides( $all = false ) {
		global $wpdb;
		if ( $all ) {
			return $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}cocojambo_panel ORDER BY title ASC", ARRAY_A );
		}
		$slides = $wpdb->get_results( "SELECT id, title FROM {$wpdb->prefix}cocojambo_panel ORDER BY title ASC", ARRAY_A );
		$data   = array();
		foreach ( $slides as $slide ) {
			$data[ $slide['id'] ] = $slide['title'];
		}

		return $data;
	}
}
