<?php
/*
 * Post meta information
 * visible only on Archive pages and home page
 */
?>
<div class="post-meta">
	<?php if ( 'on' === dw_get_setting( 'general_date_meta' ) or ! function_exists( 'fw_get_db_settings_option' ) ): ?>
		<span class="post-date" title="<?php esc_attr_e( 'Created on', 'dw' ); ?>">
			<i class="fa fa-calendar"></i>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<?php dw_post_time(); ?>
			</a>
		</span>
	<?php endif; ?>
	<?php if ( 'on' === dw_get_setting( 'general_views_meta' ) or ! function_exists( 'fw_get_db_settings_option' ) ): ?>
		<span class="views" title="<?php esc_attr_e( 'Views', 'dw' ); ?>">
			<i class="fa fa-eye"></i>
			<?php echo esc_html( dw_getPostViews( get_the_ID() ) ); ?>
		</span>
	<?php endif; ?>
	<?php if ( 'on' === dw_get_setting( 'general_rating_meta' ) ): ?>
		<?php dw_review_system( get_the_ID(), 'small' ); ?>
	<?php endif; ?>
</div>