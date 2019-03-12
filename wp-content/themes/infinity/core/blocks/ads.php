<?php
if ( ! function_exists( 'window_mag_dynamic_ads' ) ) {
	function window_mag_dynamic_ads( $type, $image = '', $code = '' ) {
		$control = $type;
		if ( 'code' == $control ) {
			if ( $code ) {
				?>
				<div class="blocks-ads">
					<?php
					echo do_shortcode( htmlspecialchars_decode( $code['code_block'] ) );
					?>
				</div>
				<?php
			}
		} elseif ( 'image' == $control ) {
			if ( $image['img'] ) {
				$target = $nofollow = false;
				if ( $image['tab'] ) {
					$target = true;
				}
				if ( $image['follow'] ) {
					$nofollow = true;
				}
				?>
				<div class="blocks-ads">
					<a href="<?php echo esc_url( $image['url'] ); ?>"
					     title="<?php echo esc_attr( $image['alt'] ); ?>"<?php if ( $target ) { ?> target="_blank"<?php }
					if ( $nofollow ) { ?> rel="nofollow"<?php } ?>>
						<img src="<?php echo esc_url( $image['img']['url'] ); ?>"
						     alt="<?php echo esc_attr( $image['alt'] ); ?>"
						     class="img-responsive center-block"/>
					</a>
				</div>
				<?php
			}
		}
	}
}