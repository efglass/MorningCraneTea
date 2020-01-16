<?php
function artsy_pagination() {

  $post_pagination_display = get_theme_mod( 'artsy_post_pagination_display', 'numbered' );
  if( $post_pagination_display == 'newer-older' ) {
    if( get_previous_posts_link() || get_next_posts_link()  ) {
      echo '<div class="posts-nav">';
      if( get_previous_posts_link() ) {
        echo '<div class="prev-posts">&laquo;';
        previous_posts_link( esc_html__('Newer Entries', 'artsy-wp' ) );
        echo '</div>';
      }
      if( get_next_posts_link() ) {
      echo '<div class="next-posts">';
        next_posts_link( esc_html__('Older Entries', 'artsy-wp' ));
      echo '&raquo;</div>';
      }
      echo '</div>';
    }
  } else {
    the_posts_pagination( array(
      'prev_text' => esc_html__( 'Previous page', 'artsy-wp' ),
      'next_text' => esc_html__( 'Next page', 'artsy-wp' ),
      'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'artsy-wp' ) . ' </span>',
    ) );
  }

}
