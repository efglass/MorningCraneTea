<div id="content">
  <div class="container">
    <div class="row">
			<div class="col-lg-12">
	      <main id="main">
					<div class="error-box">
						<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
							<?php
								$allowed_html_array = array(
						      'a' => array(
						        'href' => array()
						      )
						    );
							 ?>
							<p><?php printf(wp_kses(__( 'Oops! You still need to publish your first post. <a href="%1$s">Get started here</a>.', 'artsy-wp' ), $allowed_html_array), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
						<?php elseif ( is_search() ) : ?>
							<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'artsy-wp' ); ?></p>
							<?php get_search_form(); ?>
						<?php else : ?>
							<p><?php esc_html_e( 'It seems we cannot find what you are looking for. Perhaps searching can help.', 'artsy-wp' ); ?></p>
							<?php get_search_form(); ?>
						<?php endif; ?>
					</div>
				</main>
			</div>
		</div>
	</div>
</div>
