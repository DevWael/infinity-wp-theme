<?php
/**
 * Homepage Magazine Blocks
 */
require DW_CORE . 'blocks/big-grid.php';
require DW_CORE . 'blocks/carousel.php';
require DW_CORE . 'blocks/list.php';
require DW_CORE . 'blocks/masonry.php';
require DW_CORE . 'blocks/mini-grid.php';
require DW_CORE . 'blocks/img-grid.php';
require DW_CORE . 'blocks/simple-grid.php';
require DW_CORE . 'blocks/slides.php';
require DW_CORE . 'blocks/ads.php';

/**
 * Display home page magazine boxes
 */
if ( ! function_exists( 'window_mag_magazine_builder' ) ) {
	function window_mag_magazine_builder( $before = '', $after = '' ) {
		if ( ! function_exists( 'fw_get_db_settings_option' ) ) {
			return;
		}
		$all_blocks = dw_get_setting( 'home_layout_popup' );
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
							dw_simple_grid( $cats_ds, $posts_count, $block_title );
							break;
						case  'carousel':
							dw_carousel_box( $cats_ds, $posts_count, $block_title );
							break;
						case  'img-grid':
							dw_img_grid( $cats_ds, $posts_count, $block_title );
							break;
						case  'masonry':
							dw_masonry_box( $cats_ds, $posts_count, $block_title );
							break;
						case  'mini-grid':
							dw_mini_grid( $cats_ds, $posts_count, $block_title );
							break;
						case  'big-grid':
							dw_big_grid( $cats_ds, $posts_count, $block_title );
							break;
						case  'slides':
							dw_slides( $cats_ds, $posts_count, $block_title );
							break;
						default :
							dw_list_box( $cats_ds, $posts_count, $block_title );
					}
				} else {
					$ads_type   = $block['layout_type']['ads']['ads_box']['gadget'];
					$image_data = $block['layout_type']['ads']['ads_box']['image'];
					$code_data  = $block['layout_type']['ads']['ads_box']['code'];
					dw_dynamic_ads( $ads_type, $image_data, $code_data );
				}
			}
			echo $after;
		}
	}
}