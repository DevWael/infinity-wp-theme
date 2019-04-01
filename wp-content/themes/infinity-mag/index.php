<?php global $wp_query;
get_header();
if ( 'on' === dw_get_setting( 'carousel_switch/query_type' ) ) {
	get_template_part( 'hero/' . dw_get_setting( 'carousel_switch/on/carousel_style' ) );
}

//display first half width blocks
dw_display_half_width_blocks( 1 );

?>

    <section class="home-posts">
        <div class="container">
            <div class="row">
				<?php dw_content_area_start( 'home_sidebar' );
				//Normal posts
				if ( 'yes' === dw_get_setting( 'home_recent_posts/control' ) ) {
					?>
                    <div class="blog-wrap category-box">
						<?php
						if ( have_posts() ):
							if ( dw_get_setting( 'home_recent_posts/yes/title' ) ) :
								?>
                                <h2 class="block-name">
                                    <span><?php echo esc_html( dw_get_setting( 'home_recent_posts/yes/title' ) ); ?></span>
                                </h2>
							<?php endif;
							if ( 'list' === dw_get_setting( 'home_recent_posts/yes/home_posts_style' ) ) {
								get_template_part( 'recent', 'list' );
							} elseif ( 'masonry' === dw_get_setting( 'home_recent_posts/yes/home_posts_style' ) ) {
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
				} elseif ( ! function_exists( 'fw_get_db_settings_option' ) ) {
					?>
                    <div class="blog-wrap category-box">
						<?php
						if ( have_posts() ):
							get_template_part( 'recent', 'blog' );
							if ( $wp_query->max_num_pages > 1 ) :
								dw_pagination();
							endif;
						else :
							get_template_part( 'templates/part', 'notfound' );
						endif;
						?>
                    </div>
					<?php
				}
				dw_content_area_end();
				dw_sidebar_start( 'home_sidebar' );
				get_sidebar();
				dw_sidebar_end();
				?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>