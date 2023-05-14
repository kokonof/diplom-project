<div class="wrap">
	<h1><?php _e( 'Slide Settings', 'cocojambo' ) ?> </h1>
	<?php settings_errors(); ?>
	<form action="options.php" method="post">
		<?php
		settings_fields( 'cocojambo_main_group' );
		do_settings_sections( 'add-new-slide' );
		submit_button() ?>
	</form>
</div>