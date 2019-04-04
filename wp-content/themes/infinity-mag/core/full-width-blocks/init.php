<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( 'Forbidden' );
}

include DW_CORE . 'full-width-blocks/individual-posts.php';
include DW_CORE . 'full-width-blocks/individual-icon-posts.php';
include DW_CORE . 'full-width-blocks/individual-cover.php';
include DW_CORE . 'full-width-blocks/cover-carousel.php';
include DW_CORE . 'full-width-blocks/product-main.php';
include DW_CORE . 'full-width-blocks/product-second.php';
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
		//fw_print($all_blocks);
		foreach ( $all_blocks as $block ) {
			if ( $block['layout_type']['control'] == 'shop' && class_exists( 'woocommerce' ) ) {
				$post_style  = $block['layout_type']['shop']['post_style'];
				$posts_count = $block['layout_type']['shop']['posts_count'];
				$cats_ds     = $block['layout_type']['shop']['cat_select'];
				$block_title = $block['block_title'];
				switch ( $post_style ) {
					case  'product_second_style':
						dw_product_second( $cats_ds, $posts_count, $block_title );
						break;
					case  'product_main':
						dw_product_main( $cats_ds, $posts_count, $block_title );
						break;
					default :
						dw_product_main( $cats_ds, $posts_count, $block_title );
				}
			} elseif ( $block['layout_type']['control'] == 'posts' ) {
				$post_style  = $block['layout_type']['posts']['post_style'];
				$posts_count = $block['layout_type']['posts']['posts_count'];
				$cats_ds     = $block['layout_type']['posts']['cat_select'];
				$block_title = $block['block_title'];
				switch ( $post_style ) {
					case  'carousel_cover_posts':
						dw_carousel_cover_post( $cats_ds, $posts_count, $block_title );
						break;
					case  'individual_posts':
						dw_individual_posts( $cats_ds, $posts_count, $block_title );
						break;
					case  'individual_with_cover_post':
						dw_individual_with_cover_post( $cats_ds, $posts_count, $block_title );
						break;
					case  'individual_icon_posts':
						dw_individual_icon_posts( $cats_ds, $posts_count, $block_title );
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

if ( ! function_exists( 'dw_full_width_area' ) ) {
	function dw_full_width_area() {
		return array(
			'type'    => 'multi-picker',
			'label'   => false,
			'picker'  => array(
				'control' => array(
					'type'    => 'radio',
					'value'   => 'posts',
					'label'   => esc_html__( 'Block type', 'dw' ),
					'inline'  => true,
					'choices' => array( // Note: Avoid bool or int keys http://bit.ly/1cQgVzk
						'posts' => esc_html__( 'Posts', 'dw' ),
						'shop'  => esc_html__( 'Products', 'dw' ),
						'ads'   => esc_html__( 'Advertise and Banners', 'dw' ),
					)
				)
			),
			'choices' => array(
				'posts' => array(
					'post_style'  => array(
						'type'    => 'radio',
						'label'   => esc_html__( 'Section Style', 'dw' ),
						'choices' => array(
							'individual_posts'           => esc_html__( 'individual posts', 'dw' ),
							'individual_with_cover_post' => esc_html__( 'individual with cover post', 'dw' ),
							'carousel_cover_posts'       => esc_html__( 'Carousel cover post', 'dw' ),
							'individual_icon_posts'      => esc_html__( 'individual icon posts', 'dw' ),
						),
						//'blank'   => false,
						//'inline' => false,
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
						'limit'       => 5,
						'choices'     => dw_categories()
					)
				),
				'shop'  => array(
					'post_style'  => array(
						'type'    => 'radio',
						'value'   => 'product_main',
						'label'   => esc_html__( 'Section Style', 'dw' ),
						'choices' => array(
							'product_main'         => esc_html__( 'Main Style', 'dw' ),
							'product_second_style' => esc_html__( 'Second Style', 'dw' ),
						),
						//'blank'   => false,
						//'inline' => false,
					),
					'posts_count' => array(
						'type'       => 'slider',
						'value'      => 6,
						'properties' => array(
							'min'  => 2,
							'max'  => 60,
							'step' => 1, // Set slider step. Always > 0. Could be fractional.
						),
						'label'      => esc_html__( 'Products Count', 'dw' )
					),
					'cat_select'  => array(
						'type'        => 'multi-select',
						'label'       => esc_html__( 'Select Product Categories', 'dw' ),
						'prepopulate' => 20,
						'limit'       => 5,
						'population'  => 'taxonomy',
						'source'      => 'product_cat',
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