<?php
if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'general' => array(
		'title'   => esc_html__( 'General', 'dw' ),
		'type'    => 'tab',
		'options' => array(
			'general' => array(
				'title'   => esc_html__( 'General Settings', 'dw' ),
				'type'    => 'tab',
				'options' => array(
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
						)
					)
				)
			),
			'site'    => array(
				'title'   => esc_html__( 'Posts Settings', 'dw' ),
				'type'    => 'tab',
				'options' => array(
					'post_excerpt'        => array(
						'type'       => 'slider',
						'value'      => 30,
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
	)

);
