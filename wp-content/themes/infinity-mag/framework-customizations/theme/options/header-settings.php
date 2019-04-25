<?php
if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$cart = [];
if ( class_exists( 'woocommerce' ) ) {
	$cart = [
		'cart_icon' => array(
			'type'         => 'switch',
			'value'        => 'on',
			'label'        => esc_html__( 'Show cart icon in navbar', 'dw' ),
			'left-choice'  => array(
				'value' => 'off',
				'label' => esc_html__( 'No', 'dw' ),
			),
			'right-choice' => array(
				'value' => 'on',
				'label' => esc_html__( 'Yes', 'dw' ),
			),
		),
	];
}


$options = array(
	'header_settings' => array(
		'title'   => esc_html__( 'Header', 'dw' ),
		'type'    => 'tab',
		'options' => array(
			'style'         => array(
				'title'   => esc_html__( 'Header Style', 'dw' ),
				'type'    => 'tab',
				'options' => array(
					'header_types'      => array(
						'type'    => 'image-picker',
						'value'   => 'image-2',
						'attr'    => array(
							'class'    => 'custom-class',
							'data-foo' => 'bar',
						),
						'label'   => esc_html__( 'Header Style', 'dw' ),
						'choices' => array(
							'header-one'   => array(
								// (required) url for thumbnail
								'small' => array(
									'src'    => DW_IMAGES_DIR . 'settings/header/pic_one.png',
									'height' => 100
								),
								// (optional) url for large image that will appear in tooltip
								'large' => array(
									'src'    => DW_IMAGES_DIR . 'settings/header/pic_one.png',
									'height' => 200
								)
							),
							'header-two'   => array(
								// (required) url for thumbnail
								'small' => array(
									'src'    => DW_IMAGES_DIR . 'settings/header/pic_two.png',
									'height' => 100
								),
								// (optional) url for large image that will appear in tooltip
								'large' => array(
									'src'    => DW_IMAGES_DIR . 'settings/header/pic_two.png',
									'height' => 200
								)
							),
							'header-three' => array(
								// (required) url for thumbnail
								'small' => array(
									'src'    => DW_IMAGES_DIR . 'settings/header/pic_three.png',
									'height' => 100
								),
								// (optional) url for large image that will appear in tooltip
								'large' => array(
									'src'    => DW_IMAGES_DIR . 'settings/header/pic_three.png',
									'height' => 200
								)
							),
							'header-four'  => array(
								// (required) url for thumbnail
								'small' => array(
									'src'    => DW_IMAGES_DIR . 'settings/header/pic_four.png',
									'height' => 100
								),
								// (optional) url for large image that will appear in tooltip
								'large' => array(
									'src'    => DW_IMAGES_DIR . 'settings/header/pic_four.png',
									'height' => 200
								)
							),
						),
						'blank'   => false,
					),
					'sticky_nav'        => array(
						'type'         => 'switch',
						'value'        => 'off',
						'label'        => esc_html__( 'Sticky Navbar', 'dw' ),
						'help'         => esc_html__( 'Working on Desktop only', 'dw' ),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'off', 'dw' ),
						),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'on', 'dw' ),
						),
					),
					$cart,
					'search_nav'        => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Search box in Navbar', 'dw' ),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'off', 'dw' ),
						),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'on', 'dw' ),
						),
					),
					'nav_color'             => array(
						'type'  => 'color-picker',
						'label' => esc_html__( 'Navbar Background Color', 'dw' ),
						'value' => '#3E3E3E'
					),
//					'header_spacing'    => array(
//						'type'          => 'multi',
//						'label'         => false,
//						'inner-options' => array(
//							'padding_top'    => array(
//								'label'      => esc_html__( 'Padding top', 'dw' ),
//								'properties' => array(
//									'min'  => 0,
//									'max'  => 100,
//									'step' => 1, // Set slider step. Always > 0. Could be fractional.
//								),
//								'type'       => 'slider'
//							),
//							'padding_bottom' => array(
//								'label' => esc_html__( 'Padding bottom', 'dw' ),
//								'properties' => array(
//									'min'  => 0,
//									'max'  => 100,
//									'step' => 1, // Set slider step. Always > 0. Could be fractional.
//								),
//								'type'       => 'slider'
//							)
//						)
//					)
				)
			),
			'logo_box'      => array(
				'title'   => esc_html__( 'Logo Settings', 'dw' ),
				'type'    => 'tab',
				'options' => array(
					'site_logo'       => array(
						'type'         => 'multi-picker',
						'label'        => false,
						'picker'       => array(
							'gadget' => array(
								'label'   => esc_html__( 'Site Logo', 'dw' ),
								'type'    => 'radio', // or 'short-select'
								'inline'  => true,
								'choices' => array(
									'tagline' => esc_html__( 'Site title and tag line', 'dw' ),
									'logo'    => esc_html__( 'Upload logo', 'dw' )
								)
							)
						),
						'choices'      => array(
							'logo'    => array(
								'logo_select' => array(
									'type'        => 'upload',
									'label'       => esc_html__( 'Upload logo', 'dw' ),
									'images_only' => true
								),
								'center_logo' => array(
									'type'  => 'checkbox',
									'value' => true,
									'label' => esc_html__( 'Center logo', 'dw' )
								)
							),
							'tagline' => array(
								'center_text' => array(
									'type'  => 'checkbox',
									'value' => true,
									'label' => esc_html__( 'Center site title text', 'dw' )
								)
							)
						),
						'show_borders' => false
					),
					'logo_margin_top' => array(
						'label' => esc_html__( 'Logo margin top', 'dw' ),
						'type'  => 'text',
						'desc'  => esc_html__( 'Enter numbers only, Value will be in pixels. (10 = 10px)', 'dw' )
					)
				)
			),
			'alert_bar_tab' => array(
				'title'   => esc_html__( 'Top Alert Bar', 'dw' ),
				'type'    => 'tab',
				'options' => array(
					'alert_bar' => array(
						'type'    => 'multi-picker',
						'label'   => false,
						'picker'  => array(
							'control' => array(
								'type'         => 'switch',
								'value'        => 'off',
								'label'        => esc_html__( 'Top Alert Bar', 'dw' ),
								'right-choice' => array(
									'value' => 'on',
									'label' => esc_html__( 'Show', 'dw' )
								),
								'left-choice'  => array(
									'value' => 'off',
									'label' => esc_html__( 'Hide', 'dw' )
								)
							)
						),
						'choices' => array(
							'on' => array(
								'bar_content' => array(
									'type'  => 'textarea',
									'label' => esc_html__( 'Content', 'dw' ),
								),
								'bar_bg'      => array(
									'type'     => 'rgba-color-picker',
									'value'    => 'rgba(255,0,68,1)',
									'palettes' => dw_color_palettes(),
									'label'    => esc_html__( 'Select background Color', 'dw' )
								),
								'bar_text'    => array(
									'type'     => 'rgba-color-picker',
									'value'    => 'rgba(255,255,255,1)',
									'palettes' => dw_color_palettes(),
									'label'    => esc_html__( 'Select Text Color', 'dw' )
								),
								'text_style'  => array(
									'type'         => 'switch',
									'value'        => 'normal_text',
									'label'        => esc_html__( 'Text Style', 'dw' ),
									'right-choice' => array(
										'value' => 'normal_text',
										'label' => esc_html__( 'Normal', 'dw' )
									),
									'left-choice'  => array(
										'value' => 'italic_text',
										'label' => esc_html__( 'Italic', 'dw' )
									)
								)
							)
						),
					),
				)
			),
			'news_ticker'   => array(
				'title'   => esc_html__( 'News Ticker', 'dw' ),
				'type'    => 'tab',
				'options' => array(
					'news_ticker_switch' => array(
						'type'         => 'multi-picker',
						'label'        => false,
						'picker'       => array(
							'control' => array(
								'type'         => 'switch',
								'value'        => 'off',
								'desc'         => esc_html__( 'Enable or disable News Ticker', 'dw' ),
								'label'        => esc_html__( 'Show News Ticker', 'dw' ),
								'left-choice'  => array(
									'value' => 'off',
									'label' => esc_html__( 'off', 'dw' ),
								),
								'right-choice' => array(
									'value' => 'on',
									'label' => esc_html__( 'on', 'dw' ),
								),
							)
						),
						'choices'      => array(
							'on' => array(
								'ticker_title'    => array(
									'type'  => 'text',
									'value' => 'LATEST',
									'label' => esc_html__( 'Title', 'dw' ),
								),
								'top_posts_query' => array(
									'type'    => 'multi-picker',
									'label'   => false,
									'picker'  => array(
										'type' => array(
											'label'   => esc_html__( 'Query Based On : ', 'dw' ),
											'type'    => 'radio',
											'value'   => 'trend',
											'choices' => array(
												'trend'    => esc_html__( 'Popular posts ( Top Commented )', 'dw' ),
												'views'    => esc_html__( 'Most viewed posts', 'dw' ),
												'category' => esc_html__( 'Selected categories', 'dw' ),
												'tag'      => esc_html__( 'Selected tags', 'dw' ),
												'author'   => esc_html__( 'Selected author', 'dw' )
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
												'type'       => 'multi-select',
												'label'      => esc_html__( 'Select Tags', 'dw' ),
												'prepopulate' => 999,
												'choices'     => dw_get_all_tags()
											)
										),
										'author'   => array(
											'author_select' => array(
												'type'        => 'select',
												'label'       => esc_html__( 'Select author', 'dw' ),
												'choices'     => dw_users(),
												'no-validate' => false
											)
										),
									),
								),
								'posts_count'     => array(
									'type'       => 'slider',
									'value'      => 10,
									'properties' => array(
										'min'  => 2,
										'max'  => 40,
										'step' => 1,
									),
									'label'      => esc_html__( 'Posts count', 'dw' )
								),
								'home_only'       => array(
									'type'         => 'switch',
									'value'        => 'off',
									'desc'         => esc_html__( 'Show the carousel on home page only or show on all pages', 'dw' ),
									'label'        => esc_html__( 'Show on home page only', 'dw' ),
									'left-choice'  => array(
										'value' => 'off',
										'label' => esc_html__( 'no', 'dw' ),
									),
									'right-choice' => array(
										'value' => 'on',
										'label' => esc_html__( 'yes', 'dw' )
									)
								),
								'visible_mobile'  => array(
									'type'         => 'switch',
									'value'        => 'on',
									'label'        => esc_html__( 'Show on Mobile Devices', 'dw' ),
									'left-choice'  => array(
										'value' => 'off',
										'label' => esc_html__( 'no', 'dw' )
									),
									'right-choice' => array(
										'value' => 'on',
										'label' => esc_html__( 'yes', 'dw' )
									)
								)
							)
						),
						'show_borders' => false
					)
				)
			)
		)
	)
);
