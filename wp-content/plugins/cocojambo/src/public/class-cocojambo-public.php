<?php

class Cocojambo_Public {
	public function __construct(  ) {
		add_action( 'wp_enqueue_scripts', [$this, 'cocojambo_scripts_front'] );
	}



	function cocojambo_scripts_front() {
		wp_enqueue_style( 'cocojambo-public',
			COCOJAMBO_PLUGIN_URL .'/assets/public/public.css', 20 );
		wp_enqueue_script( 'cocojambo-public',
			COCOJAMBO_PLUGIN_URL .'/assets/public/public.js',  [ 'jquery' ], false, true );
	}
}