<?php get_header(); ?>
<section class="home-posts">
	<div class="container">
		<div class="blog-column">
			<div class="post-box error-page">
				<?php if ( function_exists( 'fw_ext_breadcrumbs' ) && 'on' === dw_get_setting( 'breadcrumbs_switch' ) ) {
					fw_ext_breadcrumbs( '/' );
				} ?>
				<div class="error-content">
					<?php
					if ( 'logo' === dw_get_setting( 'error_logo_style/control' ) && dw_get_setting( 'error_logo_style/logo/error_image/url' ) ) {
						$image_url = dw_get_setting( 'error_logo_style/logo/error_image/url' );
						?>
						<div class="error-logo">
							<?php
							echo '<img src="' . esc_url( $image_url ) . '" class="img-responsive center-block error-logo">'
							?>
						</div>
						<?php
					} elseif ( 'text' === dw_get_setting( 'error_logo_style/control' ) or ! dw_get_setting( 'error_logo_style/logo/error_image/url' ) or ! function_exists( 'fw_get_db_settings_option' ) ) {
						?>
						<div class="error-logo">
							<?php
							if ( dw_get_setting( 'error_logo_style/text/error_text' ) ) {
								echo esc_html( dw_get_setting( 'error_logo_style/text/error_text' ) );
							} else {
								esc_html_e( '404!', 'dw' );
							}
							?>
						</div>
						<?php
					}
					if ( dw_get_setting( 'error_message' ) or ! function_exists( 'fw_get_db_settings_option' ) ):
						if ( dw_get_setting( 'error_message' ) ) {
							?>
							<h4 class="text-center error-message">
								<?php
								echo esc_html( dw_get_setting( 'error_message' ) );
								?>
							</h4>
							<?php
						} elseif ( ! function_exists( 'fw_get_db_settings_option' ) ) {
							?>
							<h4 class="text-center error-message">
								<?php
								esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'dw' );
								?>
							</h4>
							<?php
						}
						 if ( 'on' === dw_get_setting( 'error_search' ) or ! function_exists( 'fw_get_db_settings_option' ) ) {
							get_search_form();
						}  endif; 
					?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
