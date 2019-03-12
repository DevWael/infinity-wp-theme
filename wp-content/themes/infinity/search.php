<?php global $wp_query;
get_header(); ?>
    <section class="home-posts">
        <div class="container">
            <div class="row">
				<?php window_mag_content_area_start( 'search_layout' ); ?>
                <div class="blog-wrap category-box">
					<?php if ( function_exists( 'fw_ext_breadcrumbs' ) && 'on' === window_mag_get_setting( 'breadcrumbs_switch' ) ) {
						fw_ext_breadcrumbs( '/' );
					}
					if ( have_posts() ): ?>
                        <header class="page-header">
							<?php
							echo sprintf( '<h2 class="page-title">' . esc_html__( 'Search Results for: %s', 'window-mag' ) . '</h2>', '<span>' . get_search_query() . '</span>' );
							if ( window_mag_get_setting( 'search_posts_count' ) !== 'off' ) {
								echo sprintf( '<div class="count">' . esc_html( '%s ' ) . esc_html( _n( 'Post ', 'Posts', $wp_query->found_posts, 'window-mag' ) ) . '</div>', $wp_query->found_posts );
							}
							?>
                        </header><!-- .page-header -->
						<?php
						if ( 'list' === window_mag_get_setting( 'search_posts_style' ) ) {
							get_template_part( 'recent', 'list' );
						} elseif ( 'masonry' === window_mag_get_setting( 'search_posts_style' ) ) {
							get_template_part( 'recent', 'masonry' );
						} else {
							get_template_part( 'recent', 'blog' );
						}
						if ( $wp_query->max_num_pages > 1 ) :
							if ( 'text' === window_mag_get_setting( 'pagination_style' ) ) {
								the_posts_navigation();
							} else {
								window_mag_pagination();
							}
						endif;
					else :
						get_template_part( 'templates/part', 'notfound' );
					endif;
					?>
                </div>
				<?php
				window_mag_content_area_end();
				window_mag_sidebar_start( 'search_layout' );
				get_sidebar();
				window_mag_sidebar_end();
				?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>