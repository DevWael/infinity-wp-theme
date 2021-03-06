<?php
if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'footer_layout' => array(
		'title'   => esc_html__( 'Footer', 'dw' ),
		'type'    => 'tab',
		'options' => array(
			'footer_box' => array(
				'title'   => esc_html__( 'Footer Settings', 'dw' ),
				'type'    => 'tab',
				'options' => array(
					'footer_instagram'    => array(
						'type'         => 'multi-picker',
						'label'        => false,
						'picker'       => array(
							'control' => array(
								'label'        => esc_html__( 'Footer Instagram', 'dw' ),
								'type'         => 'switch', // or 'short-select'
								'inline'       => true,
								'value'        => 'off',
								'left-choice'  => array(
									'value' => 'off',
									'label' => esc_html__( 'Off', 'dw' ),
								),
								'right-choice' => array(
									'value' => 'on',
									'label' => esc_html__( 'On', 'dw' ),
								),
							)
						),
						'choices'      => array(
							'on' => array(
								'insta_user' => array(
									'type'  => 'text',
									'label' => esc_html__( 'Instagram user', 'dw' ),
									'desc'  => esc_html__( 'Must be entered correctly to run the instagram carousel.', 'dw' )
								),
								'limit'      => array(
									'type'       => 'slider',
									'value'      => 10,
									'properties' => array(
										'min'  => 6,
										'max'  => 50,
										'step' => 1
									),
									'label'      => esc_html__( 'Pictures count', 'dw' )
								)
							)
						),
						'show_borders' => false
					),
					'footer_widgets'      => array(
						'type'         => 'switch',
						'value'        => 'off',
						'label'        => esc_html__( 'Footer Widgets', 'dw' ),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'Show', 'dw' )
						),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'Hide', 'dw' )
						),
					),
					'footer_mobile_bar'      => array(
						'type'         => 'switch',
						'value'        => 'off',
						'label'        => esc_html__( 'Footer Mobile Navigation', 'dw' ),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'Show', 'dw' )
						),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'Hide', 'dw' )
						),
					),
					'footer_rights_block' => array(
						'type'    => 'radio',
						'value'   => 'social',
						'label'   => esc_html__( 'Footer rights block', 'dw' ),
						'choices' => array(
							'navbar' => esc_html__( 'Footer Menu', 'dw' ),
							'social' => esc_html__( 'Social icons', 'dw' ),
							'off'    => esc_html__( 'Off', 'dw' )
						),
						'inline'  => true
					),
					'footer_rights'       => array(
						'type'          => 'textarea',
						'value'         => esc_html__( 'All rights reserved to', 'dw' ) . ' ' . esc_html( get_bloginfo( 'name' ) ),
						'label'         => esc_html__( 'Footer Copyrights', 'dw' ),
						'size'          => 'large',
						'editor_height' => 200
					),
					'footer_background'   => array(
						'type'         => 'multi-picker',
						'label'        => false,
						'picker'       => array(
							'control' => array(
								'label'        => esc_html__( 'Footer Background', 'dw' ),
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
									'value'    => '#0b171d'
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
					)
				)
			)
		)
	)
);