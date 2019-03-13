<?php
if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'header_settings' => array(
		'title'   => esc_html__( 'Header Settings', 'dw' ),
		'type'    => 'tab',
		'options' => array(
			'style'       => array(
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
							'simple'   => array(
								// (required) url for thumbnail
								'small' => array(
									'src'    => DW_IMAGES_DIR . 'simple.png',
									'height' => 100
								),
								// (optional) url for large image that will appear in tooltip
								'large' => array(
									'src'    => DW_IMAGES_DIR . 'simple.png',
									'height' => 200
								)
							),
							'modern'   => array(
								// (required) url for thumbnail
								'small' => array(
									'src'    => DW_IMAGES_DIR . 'modern.png',
									'height' => 100
								),
								// (optional) url for large image that will appear in tooltip
								'large' => array(
									'src'    => DW_IMAGES_DIR . 'modern.png',
									'height' => 200
								)
							),
							'magazine' => array(
								// (required) url for thumbnail
								'small' => array(
									'src'    => DW_IMAGES_DIR . 'magazine.png',
									'height' => 100
								),
								// (optional) url for large image that will appear in tooltip
								'large' => array(
									'src'    => DW_IMAGES_DIR . 'magazine.png',
									'height' => 200
								)
							),
						),
						'blank'   => false,
					),
					'header_background' => array(
						'type'         => 'multi-picker',
						'label'        => false,
						'picker'       => array(
							// '<custom-key>' => option
							'control' => array(
								'label'        => esc_html__( 'Body Background', 'dw' ),
								'type'         => 'switch', // or 'short-select'
								'inline'       => true,
								'value'        => 'off',
								'left-choice'  => array(
									'value' => 'off',
									'label' => esc_html__( 'Off', 'dw' ),
								),
								'right-choice' => array(
									'value' => 'background',
									'label' => esc_html__( 'Background', 'dw' ),
								),
							)
						),
						'choices'      => array(
							'background' => array(
								'color_select' => array(
									'type'     => 'color-picker',
									'palettes' => array(
										'#ba4e4e',
										'#0ce9ed',
										'#1082bb',
										'#9610bb',
										'#ebbb2d',
										'#941940'
									),
									'label'    => esc_html__( 'Background Color', 'dw' ),
									'value'    => '#f5f5f5'
								),
								'image_select' => array(
									'type'        => 'upload',
									'label'       => esc_html__( 'Background image', 'dw' ),
									'images_only' => true
								),
								'bg_repeat'    => array(
									'type'    => 'select',
									'value'   => 'choice-3',
									'label'   => esc_html__( 'Background Repeat', 'dw' ),
									'choices' => array(
										''          => '',
										'no-repeat' => esc_html__( 'No Repeat', 'dw' ),
										'repeat'    => esc_html__( 'Repeat', 'dw' ),
										'repeat-x'  => esc_html__( 'Repeat X', 'dw' ),
										'repeat-y'  => esc_html__( 'Repeat Y', 'dw' )
									)
								),
								'bg_size'      => array(
									'type'    => 'select',
									'value'   => 'choice-3',
									'label'   => esc_html__( 'Background Size', 'dw' ),
									'choices' => array(
										''        => esc_html__( 'None', 'dw' ),
										'cover'   => esc_html__( 'Cover', 'dw' ),
										'contain' => esc_html__( 'contain', 'dw' )

									)
								),
								'bg_attach'    => array(
									'type'    => 'select',
									'value'   => 'choice-3',
									'label'   => esc_html__( 'Background Attachment', 'dw' ),
									'choices' => array(
										''       => esc_html__( 'None', 'dw' ),
										'fixed'  => esc_html__( 'Fixed', 'dw' ),
										'scroll' => esc_html__( 'Scroll', 'dw' ),
										'local'  => esc_html__( 'Local', 'dw' )
									)
								),
								'bg_position'  => array(
									'type'    => 'select',
									'value'   => 'choice-3',
									'label'   => esc_html__( 'Background Position', 'dw' ),
									'choices' => array(
										''              => esc_html__( 'None', 'dw' ),
										'left top'      => esc_html__( 'Left top', 'dw' ),
										'left center'   => esc_html__( 'Left center', 'dw' ),
										'left bottom'   => esc_html__( 'Left bottom', 'dw' ),
										'right top'     => esc_html__( 'Right top', 'dw' ),
										'right center'  => esc_html__( 'Right center', 'dw' ),
										'right bottom'  => esc_html__( 'Right bottom', 'dw' ),
										'center top'    => esc_html__( 'Center top', 'dw' ),
										'center center' => esc_html__( 'Center center', 'dw' ),
										'center bottom' => esc_html__( 'Center bottom', 'dw' )
									)
								)
							)
						),
						'show_borders' => false
					),
					'header_spacing'    => array(
						'type'          => 'multi',
						'label'         => false,
						'inner-options' => array(
							'padding_top'    => array(
								'label' => esc_html__( 'Padding top', 'dw' ),
								'desc'  => esc_html__( 'Enter numbers only, Value will be in pixels. (50 = 50px)', 'dw' ),
								'attr'  => array(
									'placeholder' => esc_html__( '50', 'dw' ),
								),
								'type'  => 'text'
							),
							'padding_bottom' => array(
								'label' => esc_html__( 'Padding bottom', 'dw' ),
								'desc'  => esc_html__( 'Enter numbers only, Value will be in pixels. (50 = 50px)', 'dw' ),
								'attr'  => array(
									'placeholder' => esc_html__( '50', 'dw' ),
								),
								'type'  => 'text'
							)
						)
					)
				)
			),
			'logo_box'    => array(
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
								'logo_select'   => array(
									'type'        => 'upload',
									'label'       => esc_html__( 'Upload logo', 'dw' ),
									'desc'        => esc_html__( 'Recommended size (MAX) : 250px x 70px', 'dw' ),
									'images_only' => true
								),
								'retina_select' => array(
									'type'        => 'upload',
									'label'       => esc_html__( 'Logo Image (Retina Version @2x)', 'dw' ),
									'desc'        => esc_html__( 'Choose an image file for the retina version of the logo. It should be double the size of main logo.', 'dw' ),
									'images_only' => true
								),
								'center_logo'   => array(
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
						'type'         => 'multi-picker',
						'label'        => false,
						'picker'       => array(
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
						'choices'      => array(
							'on' => array(
								'bar_content' => array(
									'type'          => 'textarea',
									'label'         => esc_html__( 'Content', 'dw' ),
								),
								'bar_bg'      => array(
									'type'     => 'rgba-color-picker',
									'value'    => 'rgba(255,0,68,1)',
									'palettes' => dw_color_palettes(),
									'label'    => esc_html__( 'Select Color', 'dw' )
								)
							)
						),
					),
				)
			),
			'news_ticker' => array(
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
												'likes'    => esc_html__( 'Most liked posts', 'dw' ),
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
												'population' => 'taxonomy',
												'source'     => 'post_tag'
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
