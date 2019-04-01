<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( 'Forbidden' );
}

if ( ! function_exists( 'dw_full_width_area' ) ) {
	function dw_full_width_area() {
		return array(
			'type'    => 'multi-picker',
			'label'   => false,
			'picker'  => array(
				'control' => array(
					'type'         => 'switch',
					'value'        => 'hello',
					'label'        => esc_html__( 'Block type', 'dw' ),
					'left-choice'  => array(
						'value' => 'posts',
						'label' => esc_html__( 'Posts Mode', 'dw' )
					),
					'right-choice' => array(
						'value' => 'ads',
						'label' => esc_html__( 'Advertise Mode', 'dw' )
					),
				)
			),
			'choices' => array(
				'posts' => array(
					'post_style'  => array(
						'type'    => 'image-picker',
						'label'   => esc_html__( 'Block Style', 'dw' ),
						'choices' => array(
							'simple-grid' => array(
								// (required) url for thumbnail
								'small' => array(
									'src'    => DW_IMAGES_DIR . 'blocks/simple.png',
									'height' => 70
								),
								// (optional) url for large image that will appear in tooltip
								'large' => array(
									'src'    => DW_IMAGES_DIR . 'blocks/simple.png',
									'height' => 160
								)
							),
							'carousel'    => array(
								// (required) url for thumbnail
								'small' => array(
									'src'    => DW_IMAGES_DIR . 'blocks/carousel.png',
									'height' => 70
								),
								// (optional) url for large image that will appear in tooltip
								'large' => array(
									'src'    => DW_IMAGES_DIR . 'blocks/carousel.png',
									'height' => 160
								)
							),
							'img-grid'    => array(
								// (required) url for thumbnail
								'small' => array(
									'src'    => DW_IMAGES_DIR . 'blocks/img-grid.png',
									'height' => 70
								),
								// (optional) url for large image that will appear in tooltip
								'large' => array(
									'src'    => DW_IMAGES_DIR . 'blocks/img-grid.png',
									'height' => 160
								)
							),
							'list'        => array(
								// (required) url for thumbnail
								'small' => array(
									'src'    => DW_IMAGES_DIR . 'blocks/recent-list.png',
									'height' => 70
								),
								// (optional) url for large image that will appear in tooltip
								'large' => array(
									'src'    => DW_IMAGES_DIR . 'blocks/recent-list.png',
									'height' => 160
								)
							),
							'masonry'     => array(
								// (required) url for thumbnail
								'small' => array(
									'src'    => DW_IMAGES_DIR . 'blocks/masonry.png',
									'height' => 70
								),
								// (optional) url for large image that will appear in tooltip
								'large' => array(
									'src'    => DW_IMAGES_DIR . 'blocks/masonry.png',
									'height' => 160
								)
							),
							'mini-grid'   => array(
								// (required) url for thumbnail
								'small' => array(
									'src'    => DW_IMAGES_DIR . 'blocks/mini-grid.png',
									'height' => 70
								),
								// (optional) url for large image that will appear in tooltip
								'large' => array(
									'src'    => DW_IMAGES_DIR . 'blocks/mini-grid.png',
									'height' => 160
								)
							),
							'big-grid'    => array(
								// (required) url for thumbnail
								'small' => array(
									'src'    => DW_IMAGES_DIR . 'blocks/big-grid.png',
									'height' => 70
								),
								// (optional) url for large image that will appear in tooltip
								'large' => array(
									'src'    => DW_IMAGES_DIR . 'blocks/big-grid.png',
									'height' => 160
								)
							),
							'slides'      => array(
								// (required) url for thumbnail
								'small' => array(
									'src'    => DW_IMAGES_DIR . 'sliders/center.png',
									'height' => 70
								),
								// (optional) url for large image that will appear in tooltip
								'large' => array(
									'src'    => DW_IMAGES_DIR . 'sliders/center.png',
									'height' => 160
								)
							)
						),
						'blank'   => false
					),
					'posts_count' => array(
						'type'       => 'slider',
						'value'      => 6,
						'properties' => array(
							'min'  => 2,
							'max'  => 60,
							'step' => 1, // Set slider step. Always > 0. Could be fractional.
						),
						'label'      => esc_html__( 'Posts Count', 'dw' )
					),
					'cat_select'  => array(
						'type'        => 'multi-select',
						'label'       => esc_html__( 'Select Categories', 'dw' ),
						'prepopulate' => 999,
						'choices'     => dw_categories()
					)
				),
				'ads'   => array(
					'ads_box' => array(
						'type'    => 'multi-picker',
						'label'   => false,
						'picker'  => array(
							'gadget' => array(
								'label'   => esc_html__( 'AD Type', 'dw' ),
								'type'    => 'radio',
								'choices' => array(
									'image' => esc_html__( 'Image AD', 'dw' ),
									'code'  => esc_html__( 'Custom Code', 'dw' )
								),
								'inline'  => true,
								'value'   => 'image'
							)
						),
						'choices' => array(
							'image' => array(
								'img'    => array(
									'type'        => 'upload',
									'label'       => esc_html__( 'Image banner', 'dw' ),
									'images_only' => true
								),
								'url'    => array(
									'type'  => 'text',
									'label' => esc_html__( 'Banner url', 'dw' ),
								),
								'alt'    => array(
									'type'  => 'text',
									'label' => esc_html__( 'Alternative Text For The image', 'dw' ),
								),
								'tab'    => array(
									'type'  => 'checkbox',
									'value' => true,
									'label' => esc_html__( 'Open url in new tab', 'dw' )
								),
								'follow' => array(
									'type'  => 'checkbox',
									'value' => false,
									'label' => esc_html__( 'No follow', 'dw' )
								)
							),
							'code'  => array(
								'code_block' => array(
									'type'  => 'textarea',
									'label' => esc_html__( 'Custom Ad Code', 'dw' ),
									'desc'  => esc_html__( 'Supports: HTML, Javascript, Text and Shortcodes.', 'dw' )
								)
							)
						)
					)
				)
			)
		);
	}
}
/**
 * Display home page magazine boxes
 */
add_action( 'dw_full_width_builder', 'dw_builder_full_width', 10, 3 );
function dw_builder_full_width( $place_number = 1, $before = '', $after = '' ) {
	if ( ! function_exists( 'fw_get_db_settings_option' ) ) {
		return;
	}
	$all_blocks = dw_get_setting( 'home_full_width_' . $place_number );
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