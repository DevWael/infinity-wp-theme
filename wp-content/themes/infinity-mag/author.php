<?php global $wp_query;
get_header(); ?>
	<section class="home-posts">
		<div class="container">
			<div class="row">
				<?php dw_content_area_start( 'author_layout' ); ?>
				<div class="blog-wrap category-box">
					<?php if ( function_exists( 'fw_ext_breadcrumbs' ) && 'on' === dw_get_setting( 'breadcrumbs_switch' ) ) {
						fw_ext_breadcrumbs( '/' );
					}
					if ( have_posts() ):
						if ( 'show' === dw_get_setting( 'author_bio' ) or ! function_exists( 'fw_get_db_settings_option' ) ) {
							get_template_part( 'templates/author', 'box' );
						}
						if ( 'list' === dw_get_setting( 'author_posts_style' ) ) {
							get_template_part( 'recent', 'list' );
						} elseif ( 'masonry' === dw_get_setting( 'author_posts_style' ) ) {
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
				<?php dw_content_area_end(); ?>
				<?php
				dw_sidebar_start( 'author_layout' );
				get_sidebar();
				dw_sidebar_end();
				?>
			</div>
		</div>
	</section>
<?php get_footer(); ?>