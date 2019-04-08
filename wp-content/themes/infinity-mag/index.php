<?php global $wp_query;
get_header();
if ( 'on' === dw_get_setting( 'carousel_switch/query_type' ) ) {
	get_template_part( 'hero/' . dw_get_setting( 'carousel_switch/on/carousel_style' ) );
}
//display first half width blocks
do_action( 'dw_full_width_builder', 1 );
dw_display_half_width_blocks( 1, 'first_side_bar' );
do_action( 'dw_full_width_builder', 2 );
dw_display_half_width_blocks( 2, 'second_side_bar' );
if ( ! function_exists( 'fw_get_db_settings_option' ) ) {
	?>
    <section class="home-posts">
        <div class="container">
            <div class="row">
				<?php dw_content_area_start( 'home_sidebar' );
				?>
                <div class="blog-wrap posts-area">
					<?php
					if ( have_posts() ) {
						get_template_part( 'recent', 'blog' );
						if ( $wp_query->max_num_pages > 1 ) {
							dw_pagination();
						}
					} else {
						get_template_part( 'templates/part', 'notfound' );
					}
					?>
                </div>
				<?php
				dw_content_area_end();
				dw_sidebar_start( 'home_sidebar' );
				get_sidebar();
				dw_sidebar_end();
				?>
            </div>
        </div>
    </section>
<?php }
get_footer(); ?>