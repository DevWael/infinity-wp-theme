<?php
if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'styling_settings' => array(
		'title'   => esc_html__( 'Styling', 'dw' ),
		'type'    => 'tab',
		'options' => array(
			'colors_box' => array(
				'title'   => esc_html__( 'General', 'dw' ),
				'type'    => 'tab',
				'options' => array(
					'accent_color'             => array(
						'type'  => 'color-picker',
						'label' => esc_html__( 'Main Color', 'dw' ),
						'value' => '#E74C3C'
					),
					'second_color'             => array(
						'type'  => 'color-picker',
						'label' => esc_html__( 'Second color', 'dw' ),
						'value' => '#181818'
					),
					'navbar_links_color'       => array(
						'type'  => 'color-picker',
						'label' => esc_html__( 'Navbar text Color', 'dw' ),
						'value' => '#ffffff'
					),
					'navbar_links_color_hover' => array(
						'type'  => 'color-picker',
						'label' => esc_html__( 'Navbar text Color on hover', 'dw' ),
						'value' => '#ffffff'
					),
					'favicon'                  => array(
						'type'        => 'upload',
						'label'       => esc_html__( 'Website Favicon', 'dw' ),
						'images_only' => true
					),
					'apple57'                  => array(
						'type'        => 'upload',
						'label'       => esc_html__( 'Apple icon : 57px X 57px', 'dw' ),
						'desc'        => esc_html__( 'Select image with height: 57px and width:57px for apple devices', 'dw' ),
						'images_only' => true
					),
					'apple72'                  => array(
						'type'        => 'upload',
						'label'       => esc_html__( 'Apple icon : 72px X 72px', 'dw' ),
						'desc'        => esc_html__( 'Select image with height: 72px and width:72px for apple devices', 'dw' ),
						'images_only' => true
					),
					'apple114'                 => array(
						'type'        => 'upload',
						'label'       => esc_html__( 'Apple icon : 114px X 114px', 'dw' ),
						'desc'        => esc_html__( 'Select image with height: 114px and width:114px for apple devices', 'dw' ),
						'images_only' => true
					)
				)
			),
			'body_box'   => array(
				'title'   => esc_html__( 'Body', 'dw' ),
				'type'    => 'tab',
				'options' => array(
					'body_background' => array(
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
					)
				)
			),
		)
	)
);
