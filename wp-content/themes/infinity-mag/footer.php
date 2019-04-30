<?php
$dw_footer_class = $dw_column_class = '';
//Instagram carousel
if ( 'on' === dw_get_setting( 'footer_instagram/control' ) && dw_get_setting( 'footer_instagram/on/insta_user' ) ) {
	window_mag_instagram_photos_views( dw_get_setting( 'footer_instagram/on/insta_user' ), dw_get_setting( 'footer_instagram/on/limit' ), '<div class="insta-carousel owl-carousel">', '</div>' );
}

if ( dw_get_setting( 'footer_widgets' ) === 'on' and ( is_active_sidebar( 'footer1' ) or is_active_sidebar( 'footer2' ) or is_active_sidebar( 'footer3' ) ) ) {
	$dw_footer_class = ' has-widgets';
}
?>
<footer class="footer<?php echo esc_attr( $dw_footer_class ); ?>">
    <div class="overlay">
		<?php
		//Footer Carousel Posts --> Since V1.2
		if ( 'on' == dw_get_setting( 'footer_posts_switch/control' ) ) {
			if ( 'on' === dw_get_setting( 'footer_posts_switch/on/home_only' ) ) {
				if ( is_front_page() ) {
					get_template_part( 'templates/footer', 'posts' );
				}
			} else {
				get_template_part( 'templates/footer', 'posts' );
			}
		}
		?>
		<?php if ( dw_get_setting( 'footer_widgets' ) === 'on' ) {
			get_sidebar( 'footer' );
		}
		if ( dw_get_setting( 'footer_rights' ) or dw_get_setting( 'footer_rights_block' ) === 'on' ) {
			if ( is_rtl() ) {
				$dw_column_class = 'col-md-6 text-left';
			} else {
				$dw_column_class = 'col-md-6 text-right';
			}
			if ( dw_get_setting( 'footer_rights_block' ) == 'off' ) {
				$dw_column_class = 'col-md-12 text-center';
			}
			if ( 'off' !== dw_get_setting( 'banner_box2/gadget' ) ) {
				?>
                <div class="simple-ads">
                    <div class="container">
						<?php dw_ads( '2', 'ad-footer' ); ?>
                    </div>
                </div>
			<?php } ?>
            <div class="rights container">
                <div class="rights-wrapper">
                    <div class="row">
                        <div class="<?php echo esc_attr( $dw_column_class ); ?>">
							<?php echo dw_get_setting( 'footer_rights' ); ?>
                        </div>
						<?php if ( dw_get_setting( 'footer_rights_block' ) != 'off' ) { ?>
                            <div class="col-md-6">
								<?php
								if ( dw_social_media_urls() && 'social' === dw_get_setting( 'footer_rights_block' ) ) { ?>
                                    <div class="social-footer-icons">
										<?php dw_social_media_urls( true ); ?>
                                    </div>
									<?php
								} elseif ( 'navbar' === dw_get_setting( 'footer_rights_block' ) ) {
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
					<?php echo esc_html__( 'All rights reserved to', 'dw' ) . ' ' . esc_html( get_bloginfo( 'name' ) ); ?>
                </div>
            </div>
		<?php }
		if ( dw_get_setting( 'scroll_top' ) != 'off' ) { ?>
            <div class="scroll hidden-xs">
                <button id="scroll">
                    <i class="fa fa-chevron-circle-up" aria-hidden="true"></i>
                </button>
            </div>
		<?php } ?>
    </div>
</footer>
<?php if ( dw_get_setting( 'website_layout' ) == 'boxed' or dw_get_setting( 'website_layout' ) == 'wide' ) { ?>
    </div>
<?php } ?>
<?php wp_footer(); ?>
</body>
</html>