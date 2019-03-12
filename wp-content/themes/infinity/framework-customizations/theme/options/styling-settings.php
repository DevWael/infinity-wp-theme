<?php
if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'styling_settings' => array(
		'title'   => esc_html__( 'Styling', 'window-mag' ),
		'type'    => 'tab',
		'options' => array(
			'colors_box' => array(
				'title'   => esc_html__( 'General', 'window-mag' ),
				'type'    => 'box',
				'options' => array(
					'accent_color'             => array(
						'type'     => 'color-picker',
						'label'    => esc_html__( 'Main Color', 'window-mag' ),
						'value'    => '#E74C3C'
					),
					'second_color'             => array(
						'type'     => 'color-picker',
						'label'    => esc_html__( 'Second color', 'window-mag' ),
						'value'    => '#181818'
					),
					'navbar_links_color'       => array(
						'type'     => 'color-picker',
						'label'    => esc_html__( 'Navbar text Color', 'window-mag' ),
						'value'    => '#ffffff'
					),
					'navbar_links_color_hover' => array(
						'type'     => 'color-picker',
						'label'    => esc_html__( 'Navbar text Color on hover', 'window-mag' ),
						'value'    => '#ffffff'
					),
					'favicon'                  => array(
						'type'        => 'upload',
						'label'       => esc_html__( 'Website Favicon', 'window-mag' ),
						'images_only' => true
					),
					'apple57'                  => array(
						'type'        => 'upload',
						'label'       => esc_html__( 'Apple icon : 57px X 57px', 'window-mag' ),
						'desc'        => esc_html__( 'Select image with height: 57px and width:57px for apple devices', 'window-mag' ),
						'images_only' => true
					),
					'apple72'                  => array(
						'type'        => 'upload',
						'label'       => esc_html__( 'Apple icon : 72px X 72px', 'window-mag' ),
						'desc'        => esc_html__( 'Select image with height: 72px and width:72px for apple devices', 'window-mag' ),
						'images_only' => true
					),
					'apple114'                 => array(
						'type'        => 'upload',
						'label'       => esc_html__( 'Apple icon : 114px X 114px', 'window-mag' ),
						'desc'        => esc_html__( 'Select image with height: 114px and width:114px for apple devices', 'window-mag' ),
						'images_only' => true
					)
				)
			),
			'body_box'   => array(
				'title'   => esc_html__( 'Body', 'window-mag' ),
				'type'    => 'box',
				'options' => array(
					'body_background' => array(
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
					)
				)
			),
		)
	)
);
