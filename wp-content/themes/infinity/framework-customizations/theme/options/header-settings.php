<?php
if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'header_settings' => array(
		'title'   => esc_html__( 'Header Settings', 'window-mag' ),
		'type'    => 'tab',
		'options' => array(
			'style'       => array(
				'title'   => esc_html__( 'Header Style', 'window-mag' ),
				'type'    => 'tab',
				'options' => array(
					'header_types'      => array(
						'type'    => 'image-picker',
						'value'   => 'image-2',
						'attr'    => array(
							'class'    => 'custom-class',
							'data-foo' => 'bar',
						),
						'label'   => esc_html__( 'Header Style', 'window-mag' ),
						'choices' => array(
							'simple'   => array(
								// (required) url for thumbnail
								'small' => array(
									'src'    => WINDOW_MAG_IMAGES_DIR . 'simple.png',
									'height' => 100
								),
								// (optional) url for large image that will appear in tooltip
								'large' => array(
									'src'    => WINDOW_MAG_IMAGES_DIR . 'simple.png',
									'height' => 200
								)
							),
							'modern'   => array(
								// (required) url for thumbnail
								'small' => array(
									'src'    => WINDOW_MAG_IMAGES_DIR . 'modern.png',
									'height' => 100
								),
								// (optional) url for large image that will appear in tooltip
								'large' => array(
									'src'    => WINDOW_MAG_IMAGES_DIR . 'modern.png',
									'height' => 200
								)
							),
							'magazine' => array(
								// (required) url for thumbnail
								'small' => array(
									'src'    => WINDOW_MAG_IMAGES_DIR . 'magazine.png',
									'height' => 100
								),
								// (optional) url for large image that will appear in tooltip
								'large' => array(
									'src'    => WINDOW_MAG_IMAGES_DIR . 'magazine.png',
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
								'label'        => esc_html__( 'Body Background', 'window-mag' ),
								'type'         => 'switch', // or 'short-select'
								'inline'       => true,
								'value'        => 'off',
								'left-choice'  => array(
									'value' => 'off',
									'label' => esc_html__( 'Off', 'window-mag' ),
								),
								'right-choice' => array(
									'value' => 'background',
									'label' => esc_html__( 'Background', 'window-mag' ),
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
									'label'    => esc_html__( 'Background Color', 'window-mag' ),
									'value'    => '#f5f5f5'
								),
								'image_select' => array(
									'type'        => 'upload',
									'label'       => esc_html__( 'Background image', 'window-mag' ),
									'images_only' => true
								),
								'bg_repeat'    => array(
									'type'    => 'select',
									'value'   => 'choice-3',
									'label'   => esc_html__( 'Background Repeat', 'window-mag' ),
									'choices' => array(
										''          => '',
										'no-repeat' => esc_html__( 'No Repeat', 'window-mag' ),
										'repeat'    => esc_html__( 'Repeat', 'window-mag' ),
										'repeat-x'  => esc_html__( 'Repeat X', 'window-mag' ),
										'repeat-y'  => esc_html__( 'Repeat Y', 'window-mag' )
									)
								),
								'bg_size'      => array(
									'type'    => 'select',
									'value'   => 'choice-3',
									'label'   => esc_html__( 'Background Size', 'window-mag' ),
									'choices' => array(
										''        => esc_html__( 'None', 'window-mag' ),
										'cover'   => esc_html__( 'Cover', 'window-mag' ),
										'contain' => esc_html__( 'contain', 'window-mag' )

									)
								),
								'bg_attach'    => array(
									'type'    => 'select',
									'value'   => 'choice-3',
									'label'   => esc_html__( 'Background Attachment', 'window-mag' ),
									'choices' => array(
										''       => esc_html__( 'None', 'window-mag' ),
										'fixed'  => esc_html__( 'Fixed', 'window-mag' ),
										'scroll' => esc_html__( 'Scroll', 'window-mag' ),
										'local'  => esc_html__( 'Local', 'window-mag' )
									)
								),
								'bg_position'  => array(
									'type'    => 'select',
									'value'   => 'choice-3',
									'label'   => esc_html__( 'Background Position', 'window-mag' ),
									'choices' => array(
										''              => esc_html__( 'None', 'window-mag' ),
										'left top'      => esc_html__( 'Left top', 'window-mag' ),
										'left center'   => esc_html__( 'Left center', 'window-mag' ),
										'left bottom'   => esc_html__( 'Left bottom', 'window-mag' ),
										'right top'     => esc_html__( 'Right top', 'window-mag' ),
										'right center'  => esc_html__( 'Right center', 'window-mag' ),
										'right bottom'  => esc_html__( 'Right bottom', 'window-mag' ),
										'center top'    => esc_html__( 'Center top', 'window-mag' ),
										'center center' => esc_html__( 'Center center', 'window-mag' ),
										'center bottom' => esc_html__( 'Center bottom', 'window-mag' )
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
								'label' => esc_html__( 'Padding top', 'window-mag' ),
								'desc'  => esc_html__( 'Enter numbers only, Value will be in pixels. (50 = 50px)', 'window-mag' ),
								'attr'  => array(
									'placeholder' => esc_html__( '50', 'window-mag' ),
								),
								'type'  => 'text'
							),
							'padding_bottom' => array(
								'label' => esc_html__( 'Padding bottom', 'window-mag' ),
								'desc'  => esc_html__( 'Enter numbers only, Value will be in pixels. (50 = 50px)', 'window-mag' ),
								'attr'  => array(
									'placeholder' => esc_html__( '50', 'window-mag' ),
								),
								'type'  => 'text'
							)
						)
					)
				)
			),
			'logo_box'    => array(
				'title'   => esc_html__( 'Logo Settings', 'window-mag' ),
				'type'    => 'tab',
				'options' => array(
					'site_logo'       => array(
						'type'         => 'multi-picker',
						'label'        => false,
						'picker'       => array(
							'gadget' => array(
								'label'   => esc_html__( 'Site Logo', 'window-mag' ),
								'type'    => 'radio', // or 'short-select'
								'inline'  => true,
								'choices' => array(
									'tagline' => esc_html__( 'Site title and tag line', 'window-mag' ),
									'logo'    => esc_html__( 'Upload logo', 'window-mag' )
								)
							)
						),
						'choices'      => array(
							'logo'    => array(
								'logo_select'   => array(
									'type'        => 'upload',
									'label'       => esc_html__( 'Upload logo', 'window-mag' ),
									'desc'        => esc_html__( 'Recommended size (MAX) : 250px x 70px', 'window-mag' ),
									'images_only' => true
								),
								'retina_select' => array(
									'type'        => 'upload',
									'label'       => esc_html__( 'Logo Image (Retina Version @2x)', 'window-mag' ),
									'desc'        => esc_html__( 'Choose an image file for the retina version of the logo. It should be double the size of main logo.', 'window-mag' ),
									'images_only' => true
								),
								'center_logo'   => array(
									'type'  => 'checkbox',
									'value' => true,
									'label' => esc_html__( 'Center logo', 'window-mag' )
								)
							),
							'tagline' => array(
								'center_text' => array(
									'type'  => 'checkbox',
									'value' => true,
									'label' => esc_html__( 'Center site title text', 'window-mag' )
								)
							)
						),
						'show_borders' => false
					),
					'logo_margin_top' => array(
						'label' => esc_html__( 'Logo margin top', 'window-mag' ),
						'type'  => 'text',
						'desc'  => esc_html__( 'Enter numbers only, Value will be in pixels. (10 = 10px)', 'window-mag' )
					)
				)
			),
			'news_ticker' => array(
				'title'   => esc_html__( 'News Ticker', 'window-mag' ),
				'type'    => 'tab',
				'options' => array(
					'news_ticker_switch' => array(
						'type'         => 'multi-picker',
						'label'        => false,
						'picker'       => array(
							'control' => array(
								'type'         => 'switch',
								'value'        => 'off',
								'desc'         => esc_html__( 'Enable or disable News Ticker', 'window-mag' ),
								'label'        => esc_html__( 'Show News Ticker', 'window-mag' ),
								'left-choice'  => array(
									'value' => 'off',
									'label' => esc_html__( 'off', 'window-mag' ),
								),
								'right-choice' => array(
									'value' => 'on',
									'label' => esc_html__( 'on', 'window-mag' ),
								),
							)
						),
						'choices'      => array(
							'on' => array(
								'ticker_title'    => array(
									'type'  => 'text',
									'value' => 'LATEST',
									'label' => esc_html__( 'Title', 'window-mag' ),
								),
								'top_posts_query' => array(
									'type'    => 'multi-picker',
									'label'   => false,
									'picker'  => array(
										'type' => array(
											'label'   => esc_html__( 'Query Based On : ', 'window-mag' ),
											'type'    => 'radio',
											'value'   => 'trend',
											'choices' => array(
												'trend'    => esc_html__( 'Popular posts ( Top Commented )', 'window-mag' ),
												'likes'    => esc_html__( 'Most liked posts', 'window-mag' ),
												'views'    => esc_html__( 'Most viewed posts', 'window-mag' ),
												'category' => esc_html__( 'Selected categories', 'window-mag' ),
												'tag'      => esc_html__( 'Selected tags', 'window-mag' ),
												'author'   => esc_html__( 'Selected author', 'window-mag' )
											),
											'inline'  => false
										)
									),
									'choices' => array(
										'category' => array(
											'cat_select' => array(
												'type'        => 'multi-select',
												'label'       => esc_html__( 'Select Categories', 'window-mag' ),
												'prepopulate' => 999,
												'choices'     => window_mag_categories()
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
									'label'      => esc_html__( 'Posts count', 'window-mag' )
								),
								'home_only'       => array(
									'type'         => 'switch',
									'value'        => 'off',
									'desc'         => esc_html__( 'Show the carousel on home page only or show on all pages', 'window-mag' ),
									'label'        => esc_html__( 'Show on home page only', 'window-mag' ),
									'left-choice'  => array(
										'value' => 'off',
										'label' => esc_html__( 'no', 'window-mag' ),
									),
									'right-choice' => array(
										'value' => 'on',
										'label' => esc_html__( 'yes', 'window-mag' )
									)
								),
								'visible_mobile'  => array(
									'type'         => 'switch',
									'value'        => 'on',
									'label'        => esc_html__( 'Show on Mobile Devices', 'window-mag' ),
									'left-choice'  => array(
										'value' => 'off',
										'label' => esc_html__( 'no', 'window-mag' )
									),
									'right-choice' => array(
										'value' => 'on',
										'label' => esc_html__( 'yes', 'window-mag' )
									)
								)
							)
						),
						'show_borders' => false
					)
				)
			),
			'top_posts'   => array(
				'title'   => esc_html__( 'Top Posts Carousel Settings', 'window-mag' ),
				'type'    => 'tab',
				'options' => array(
					'top_posts_switch' => array(
						'type'         => 'multi-picker',
						'label'        => false,
						'picker'       => array(
							'control' => array(
								'type'         => 'switch',
								'value'        => 'off',
								'desc'         => esc_html__( 'Enable or disable top posts carousel above the header', 'window-mag' ),
								'label'        => esc_html__( 'Show top posts', 'window-mag' ),
								'left-choice'  => array(
									'value' => 'off',
									'label' => esc_html__( 'off', 'window-mag' ),
								),
								'right-choice' => array(
									'value' => 'on',
									'label' => esc_html__( 'on', 'window-mag' ),
								),
							)
						),
						'choices'      => array(
							'on' => array(
								'top_posts_query' => array(
									'type'    => 'multi-picker',
									'label'   => false,
									'picker'  => array(
										'type' => array(
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
												'type'        => 'multi-select',
												'label'       => esc_html__( 'Select Categories', 'window-mag' ),
												'prepopulate' => 999,
												'choices'     => window_mag_categories()
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
										),
									),
								),
								'posts_count'     => array(
									'type'       => 'slider',
									'value'      => 10,
									'properties' => array(
										'min'  => 7,
										'max'  => 40,
										'step' => 1,
									),
									'label'      => esc_html__( 'Posts count', 'window-mag' ),
								),
								'home_only'       => array(
									'type'         => 'switch',
									'value'        => 'off',
									'desc'         => esc_html__( 'Show the carousel on home page only or show on all pages', 'window-mag' ),
									'label'        => esc_html__( 'Show on home page only', 'window-mag' ),
									'left-choice'  => array(
										'value' => 'off',
										'label' => esc_html__( 'no', 'window-mag' ),
									),
									'right-choice' => array(
										'value' => 'on',
										'label' => esc_html__( 'yes', 'window-mag' ),
									),
								),
								'visible_mobile'  => array(
									'type'         => 'switch',
									'value'        => 'on',
									'label'        => esc_html__( 'Show on Mobile Devices', 'window-mag' ),
									'left-choice'  => array(
										'value' => 'off',
										'label' => esc_html__( 'no', 'window-mag' ),
									),
									'right-choice' => array(
										'value' => 'on',
										'label' => esc_html__( 'yes', 'window-mag' ),
									),
								)
							)
						),
						'show_borders' => false
					),


				)
			)
		)
	)
);
