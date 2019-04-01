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
            <div class="row">
                <div class="<?php echo esc_attr( $dw_content_class ); ?>">
                    <div class="blog-column">
                        <div itemscope itemtype="http://schema.org/Article" role="article"
                             id="post-<?php the_ID(); ?>" <?php post_class( 'category-box singular' ); ?>>
                            <div class="post-box-content">
								<?php
								woocommerce_content();
								?>
                            </div>
                        </div>
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