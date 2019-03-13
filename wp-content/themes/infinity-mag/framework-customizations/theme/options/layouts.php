<?php
if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'layouts' => array(
		'title'   => esc_html__( 'Site Settings', 'dw' ),
		'type'    => 'tab',
		'options' => array(
			'home_layout_box'      => array(
				'title'   => esc_html__( 'Home Layout', 'dw' ),
				'type'    => 'tab',
				'options' => array(
					'home_full_width_1' => array(
						'type'            => 'addable-popup',
						'label'           => esc_html__( 'Home Full Width Area 1', 'dw' ),
						'template'        => '{{- block_title }}',
						'popup-title'     => null,
						'size'            => 'large', // small, medium, large
						'add-button-text' => esc_html__( 'Add Section', 'dw' ),
						'sortable'        => true,
						'popup-options'   => array(
							'block_title' => array(
								'type'  => 'text',
								'label' => esc_html__( 'Block Title', 'dw' ),
								'desc'  => esc_html__( 'Will be used in posts mode only', 'dw' )
							),
							'layout_type' => dw_full_width_area()
						)
					),

					'home_half_width_1' => array(
						'type'            => 'addable-popup',
						'label'           => esc_html__( 'Home Half Width Area 1', 'dw' ),
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
							'layout_type' => dw_half_width_area()
						)
					),
					'sidebar_area_1'      => array(
						'type'         => 'switch',
						'value'        => 'right_sidebar',
						'label'        => esc_html__( 'Area (1) Sidebar Position', 'dw' ),
						'right-choice' => array(
							'value' => 'right_sidebar',
							'label' => esc_html__( 'Right', 'dw' )
						),
						'left-choice'  => array(
							'value' => 'left_sidebar',
							'label' => esc_html__( 'Left', 'dw' )
						),
					),

					'home_full_width_2' => array(
						'type'            => 'addable-popup',
						'label'           => esc_html__( 'Home Full Width Area 2', 'dw' ),
						'template'        => '{{- block_title }}',
						'popup-title'     => null,
						'size'            => 'large', // small, medium, large
						'add-button-text' => esc_html__( 'Add Section', 'dw' ),
						'sortable'        => true,
						'popup-options'   => array(
							'block_title' => array(
								'type'  => 'text',
								'label' => esc_html__( 'Block Title', 'dw' ),
								'desc'  => esc_html__( 'Will be used in posts mode only', 'dw' )
							),
							'layout_type' => dw_full_width_area()
						)
					),

					'home_half_width_2' => array(
						'type'            => 'addable-popup',
						'label'           => esc_html__( 'Home Half Width Area 2', 'dw' ),
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
							'layout_type' => dw_half_width_area()
						)
					),

					'sidebar_area_2'      => array(
						'type'         => 'switch',
						'value'        => 'right_sidebar',
						'label'        => esc_html__( 'Area (2) Sidebar Position', 'dw' ),
						'right-choice' => array(
							'value' => 'right_sidebar',
							'label' => esc_html__( 'Right', 'dw' )
						),
						'left-choice'  => array(
							'value' => 'left_sidebar',
							'label' => esc_html__( 'Left', 'dw' )
						),
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
