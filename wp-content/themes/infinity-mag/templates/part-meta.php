<?php
/*
 * visible only on singular pages
 */
global $post;
$author_id = $post->post_author;
?>
<div class="post-box-meta">
	<?php if ( ! function_exists( 'fw_get_db_settings_option' ) ) { ?>
        <span class="author" title="<?php esc_attr_e( 'Author', 'dw' ); ?>">
				<i class="fa fa-user"></i>
			<?php the_author_posts_link(); ?>
			</span>
		<?php if ( is_single() ) { ?>
            <span class="category" title="<?php esc_attr_e( 'Category', 'dw' ); ?>">
				<i class="fa fa-folder-open-o"></i>
				<?php the_category( ' ', '' ); ?>
			</span>
		<?php } ?>
        <span class="post-date" title="<?php esc_attr_e( 'Created on', 'dw' ); ?>">
			<i class="fa fa-calendar"></i>
			<meta itemprop="datePublished" content="<?php the_date( 'Y-m-d' ) ?>">
			<?php dw_post_time(); ?>
		</span>
	<?php } else { ?>
		<?php if ( 'on' === dw_get_setting( 'author_name' ) && 'off' !== dw_get_meta( get_the_ID(), 'window_author_name' ) ) { ?>
            <span class="author" title="<?php esc_attr_e( 'Author', 'dw' ); ?>">
				<i class="fa fa-user"></i>
				<a href="<?php echo get_author_posts_url( $author_id ); ?>">
					<?php the_author_meta( 'display_name', $author_id ); ?>
				</a>
			</span>
		<?php } ?>
		<?php if ( is_single() && 'on' === dw_get_setting( 'categories_meta' ) && 'off' !== dw_get_meta( get_the_ID(), 'window_categories_meta' ) ) { ?>
            <span class="category" title="<?php esc_attr_e( 'Category', 'dw' ); ?>">
				<i class="fa fa-folder-open-o"></i>
				<?php the_category( ' ', '' ); ?>
			</span>
		<?php } ?>
		<?php if ( 'on' === dw_get_setting( 'date_meta' ) && 'off' !== dw_get_meta( get_the_ID(), 'window_date_meta' ) ) { ?>
            <span class="post-date" title="<?php esc_attr_e( 'Created on', 'dw' ); ?>">
					<i class="fa fa-calendar"></i>
				<meta itemprop="datePublished" content="<?php the_date( 'Y-m-d' ) ?>">
				<?php dw_post_time(); ?>
				</span>
		<?php } ?>
		<?php if ( 'on' === dw_get_setting( 'views_meta' ) && 'off' !== dw_get_meta( get_the_ID(), 'window_views_meta' ) ) { ?>
            <span class="views" title="<?php esc_attr_e( 'Views', 'dw' ); ?>">
					<i class="fa fa-eye"></i>
				<?php echo esc_html( dw_getPostViews( get_the_ID() ) ); ?>
				</span>
		<?php } ?>
		<?php //do_action('sv_render_save_posts_button');
	} ?>
</div>