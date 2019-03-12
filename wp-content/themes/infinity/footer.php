<?php
$window_mag_footer_class = $window_mag_column_class = '';
//Instagram carousel
if ( 'on' === window_mag_get_setting( 'footer_instagram/control' ) && window_mag_get_setting( 'footer_instagram/on/insta_user' ) ) {
	window_mag_instagram_photos_views( window_mag_get_setting( 'footer_instagram/on/insta_user' ), window_mag_get_setting( 'footer_instagram/on/limit' ), '<div class="insta-carousel owl-carousel">', '</div>' );
}

if ( window_mag_get_setting( 'footer_widgets' ) === 'on' and ( is_active_sidebar( 'footer1' ) or is_active_sidebar( 'footer2' ) or is_active_sidebar( 'footer3' ) ) ) {
	$window_mag_footer_class = ' has-widgets';
}
?>
<footer class="footer<?php echo esc_attr( $window_mag_footer_class ); ?>">
	<div class="overlay">
		<?php
		//Footer Carousel Posts --> Since V1.2
		if ( 'on' == window_mag_get_setting( 'footer_posts_switch/control' ) ) {
			if ( 'on' === window_mag_get_setting( 'footer_posts_switch/on/home_only' ) ) {
				if ( is_front_page() ) {
					get_template_part( 'templates/footer', 'posts' );
				}
			} else {
				get_template_part( 'templates/footer', 'posts' );
			}
		}
		?>
		<?php if ( window_mag_get_setting( 'footer_widgets' ) === 'on' ) {
			get_sidebar( 'footer' );
		}
		if ( window_mag_get_setting( 'footer_rights' ) or window_mag_get_setting( 'footer_rights_block' ) === 'on' ) {
			$window_mag_column_class = 'col-md-6';
			if ( window_mag_get_setting( 'footer_rights_block' ) == 'off' ) {
				$window_mag_column_class = 'col-md-12 text-center';
			}
			if ( 'off' !== window_mag_get_setting( 'banner_box2/gadget' ) ) {
				?>
				<div class="simple-ads">
					<div class="container">
						<?php window_mag_ads( '2', 'ad-footer' ); ?>
					</div>
				</div>
			<?php } ?>
			<div class="rights container">
				<div class="rights-wrapper">
					<div class="row">
						<div class="<?php echo esc_attr( $window_mag_column_class ); ?>">
							<?php echo window_mag_get_setting( 'footer_rights' ); ?>
						</div>
						<?php if ( window_mag_get_setting( 'footer_rights_block' ) != 'off' ) { ?>
							<div class="col-md-6">
								<?php
								if ( window_mag_social_media_urls() && 'social' === window_mag_get_setting( 'footer_rights_block' ) ) { ?>
									<div class="social-footer-icons">
										<?php window_mag_social_media_urls( true ); ?>
									</div>
									<?php
								} elseif ( 'navbar' === window_mag_get_setting( 'footer_rights_block' ) ) {
									wp_nav_menu(
										array(
											'theme_location' => 'footer_menu',
											'depth'          => - 1,
											'container'      => false,
											'menu_class'     => 'footer-menu',
											'fallback_cb'    => 'window_mag_nav_fallback'
										)
									);
								} ?>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		<?php } elseif ( ! function_exists( 'fw_get_db_settings_option' ) ) { ?>
			<div class="rights container text-center">
				<div class="rights-wrapper">
					<?php echo esc_html__( 'All rights reserved to', 'window-mag' ) . ' ' . esc_html( get_bloginfo( 'name' ) ); ?>
				</div>
			</div>
		<?php }
		if ( window_mag_get_setting( 'scroll_top' ) != 'off' ) { ?>
			<div class="scroll hidden-xs">
				<button id="scroll">
					<i class="fa fa-chevron-circle-up" aria-hidden="true"></i>
				</button>
			</div>
		<?php } ?>
	</div>
</footer>
<?php if ( window_mag_get_setting( 'website_layout' ) == 'boxed' or window_mag_get_setting( 'website_layout' ) == 'wide' ) { ?>
	</div>
<?php } ?>
<?php wp_footer(); ?>
</body>
</html>