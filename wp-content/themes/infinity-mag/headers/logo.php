<?php
$dw_title_text   = $dw_sticky_nav = $dw_center_logo = $dw_retina = '';
if ( dw_get_setting( 'site_logo/logo/center_logo' ) ) {
	$dw_center_logo = ' center-block';
}
if ( dw_get_setting( 'site_logo/gadget' ) == 'logo' && dw_get_setting( 'site_logo/logo/logo_select/url' ) ):
	?>
	<div class="site-logo">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-box"
		   title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
			<img
				src="<?php echo esc_url( dw_get_setting( 'site_logo/logo/logo_select/url' ) ) ?>"
				alt="<?php echo esc_attr( get_bloginfo( 'name' ) ) ?>"
				class="img-responsive<?php echo esc_attr( $dw_center_logo ); ?>">
		</a>
	</div>
<?php else : ?>
	<div class="slogan<?php echo esc_attr( $dw_title_text ); ?>">
		<div class="site-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-box"
			   title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
				<?php echo esc_html( get_bloginfo( 'name' ) ); ?>
			</a>
		</div>
		<p class="site-tagline">
			<?php echo esc_html( get_bloginfo( 'description' ) ); ?>
		</p>
	</div>
<?php endif; ?>