<?php
/**
 * Homepage Magazine Blocks
 */
require WINDOW_MAG_CORE . 'blocks/big-grid.php';
require WINDOW_MAG_CORE . 'blocks/carousel.php';
require WINDOW_MAG_CORE . 'blocks/list.php';
require WINDOW_MAG_CORE . 'blocks/masonry.php';
require WINDOW_MAG_CORE . 'blocks/mini-grid.php';
require WINDOW_MAG_CORE . 'blocks/img-grid.php';
require WINDOW_MAG_CORE . 'blocks/simple-grid.php';
require WINDOW_MAG_CORE . 'blocks/slides.php';
require WINDOW_MAG_CORE . 'blocks/ads.php';

/**
 * Display home page magazine boxes
 */
if ( ! function_exists( 'window_mag_magazine_builder' ) ) {
	function window_mag_magazine_builder( $before = '', $after = '' ) {
		if ( ! function_exists( 'fw_get_db_settings_option' ) ) {
			return;
		}
		$all_blocks = window_mag_get_setting( 'home_layout_popup' );
		if ( $all_blocks ) {
			echo $before;
			foreach ( $all_blocks as $block ) {
				if ( $block['layout_type']['control'] == 'posts' ) {
					$post_style  = $block['layout_type']['posts']['post_style'];
					$posts_count = $block['layout_type']['posts']['posts_count'];
					$cats_ds     = $block['layout_type']['posts']['cat_select'];
					$block_title = $block['block_title'];
					switch ( $post_style ) {
						case  'simple-grid':
							window_mag_simple_grid( $cats_ds, $posts_count, $block_title );
							break;
						case  'carousel':
							window_mag_carousel_box( $cats_ds, $posts_count, $block_title );
							break;
						case  'img-grid':
							window_mag_img_grid( $cats_ds, $posts_count, $block_title );
							break;
						case  'masonry':
							window_mag_masonry_box( $cats_ds, $posts_count, $block_title );
							break;
						case  'mini-grid':
							window_mag_mini_grid( $cats_ds, $posts_count, $block_title );
							break;
						case  'big-grid':
							window_mag_big_grid( $cats_ds, $posts_count, $block_title );
							break;
						case  'slides':
							window_mag_slides( $cats_ds, $posts_count, $block_title );
							break;
						default :
							window_mag_list_box( $cats_ds, $posts_count, $block_title );
					}
				} else {
					$ads_type   = $block['layout_type']['ads']['ads_box']['gadget'];
					$image_data = $block['layout_type']['ads']['ads_box']['image'];
					$code_data  = $block['layout_type']['ads']['ads_box']['code'];
					window_mag_dynamic_ads( $ads_type, $image_data, $code_data );
				}
			}
			echo $after;
		}
	}
}