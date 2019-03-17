<?php
get_header();
/**
 * Single post layout --> sidebar position
 */
$dw_sticky_sidebar = '';
if ( 'on' === dw_get_setting( 'sticky_sidebar' ) ) {
	$dw_sticky_sidebar = ' sticky-sidebar ';
}
$dw_post_layout_meta  = dw_get_meta( get_the_ID(), 'window_single_sidebar' );
$dw_post_layout_theme = dw_get_setting( 'single_sidebar' );
$dw_content_class     = 'col-md-8 col-xs-12';
$dw_sidebar_class     = 'col-md-4 col-xs-12' . esc_attr( $dw_sticky_sidebar );
if ( $dw_post_layout_meta ) {
	/**
	 * Layout from post metabox
	 */
	if ( $dw_post_layout_meta === 'left' ) {
		$dw_content_class = 'col-md-8 col-xs-12 col-md-push-4';
		$dw_sidebar_class = 'col-md-4 col-xs-12 col-md-pull-8' . esc_attr( $dw_sticky_sidebar );
	} elseif ( $dw_post_layout_meta === 'right' ) {
		$dw_content_class = 'col-md-8 col-xs-12';
		$dw_sidebar_class = 'col-md-4 col-xs-12' . esc_attr( $dw_sticky_sidebar );
	}
} else {
	/**
	 * Layout from theme options page or the default when the unyson framework is not installed
	 */
	if ( $dw_post_layout_theme === 'left_sidebar' ) {
		$dw_content_class = 'col-md-8 col-xs-12 col-md-push-4';
		$dw_sidebar_class = 'col-md-4 col-xs-12 col-md-pull-8' . esc_attr( $dw_sticky_sidebar );
	} elseif ( $dw_post_layout_theme === 'right_sidebar' ) {
		$dw_content_class = 'col-md-8 col-xs-12';
		$dw_sidebar_class = 'col-md-4 col-xs-12' . esc_attr( $dw_sticky_sidebar );
	} else {
		$dw_content_class = 'col-md-8 col-xs-12';
		$dw_sidebar_class = 'col-md-4 col-xs-12' . esc_attr( $dw_sticky_sidebar );
	}
}
?>
    <section class="singular-post">
        <div class="container">
			<?php if ( function_exists( 'fw_ext_breadcrumbs' ) && 'on' === dw_get_setting( 'breadcrumbs_switch' ) ) {
				fw_ext_breadcrumbs( '/' );
			} ?>
			<?php
			/**
			 * Post Cover block
			 */
			if ( 'on' === dw_get_meta( get_the_ID(), 'window_post_cover/control' ) ):
				//Post cover image url
				$window_mag_cover_image = dw_get_meta( get_the_ID(), 'window_post_cover/on/photo/url' );
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
                <div class="<?php echo esc_attr( $dw_content_class ); ?>">
					<?php
					/**
					 * Post top ads area
					 */
					if ( dw_get_meta( get_the_ID(), 'window_top_banner' ) != 'off' ):
						dw_ads( 3, 'ad-post-header hidden-xs' );
					endif;
					?>
                    <div class="blog-column">
                        <div itemscope itemtype="http://schema.org/Article" role="article"
                             id="post-<?php the_ID(); ?>" <?php post_class( 'category-box singular' ); ?>>
							<?php
							/**
							 * Post title and meta when there is no post cover or not installed unyson framework
							 */
							if ( 'on' !== dw_get_meta( get_the_ID(), 'window_post_cover/control' ) or ! function_exists( 'fw_get_db_post_option' ) ) : ?>
								<?php the_title( '<h1 class="post-box-title" itemprop="name headline">', '</h1>' ); ?>
							<?php endif; ?>
                            <div class="post-box-content">
								<?php
								woocommerce_content();
								?>
                            </div>
							<?php
							/**
							 * Post share icons file
							 */
							if ( ( 'on' === dw_get_setting( 'share_pages' ) && 'off' !== dw_get_meta( get_the_ID(), 'window_share_posts' ) ) or ! function_exists( 'fw_get_db_settings_option' ) ) :
								get_template_part( 'templates/part', 'share' );
							endif; ?>
                        </div>
						<?php
						/**
						 * Post bottom ads area
						 */
						if ( dw_get_meta( get_the_ID(), 'window_bottom_banner' ) != 'off' ):
							dw_ads( 4, 'ad-post-footer hidden-xs' );
						endif;

						/**
						 * Comments system : Traditional comments or DISQUS Comments
						 */
						if ( 'disqus' === dw_get_setting( 'comments_system/control' ) && comments_open() && dw_get_setting( 'comments_system/disqus/id' ) ) : ?>
                            <div class="disqusWrap">
                                <div id="disqus_thread"></div>
                                <script type="text/javascript">
                                    var disqus_shortname = '<?php echo esc_js( dw_get_setting( 'comments_system/disqus/id' ) ); ?>';
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
                    </div>

                </div>
				<?php
				/**
				 * Widgets area (Sidebar)
				 */
				if ( $dw_sidebar_class ): ?>
                    <div class="<?php echo esc_attr( $dw_sidebar_class ); ?>">
						<?php get_sidebar(); ?>
                    </div>
				<?php endif; ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>