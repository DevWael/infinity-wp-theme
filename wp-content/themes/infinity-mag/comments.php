<?php
if ( post_password_required() ) {
	return;
}
?>
<div id="comments" class="comments-area">
	<?php ?>
	<?php if ( have_comments() ) : ?>
		<h2 class="single-title">
			<?php printf( esc_html( _n( 'One Comment', '%1$s Comments', get_comments_number(), 'dw' ) ), number_format_i18n( get_comments_number() ) ); ?>
		</h2>
		<ol class="comments_list">
			<?php wp_list_comments( array( 'callback' => 'dw_comment', 'style' => 'ol' ) ); ?>
		</ol>
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through  ?>
			<nav id="comment-nav-below" class="navigation" role="navigation">
				<h1 class="assistive-text section-heading"><?php esc_html_e( 'Comment navigation', 'dw' ); ?></h1>
				<div
					class="nav-previous"><?php previous_comments_link( esc_html__( '&larr; Older Comments', 'dw' ) ); ?></div>
				<div
					class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'dw' ) ); ?></div>
			</nav>
		<?php endif; ?>
		<?php if ( ! comments_open() && get_comments_number() ) : ?>
			<p class="nocomments"><?php esc_html_e( 'Comments are closed.', 'dw' ); ?></p>
		<?php endif; ?>
	<?php endif; ?>
	<?php
	$commenter = wp_get_current_commenter();
	$req       = get_option( 'require_name_email' );
	$aria_req  = ( $req ? " aria-required='true'" : '' );
	$args      = array(
		'id_form'             => 'commentform',
		'id_submit'           => 'submit-comment',
		'title_reply'         => esc_html__( 'Leave a Reply', 'dw' ),
		'title_reply_to'      => esc_html__( 'Leave a Reply to %s', 'dw' ),
		'cancel_reply_link'   => esc_html__( 'Cancel Reply', 'dw' ),
		'label_submit'        => esc_html__( 'Post Comment', 'dw' ),
		'comment_field'       => '<textarea id="comment" placeholder="' . esc_html__( 'Comment...', 'dw' ) . '" name="comment" cols="45" rows="8" aria-required="true"></textarea>',
		'must_log_in'         => '<p class="must-log-in">' . sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.', 'dw' ), esc_url( wp_login_url( apply_filters( 'the_permalink', get_permalink() ) ) ) ) . '</p>',
		'logged_in_as'        => '<p class="logged-in-as">' . sprintf( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>', 'dw' ), esc_url( admin_url( 'profile.php' ) ), esc_html( $user_identity ), esc_url( wp_logout_url( apply_filters( 'the_permalink', get_permalink() ) ) ) ) . '</p>',
		'comment_notes_after' => '',
		'fields'              => apply_filters( 'comment_form_default_fields',
			array(
				'author' => '<div class="row"><div class="col-xs-12 col-sm-6 col-md-4"><input id="author" name="author" class="form-control comment-author" type="text" placeholder="' . esc_html__( 'Name *', 'dw' ) . '" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div>',
				'email'  => '<div class="col-xs-12 col-sm-6 col-md-4"><input id="email" name="email" class="form-control comment-email" type="text" placeholder="' . esc_html__( 'Email *', 'dw' ) . '" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></div>',
				'url'    => '<div class="col-xs-12 col-sm-12 col-md-4"><input id="url" name="url" class="form-control comment-website" type="text" placeholder="' . esc_html__( 'Website', 'dw' ) . '" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></div></div>'
			)
		)
	);
	?>
	<?php comment_form( $args ); ?>
</div>