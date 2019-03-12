<?php
/*
 * Post meta information
 * visible only on Archive pages and home page
 */
?>
<div class="post-meta">
	<?php if ( 'on' === window_mag_get_setting( 'general_date_meta' ) or ! function_exists( 'fw_get_db_settings_option' ) ): ?>
		<span class="post-date" title="<?php esc_attr_e( 'Created on', 'window-mag' ); ?>">
			<i class="fa fa-calendar"></i>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<?php window_mag_time(); ?>
			</a>
		</span>
	<?php endif; ?>
	<?php if ( 'on' === window_mag_get_setting( 'general_views_meta' ) or ! function_exists( 'fw_get_db_settings_option' ) ): ?>
		<span class="views" title="<?php esc_attr_e( 'Views', 'window-mag' ); ?>">
			<i class="fa fa-eye"></i>
			<?php echo esc_html( window_mag_getPostViews( get_the_ID() ) ); ?>
		</span>
	<?php endif; ?>
	<?php if ( 'on' === window_mag_get_setting( 'general_rating_meta' ) ): ?>
		<?php window_mag_review_system( get_the_ID(), 'small' ); ?>
	<?php endif; ?>
	<?php if ( 'on' === window_mag_get_setting( 'general_like_meta' ) or ! function_exists( 'fw_get_db_settings_option' ) ): ?>
		<span class="like-system">
			<?php echo window_mag_get_likes_button( get_the_ID() ); ?>
		</span>
	<?php endif; ?>
</div>