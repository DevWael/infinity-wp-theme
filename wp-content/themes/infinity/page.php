<?php
get_header();
/**
 * Single post layout --> sidebar position
 */
$window_mag_sticky_sidebar = '';
if ( 'on' === window_mag_get_setting( 'sticky_sidebar' ) ) {
	$window_mag_sticky_sidebar = ' sticky-sidebar ';
}
$window_mag_post_layout_meta  = window_mag_get_meta( get_the_ID(), 'window_single_sidebar' );
$window_mag_post_layout_theme = window_mag_get_setting( 'single_sidebar' );
$window_mag_content_class     = 'col-md-8 col-xs-12';
$window_mag_sidebar_class     = 'col-md-4 col-xs-12' . esc_attr( $window_mag_sticky_sidebar );
if ( $window_mag_post_layout_meta ) {
	/**
	 * Layout from post metabox
	 */
	if ( $window_mag_post_layout_meta === 'left' ) {
		$window_mag_content_class = 'col-md-8 col-xs-12 col-md-push-4';
		$window_mag_sidebar_class = 'col-md-4 col-xs-12 col-md-pull-8' . esc_attr( $window_mag_sticky_sidebar );
	} elseif ( $window_mag_post_layout_meta === 'right' ) {
		$window_mag_content_class = 'col-md-8 col-xs-12';
		$window_mag_sidebar_class = 'col-md-4 col-xs-12' . esc_attr( $window_mag_sticky_sidebar );
	}
} else {
	/**
	 * Layout from theme options page or the default when the unyson framework is not installed
	 */
	if ( $window_mag_post_layout_theme === 'left_sidebar' ) {
		$window_mag_content_class = 'col-md-8 col-xs-12 col-md-push-4';
		$window_mag_sidebar_class = 'col-md-4 col-xs-12 col-md-pull-8' . esc_attr( $window_mag_sticky_sidebar );
	} elseif ( $window_mag_post_layout_theme === 'right_sidebar' ) {
		$window_mag_content_class = 'col-md-8 col-xs-12';
		$window_mag_sidebar_class = 'col-md-4 col-xs-12' . esc_attr( $window_mag_sticky_sidebar );
	} else {
		$window_mag_content_class = 'col-md-8 col-xs-12';
		$window_mag_sidebar_class = 'col-md-4 col-xs-12' . esc_attr( $window_mag_sticky_sidebar );
	}
}
?>
	<section class="singular-post">
		<div class="container">
			<?php if ( function_exists( 'fw_ext_breadcrumbs' ) && 'on' === window_mag_get_setting( 'breadcrumbs_switch' ) ) {
				fw_ext_breadcrumbs( '/' );
			} ?>
			<?php
			/**
			 * Post Cover block
			 */
			if ( 'on' === window_mag_get_meta( get_the_ID(), 'window_post_cover/control' ) ):
				//Post cover image url
				$window_mag_cover_image = window_mag_get_meta( get_the_ID(), 'window_post_cover/on/photo/url' );
				?>
				<div class="post-cover"<?php if ( $window_mag_cover_image ) { ?>
					style="background-image: url('<?php echo esc_url( $window_mag_cover_image ); ?>')" <?php } ?>>
					<div class="dark-bg"></div>
					<div class="post-data">
						<?php the_title( '<h1 class="post-box-title h3">', '</h1>' ); ?>
						<?php get_template_part( 'templates/part', 'meta' ); ?>
					</div>
					<?php if ( $window_mag_cover_image ): ?>
						<a href="<?php echo esc_url( $window_mag_cover_image ); ?>" class="magnific-gallery zoom-in">
							<i class="fa fa-arrows-alt"></i>
						</a>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			<div class="row">
				<div class="<?php echo esc_attr( $window_mag_content_class ); ?>">
					<?php
					/**
					 * Post top ads area
					 */
					if ( window_mag_get_meta( get_the_ID(), 'window_top_banner' ) != 'off' ):
						window_mag_ads( 3, 'ad-post-header hidden-xs' );
					endif;
					?>
					<div class="blog-column">
						<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
							<div itemscope itemtype="http://schema.org/Article" role="article"
							     id="post-<?php the_ID(); ?>" <?php post_class( 'category-box singular' ); ?>>
								<?php
								/**
								 * Post title and meta when there is no post cover or not installed unyson framework
								 */
								if ( 'on' !== window_mag_get_meta( get_the_ID(), 'window_post_cover/control' ) or ! function_exists( 'fw_get_db_post_option' ) ) : ?>
									<?php the_title( '<h1 class="post-box-title" itemprop="name headline">', '</h1>' ); ?>
									<?php get_template_part( 'templates/part', 'meta' ); ?>
								<?php endif; ?>
								<?php get_template_part( 'templates/part' ); ?>
								<div class="post-box-content">
									<?php
									edit_post_link( esc_html__( 'Edit Post', 'window-mag' ), '<div class="edit-link">', '</div>' );
									the_content();
									wp_link_pages( array(
										'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'window-mag' ) . '</span>',
										'after'       => '</div>',
										'link_before' => '<span>',
										'link_after'  => '</span>',
										'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'window-mag' ) . ' </span>%',
										'separator'   => '<span class="screen-reader-text">, </span>',
									) );
									?>
								</div>
								<?php
								/**
								 * Post share icons file
								 */
								if ( ( 'on' === window_mag_get_setting( 'share_pages' ) && 'off' !== window_mag_get_meta( get_the_ID(), 'window_share_posts' ) ) or ! function_exists( 'fw_get_db_settings_option' ) ) :
									get_template_part( 'templates/part', 'share' );
								endif; ?>
							</div>
						<?php endwhile; ?>
							<?php
							/**
							 * Post bottom ads area
							 */
							if ( window_mag_get_meta( get_the_ID(), 'window_bottom_banner' ) != 'off' ):
								window_mag_ads( 4, 'ad-post-footer hidden-xs' );
							endif;

							// get current author info box
							if ( ( 'on' === window_mag_get_setting( 'author_bio_box' ) && 'on' == window_mag_get_meta( get_the_ID(), 'window_author_bio' ) ) or ! function_exists( 'fw_get_db_settings_option' ) ) {
								get_template_part( 'templates/author', 'box' );
							} 
							/**
							 * Comments system : Traditional comments or DISQUS Comments
							 */
							if ( 'disqus' === window_mag_get_setting( 'comments_system/control' ) && comments_open() && window_mag_get_setting( 'comments_system/disqus/id' ) ) : ?>
								<div class="disqusWrap">
									<div id="disqus_thread"></div>
									<script type="text/javascript">
										var disqus_shortname = '<?php echo esc_js( window_mag_get_setting( 'comments_system/disqus/id' ) ); ?>';
										(function () {
											var dsq = document.createElement('script');
											dsq.type = 'text/javascript';
											dsq.async = true;
											dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
											(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
										})();
									</script>
								</div>
							<?php else :
								if ( comments_open() || get_comments_number() ) {
									comments_template();
								}
							endif; ?>
						<?php else :
							get_template_part( 'templates/part', 'notfound' );
						endif;
						?>
					</div>

				</div>
				<?php
				/**
				 * Widgets area (Sidebar)
				 */
				if ( $window_mag_sidebar_class ): ?>
					<div class="<?php echo esc_attr( $window_mag_sidebar_class ); ?>">
						<?php get_sidebar(); ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</section>
<?php get_footer(); ?>