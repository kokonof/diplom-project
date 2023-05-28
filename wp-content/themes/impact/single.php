<?php echo get_header();  ?>

<?php
while ( have_posts() ) :
	the_post();

	get_template_part( 'template-parts/content', get_post_type() );

	the_post_navigation(
		array(
			'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'impact' ) . '</span> <span class="nav-title">%title</span>',
			'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'impact' ) . '</span> <span class="nav-title">%title</span>',
		)
	);

endwhile; // End of the loop.
?>

<?php echo get_footer() ?>
