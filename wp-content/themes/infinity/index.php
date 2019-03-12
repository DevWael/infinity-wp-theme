<?php global $wp_query;

get_header();
if ( 'on' === window_mag_get_setting( 'carousel_switch/query_type' ) ) {
	get_template_part( 'content', 'slider' );
}
?>
    <section class="home-posts">
        <div class="container">
            <div class="row">
				<?php window_mag_content_area_start( 'home_sidebar' );
				/**
				 * Magazine Blocks Builder
				 */
				if ( function_exists( 'window_mag_magazine_builder' ) ) {
					window_mag_magazine_builder();
				}
				//Normal posts
				if ( 'yes' === window_mag_get_setting( 'home_recent_posts/control' ) ) {
					?>
                    <div class="blog-wrap category-box">
						<?php
						if ( have_posts() ):
							if ( window_mag_get_setting( 'home_recent_posts/yes/title' ) ) :
								?>
                                <h2 class="block-name">
                                    <span><?php echo esc_html( window_mag_get_setting( 'home_recent_posts/yes/title' ) ); ?></span>
                                </h2>
							<?php endif;
							if ( 'list' === window_mag_get_setting( 'home_recent_posts/yes/home_posts_style' ) ) {
								get_template_part( 'recent', 'list' );
							} elseif ( 'masonry' === window_mag_get_setting( 'home_recent_posts/yes/home_posts_style' ) ) {
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
				} elseif ( ! function_exists( 'fw_get_db_settings_option' ) ) {
					?>
                    <div class="blog-wrap category-box">
						<?php
						if ( have_posts() ):
							get_template_part( 'recent', 'blog' );
							if ( $wp_query->max_num_pages > 1 ) :
								window_mag_pagination();
							endif;
						else :
							get_template_part( 'templates/part', 'notfound' );
						endif;
						?>
                    </div>
					<?php
				}
				window_mag_content_area_end();
				window_mag_sidebar_start( 'home_sidebar' );
				get_sidebar();
				window_mag_sidebar_end();
				?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>