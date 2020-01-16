<form role="search" method="get" id="searchform" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="form-control">
		<label class="screen-reader-text" for="s"><?php esc_html_e( 'Search for:', 'artsy-wp' ); ?></label>
		<input type="text" value="<?php echo get_search_query(); ?>" placeholder="<?php esc_html_e( 'Search and press enter...', 'artsy-wp' ); ?>" name="s" id="s">
	</div>
</form>
