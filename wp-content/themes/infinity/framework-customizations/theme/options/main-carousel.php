<?php
if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'main_carousel_settings' => array(
		'title'   => esc_html__( 'Carousel Settings', 'window-mag' ),
		'type'    => 'tab',
		'options' => array(
			'main_carousel_box' => array(
				'title'   => esc_html__( 'Carousel Settings', 'window-mag' ),
				'type'    => 'tab',
				'options' => array(
					'carousel_switch' => array(
						'type'    => 'multi-picker',
						'label'   => false,
						'picker'  => array(
							'query_type' => array(
								'label'        => esc_html__( 'Show Carousel', 'window-mag' ),
								'type'         => 'switch',
								'left-choice'  => array(
									'value' => 'on',
									'label' => esc_html__( 'on', 'window-mag' ),
								),
								'right-choice' => array(
									'value' => 'off',
									'label' => esc_html__( 'off', 'window-mag' ),
								),
								'value'        => 'on'
							)
						),
						'choices' => array(
							'on' => array(
								'carousel_style'   => array(
									'type'    => 'image-picker',
									'value'   => 'center-slide',
									'label'   => esc_html__( 'Carousel Style', 'window-mag' ),
									'choices' => array(
										'center-slide'  => array(
											// (required) url for thumbnail
											'small' => array(
												'src'    => esc_url( WINDOW_MAG_IMAGES_DIR . 'sliders/center.png' ),
												'height' => 100
											),
											// (optional) url for large image that will appear in tooltip
											'large' => array(
												'src'    => esc_url( WINDOW_MAG_IMAGES_DIR . 'sliders/center.png' ),
												'height' => 200
											),
										),
										'double-slides' => array(
											// (required) url for thumbnail
											'small' => array(
												'src'    => esc_url( WINDOW_MAG_IMAGES_DIR . 'sliders/double.png' ),
												'height' => 100
											),
											// (optional) url for large image that will appear in tooltip
											'large' => array(
												'src'    => esc_url( WINDOW_MAG_IMAGES_DIR . 'sliders/double.png' ),
												'height' => 200
											),
										),
										'many-slides'   => array(
											// (required) url for thumbnail
											'small' => array(
												'src'    => esc_url( WINDOW_MAG_IMAGES_DIR . 'sliders/many.png' ),
												'height' => 100
											),
											// (optional) url for large image that will appear in tooltip
											'large' => array(
												'src'    => esc_url( WINDOW_MAG_IMAGES_DIR . 'sliders/many.png' ),
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
											'label'   => esc_html__( 'Query Based On : ', 'window-mag' ),
											'type'    => 'radio',
											'value'   => 'trend',
											'choices' => array(
												'trend'    => esc_html__( 'Popular posts ( Top Commented )', 'window-mag' ),
												'likes'    => esc_html__( 'Most liked posts', 'window-mag' ),
												'views'    => esc_html__( 'Most viewed posts', 'window-mag' ),
												'category' => esc_html__( 'Selected categories', 'window-mag' ),
												'tag'      => esc_html__( 'Selected tags', 'window-mag' ),
												'author'   => esc_html__( 'Selected author', 'window-mag' ),
											),
											'inline'  => false
										)
									),
									'choices' => array(
										'category' => array(
											'cat_select' => array(
												'type'       => 'multi-select',
												'label'      => esc_html__( 'Select Categories', 'window-mag' ),
												'prepopulate' => 999,
												'choices' => window_mag_categories()
											)
										),
										'tag'      => array(
											'tag_select' => array(
												'type'       => 'multi-select',
												'label'      => esc_html__( 'Select Tags', 'window-mag' ),
												'population' => 'taxonomy',
												'source'     => 'post_tag'
											)
										),
										'author'   => array(
											'author_select' => array(
												'type'        => 'select',
												'label'       => esc_html__( 'Select author', 'window-mag' ),
												'choices'     => window_mag_users(),
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
									'label'      => esc_html__( 'Slides Count', 'window-mag' )
								),
								'exclude'          => array(
									'type'        => 'multi-select',
									'label'       => esc_html__( 'Exclude Posts', 'window-mag' ),
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
