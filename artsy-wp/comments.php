<div id="comments">
	<?php if ( post_password_required() ) : ?>
	<p><?php esc_html_e( 'This post is password protected. Enter the password to view any comments', 'artsy-wp' ); ?></p>
	<?php return; endif; ?>
	<?php if ( have_comments() ) : ?>
	<h2><?php comments_number(); ?></h2>
	<ol class="comments-list">
		<?php
			wp_list_comments(
				array(
					'callback' => 'artsy_comment',
					'short_ping' => true,
				)
			);
		?>
	</ol>
	<?php if ( get_comment_pages_count() > 1 ) : ?>
	<div class="comments-nav">
		<?php paginate_comments_links(); ?>
	</div>
	<?php endif; ?>
	<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
	<div class="comments-closed">
		<p><?php esc_html_e( 'Comments are closed', 'artsy-wp' ); ?></p>
	</div>
	<?php endif; ?>
	<?php comment_form(); ?>
</div>
