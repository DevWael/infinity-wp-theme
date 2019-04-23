<?php
if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'main_carousel_settings' => array(
		'title'   => esc_html__( 'Hero Section', 'dw' ),
		'type'    => 'tab',
		'options' => array(
			'main_carousel_box' => array(
				'title'   => esc_html__( 'Hero Section', 'dw' ),
				'type'    => 'tab',
				'options' => array(
					'carousel_switch' => array(
						'type'    => 'multi-picker',
						'label'   => false,
						'picker'  => array(
							'query_type' => array(
								'label'        => esc_html__( 'Show Carousel', 'dw' ),
								'type'         => 'switch',
								'left-choice'  => array(
									'value' => 'on',
									'label' => esc_html__( 'on', 'dw' ),
								),
								'right-choice' => array(
									'value' => 'off',
									'label' => esc_html__( 'off', 'dw' ),
								),
								'value'        => 'on'
							)
						),
						'choices' => array(
							'on' => array(
								'carousel_style'   => array(
									'type'    => 'image-picker',
									'value'   => 'center-slide',
									'label'   => esc_html__( 'Carousel Style', 'dw' ),
									'choices' => array(
										'hero-one'   => array(
											// (required) url for thumbnail
											'small' => array(
												'src'    => esc_url( DW_IMAGES_DIR . 'settings/hero/hero_one.png' ),
												'height' => 100
											),
											// (optional) url for large image that will appear in tooltip
											'large' => array(
												'src'    => esc_url( DW_IMAGES_DIR . 'settings/hero/hero_one.png' ),
												'height' => 200
											),
										),
										'hero-two'   => array(
											// (required) url for thumbnail
											'small' => array(
												'src'    => esc_url( DW_IMAGES_DIR . 'settings/hero/hero_two.png' ),
												'height' => 100
											),
											// (optional) url for large image that will appear in tooltip
											'large' => array(
												'src'    => esc_url( DW_IMAGES_DIR . 'settings/hero/hero_two.png' ),
												'height' => 200
											),
										),
										'hero-three' => array(
											// (required) url for thumbnail
											'small' => array(
												'src'    => esc_url( DW_IMAGES_DIR . 'settings/hero/hero_three.png' ),
												'height' => 100
											),
											// (optional) url for large image that will appear in tooltip
											'large' => array(
												'src'    => esc_url( DW_IMAGES_DIR . 'settings/hero/hero_three.png' ),
												'height' => 200
											),
										),
										'hero-four'  => array(
											// (required) url for thumbnail
											'small' => array(
												'src'    => esc_url( DW_IMAGES_DIR . 'settings/hero/hero_four.png' ),
												'height' => 100
											),
											// (optional) url for large image that will appear in tooltip
											'large' => array(
												'src'    => esc_url( DW_IMAGES_DIR . 'settings/hero/hero_four.png' ),
												'height' => 200
											),
										)
									),
									'blank'   => false
								),
								'carousel_control' => array(
									'type'    => 'multi-picker',
									'label'   => false,
									'picker'  => array(
										// '<custom-key>' => option
										'query_type' => array(
											'label'   => esc_html__( 'Query Based On : ', 'dw' ),
											'type'    => 'radio',
											'value'   => 'trend',
											'choices' => array(
												'trend'    => esc_html__( 'Popular posts ( Top Commented )', 'dw' ),
												'views'    => esc_html__( 'Most viewed posts', 'dw' ),
												'category' => esc_html__( 'Selected categories', 'dw' ),
												'tag'      => esc_html__( 'Selected tags', 'dw' ),
												'author'   => esc_html__( 'Selected author', 'dw' ),
											),
											'inline'  => false
										)
									),
									'choices' => array(
										'category' => array(
											'cat_select' => array(
												'type'        => 'multi-select',
												'label'       => esc_html__( 'Select Categories', 'dw' ),
												'prepopulate' => 999,
												'choices'     => dw_categories()
											)
										),
										'tag'      => array(
											'tag_select' => array(
												'type'        => 'multi-select',
												'label'       => esc_html__( 'Select Tags', 'dw' ),
												'prepopulate' => 999,
												'choices'     => dw_get_all_tags()
											)
										),
										'author'   => array(
											'author_select' => array(
												'type'        => 'select',
												'label'       => esc_html__( 'Select author', 'dw' ),
												'choices'     => dw_users(),
												'no-validate' => false,
											)
										)
									)
								),
								'posts_count'      => array(
									'type'       => 'slider',
									'value'      => 5,
									'properties' => array(
										'min'  => 2,
										'max'  => 15,
										'step' => 1, // Set slider step. Always > 0. Could be fractional.
									),
									'label'      => esc_html__( 'Slides Count', 'dw' )
								),
								'exclude'          => array(
									'type'        => 'multi-select',
									'label'       => esc_html__( 'Exclude Posts', 'dw' ),
									'population'  => 'posts',
									'source'      => 'post',
									'prepopulate' => 10,
									'limit'       => 200,
								)
							)
						),

					)
				)
			)
		)
	)
);
