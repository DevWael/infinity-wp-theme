<?php
if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'home_page' => array(
		'title'   => esc_html__( 'Home Layouts', 'dw' ),
		'type'    => 'tab',
		'options' => array(
			'full_width_1'   => array(
				'title'   => esc_html__( 'Full Section', 'dw' ),
				'type'    => 'tab',
				'options' => array(
					'home_full_enable_1'   => array(
						'type'         => 'switch',
						'value'        => 'show',
						'label'        => esc_html__( 'Activate', 'dw' ),
						'desc'         => esc_html__( 'Show/Hide This section', 'dw' ),
						'right-choice' => array(
							'value' => 'show',
							'label' => esc_html__( 'Yes', 'dw' )
						),
						'left-choice'  => array(
							'value' => 'hide',
							'label' => esc_html__( 'No', 'dw' )
						),
					),
					'home_full_width_1'    => array(
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
					'home_full_computer_1' => array(
						'type'         => 'switch',
						'value'        => 'show',
						'label'        => esc_html__( 'Show on computer devices', 'dw' ),
						'right-choice' => array(
							'value' => 'show',
							'label' => esc_html__( 'Show', 'dw' )
						),
						'left-choice'  => array(
							'value' => 'hidden-md visible-xs',
							'label' => esc_html__( 'Hide', 'dw' )
						),
					),
					'home_full_mobile_1'   => array(
						'type'         => 'switch',
						'value'        => 'show',
						'label'        => esc_html__( 'Show on mobile devices', 'dw' ),
						'right-choice' => array(
							'value' => 'show',
							'label' => esc_html__( 'Show', 'dw' )
						),
						'left-choice'  => array(
							'value' => 'hidden-xs',
							'label' => esc_html__( 'Hide', 'dw' )
						),
					),
				)
			),
			'half_section_1' => array(
				'title'   => esc_html__( 'Half Section', 'dw' ),
				'type'    => 'tab',
				'options' => array(
					'home_half_enable_1'   => array(
						'type'         => 'switch',
						'value'        => 'show',
						'label'        => esc_html__( 'Activate', 'dw' ),
						'desc'         => esc_html__( 'Show/Hide This section', 'dw' ),
						'right-choice' => array(
							'value' => 'show',
							'label' => esc_html__( 'Yes', 'dw' )
						),
						'left-choice'  => array(
							'value' => 'hide',
							'label' => esc_html__( 'No', 'dw' )
						),
					),
					'home_half_width_1'    => array(
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
					'home_recent_posts_1' => array(
						'type'    => 'multi-picker',
						'label'   => false,
						'desc'    => false,
						'value'   => array(
							'no' => array()
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
									'type'    => 'radio',
									'value'   => 'blog',
									'label'   => esc_html__( 'Posts Style', 'window-mag' ),
									'desc'    => esc_html__( 'Choose the style of posts for home and all archive pages', 'window-mag' ),
									'choices' => array(
										'blog'    => esc_html__( 'Blog', 'window-mag' ),
										'list'    => esc_html__( 'List Style', 'window-mag' ),
										'masonry' => esc_html__( 'Masonry Style', 'window-mag' ),
									),
									'blank'   => false
								),
							)
						)
					),
					'sidebar_area_1'       => array(
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
					'home_half_computer_1' => array(
						'type'         => 'switch',
						'value'        => 'show',
						'label'        => esc_html__( 'Show on computer devices', 'dw' ),
						'right-choice' => array(
							'value' => 'show',
							'label' => esc_html__( 'Show', 'dw' )
						),
						'left-choice'  => array(
							'value' => 'hidden-md visible-xs',
							'label' => esc_html__( 'Hide', 'dw' )
						),
					),
					'home_half_mobile_1'   => array(
						'type'         => 'switch',
						'value'        => 'show',
						'label'        => esc_html__( 'Show on mobile devices', 'dw' ),
						'right-choice' => array(
							'value' => 'show',
							'label' => esc_html__( 'Show', 'dw' )
						),
						'left-choice'  => array(
							'value' => 'hidden-xs',
							'label' => esc_html__( 'Hide', 'dw' )
						),
					),
				)
			),
			'full_width_2'   => array(
				'title'   => esc_html__( 'Full Section 2', 'dw' ),
				'type'    => 'tab',
				'options' => array(
					'home_full_enable_2'   => array(
						'type'         => 'switch',
						'value'        => 'show',
						'label'        => esc_html__( 'Activate', 'dw' ),
						'desc'         => esc_html__( 'Show/Hide This section', 'dw' ),
						'right-choice' => array(
							'value' => 'show',
							'label' => esc_html__( 'Yes', 'dw' )
						),
						'left-choice'  => array(
							'value' => 'hide',
							'label' => esc_html__( 'No', 'dw' )
						),
					),
					'home_full_width_2'    => array(
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
					'home_full_computer_2' => array(
						'type'         => 'switch',
						'value'        => 'show',
						'label'        => esc_html__( 'Show on computer devices', 'dw' ),
						'right-choice' => array(
							'value' => 'show',
							'label' => esc_html__( 'Show', 'dw' )
						),
						'left-choice'  => array(
							'value' => 'hidden-md visible-xs',
							'label' => esc_html__( 'Hide', 'dw' )
						),
					),
					'home_full_mobile_2'   => array(
						'type'         => 'switch',
						'value'        => 'show',
						'label'        => esc_html__( 'Show on mobile devices', 'dw' ),
						'right-choice' => array(
							'value' => 'show',
							'label' => esc_html__( 'Show', 'dw' )
						),
						'left-choice'  => array(
							'value' => 'hidden-xs',
							'label' => esc_html__( 'Hide', 'dw' )
						),
					),
				)
			),
			'half_section_2' => array(
				'title'   => esc_html__( 'Half Section 2', 'dw' ),
				'type'    => 'tab',
				'options' => array(
					'home_half_enable_2'   => array(
						'type'         => 'switch',
						'value'        => 'show',
						'label'        => esc_html__( 'Activate', 'dw' ),
						'desc'         => esc_html__( 'Show/Hide This section', 'dw' ),
						'right-choice' => array(
							'value' => 'show',
							'label' => esc_html__( 'Yes', 'dw' )
						),
						'left-choice'  => array(
							'value' => 'hide',
							'label' => esc_html__( 'No', 'dw' )
						),
					),
					'home_half_width_2'    => array(
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
					'home_recent_posts_2' => array(
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
									'type'    => 'radio',
									'value'   => 'blog',
									'label'   => esc_html__( 'Posts Style', 'window-mag' ),
									'desc'    => esc_html__( 'Choose the style of posts for home and all archive pages', 'window-mag' ),
									'choices' => array(
										'blog'    => esc_html__( 'Blog', 'window-mag' ),
										'list'    => esc_html__( 'List Style', 'window-mag' ),
										'masonry' => esc_html__( 'Masonry Style', 'window-mag' ),
									),
									'blank'   => false
								),
							)
						)
					),
					'sidebar_area_2'       => array(
						'type'         => 'switch',
						'value'        => 'left_sidebar',
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
					'home_half_computer_2' => array(
						'type'         => 'switch',
						'value'        => 'show',
						'label'        => esc_html__( 'Show on computer devices', 'dw' ),
						'right-choice' => array(
							'value' => 'show',
							'label' => esc_html__( 'Show', 'dw' )
						),
						'left-choice'  => array(
							'value' => 'hidden-md visible-xs',
							'label' => esc_html__( 'Hide', 'dw' )
						),
					),
					'home_half_mobile_2'   => array(
						'type'         => 'switch',
						'value'        => 'show',
						'label'        => esc_html__( 'Show on mobile devices', 'dw' ),
						'right-choice' => array(
							'value' => 'show',
							'label' => esc_html__( 'Show', 'dw' )
						),
						'left-choice'  => array(
							'value' => 'hidden-xs',
							'label' => esc_html__( 'Hide', 'dw' )
						),
					),
				)
			),

		)
	)

);