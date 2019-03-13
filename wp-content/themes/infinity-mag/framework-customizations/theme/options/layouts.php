<?php
if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'layouts' => array(
		'title'   => esc_html__( 'Site Settings', 'dw' ),
		'type'    => 'tab',
		'options' => array(
			'layout_settings'      => array(
				'title'   => esc_html__( 'General', 'dw' ),
				'type'    => 'tab',
				'options' => array(
					'general' => array(
						'title'   => esc_html__( 'General Settings', 'dw' ),
						'type'    => 'box',
						'options' => array(
							'website_layout' => array(
								'type'    => 'radio',
								'value'   => 'boxed',
								'label'   => esc_html__( 'Website Layout', 'dw' ),
								'choices' => array(
									'boxed'  => esc_html__( 'Boxed', 'dw' ),
									'wide'   => esc_html__( 'Wide', 'dw' ),
									'framed' => esc_html__( 'Framed', 'dw' ),
								),
								'inline'  => true,
							),
							'headers_style'  => array(
								'type'    => 'radio',
								'value'   => 'windowmag-normal',
								'label'   => esc_html__( 'Block Header Style', 'dw' ),
								'choices' => array(
									'windowmag-normal'  => esc_html__( 'Normal', 'dw' ),
									'windowmag-preset1' => esc_html__( 'Preset 1', 'dw' ),
									'windowmag-preset2' => esc_html__( 'Preset 2', 'dw' ),
								),
								'inline'  => true,
							),
							'sticky_nav'     => array(
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
							'sticky_sidebar' => array(
								'type'         => 'switch',
								'value'        => 'on',
								'label'        => esc_html__( 'Sticky Sidebar', 'dw' ),
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
							'search_nav'     => array(
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
							'blog_time'      => array(
								'type'         => 'switch',
								'value'        => 'ago',
								'label'        => esc_html__( 'Time format', 'dw' ),
								'left-choice'  => array(
									'value' => 'traditional',
									'label' => esc_html__( 'Traditional', 'dw' ),
								),
								'right-choice' => array(
									'value' => 'ago',
									'label' => esc_html__( 'Time ago', 'dw' ),
								),
							),
							'code_highlight' => array(
								'type'         => 'switch',
								'value'        => 'on',
								'label'        => esc_html__( 'Code highlighting system', 'dw' ),
								'left-choice'  => array(
									'value' => 'off',
									'label' => esc_html__( 'off', 'dw' ),
								),
								'right-choice' => array(
									'value' => 'on',
									'label' => esc_html__( 'on', 'dw' ),
								),
							),
							'retina_support' => array(
								'type'         => 'switch',
								'value'        => 'on',
								'label'        => esc_html__( 'Retina Support', 'dw' ),
								'left-choice'  => array(
									'value' => 'off',
									'label' => esc_html__( 'Off', 'dw' ),
								),
								'right-choice' => array(
									'value' => 'on',
									'label' => esc_html__( 'On', 'dw' ),
								),
							),
							'scroll_top'     => array(
								'type'         => 'switch',
								'value'        => 'on',
								'label'        => esc_html__( 'Scroll to top button', 'dw' ),
								'left-choice'  => array(
									'value' => 'off',
									'label' => esc_html__( 'hide', 'dw' ),
								),
								'right-choice' => array(
									'value' => 'on',
									'label' => esc_html__( 'show', 'dw' ),
								),
							),

						)
					),
					'site'    => array(
						'title'   => esc_html__( 'Posts Settings', 'dw' ),
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
								'label'      => esc_html__( 'Post excerpt length', 'dw' )
							),
							'breadcrumbs_switch'  => array(
								'type'         => 'switch',
								'value'        => 'off',
								'label'        => esc_html__( 'Breadcrumbs', 'dw' ),
								'desc'         => esc_html__( 'You must install unyson breadcrumbs extension to activate breadcrumbs', 'dw' ),
								'left-choice'  => array(
									'value' => 'off',
									'label' => esc_html__( 'Hide', 'dw' ),
								),
								'right-choice' => array(
									'value' => 'on',
									'label' => esc_html__( 'Show', 'dw' ),
								)
							),
							'pagination_style'    => array(
								'type'         => 'switch',
								'value'        => 'number',
								'label'        => esc_html__( 'Pagination Style', 'dw' ),
								'left-choice'  => array(
									'value' => 'text',
									'label' => esc_html__( 'Next & Prev', 'dw' ),
								),
								'right-choice' => array(
									'value' => 'number',
									'label' => esc_html__( 'Numbers (1,2,3)', 'dw' ),
								)
							),
							'general_date_meta'   => array(
								'type'         => 'switch',
								'value'        => 'on',
								'label'        => esc_html__( 'Date Meta', 'dw' ),
								'right-choice' => array(
									'value' => 'on',
									'label' => esc_html__( 'Show', 'dw' )
								),
								'left-choice'  => array(
									'value' => 'off',
									'label' => esc_html__( 'Hide', 'dw' )
								)
							),
							'general_views_meta'  => array(
								'type'         => 'switch',
								'value'        => 'on',
								'label'        => esc_html__( 'Views meta', 'dw' ),
								'right-choice' => array(
									'value' => 'on',
									'label' => esc_html__( 'Show', 'dw' )
								),
								'left-choice'  => array(
									'value' => 'off',
									'label' => esc_html__( 'Hide', 'dw' )
								)
							),
							'general_like_meta'   => array(
								'type'         => 'switch',
								'value'        => 'on',
								'label'        => esc_html__( 'Like meta', 'dw' ),
								'right-choice' => array(
									'value' => 'on',
									'label' => esc_html__( 'Show', 'dw' )
								),
								'left-choice'  => array(
									'value' => 'off',
									'label' => esc_html__( 'Hide', 'dw' )
								)
							),
							'general_rating_meta' => array(
								'type'         => 'switch',
								'value'        => 'on',
								'label'        => esc_html__( 'Rate meta', 'dw' ),
								'right-choice' => array(
									'value' => 'on',
									'label' => esc_html__( 'Show', 'dw' )
								),
								'left-choice'  => array(
									'value' => 'off',
									'label' => esc_html__( 'Hide', 'dw' )
								)
							)
						)
					)
				)
			),
			'home_layout_box'      => array(
				'title'   => esc_html__( 'Home Layout', 'dw' ),
				'type'    => 'tab',
				'options' => array(
					'home_layout_popup' => array(
						'type'            => 'addable-popup',
						'label'           => esc_html__( 'Home Page Blocks', 'dw' ),
						'template'        => '{{- block_title }}',
						'popup-title'     => null,
						'size'            => 'large', // small, medium, large
						'add-button-text' => esc_html__( 'Add Block', 'dw' ),
						'sortable'        => true,
						'popup-options'   => array(
							'block_title' => array(
								'type'  => 'text',
								'label' => esc_html__( 'Block Title', 'dw' ),
								'desc'  => esc_html__( 'Will be used in posts mode only', 'dw' )
							),
							'layout_type' => array(
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
								'label'        => esc_html__( 'Show recent posts', 'dw' ),
								'desc'         => esc_html__( 'Show or hide recent posts on home page', 'dw' ),
								'left-choice'  => array(
									'value' => 'no',
									'label' => esc_html__( 'No', 'dw' ),
								),
								'right-choice' => array(
									'value' => 'yes',
									'label' => esc_html__( 'Yes', 'dw' ),
								),
							)
						),
						'choices' => array(
							'yes' => array(
								'title'            => array(
									'type'  => 'text',
									'attr'  => array( 'placeholder' => esc_html__( 'Recent Posts', 'dw' ) ),
									'label' => esc_html__( 'Recent Posts Title', 'dw' ),
								),
								'home_posts_style' => array(
									'type'    => 'image-picker',
									'value'   => 'blog',
									'label'   => esc_html__( 'Posts Style', 'dw' ),
									'desc'    => esc_html__( 'Choose the style of posts for home and all archive pages', 'dw' ),
									'choices' => array(
										'blog'    => array(
											'small' => array(
												'src'    => esc_url( DW_IMAGES_DIR . 'blocks/blog.png' ),
												'height' => 70
											),
											'large' => array(
												'src'    => esc_url( DW_IMAGES_DIR . 'blocks/blog.png' ),
												'height' => 160
											)
										),
										'list'    => array(
											'small' => array(
												'src'    => esc_url( DW_IMAGES_DIR . 'blocks/recent-list.png' ),
												'height' => 70
											),
											'large' => array(
												'src'    => esc_url( DW_IMAGES_DIR . 'blocks/recent-list.png' ),
												'height' => 160
											)
										),
										'masonry' => array(
											'small' => array(
												'src'    => esc_url( DW_IMAGES_DIR . 'blocks/masonry.png' ),
												'height' => 70
											),
											'large' => array(
												'src'    => esc_url( DW_IMAGES_DIR . 'blocks/masonry.png' ),
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
						'label'        => esc_html__( 'Sidebar Position', 'dw' ),
						'right-choice' => array(
							'value' => 'right_sidebar',
							'label' => esc_html__( 'Right', 'dw' )
						),
						'left-choice'  => array(
							'value' => 'left_sidebar',
							'label' => esc_html__( 'Left', 'dw' )
						),
					)
				)
			),
			'archive_page_layout'  => array(
				'title'   => esc_html__( 'Archive', 'dw' ),
				'type'    => 'tab',
				'options' => array(
					'archive_page_description' => array(
						'type'         => 'switch',
						'value'        => 'show',
						'label'        => esc_html__( 'Archive Description', 'dw' ),
						'right-choice' => array(
							'value' => 'show',
							'label' => esc_html__( 'Show', 'dw' )
						),
						'left-choice'  => array(
							'value' => 'hide',
							'label' => esc_html__( 'Hide', 'dw' )
						),
					),
					'archive_layout'           => array(
						'type'         => 'switch',
						'value'        => 'right_sidebar',
						'label'        => esc_html__( 'Sidebar Position', 'dw' ),
						'right-choice' => array(
							'value' => 'right_sidebar',
							'label' => esc_html__( 'Right', 'dw' )
						),
						'left-choice'  => array(
							'value' => 'left_sidebar',
							'label' => esc_html__( 'Left', 'dw' )
						),
					),
					'archive_posts_count'      => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Posts Count', 'dw' ),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'Show', 'dw' )
						),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'Hide', 'dw' )
						),
					),
					'archive_posts_style'      => array(
						'type'    => 'image-picker',
						'value'   => 'list',
						'label'   => esc_html__( 'Posts Style', 'dw' ),
						'desc'    => esc_html__( 'Choose the style of posts for archive page', 'dw' ),
						'choices' => array(
							'blog'    => array(
								'small' => array(
									'src'    => esc_url( DW_IMAGES_DIR . 'blocks/blog.png' ),
									'height' => 70
								),
								'large' => array(
									'src'    => esc_url( DW_IMAGES_DIR . 'blocks/blog.png' ),
									'height' => 160
								)
							),
							'list'    => array(
								'small' => array(
									'src'    => esc_url( DW_IMAGES_DIR . 'blocks/recent-list.png' ),
									'height' => 70
								),
								'large' => array(
									'src'    => esc_url( DW_IMAGES_DIR . 'blocks/recent-list.png' ),
									'height' => 160
								)
							),
							'masonry' => array(
								'small' => array(
									'src'    => esc_url( DW_IMAGES_DIR . 'blocks/masonry.png' ),
									'height' => 70
								),
								'large' => array(
									'src'    => esc_url( DW_IMAGES_DIR . 'blocks/masonry.png' ),
									'height' => 160
								)
							)
						),
						'blank'   => false
					),
				)
			),
			'category_page_layout' => array(
				'title'   => esc_html__( 'Category', 'dw' ),
				'type'    => 'tab',
				'options' => array(
					'category_page_description' => array(
						'type'         => 'switch',
						'value'        => 'show',
						'label'        => esc_html__( 'Category Description', 'dw' ),
						'right-choice' => array(
							'value' => 'show',
							'label' => esc_html__( 'Show', 'dw' )
						),
						'left-choice'  => array(
							'value' => 'hide',
							'label' => esc_html__( 'Hide', 'dw' )
						),
					),
					'category_posts_count'      => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Posts Count', 'dw' ),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'Show', 'dw' )
						),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'Hide', 'dw' )
						),
					),
					'category_layout'           => array(
						'type'         => 'switch',
						'value'        => 'right_sidebar',
						'label'        => esc_html__( 'Sidebar Position', 'dw' ),
						'right-choice' => array(
							'value' => 'right_sidebar',
							'label' => esc_html__( 'Right', 'dw' )
						),
						'left-choice'  => array(
							'value' => 'left_sidebar',
							'label' => esc_html__( 'Left', 'dw' )
						),
					),
					'category_posts_style'      => array(
						'type'    => 'image-picker',
						'value'   => 'list',
						'label'   => esc_html__( 'Posts Style', 'dw' ),
						'desc'    => esc_html__( 'Choose the style of posts for category page', 'dw' ),
						'choices' => array(
							'blog'    => array(
								'small' => array(
									'src'    => esc_url( DW_IMAGES_DIR . 'blocks/blog.png' ),
									'height' => 70
								),
								'large' => array(
									'src'    => esc_url( DW_IMAGES_DIR . 'blocks/blog.png' ),
									'height' => 160
								)
							),
							'list'    => array(
								'small' => array(
									'src'    => esc_url( DW_IMAGES_DIR . 'blocks/recent-list.png' ),
									'height' => 70
								),
								'large' => array(
									'src'    => esc_url( DW_IMAGES_DIR . 'blocks/recent-list.png' ),
									'height' => 160
								)
							),
							'masonry' => array(
								'small' => array(
									'src'    => esc_url( DW_IMAGES_DIR . 'blocks/masonry.png' ),
									'height' => 70
								),
								'large' => array(
									'src'    => esc_url( DW_IMAGES_DIR . 'blocks/masonry.png' ),
									'height' => 160
								)
							)
						),
						'blank'   => false
					)
				)
			),
			'tag_page_layout'      => array(
				'title'   => esc_html__( 'Tag', 'dw' ),
				'type'    => 'tab',
				'options' => array(
					'tags_page_description' => array(
						'type'         => 'switch',
						'value'        => 'show',
						'label'        => esc_html__( 'Tag Description', 'dw' ),
						'right-choice' => array(
							'value' => 'show',
							'label' => esc_html__( 'Show', 'dw' )
						),
						'left-choice'  => array(
							'value' => 'hide',
							'label' => esc_html__( 'Hide', 'dw' )
						),
					),
					'tags_posts_count'      => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Posts Count', 'dw' ),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'Show', 'dw' )
						),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'Hide', 'dw' )
						),
					),
					'tags_layout'           => array(
						'type'         => 'switch',
						'value'        => 'right_sidebar',
						'label'        => esc_html__( 'Sidebar Position', 'dw' ),
						'right-choice' => array(
							'value' => 'right_sidebar',
							'label' => esc_html__( 'Right', 'dw' )
						),
						'left-choice'  => array(
							'value' => 'left_sidebar',
							'label' => esc_html__( 'Left', 'dw' )
						),
					),
					'tags_posts_style'      => array(
						'type'    => 'image-picker',
						'value'   => 'list',
						'label'   => esc_html__( 'Posts Style', 'dw' ),
						'desc'    => esc_html__( 'Choose the style of posts for tag page', 'dw' ),
						'choices' => array(
							'blog'    => array(
								'small' => array(
									'src'    => esc_url( DW_IMAGES_DIR . 'blocks/blog.png' ),
									'height' => 70
								),
								'large' => array(
									'src'    => esc_url( DW_IMAGES_DIR . 'blocks/blog.png' ),
									'height' => 160
								)
							),
							'list'    => array(
								'small' => array(
									'src'    => esc_url( DW_IMAGES_DIR . 'blocks/recent-list.png' ),
									'height' => 70
								),
								'large' => array(
									'src'    => esc_url( DW_IMAGES_DIR . 'blocks/recent-list.png' ),
									'height' => 160
								)
							),
							'masonry' => array(
								'small' => array(
									'src'    => esc_url( DW_IMAGES_DIR . 'blocks/masonry.png' ),
									'height' => 70
								),
								'large' => array(
									'src'    => esc_url( DW_IMAGES_DIR . 'blocks/masonry.png' ),
									'height' => 160
								)
							)
						),
						'blank'   => false
					),
				)
			),
			'author_page_layout'   => array(
				'title'   => esc_html__( 'Author', 'dw' ),
				'type'    => 'tab',
				'options' => array(
					'author_bio'         => array(
						'type'         => 'switch',
						'value'        => 'show',
						'label'        => esc_html__( 'Author Bio', 'dw' ),
						'right-choice' => array(
							'value' => 'show',
							'label' => esc_html__( 'Show', 'dw' )
						),
						'left-choice'  => array(
							'value' => 'hide',
							'label' => esc_html__( 'Hide', 'dw' )
						),
					),
					'author_layout'      => array(
						'type'         => 'switch',
						'value'        => 'right_sidebar',
						'label'        => esc_html__( 'Sidebar Position', 'dw' ),
						'right-choice' => array(
							'value' => 'right_sidebar',
							'label' => esc_html__( 'Right', 'dw' )
						),
						'left-choice'  => array(
							'value' => 'left_sidebar',
							'label' => esc_html__( 'Left', 'dw' )
						),
					),
					'author_posts_style' => array(
						'type'    => 'image-picker',
						'value'   => 'list',
						'label'   => esc_html__( 'Posts Style', 'dw' ),
						'desc'    => esc_html__( 'Choose the style of posts for author posts poge', 'dw' ),
						'choices' => array(
							'blog'    => array(
								'small' => array(
									'src'    => esc_url( DW_IMAGES_DIR . 'blocks/blog.png' ),
									'height' => 70
								),
								'large' => array(
									'src'    => esc_url( DW_IMAGES_DIR . 'blocks/blog.png' ),
									'height' => 160
								)
							),
							'list'    => array(
								'small' => array(
									'src'    => esc_url( DW_IMAGES_DIR . 'blocks/recent-list.png' ),
									'height' => 70
								),
								'large' => array(
									'src'    => esc_url( DW_IMAGES_DIR . 'blocks/recent-list.png' ),
									'height' => 160
								)
							),
							'masonry' => array(
								'small' => array(
									'src'    => esc_url( DW_IMAGES_DIR . 'blocks/masonry.png' ),
									'height' => 70
								),
								'large' => array(
									'src'    => esc_url( DW_IMAGES_DIR . 'blocks/masonry.png' ),
									'height' => 160
								)
							)
						),
						'blank'   => false
					),
				)
			),
			'search_page_layout'   => array(
				'title'   => esc_html__( 'Search', 'dw' ),
				'type'    => 'tab',
				'options' => array(
					'search_exclude'     => array(
						'type'         => 'switch',
						'value'        => 'no',
						'label'        => esc_html__( 'Exclude Pages from results', 'dw' ),
						'right-choice' => array(
							'value' => 'no',
							'label' => esc_html__( 'No', 'dw' )
						),
						'left-choice'  => array(
							'value' => 'yes',
							'label' => esc_html__( 'Yes', 'dw' )
						),
					),
					'search_posts_count' => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Posts Count', 'dw' ),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'Show', 'dw' )
						),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'Hide', 'dw' )
						),
					),
					'search_layout'      => array(
						'type'         => 'switch',
						'value'        => 'right_sidebar',
						'label'        => esc_html__( 'Sidebar Position', 'dw' ),
						'right-choice' => array(
							'value' => 'right_sidebar',
							'label' => esc_html__( 'Right', 'dw' )
						),
						'left-choice'  => array(
							'value' => 'left_sidebar',
							'label' => esc_html__( 'Left', 'dw' )
						),
					),
					'search_posts_style' => array(
						'type'    => 'image-picker',
						'value'   => 'list',
						'label'   => esc_html__( 'Posts Style', 'dw' ),
						'desc'    => esc_html__( 'Choose the style of posts for search results page', 'dw' ),
						'choices' => array(
							'blog'    => array(
								'small' => array(
									'src'    => esc_url( DW_IMAGES_DIR . 'blocks/blog.png' ),
									'height' => 70
								),
								'large' => array(
									'src'    => esc_url( DW_IMAGES_DIR . 'blocks/blog.png' ),
									'height' => 160
								)
							),
							'list'    => array(
								'small' => array(
									'src'    => esc_url( DW_IMAGES_DIR . 'blocks/recent-list.png' ),
									'height' => 70
								),
								'large' => array(
									'src'    => esc_url( DW_IMAGES_DIR . 'blocks/recent-list.png' ),
									'height' => 160
								)
							),
							'masonry' => array(
								'small' => array(
									'src'    => esc_url( DW_IMAGES_DIR . 'blocks/masonry.png' ),
									'height' => 70
								),
								'large' => array(
									'src'    => esc_url( DW_IMAGES_DIR . 'blocks/masonry.png' ),
									'height' => 160
								)
							)
						),
						'blank'   => false
					),
				)
			),
			'error_page_layout'    => array(
				'title'   => esc_html__( 'Error 404 Page', 'dw' ),
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
								'label'        => esc_html__( 'Logo type', 'dw' ),
								'left-choice'  => array(
									'value' => 'logo',
									'label' => esc_html__( 'Image', 'dw' ),
								),
								'right-choice' => array(
									'value' => 'text',
									'label' => esc_html__( 'Text', 'dw' ),
								),
							)
						),
						'choices' => array(
							'logo' => array(
								'error_image' => array(
									'type'        => 'upload',
									'label'       => esc_html__( 'Error logo', 'dw' ),
									'images_only' => true
								)
							),
							'text' => array(
								'error_text' => array(
									'type'  => 'text',
									'label' => esc_html__( 'Error text', 'dw' ),
								)
							),
						)
					),
					'error_message'    => array(
						'type'  => 'textarea',
						'value' => esc_html__( 'Sorry!.. the page you are trying to reach may be deleted or moved.', 'dw' ),
						'label' => esc_html__( 'Error Message', 'dw' )
					),
					'error_search'     => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Search form', 'dw' ),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'Hide', 'dw' ),
						),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'Show', 'dw' ),
						),
					),
				)
			)
		)
	)

);
