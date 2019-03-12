<form role="search" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
	<input type="text" name="s" value="<?php echo get_search_query(); ?>" class="search-input"
	       placeholder="<?php echo esc_attr_x( 'Type your search keyword', 'search placeholder', 'dw' ) ?>"
	       title="<?php echo esc_attr_x( 'Search', 'search text field title', 'dw' ); ?>">
	<button type="submit"><i class="fa fa-search"></i></button>
</form>