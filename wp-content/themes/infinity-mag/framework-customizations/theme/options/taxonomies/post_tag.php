<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options['body_box'] = array(
	'title'   => esc_html__( 'Tag Background', 'dw' ),
	'type'    => 'box',
	'options' => array(
		'body_background' => array(
			'type'    => 'multi-picker',
			'label'   => false,
			'picker'  => array(
				'control' => array(
					'label'        => esc_html__( 'Tag Background', 'dw' ),
					'type'         => 'switch',
					'inline'       => true,
					'help'         => esc_html__( 'Works only when you select Framed or Boxed from Theme settings -> Site settings -> Website Layout', 'dw' ),
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
			'choices' => array(
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
			)
		)
	)
);