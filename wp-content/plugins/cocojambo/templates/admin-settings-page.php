<div class="wrap">
	<h1><?php _e( 'General Settings', 'cocojambo' ) ?> </h1>
	<?php settings_errors(); ?>
	<form action="options.php" method="post">
		<?php
		settings_fields( 'cocojambo_main_group' );
		do_settings_sections( 'add-prefix-to-post-title' );
		submit_button() ?>
	</form>
</div>