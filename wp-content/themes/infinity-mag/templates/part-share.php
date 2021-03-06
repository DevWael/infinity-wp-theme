<div class="share-box">
    <ul class="share-icons">
		<?php
		$title         = strip_tags( get_the_title() );
		$encoded_title = str_replace( ' ', '+', $title );
		$url           = get_the_permalink();
		?>
		<?php if ( 'on' === dw_get_setting( 'share_twitter' ) or ! function_exists( 'fw_get_db_settings_option' ) ): ?>
            <!-- twitter -->
            <li>
                <a class="twitter"
                   href="https://twitter.com/share?text=<?php echo esc_attr( $encoded_title ); ?>&amp;url=<?php echo esc_url( $url ); ?>"
                   onclick="window.open(this.href, 'twitter-share', 'width=550,height=235');return false;">
                    <i class="fa fa-twitter"></i><span><?php esc_html_e( 'Twitter', 'dw' ); ?></span>
                </a>
            </li>
		<?php endif; ?>
		<?php if ( 'on' === dw_get_setting( 'share_facebook' ) or ! function_exists( 'fw_get_db_settings_option' ) ): ?>
            <!-- facebook -->
            <li>
                <a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url( $url ); ?>"
                   onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;">
                    <i class="fa fa-facebook"></i><span><?php esc_html_e( 'Facebook', 'dw' ); ?></span>
                </a>
            </li>
		<?php endif; ?>
		<?php if ( 'on' === dw_get_setting( 'share_google' ) or ! function_exists( 'fw_get_db_settings_option' ) ): ?>
            <!-- google plus -->
            <li>
                <a class="google-plus" href="https://plus.google.com/share?url=<?php echo esc_url( $url ); ?>"
                   onclick="window.open(this.href, 'google-plus-share', 'width=490,height=530');return false;">
                    <i class="fa fa-google-plus"></i><span><?php esc_html_e( 'Google plus', 'dw' ); ?></span>
                </a>
            </li>
		<?php endif; ?>
		<?php if ( 'on' === dw_get_setting( 'share_pinterest' ) or ! function_exists( 'fw_get_db_settings_option' ) ): ?>
            <!-- pinterest -->
            <li>
                <a class="pinterest"
                   href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());">
                    <i class="fa fa-pinterest"></i><span><?php esc_html_e( 'Pinterest', 'dw' ); ?></span>
                </a>
            </li>
		<?php endif; ?>
		<?php if ( 'on' === dw_get_setting( 'share_linked' ) or ! function_exists( 'fw_get_db_settings_option' ) ): ?>
            <!-- linkedin -->
            <li>
                <a class="linkedin"
                   href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo esc_url( $url ); ?>"
                   onclick="window.open(this.href, 'linkedin-share', 'width=550,height=480'); return false;">
                    <i class="fa fa-linkedin"></i><span><?php esc_html_e( 'Linkedin', 'dw' ); ?></span>
                </a>
            </li>
		<?php endif; ?>

    </ul>
</div>
