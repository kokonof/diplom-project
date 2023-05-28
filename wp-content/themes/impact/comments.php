<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package impact
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" >

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :?>

		<?php the_comments_navigation(); ?>

		<ol class="comment">
			<?php
			wp_list_comments(
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
			);

			?>
		</ol><!-- .comment-list -->

	<?php the_comments_navigation(); ?>

		<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'impact' ); ?></p>
			<?php
		endif;

	endif;

	comment_form([
        'class_form' => 'reply-form',
        'class_submit' => 'btn btn-primary',
        'title_reply' => __( 'Leave a Reply' ),
		//Меняем разметку полей author и email
        'fields' => array (
	        'author' => '<div class="row">
                            <div class="col-md-6 form-group">
                            <input class="form-control" id="author" name="author" type="text" value="" size="30" placeholder="Your name*" /></div></div>',
	        'email' => '<div class="col-md-6 form-group">
<input class="form-control" id="email" name="email" type="email" value="" size="30" placeholder="Your email*" /></div></div>'
        ),
		//Меняем разметку поля комментария textarea
        'comment_field' => '<div class="row"><div class="col form-group"><textarea id="comment" name="comment" 
        aria-required="true" placeholder="Your Comment*" class="form-control"></textarea></div></div>',
		//Меняем разметку кнопки submit
        'submit_field' => '<div class="form-submit">%1$s %2$s</div>'
    ]);
	?>
</div><!-- #comments -->
