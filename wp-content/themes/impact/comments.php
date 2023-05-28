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
	if ( have_comments() ) :
		?>
		<h4>
			<?php
			$impact_comment_count = get_comments_number();
			if ( '1' === $impact_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'impact' ),
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			} else {
				printf(
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $impact_comment_count, 'comments title', 'impact' ) ),
					number_format_i18n( $impact_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			}
			?>
		</h4><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
				)
			);
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'impact' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().

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

	$args = array(
		// изменяем текст кнопки отправки
		'label_submit'=>'Submit',
		// удаляем сообщение со списком разрешенных HTML-тегов из-под формы комментирования
		'comment_notes_after' => '',
		'comment_notes_before' => '',
		//текст перед формой комментариев
		'title_reply' => __( 'Leave a comment' ),
		//Меняем разметку полей author и email
		'fields' => array (
			'author' => '<div class="comment-author comment-block"><input id="author" name="author" type="text" value="" size="30" placeholder="Your name" /></div>',
			'email' => '<div class="comment-email comment-block"><input id="email" name="email" type="email" value="" size="30" placeholder="Your email" /></div>'
		),
		//Меняем разметку поля комментария textarea
		'comment_field' => '<div class="comment-form-comment"><textarea id="comment" name="comment" 
        aria-required="true" placeholder="Your text"></textarea></div>',
		//Меняем разметку кнопки submit
		'submit_field' => '<div class="form-submit">%1$s %2$s</div>'
	);
	?>
</div><!-- #comments -->

