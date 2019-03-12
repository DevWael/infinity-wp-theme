<?php global $wp_query;
get_header(); ?>
    <section class="home-posts">
        <div class="container">
            <div class="row">
				<?php window_mag_content_area_start( 'tags_layout' ); ?>
                <div class="blog-wrap category-box">
					<?php if ( function_exists( 'fw_ext_breadcrumbs' ) && 'on' === window_mag_get_setting( 'breadcrumbs_switch' ) ) {
						fw_ext_breadcrumbs( '/' );
					}
					if ( 'show' === window_mag_get_setting( 'tags_page_description' ) or ! function_exists( 'fw_get_db_settings_option' ) ): ?>
                        <header class="page-header">
							<?php
							the_archive_title( '<h2 class="page-title">', '</h2>' );
							the_archive_description( '<div class="taxonomy-description">', '</div>' );
							if ( window_mag_get_setting( 'tags_posts_count' ) !== 'off' ) {
								$tag = get_queried_object();
								echo sprintf( '<div class="count">' . esc_html( '%s ' ) . esc_html( _n( 'Post ', 'Posts', $tag->count, 'window-mag' ) ) . '</div>', $tag->count );
							}
							?>
                        </header><!-- .page-header -->
					<?php endif; ?>
					<?php
					if ( have_posts() ):
						if ( 'list' === window_mag_get_setting( 'tags_posts_style' ) ) {
							get_template_part( 'recent', 'list' );
						} elseif ( 'masonry' === window_mag_get_setting( 'tags_posts_style' ) ) {
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
				window_mag_sidebar_start( 'tags_layout' );
				get_sidebar();
				window_mag_sidebar_end();
				?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>