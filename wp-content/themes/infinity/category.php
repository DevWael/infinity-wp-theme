<?php global $wp_query;
get_header(); ?>
    <section class="home-posts">
        <div class="container">
			<?php
			// Current category cover statues (on or off or null)
			$window_mag_cat_cover = window_mag_get_term_setting( window_mag_current_cat_id(), 'cat_cover/control' );
			// Category cover image url
			$window_mag_cover_image = window_mag_get_term_setting( window_mag_current_cat_id(), 'cat_cover/on/photo/url' );
			if ( 'on' === $window_mag_cat_cover && $window_mag_cover_image ) {
				if ( function_exists( 'fw_ext_breadcrumbs' ) && 'on' === window_mag_get_setting( 'breadcrumbs_switch' ) ) {
					fw_ext_breadcrumbs( '/' );
				}
				window_mag_category_cover();// Category cover html
			} ?>
            <div class="row">
				<?php window_mag_content_area_start( 'category_layout' ); ?>
                <div class="blog-wrap category-box">
					<?php
					/**
					 * Check for the category cover is being disabled or no cover image is selected
					 */
					if ( $window_mag_cat_cover !== 'on' or ! $window_mag_cover_image ) {
						if ( function_exists( 'fw_ext_breadcrumbs' ) && 'on' === window_mag_get_setting( 'breadcrumbs_switch' ) ) {
							fw_ext_breadcrumbs( '/' );
						} ?>
						<?php if ( 'show' === window_mag_get_setting( 'category_page_description' ) or ! function_exists( 'fw_get_db_settings_option' ) ) { ?>
                            <header class="page-header">
								<?php
								the_archive_title( '<h2 class="page-title">', '</h2>' );
								the_archive_description( '<div class="taxonomy-description">', '</div>' );
								if ( window_mag_get_setting( 'category_posts_count' ) !== 'off' ) {
									$window_mag_cat = get_queried_object();//Posts count
									echo sprintf( '<div class="count">' . esc_html( '%s ' ) . esc_html( _n( 'Post ', 'Posts', $window_mag_cat->count, 'window-mag' ) ) . '</div>', $window_mag_cat->count );
								}
								?>
                            </header><!-- .page-header -->
						<?php }
					} ?>
					<?php if ( have_posts() ): ?>
						<?php
						if ( 'list' === window_mag_get_setting( 'category_posts_style' ) ) {
							get_template_part( 'recent', 'list' );
						} elseif ( 'masonry' === window_mag_get_setting( 'category_posts_style' ) ) {
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
				<?php window_mag_content_area_end(); ?>
				<?php
				window_mag_sidebar_start( 'category_layout' );
				get_sidebar();
				window_mag_sidebar_end();
				?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>