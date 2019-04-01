<?php
if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'home_page' => array(
		'title'   => esc_html__( 'Home', 'dw' ),
		'type'    => 'tab',
		'options' => array(
			'full_width_1'      => array(
				'title'   => esc_html__( 'Full Section', 'dw' ),
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
				)
			),
			'half_section_1'  => array(
				'title'   => esc_html__( 'Half Section', 'dw' ),
				'type'    => 'tab',
				'options' => array(
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
				)
			),
			'full_width_2'  => array(
				'title'   => esc_html__( 'Full Section 2', 'dw' ),
				'type'    => 'tab',
				'options' => array(
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
				)
			),
			'half_section_2'  => array(
				'title'   => esc_html__( 'Half Section 2', 'dw' ),
				'type'    => 'tab',
				'options' => array(
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
				)
			),

		)
	)

);