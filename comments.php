<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
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

<div class="container">
	<div class="row">
		<div id="comments" class="comments-area col-12">

			<?php if ( have_comments() ) : ?>
				<h2 class="comments-title">
					<?php
						$comments_number = get_comments_number();
						if ( '1' === $comments_number ) {
							/* translators: %s: post title */
							printf( _x( 'One thought on &ldquo;%s&rdquo;', 'comments title', 'twentysixteen' ), get_the_title() );
						} else {
							printf(
								/* translators: 1: number of comments, 2: post title */
								_nx(
									'%1$s thought on &ldquo;%2$s&rdquo;',
									'%1$s thoughts on &ldquo;%2$s&rdquo;',
									$comments_number,
									'comments title',
									'twentysixteen'
								),
								number_format_i18n( $comments_number ),
								get_the_title()
							);
						}
					?>
				</h2>

				<?php the_comments_navigation(); ?>

				<ol class="comment-list">
					<?php
						wp_list_comments( array(
							'style'       => 'ol',
							'short_ping'  => true,
							'avatar_size' => 42,
						) );
					?>
				</ol><!-- .comment-list -->

				<?php the_comments_navigation(); ?>

			<?php endif; // Check for have_comments(). ?>

			<?php
				// If comments are closed and there are comments, let's leave a little note, shall we?
				if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
			?>
				<p class="no-comments"><?php _e( 'Comments are closed.', 'twentysixteen' ); ?></p>
			<?php endif; ?>

		    <?php

						$campos = array(
							'author' => '<div class="row"><div class="col-6"><p class="comment-form-author col-6"></p>'.
													'<input id="author" class="form-control" name="author" placeholder="Nome" type="text" value=""></div>',

							'email' => '<div class="col-6"><p class="comment-form-email col-6"></p>'.
																			'<input id="email" class="form-control" name="email" placeholder="Email" type="email" value=""></div></div>'
						);

						comment_form( $args = array(
		        'id_form'           => 'commentform',  // that's the wordpress default value! delete it or edit it ;)
		        'id_submit'         => 'commentsubmit',
		        'title_reply'       => __( 'Deixe seu comentário', 'rv_title_reply' ),  // that's the wordpress default value! delete it or edit it ;)
		        'title_reply_to'    => __( 'Deixe seu comentário %s', 'wp-bootstrap-starter' ),  // that's the wordpress default value! delete it or edit it ;)
		        'cancel_reply_link' => __( 'Cancelar comentário', 'wp-bootstrap-starter' ),  // that's the wordpress default value! delete it or edit it ;)
		        'label_submit'      => __( 'Comentar', 'wp-bootstrap-starter' ),  // that's the wordpress default value! delete it or edit it ;)

		        'comment_field' =>  '<p><textarea placeholder="Escreva aqui seu comentário..." id="comment" class="form-control" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>',

						'fields' => apply_filters( 'comment_form_default_fields', $campos ),
		/*
		        'comment_notes_after' => '<p class="form-allowed-tags">' .
		            __( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:', 'wp-bootstrap-starter' ) .
		            '</p><div class="alert alert-info">' . allowed_tags() . '</div>'
		*/
		        // So, that was the needed stuff to have bootstrap basic styles for the form elements and buttons

		        // Basically you can edit everything here!
		        // Checkout the docs for more: http://codex.wordpress.org/Function_Reference/comment_form
		        // Another note: some classes are added in the bootstrap-wp.js - ckeck from line 1

		    ));

			?>

		</div><!-- #comments -->
	</div>
</div>
