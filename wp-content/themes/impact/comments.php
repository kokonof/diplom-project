<?php
if ( post_password_required() ) {
	return;
}
?>
<div id="comments" >
	<?php if ( have_comments() ) :?>
		<?php the_comments_navigation(); ?>
		<ol class="comment">
			<?php wp_list_comments(
				array(
					'style'       => 'div',
					'short_ping'  => true,
                    'avatar_size' => 60,
//                    'per_page' => 5,
//                    'page' => 1,
					'max_depth'   => 5,
					'callback' => 'misha_comment',
					'end-callback' => 'misha_end_comment'
				)
			); ?>
		</ol>
	<?php the_comments_navigation(); ?>
		<?php if ( ! comments_open() ) : ?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'impact' ); ?></p>
			<?php
		endif;
	endif;
	comment_form([
        'class_form' => 'reply-form',
        'class_submit' => 'btn btn-primary',
        'title_reply' => __( 'Leave a Reply' ),
        'fields' => array (
	        'author' => '<div class="row">
                            <div class="col-md-6 form-group">
                            <input class="form-control" id="author" name="author" type="text" value="" size="30" placeholder="Your name*" /></div></div>',
	        'email' => '<div class="col-md-6 form-group">
<input class="form-control" id="email" name="email" type="email" value="" size="30" placeholder="Your email*" /></div></div>'
        ),
        'comment_field' => '<div class="row"><div class="col form-group"><textarea id="comment" name="comment" 
        aria-required="true" placeholder="Your Comment*" class="form-control"></textarea></div></div>',
        'submit_field' => '<div class="form-submit">%1$s %2$s</div>'
    ]);
	?>
</div>
