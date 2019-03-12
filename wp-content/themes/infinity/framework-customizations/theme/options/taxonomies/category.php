<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options['body_box'] = array(
	'title'   => esc_html__( 'Category Background', 'window-mag' ),
	'type'    => 'box',
	'options' => array(
		'cat_cover'      => array(
			'type'    => 'multi-picker',
			'label'   => false,
			'picker'  => array(
				'control' => array(
					'type'         => 'switch',
					'value'        => 'off',
					'label'        => esc_html__( 'Category Cover', 'window-mag' ),
					'left-choice'  => array(
						'value' => 'off',
						'label' => esc_html__( 'Hide', 'window-mag' )
					),
					'right-choice' => array(
						'value' => 'on',
						'label' => esc_html__( 'Show', 'window-mag' )
					)
				)
			),
			'choices' => array(
				'on' => array(
					'photo' => array(
						'type'        => 'upload',
						'label'       => esc_html__( 'Upload Cover Photo', 'window-mag' ),
						'help'        => esc_html__( 'Minimum recommended size 1200px X 500px', 'window-mag' ),
						'desc'        => esc_html__( 'Upload cover photo with high resolution (1200px X 350px recommended as a minimum size) to display it as a background for the post title and meta', 'window-mag' ),
						'images_only' => true
					)
				)
			)
		),
		'body_background' => array(
			'type'         => 'multi-picker',
			'label'        => false,
			'picker'       => array(
				'control' => array(
					'label'        => esc_html__( 'Category Background', 'window-mag' ),
					'type'         => 'switch',
					'inline'       => true,
					'help'         => esc_html__( 'Works only when you select Framed or Boxed from Theme settings -> Site settings -> Website Layout', 'window-mag' ),
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
			)
		)
	)
);