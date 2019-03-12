<?php
if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'layouts' => array(
		'title'   => esc_html__( 'Site Settings', 'window-mag' ),
		'type'    => 'tab',
		'options' => array(
			'layout_settings'      => array(
				'title'   => esc_html__( 'General', 'window-mag' ),
				'type'    => 'tab',
				'options' => array(
					'general' => array(
						'title'   => esc_html__( 'General Settings', 'window-mag' ),
						'type'    => 'box',
						'options' => array(
							'website_layout' => array(
								'type'    => 'radio',
								'value'   => 'boxed',
								'label'   => esc_html__( 'Website Layout', 'window-mag' ),
								'choices' => array(
									'boxed'  => esc_html__( 'Boxed', 'window-mag' ),
									'wide'   => esc_html__( 'Wide', 'window-mag' ),
									'framed' => esc_html__( 'Framed', 'window-mag' ),
								),
								'inline'  => true,
							),
							'headers_style'  => array(
								'type'    => 'radio',
								'value'   => 'windowmag-normal',
								'label'   => esc_html__( 'Block Header Style', 'window-mag' ),
								'choices' => array(
									'windowmag-normal'  => esc_html__( 'Normal', 'window-mag' ),
									'windowmag-preset1' => esc_html__( 'Preset 1', 'window-mag' ),
									'windowmag-preset2' => esc_html__( 'Preset 2', 'window-mag' ),
								),
								'inline'  => true,
							),
							'sticky_nav'     => array(
								'type'         => 'switch',
								'value'        => 'off',
								'label'        => esc_html__( 'Sticky Navbar', 'window-mag' ),
								'help'         => esc_html__( 'Working on Desktop only', 'window-mag' ),
								'left-choice'  => array(
									'value' => 'off',
									'label' => esc_html__( 'off', 'window-mag' ),
								),
								'right-choice' => array(
									'value' => 'on',
									'label' => esc_html__( 'on', 'window-mag' ),
								),
							),
							'sticky_sidebar' => array(
								'type'         => 'switch',
								'value'        => 'on',
								'label'        => esc_html__( 'Sticky Sidebar', 'window-mag' ),
								'help'         => esc_html__( 'Working on Desktop only', 'window-mag' ),
								'left-choice'  => array(
									'value' => 'off',
									'label' => esc_html__( 'off', 'window-mag' ),
								),
								'right-choice' => array(
									'value' => 'on',
									'label' => esc_html__( 'on', 'window-mag' ),
								),
							),
							'search_nav'     => array(
								'type'         => 'switch',
								'value'        => 'on',
								'label'        => esc_html__( 'Search box in Navbar', 'window-mag' ),
								'left-choice'  => array(
									'value' => 'off',
									'label' => esc_html__( 'off', 'window-mag' ),
								),
								'right-choice' => array(
									'value' => 'on',
									'label' => esc_html__( 'on', 'window-mag' ),
								),
							),
							'blog_time'      => array(
								'type'         => 'switch',
								'value'        => 'ago',
								'label'        => esc_html__( 'Time format', 'window-mag' ),
								'left-choice'  => array(
									'value' => 'traditional',
									'label' => esc_html__( 'Traditional', 'window-mag' ),
								),
								'right-choice' => array(
									'value' => 'ago',
									'label' => esc_html__( 'Time ago', 'window-mag' ),
								),
							),
							'code_highlight' => array(
								'type'         => 'switch',
								'value'        => 'on',
								'label'        => esc_html__( 'Code highlighting system', 'window-mag' ),
								'left-choice'  => array(
									'value' => 'off',
									'label' => esc_html__( 'off', 'window-mag' ),
								),
								'right-choice' => array(
									'value' => 'on',
									'label' => esc_html__( 'on', 'window-mag' ),
								),
							),
							'retina_support' => array(
								'type'         => 'switch',
								'value'        => 'on',
								'label'        => esc_html__( 'Retina Support', 'window-mag' ),
								'left-choice'  => array(
									'value' => 'off',
									'label' => esc_html__( 'Off', 'window-mag' ),
								),
								'right-choice' => array(
									'value' => 'on',
									'label' => esc_html__( 'On', 'window-mag' ),
								),
							),
							'scroll_top'     => array(
								'type'         => 'switch',
								'value'        => 'on',
								'label'        => esc_html__( 'Scroll to top button', 'window-mag' ),
								'left-choice'  => array(
									'value' => 'off',
									'label' => esc_html__( 'hide', 'window-mag' ),
								),
								'right-choice' => array(
									'value' => 'on',
									'label' => esc_html__( 'show', 'window-mag' ),
								),
							),

						)
					),
					'site'    => array(
						'title'   => esc_html__( 'Posts Settings', 'window-mag' ),
						'type'    => 'box',
						'options' => array(
							'post_excerpt'        => array(
								'type'       => 'slider',
								'value'      => 40,
								'properties' => array(
									'min'  => 0,
									'max'  => 500,
									'step' => 5, // Set slider step. Always > 0. Could be fractional.
								),
								'label'      => esc_html__( 'Post excerpt length', 'window-mag' )
							),
							'breadcrumbs_switch'  => array(
								'type'         => 'switch',
								'value'        => 'off',
								'label'        => esc_html__( 'Breadcrumbs', 'window-mag' ),
								'desc'         => esc_html__( 'You must install unyson breadcrumbs extension to activate breadcrumbs', 'window-mag' ),
								'left-choice'  => array(
									'value' => 'off',
									'label' => esc_html__( 'Hide', 'window-mag' ),
								),
								'right-choice' => array(
									'value' => 'on',
									'label' => esc_html__( 'Show', 'window-mag' ),
								)
							),
							'pagination_style'    => array(
								'type'         => 'switch',
								'value'        => 'number',
								'label'        => esc_html__( 'Pagination Style', 'window-mag' ),
								'left-choice'  => array(
									'value' => 'text',
									'label' => esc_html__( 'Next & Prev', 'window-mag' ),
								),
								'right-choice' => array(
									'value' => 'number',
									'label' => esc_html__( 'Numbers (1,2,3)', 'window-mag' ),
								)
							),
							'general_date_meta'   => array(
								'type'         => 'switch',
								'value'        => 'on',
								'label'        => esc_html__( 'Date Meta', 'window-mag' ),
								'right-choice' => array(
									'value' => 'on',
									'label' => esc_html__( 'Show', 'window-mag' )
								),
								'left-choice'  => array(
									'value' => 'off',
									'label' => esc_html__( 'Hide', 'window-mag' )
								)
							),
							'general_views_meta'  => array(
								'type'         => 'switch',
								'value'        => 'on',
								'label'        => esc_html__( 'Views meta', 'window-mag' ),
								'right-choice' => array(
									'value' => 'on',
									'label' => esc_html__( 'Show', 'window-mag' )
								),
								'left-choice'  => array(
									'value' => 'off',
									'label' => esc_html__( 'Hide', 'window-mag' )
								)
							),
							'general_like_meta'   => array(
								'type'         => 'switch',
								'value'        => 'on',
								'label'        => esc_html__( 'Like meta', 'window-mag' ),
								'right-choice' => array(
									'value' => 'on',
									'label' => esc_html__( 'Show', 'window-mag' )
								),
								'left-choice'  => array(
									'value' => 'off',
									'label' => esc_html__( 'Hide', 'window-mag' )
								)
							),
							'general_rating_meta' => array(
								'type'         => 'switch',
								'value'        => 'on',
								'label'        => esc_html__( 'Rate meta', 'window-mag' ),
								'right-choice' => array(
									'value' => 'on',
									'label' => esc_html__( 'Show', 'window-mag' )
								),
								'left-choice'  => array(
									'value' => 'off',
									'label' => esc_html__( 'Hide', 'window-mag' )
								)
							)
						)
					)
				)
			),
			'home_layout_box'      => array(
				'title'   => esc_html__( 'Home Layout', 'window-mag' ),
				'type'    => 'tab',
				'options' => array(
					'home_layout_popup' => array(
						'type'            => 'addable-popup',
						'label'           => esc_html__( 'Home Page Blocks', 'window-mag' ),
						'template'        => '{{- block_title }}',
						'popup-title'     => null,
						'size'            => 'large', // small, medium, large
						'add-button-text' => esc_html__( 'Add Block', 'window-mag' ),
						'sortable'        => true,
						'popup-options'   => array(
							'block_title' => array(
								'type'  => 'text',
								'label' => esc_html__( 'Block Title', 'window-mag' ),
								'desc'  => esc_html__( 'Will be used in posts mode only', 'window-mag' )
							),
							'layout_type' => array(
								'type'    => 'multi-picker',
								'label'   => false,
								'picker'  => array(
									'control' => array(
										'type'         => 'switch',
										'value'        => 'hello',
										'label'        => esc_html__( 'Block type', 'window-mag' ),
										'left-choice'  => array(
											'value' => 'posts',
											'label' => esc_html__( 'Posts Mode', 'window-mag' )
										),
										'right-choice' => array(
											'value' => 'ads',
											'label' => esc_html__( 'Advertise Mode', 'window-mag' )
										),
									)
								),
								'choices' => array(
									'posts' => array(
										'post_style'  => array(
											'type'    => 'image-picker',
											'label'   => esc_html__( 'Block Style', 'window-mag' ),
											'choices' => array(
												'simple-grid' => array(
													// (required) url for thumbnail
													'small' => array(
														'src'    => WINDOW_MAG_IMAGES_DIR . 'blocks/simple.png',
														'height' => 70
													),
													// (optional) url for large image that will appear in tooltip
													'large' => array(
														'src'    => WINDOW_MAG_IMAGES_DIR . 'blocks/simple.png',
														'height' => 160
													)
												),
												'carousel'    => array(
													// (required) url for thumbnail
													'small' => array(
														'src'    => WINDOW_MAG_IMAGES_DIR . 'blocks/carousel.png',
														'height' => 70
													),
													// (optional) url for large image that will appear in tooltip
													'large' => array(
														'src'    => WINDOW_MAG_IMAGES_DIR . 'blocks/carousel.png',
														'height' => 160
													)
												),
												'img-grid'    => array(
													// (required) url for thumbnail
													'small' => array(
														'src'    => WINDOW_MAG_IMAGES_DIR . 'blocks/img-grid.png',
														'height' => 70
													),
													// (optional) url for large image that will appear in tooltip
													'large' => array(
														'src'    => WINDOW_MAG_IMAGES_DIR . 'blocks/img-grid.png',
														'height' => 160
													)
												),
												'list'        => array(
													// (required) url for thumbnail
													'small' => array(
														'src'    => WINDOW_MAG_IMAGES_DIR . 'blocks/recent-list.png',
														'height' => 70
													),
													// (optional) url for large image that will appear in tooltip
													'large' => array(
														'src'    => WINDOW_MAG_IMAGES_DIR . 'blocks/recent-list.png',
														'height' => 160
													)
												),
												'masonry'     => array(
													// (required) url for thumbnail
													'small' => array(
														'src'    => WINDOW_MAG_IMAGES_DIR . 'blocks/masonry.png',
														'height' => 70
													),
													// (optional) url for large image that will appear in tooltip
													'large' => array(
														'src'    => WINDOW_MAG_IMAGES_DIR . 'blocks/masonry.png',
														'height' => 160
													)
												),
												'mini-grid'   => array(
													// (required) url for thumbnail
													'small' => array(
														'src'    => WINDOW_MAG_IMAGES_DIR . 'blocks/mini-grid.png',
														'height' => 70
													),
													// (optional) url for large image that will appear in tooltip
													'large' => array(
														'src'    => WINDOW_MAG_IMAGES_DIR . 'blocks/mini-grid.png',
														'height' => 160
													)
												),
												'big-grid'    => array(
													// (required) url for thumbnail
													'small' => array(
														'src'    => WINDOW_MAG_IMAGES_DIR . 'blocks/big-grid.png',
														'height' => 70
													),
													// (optional) url for large image that will appear in tooltip
													'large' => array(
														'src'    => WINDOW_MAG_IMAGES_DIR . 'blocks/big-grid.png',
														'height' => 160
													)
												),
												'slides'      => array(
													// (required) url for thumbnail
													'small' => array(
														'src'    => WINDOW_MAG_IMAGES_DIR . 'sliders/center.png',
														'height' => 70
													),
													// (optional) url for large image that will appear in tooltip
													'large' => array(
														'src'    => WINDOW_MAG_IMAGES_DIR . 'sliders/center.png',
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
											'label'      => esc_html__( 'Posts Count', 'window-mag' )
										),
										'cat_select'  => array(
											'type'        => 'multi-select',
											'label'       => esc_html__( 'Select Categories', 'window-mag' ),
											'prepopulate' => 999,
											'choices'     => window_mag_categories()
										)
									),
									'ads'   => array(
										'ads_box' => array(
											'type'    => 'multi-picker',
											'label'   => false,
											'picker'  => array(
												'gadget' => array(
													'label'   => esc_html__( 'AD Type', 'window-mag' ),
													'type'    => 'radio',
													'choices' => array(
														'image' => esc_html__( 'Image AD', 'window-mag' ),
														'code'  => esc_html__( 'Custom Code', 'window-mag' )
													),
													'inline'  => true,
													'value'   => 'image'
												)
											),
											'choices' => array(
												'image' => array(
													'img'    => array(
														'type'        => 'upload',
														'label'       => esc_html__( 'Image banner', 'window-mag' ),
														'images_only' => true
													),
													'url'    => array(
														'type'  => 'text',
														'label' => esc_html__( 'Banner url', 'window-mag' ),
													),
													'alt'    => array(
														'type'  => 'text',
														'label' => esc_html__( 'Alternative Text For The image', 'window-mag' ),
													),
													'tab'    => array(
														'type'  => 'checkbox',
														'value' => true,
														'label' => esc_html__( 'Open url in new tab', 'window-mag' )
													),
													'follow' => array(
														'type'  => 'checkbox',
														'value' => false,
														'label' => esc_html__( 'No follow', 'window-mag' )
													)
												),
												'code'  => array(
													'code_block' => array(
														'type'  => 'textarea',
														'label' => esc_html__( 'Custom Ad Code', 'window-mag' ),
														'desc'  => esc_html__( 'Supports: HTML, Javascript, Text and Shortcodes.', 'window-mag' )
													)
												)
											)
										)
									)
								)
							)
						)
					),
					'home_recent_posts' => array(
						'type'    => 'multi-picker',
						'label'   => false,
						'desc'    => false,
						'value'   => array(
							'yes' => array(
								'home_posts_style' => 'list'
							)
						),
						'picker'  => array(
							'control' => array(
								'type'         => 'switch',
								'value'        => 'yes',
								'label'        => esc_html__( 'Show recent posts', 'window-mag' ),
								'desc'         => esc_html__( 'Show or hide recent posts on home page', 'window-mag' ),
								'left-choice'  => array(
									'value' => 'no',
									'label' => esc_html__( 'No', 'window-mag' ),
								),
								'right-choice' => array(
									'value' => 'yes',
									'label' => esc_html__( 'Yes', 'window-mag' ),
								),
							)
						),
						'choices' => array(
							'yes' => array(
								'title'            => array(
									'type'  => 'text',
									'attr'  => array( 'placeholder' => esc_html__( 'Recent Posts', 'window-mag' ) ),
									'label' => esc_html__( 'Recent Posts Title', 'window-mag' ),
								),
								'home_posts_style' => array(
									'type'    => 'image-picker',
									'value'   => 'blog',
									'label'   => esc_html__( 'Posts Style', 'window-mag' ),
									'desc'    => esc_html__( 'Choose the style of posts for home and all archive pages', 'window-mag' ),
									'choices' => array(
										'blog'    => array(
											'small' => array(
												'src'    => esc_url( WINDOW_MAG_IMAGES_DIR . 'blocks/blog.png' ),
												'height' => 70
											),
											'large' => array(
												'src'    => esc_url( WINDOW_MAG_IMAGES_DIR . 'blocks/blog.png' ),
												'height' => 160
											)
										),
										'list'    => array(
											'small' => array(
												'src'    => esc_url( WINDOW_MAG_IMAGES_DIR . 'blocks/recent-list.png' ),
												'height' => 70
											),
											'large' => array(
												'src'    => esc_url( WINDOW_MAG_IMAGES_DIR . 'blocks/recent-list.png' ),
												'height' => 160
											)
										),
										'masonry' => array(
											'small' => array(
												'src'    => esc_url( WINDOW_MAG_IMAGES_DIR . 'blocks/masonry.png' ),
												'height' => 70
											),
											'large' => array(
												'src'    => esc_url( WINDOW_MAG_IMAGES_DIR . 'blocks/masonry.png' ),
												'height' => 160
											)
										)
									),
									'blank'   => false
								),
							)
						)
					),
					'home_sidebar'      => array(
						'type'         => 'switch',
						'value'        => 'right_sidebar',
						'label'        => esc_html__( 'Sidebar Position', 'window-mag' ),
						'right-choice' => array(
							'value' => 'right_sidebar',
							'label' => esc_html__( 'Right', 'window-mag' )
						),
						'left-choice'  => array(
							'value' => 'left_sidebar',
							'label' => esc_html__( 'Left', 'window-mag' )
						),
					)
				)
			),
			'archive_page_layout'  => array(
				'title'   => esc_html__( 'Archive', 'window-mag' ),
				'type'    => 'tab',
				'options' => array(
					'archive_page_description' => array(
						'type'         => 'switch',
						'value'        => 'show',
						'label'        => esc_html__( 'Archive Description', 'window-mag' ),
						'right-choice' => array(
							'value' => 'show',
							'label' => esc_html__( 'Show', 'window-mag' )
						),
						'left-choice'  => array(
							'value' => 'hide',
							'label' => esc_html__( 'Hide', 'window-mag' )
						),
					),
					'archive_layout'           => array(
						'type'         => 'switch',
						'value'        => 'right_sidebar',
						'label'        => esc_html__( 'Sidebar Position', 'window-mag' ),
						'right-choice' => array(
							'value' => 'right_sidebar',
							'label' => esc_html__( 'Right', 'window-mag' )
						),
						'left-choice'  => array(
							'value' => 'left_sidebar',
							'label' => esc_html__( 'Left', 'window-mag' )
						),
					),
					'archive_posts_count'      => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Posts Count', 'window-mag' ),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'Show', 'window-mag' )
						),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'Hide', 'window-mag' )
						),
					),
					'archive_posts_style'      => array(
						'type'    => 'image-picker',
						'value'   => 'list',
						'label'   => esc_html__( 'Posts Style', 'window-mag' ),
						'desc'    => esc_html__( 'Choose the style of posts for archive page', 'window-mag' ),
						'choices' => array(
							'blog'    => array(
								'small' => array(
									'src'    => esc_url( WINDOW_MAG_IMAGES_DIR . 'blocks/blog.png' ),
									'height' => 70
								),
								'large' => array(
									'src'    => esc_url( WINDOW_MAG_IMAGES_DIR . 'blocks/blog.png' ),
									'height' => 160
								)
							),
							'list'    => array(
								'small' => array(
									'src'    => esc_url( WINDOW_MAG_IMAGES_DIR . 'blocks/recent-list.png' ),
									'height' => 70
								),
								'large' => array(
									'src'    => esc_url( WINDOW_MAG_IMAGES_DIR . 'blocks/recent-list.png' ),
									'height' => 160
								)
							),
							'masonry' => array(
								'small' => array(
									'src'    => esc_url( WINDOW_MAG_IMAGES_DIR . 'blocks/masonry.png' ),
									'height' => 70
								),
								'large' => array(
									'src'    => esc_url( WINDOW_MAG_IMAGES_DIR . 'blocks/masonry.png' ),
									'height' => 160
								)
							)
						),
						'blank'   => false
					),
				)
			),
			'category_page_layout' => array(
				'title'   => esc_html__( 'Category', 'window-mag' ),
				'type'    => 'tab',
				'options' => array(
					'category_page_description' => array(
						'type'         => 'switch',
						'value'        => 'show',
						'label'        => esc_html__( 'Category Description', 'window-mag' ),
						'right-choice' => array(
							'value' => 'show',
							'label' => esc_html__( 'Show', 'window-mag' )
						),
						'left-choice'  => array(
							'value' => 'hide',
							'label' => esc_html__( 'Hide', 'window-mag' )
						),
					),
					'category_posts_count'      => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Posts Count', 'window-mag' ),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'Show', 'window-mag' )
						),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'Hide', 'window-mag' )
						),
					),
					'category_layout'           => array(
						'type'         => 'switch',
						'value'        => 'right_sidebar',
						'label'        => esc_html__( 'Sidebar Position', 'window-mag' ),
						'right-choice' => array(
							'value' => 'right_sidebar',
							'label' => esc_html__( 'Right', 'window-mag' )
						),
						'left-choice'  => array(
							'value' => 'left_sidebar',
							'label' => esc_html__( 'Left', 'window-mag' )
						),
					),
					'category_posts_style'      => array(
						'type'    => 'image-picker',
						'value'   => 'list',
						'label'   => esc_html__( 'Posts Style', 'window-mag' ),
						'desc'    => esc_html__( 'Choose the style of posts for category page', 'window-mag' ),
						'choices' => array(
							'blog'    => array(
								'small' => array(
									'src'    => esc_url( WINDOW_MAG_IMAGES_DIR . 'blocks/blog.png' ),
									'height' => 70
								),
								'large' => array(
									'src'    => esc_url( WINDOW_MAG_IMAGES_DIR . 'blocks/blog.png' ),
									'height' => 160
								)
							),
							'list'    => array(
								'small' => array(
									'src'    => esc_url( WINDOW_MAG_IMAGES_DIR . 'blocks/recent-list.png' ),
									'height' => 70
								),
								'large' => array(
									'src'    => esc_url( WINDOW_MAG_IMAGES_DIR . 'blocks/recent-list.png' ),
									'height' => 160
								)
							),
							'masonry' => array(
								'small' => array(
									'src'    => esc_url( WINDOW_MAG_IMAGES_DIR . 'blocks/masonry.png' ),
									'height' => 70
								),
								'large' => array(
									'src'    => esc_url( WINDOW_MAG_IMAGES_DIR . 'blocks/masonry.png' ),
									'height' => 160
								)
							)
						),
						'blank'   => false
					)
				)
			),
			'tag_page_layout'      => array(
				'title'   => esc_html__( 'Tag', 'window-mag' ),
				'type'    => 'tab',
				'options' => array(
					'tags_page_description' => array(
						'type'         => 'switch',
						'value'        => 'show',
						'label'        => esc_html__( 'Tag Description', 'window-mag' ),
						'right-choice' => array(
							'value' => 'show',
							'label' => esc_html__( 'Show', 'window-mag' )
						),
						'left-choice'  => array(
							'value' => 'hide',
							'label' => esc_html__( 'Hide', 'window-mag' )
						),
					),
					'tags_posts_count'      => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Posts Count', 'window-mag' ),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'Show', 'window-mag' )
						),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'Hide', 'window-mag' )
						),
					),
					'tags_layout'           => array(
						'type'         => 'switch',
						'value'        => 'right_sidebar',
						'label'        => esc_html__( 'Sidebar Position', 'window-mag' ),
						'right-choice' => array(
							'value' => 'right_sidebar',
							'label' => esc_html__( 'Right', 'window-mag' )
						),
						'left-choice'  => array(
							'value' => 'left_sidebar',
							'label' => esc_html__( 'Left', 'window-mag' )
						),
					),
					'tags_posts_style'      => array(
						'type'    => 'image-picker',
						'value'   => 'list',
						'label'   => esc_html__( 'Posts Style', 'window-mag' ),
						'desc'    => esc_html__( 'Choose the style of posts for tag page', 'window-mag' ),
						'choices' => array(
							'blog'    => array(
								'small' => array(
									'src'    => esc_url( WINDOW_MAG_IMAGES_DIR . 'blocks/blog.png' ),
									'height' => 70
								),
								'large' => array(
									'src'    => esc_url( WINDOW_MAG_IMAGES_DIR . 'blocks/blog.png' ),
									'height' => 160
								)
							),
							'list'    => array(
								'small' => array(
									'src'    => esc_url( WINDOW_MAG_IMAGES_DIR . 'blocks/recent-list.png' ),
									'height' => 70
								),
								'large' => array(
									'src'    => esc_url( WINDOW_MAG_IMAGES_DIR . 'blocks/recent-list.png' ),
									'height' => 160
								)
							),
							'masonry' => array(
								'small' => array(
									'src'    => esc_url( WINDOW_MAG_IMAGES_DIR . 'blocks/masonry.png' ),
									'height' => 70
								),
								'large' => array(
									'src'    => esc_url( WINDOW_MAG_IMAGES_DIR . 'blocks/masonry.png' ),
									'height' => 160
								)
							)
						),
						'blank'   => false
					),
				)
			),
			'author_page_layout'   => array(
				'title'   => esc_html__( 'Author', 'window-mag' ),
				'type'    => 'tab',
				'options' => array(
					'author_bio'         => array(
						'type'         => 'switch',
						'value'        => 'show',
						'label'        => esc_html__( 'Author Bio', 'window-mag' ),
						'right-choice' => array(
							'value' => 'show',
							'label' => esc_html__( 'Show', 'window-mag' )
						),
						'left-choice'  => array(
							'value' => 'hide',
							'label' => esc_html__( 'Hide', 'window-mag' )
						),
					),
					'author_layout'      => array(
						'type'         => 'switch',
						'value'        => 'right_sidebar',
						'label'        => esc_html__( 'Sidebar Position', 'window-mag' ),
						'right-choice' => array(
							'value' => 'right_sidebar',
							'label' => esc_html__( 'Right', 'window-mag' )
						),
						'left-choice'  => array(
							'value' => 'left_sidebar',
							'label' => esc_html__( 'Left', 'window-mag' )
						),
					),
					'author_posts_style' => array(
						'type'    => 'image-picker',
						'value'   => 'list',
						'label'   => esc_html__( 'Posts Style', 'window-mag' ),
						'desc'    => esc_html__( 'Choose the style of posts for author posts poge', 'window-mag' ),
						'choices' => array(
							'blog'    => array(
								'small' => array(
									'src'    => esc_url( WINDOW_MAG_IMAGES_DIR . 'blocks/blog.png' ),
									'height' => 70
								),
								'large' => array(
									'src'    => esc_url( WINDOW_MAG_IMAGES_DIR . 'blocks/blog.png' ),
									'height' => 160
								)
							),
							'list'    => array(
								'small' => array(
									'src'    => esc_url( WINDOW_MAG_IMAGES_DIR . 'blocks/recent-list.png' ),
									'height' => 70
								),
								'large' => array(
									'src'    => esc_url( WINDOW_MAG_IMAGES_DIR . 'blocks/recent-list.png' ),
									'height' => 160
								)
							),
							'masonry' => array(
								'small' => array(
									'src'    => esc_url( WINDOW_MAG_IMAGES_DIR . 'blocks/masonry.png' ),
									'height' => 70
								),
								'large' => array(
									'src'    => esc_url( WINDOW_MAG_IMAGES_DIR . 'blocks/masonry.png' ),
									'height' => 160
								)
							)
						),
						'blank'   => false
					),
				)
			),
			'search_page_layout'   => array(
				'title'   => esc_html__( 'Search', 'window-mag' ),
				'type'    => 'tab',
				'options' => array(
					'search_exclude'     => array(
						'type'         => 'switch',
						'value'        => 'no',
						'label'        => esc_html__( 'Exclude Pages from results', 'window-mag' ),
						'right-choice' => array(
							'value' => 'no',
							'label' => esc_html__( 'No', 'window-mag' )
						),
						'left-choice'  => array(
							'value' => 'yes',
							'label' => esc_html__( 'Yes', 'window-mag' )
						),
					),
					'search_posts_count' => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Posts Count', 'window-mag' ),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'Show', 'window-mag' )
						),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'Hide', 'window-mag' )
						),
					),
					'search_layout'      => array(
						'type'         => 'switch',
						'value'        => 'right_sidebar',
						'label'        => esc_html__( 'Sidebar Position', 'window-mag' ),
						'right-choice' => array(
							'value' => 'right_sidebar',
							'label' => esc_html__( 'Right', 'window-mag' )
						),
						'left-choice'  => array(
							'value' => 'left_sidebar',
							'label' => esc_html__( 'Left', 'window-mag' )
						),
					),
					'search_posts_style' => array(
						'type'    => 'image-picker',
						'value'   => 'list',
						'label'   => esc_html__( 'Posts Style', 'window-mag' ),
						'desc'    => esc_html__( 'Choose the style of posts for search results page', 'window-mag' ),
						'choices' => array(
							'blog'    => array(
								'small' => array(
									'src'    => esc_url( WINDOW_MAG_IMAGES_DIR . 'blocks/blog.png' ),
									'height' => 70
								),
								'large' => array(
									'src'    => esc_url( WINDOW_MAG_IMAGES_DIR . 'blocks/blog.png' ),
									'height' => 160
								)
							),
							'list'    => array(
								'small' => array(
									'src'    => esc_url( WINDOW_MAG_IMAGES_DIR . 'blocks/recent-list.png' ),
									'height' => 70
								),
								'large' => array(
									'src'    => esc_url( WINDOW_MAG_IMAGES_DIR . 'blocks/recent-list.png' ),
									'height' => 160
								)
							),
							'masonry' => array(
								'small' => array(
									'src'    => esc_url( WINDOW_MAG_IMAGES_DIR . 'blocks/masonry.png' ),
									'height' => 70
								),
								'large' => array(
									'src'    => esc_url( WINDOW_MAG_IMAGES_DIR . 'blocks/masonry.png' ),
									'height' => 160
								)
							)
						),
						'blank'   => false
					),
				)
			),
			'error_page_layout'    => array(
				'title'   => esc_html__( 'Error 404 Page', 'window-mag' ),
				'type'    => 'tab',
				'options' => array(
					'error_logo_style' => array(
						'type'    => 'multi-picker',
						'label'   => false,
						'desc'    => false,
						'value'   => array(
							'control' => 'text',
							'text'    => array(
								'error_text' => '404!'
							)
						),
						'picker'  => array(
							'control' => array(
								'type'         => 'switch',
								'value'        => 'text',
								'label'        => esc_html__( 'Logo type', 'window-mag' ),
								'left-choice'  => array(
									'value' => 'logo',
									'label' => esc_html__( 'Image', 'window-mag' ),
								),
								'right-choice' => array(
									'value' => 'text',
									'label' => esc_html__( 'Text', 'window-mag' ),
								),
							)
						),
						'choices' => array(
							'logo' => array(
								'error_image' => array(
									'type'        => 'upload',
									'label'       => esc_html__( 'Error logo', 'window-mag' ),
									'images_only' => true
								)
							),
							'text' => array(
								'error_text' => array(
									'type'  => 'text',
									'label' => esc_html__( 'Error text', 'window-mag' ),
								)
							),
						)
					),
					'error_message'    => array(
						'type'  => 'textarea',
						'value' => esc_html__( 'Sorry!.. the page you are trying to reach may be deleted or moved.', 'window-mag' ),
						'label' => esc_html__( 'Error Message', 'window-mag' )
					),
					'error_search'     => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Search form', 'window-mag' ),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'Hide', 'window-mag' ),
						),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'Show', 'window-mag' ),
						),
					),
				)
			)
		)
	)

);
