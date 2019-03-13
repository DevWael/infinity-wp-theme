<?php
if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * typography options
 */

$options = array(
	'typography_tab' => array(
		'title'   => esc_html__( 'Typography', 'dw' ),
		'type'    => 'tab',
		'options' => array(
			'typography_box'        => array(
				'title'   => esc_html__( 'Content pages', 'dw' ),
				'type'    => 'tab',
				'options' => array(
					'site_title'            => array(
						'label' => esc_html__( 'Site Title', 'dw' ),
						'type'  => 'typography-v2',
						'value' => array(
							'family'      => 'Montserrat',
							'variation'   => '700',
							'size'        => 46,
							'line-height' => 63,
							'color'       => '#333333'
						)

					),
					'tag_line'              => array(
						'label' => esc_html__( 'Site description', 'dw' ),
						'type'  => 'typography-v2',
						'value' => array(
							'family'         => 'Montserrat',
							'variation'      => 'regular',
							'size'           => 13,
							'line-height'    => 13,
							'letter-spacing' => 4,
							'color'          => '#9c9c9c'
						)
					),
					'block_widget_title'    => array(
						'label' => esc_html__( 'Block and widget title', 'dw' ),
						'type'  => 'typography-v2',
						'value' => array(
							'family'         => 'Montserrat',
							'variation'      => '700',
							'line-height'    => 16,
							'letter-spacing' => 0,
							'size'           => 15,
							'color'          => '#ffffff'
						)
					),
					'post_title'            => array(
						'label' => esc_html__( 'Post Title', 'dw' ),
						'type'  => 'typography-v2',
						'value' => array(
							'family'         => 'Montserrat',
							'variation'      => '700',
							'line-height'    => 26,
							'size'           => 18,
							'letter-spacing' => 0,
							'color'          => '#404040'
						)
					),
					'small_post_title'      => array(
						'label' => esc_html__( 'Small Post Title', 'dw' ),
						'type'  => 'typography-v2',
						'value' => array(
							'family'         => 'Montserrat',
							'variation'      => '700',
							'line-height'    => 21,
							'size'           => 13,
							'letter-spacing' => 0,
							'color'          => '#404040'
						)
					),
					'carousel_post_title'   => array(
						'label' => esc_html__( 'Post Title in carousel block', 'dw' ),
						'type'  => 'typography-v2',
						'value' => array(
							'family'         => 'Montserrat',
							'variation'      => '500',
							'line-height'    => 21,
							'size'           => 14,
							'letter-spacing' => 0,
							'color'          => '#ffffff'
						)
					),
					'post_content_homepage' => array(
						'label' => esc_html__( 'Post content', 'dw' ),
						'desc'  => esc_html__( 'for any post excerpt on home page and archive pages', 'dw' ),
						'type'  => 'typography-v2',
						'value' => array(
							'family'         => 'Montserrat',
							'variation'      => 'regular',
							'line-height'    => 22,
							'size'           => 13,
							'letter-spacing' => 0,
							'color'          => '#777777'
						)
					),
					'read_more_btn'         => array(
						'label' => esc_html__( 'Read more button', 'dw' ),
						'type'  => 'typography-v2',
						'value' => array(
							'family'         => 'Montserrat',
							'variation'      => 'regular',
							'line-height'    => 15,
							'size'           => 11,
							'letter-spacing' => 2,
							'color'          => '#ffffff'
						)
					),
					'error_logo_typo'       => array(
						'label' => esc_html__( 'Error 404 logo', 'dw' ),
						'type'  => 'typography-v2',
						'value' => array(
							'family'         => 'Verdana',
							'variation'      => 'regular',
							'line-height'    => 185,
							'size'           => 130,
							'letter-spacing' => 0,
							'color'          => '#545454'
						)
					),
					'error_message_typo'    => array(
						'label' => esc_html__( 'Error 404 Message', 'dw' ),
						'type'  => 'typography-v2',
						'value' => array(
							'family'         => 'Montserrat',
							'variation'      => 'regular',
							'line-height'    => 19,
							'size'           => 18,
							'letter-spacing' => 0,
							'color'          => '#404040'
						)
					),
					'navbar_typo'    => array(
						'label' => esc_html__( 'Navbar main elements', 'dw' ),
						'type'  => 'typography-v2',
						'components' => array(
							'family'         => true,
							'size'           => true,
							'line-height'    => true,
							'letter-spacing' => true,
							'color'          => false
						),
						'value' => array(
							'family'         => 'Montserrat',
							'variation'      => 'regular',
							'line-height'    => 43,
							'size'           => 13,
							'letter-spacing' => 1,
						)
					),
					'news_ticker_typo'    => array(
						'label' => esc_html__( 'News Ticker', 'dw' ),
						'type'  => 'typography-v2',
						'components' => array(
							'family'         => true,
							'size'           => true,
							'line-height'    => false,
							'letter-spacing' => false,
							'color'          => false
						),
						'value' => array(
							'family'         => 'Montserrat',
							'variation'      => 'regular',
							'size'           => 14,
							'letter-spacing' => 1,
						)
					),
				)
			),
			'typography_box_single' => array(
				'title'   => esc_html__( 'Single post', 'dw' ),
				'type'    => 'tab',
				'options' => array(
					'single_post_title'       => array(
						'label' => esc_html__( 'Post Title', 'dw' ),
						'type'  => 'typography-v2',
						'value' => array(
							'family'         => 'Montserrat',
							'variation'      => '700',
							'line-height'    => 35,
							'size'           => 24,
							'letter-spacing' => 0,
							'color'          => '#404040'
						)
					),
					'single_post_title_cover' => array(
						'label' => esc_html__( 'Post Title Cover mode', 'dw' ),
						'type'  => 'typography-v2',
						'value' => array(
							'family'         => 'Montserrat',
							'variation'      => '700',
							'line-height'    => 70,
							'size'           => 50,
							'letter-spacing' => 0,
							'color'          => '#FDFDFD'
						)
					),
					'post_content'            => array(
						'label' => esc_html__( 'Post content', 'dw' ),
						'type'  => 'typography-v2',
						'value' => array(
							'family'         => 'Montserrat',
							'variation'      => 'regular',
							'line-height'    => 26,
							'size'           => 14,
							'letter-spacing' => 0,
							'color'          => '#404040'
						)
					),
					'heading_1'               => array(
						'label' => esc_html__( 'H1', 'dw' ),
						'type'  => 'typography-v2',
						'value' => array(
							'family'         => 'Montserrat',
							'variation'      => 'regular',
							'line-height'    => 39,
							'size'           => 36,
							'letter-spacing' => 0,
							'color'          => '#404040'
						)
					),
					'heading_2'               => array(
						'label' => esc_html__( 'H2', 'dw' ),
						'type'  => 'typography-v2',
						'value' => array(
							'family'         => 'Montserrat',
							'variation'      => 'regular',
							'line-height'    => 39,
							'size'           => 30,
							'letter-spacing' => 0,
							'color'          => '#404040'
						)
					),
					'heading_3'               => array(
						'label' => esc_html__( 'H3', 'dw' ),
						'type'  => 'typography-v2',
						'value' => array(
							'family'         => 'Montserrat',
							'variation'      => 'regular',
							'line-height'    => 39,
							'size'           => 24,
							'letter-spacing' => 0,
							'color'          => '#404040'
						)
					),
					'heading_4'               => array(
						'label' => esc_html__( 'H4', 'dw' ),
						'type'  => 'typography-v2',
						'value' => array(
							'family'         => 'Montserrat',
							'variation'      => 'regular',
							'line-height'    => 39,
							'size'           => 18,
							'letter-spacing' => 0,
							'color'          => '#404040'
						)
					),
					'heading_5'               => array(
						'label' => esc_html__( 'H5', 'dw' ),
						'type'  => 'typography-v2',
						'value' => array(
							'family'         => 'Montserrat',
							'variation'      => 'regular',
							'line-height'    => 39,
							'size'           => 14,
							'letter-spacing' => 0,
							'color'          => '#404040'
						)
					),
					'heading_6'               => array(
						'label' => esc_html__( 'H6', 'dw' ),
						'type'  => 'typography-v2',
						'value' => array(
							'family'         => 'Montserrat',
							'variation'      => 'regular',
							'line-height'    => 39,
							'size'           => 12,
							'letter-spacing' => 0,
							'color'          => '#404040'
						)
					)
				)
			),
		)
	)
);