<?php global $wp_query;
get_header(); ?>
    <section class="home-posts">
        <div class="container">
            <div class="row">
				<?php dw_content_area_start( 'search_layout' ); ?>
                <div class="blog-wrap category-box">
					<?php if ( function_exists( 'fw_ext_breadcrumbs' ) && 'on' === dw_get_setting( 'breadcrumbs_switch' ) ) {
						fw_ext_breadcrumbs( '/' );
					}
					if ( have_posts() ): ?>
                        <header class="page-header">
							<?php
							echo sprintf( '<h2 class="page-title">' . esc_html__( 'Search Results for: %s', 'dw' ) . '</h2>', '<span>' . get_search_query() . '</span>' );
							if ( dw_get_setting( 'search_posts_count' ) !== 'off' ) {
								echo sprintf( '<div class="count">' . esc_html( '%s ' ) . esc_html( _n( 'Post ', 'Posts', $wp_query->found_posts, 'dw' ) ) . '</div>', $wp_query->found_posts );
							}
							?>
                        </header><!-- .page-header -->
						<?php
						if ( 'list' === dw_get_setting( 'search_posts_style' ) ) {
							get_template_part( 'recent', 'list' );
						} elseif ( 'masonry' === dw_get_setting( 'search_posts_style' ) ) {
							get_template_part( 'recent', 'masonry' );
						} else {
							get_template_part( 'recent', 'blog' );
						}
						if ( $wp_query->max_num_pages > 1 ) :
							if ( 'text' === dw_get_setting( 'pagination_style' ) ) {
								the_posts_navigation();
							} else {
								dw_pagination();
							}
						endif;
					else :
						get_template_part( 'templates/part', 'notfound' );
					endif;
					?>
                </div>
				<?php
				dw_content_area_end();
				dw_sidebar_start( 'search_layout' );
				get_sidebar();
				dw_sidebar_end();
				?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>