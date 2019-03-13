<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$prefix  = 'window_';
$options = array(
	'customizations' => array(
		'title'   => esc_html__( 'Page Customizations', 'dw' ),
		'type'    => 'box',
		'options' => array(
			'meta-visibilty' => array(
				'type'    => 'tab',
				'title'   => esc_html__( 'Page Options', 'dw' ),
				'options' => array(
					$prefix . 'post_cover'     => array(
						'type'    => 'multi-picker',
						'label'   => false,
						'picker'  => array(
							'control' => array(
								'type'         => 'switch',
								'value'        => 'off',
								'label'        => esc_html__( 'Page Cover', 'dw' ),
								'left-choice'  => array(
									'value' => 'off',
									'label' => esc_html__( 'Hide', 'dw' )
								),
								'right-choice' => array(
									'value' => 'on',
									'label' => esc_html__( 'Show', 'dw' )
								)
							)
						),
						'choices' => array(
							'on' => array(
								'photo' => array(
									'type'        => 'upload',
									'label'       => esc_html__( 'Upload Cover Photo', 'dw' ),
									'help'        => esc_html__( 'Minimum recommended size 1200px X 350px', 'dw' ),
									'desc'        => esc_html__( 'Upload cover photo with high resolution (1200px X 500px recommended as a minimum size) to display it as a background for the post title and meta', 'dw' ),
									'images_only' => true
								)
							)
						)
					),
					$prefix . 'single_sidebar' => array(
						'type'    => 'radio',
						'value'   => '',
						'label'   => esc_html__( 'Sidebar Position', 'dw' ),
						'desc'    => esc_html__( 'This option will override the sidebar position selected in theme options page for this post only.', 'dw' ),
						'choices' => array(
							''      => esc_html__( 'Do not Change', 'dw' ),
							'right' => esc_html__( 'Right Sidebar', 'dw' ),
							'left'  => esc_html__( 'Left Sidebar', 'dw' )
						),
						'inline'  => true
					),
					'post_thumb'      => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Featured image visibility', 'dw' ),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'Hide', 'dw' )
						),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'Show', 'dw' )
						)
					),
					$prefix . 'top_banner'     => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Top page banner', 'dw' ),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'Hide', 'dw' )
						),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'Show', 'dw' )
						)
					),
					$prefix . 'bottom_banner'  => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Bottom page banner', 'dw' ),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'Hide', 'dw' )
						),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'Show', 'dw' )
						)
					),
					'reading_indicator'   => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Reading position indicator', 'dw' ),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'Show', 'dw' )
						),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'Hide', 'dw' )
						),
					),
					$prefix . 'date_meta'      => array(
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
						),
					),
					$prefix . 'views_meta'     => array(
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
						),
					),
					$prefix . 'like_meta'      => array(
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
						),
					),
					$prefix . 'author_name'    => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Author name', 'dw' ),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'Show', 'dw' )
						),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'Hide', 'dw' )
						),
					),
					$prefix . 'author_bio'     => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Author Bio Box', 'dw' ),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'Show', 'dw' )
						),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'Hide', 'dw' )
						),
					),
					$prefix . 'share_posts'    => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Share buttons', 'dw' ),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'Show', 'dw' )
						),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'Hide', 'dw' )
						),
					)
				)
			),
			'body_box'        => array(
				'title'   => esc_html__( 'Page Background', 'dw' ),
				'type'    => 'tab',
				'options' => array(
					'body_background' => array(
						'type'    => 'multi-picker',
						'label'   => false,
						'picker'  => array(
							'control' => array(
								'label'        => esc_html__( 'Page Background', 'dw' ),
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
			)
		)
	),
);