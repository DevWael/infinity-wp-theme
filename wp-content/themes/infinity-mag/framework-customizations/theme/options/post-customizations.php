<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$prefix  = 'window_';
$options = array(
	'customizations' => array(
		'title'   => esc_html__( 'Post Customizations', 'dw' ),
		'type'    => 'box',
		'options' => array(
			'meta-visibility' => array(
				'type'    => 'tab',
				'title'   => esc_html__( 'Post Options', 'dw' ),
				'options' => array(
					$prefix . 'post_cover'      => array(
						'type'    => 'multi-picker',
						'label'   => false,
						'picker'  => array(
							'control' => array(
								'type'         => 'switch',
								'value'        => 'off',
								'label'        => esc_html__( 'Post Cover', 'dw' ),
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
									'images_only' => true
								)
							)
						)
					),
					$prefix . 'single_sidebar'  => array(
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
					'post_thumb'                => array(
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
					$prefix . 'top_banner'      => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Top post banner', 'dw' ),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'Hide', 'dw' )
						),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'Show', 'dw' )
						)
					),
					$prefix . 'bottom_banner'   => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Bottom post banner', 'dw' ),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'Hide', 'dw' )
						),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'Show', 'dw' )
						)
					),
					'reading_indicator'         => array(
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
					$prefix . 'date_meta'       => array(
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
					$prefix . 'categories_meta' => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Categories meta', 'dw' ),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'Show', 'dw' )
						),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'Hide', 'dw' )
						),
					),
					$prefix . 'tags_meta'       => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Tags meta', 'dw' ),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'Show', 'dw' )
						),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'Hide', 'dw' )
						),
					),
					$prefix . 'views_meta'      => array(
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
					$prefix . 'author_name'     => array(
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
					$prefix . 'author_bio'      => array(
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
					$prefix . 'share_posts'     => array(
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
					),
					$prefix . 'single_related'  => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Related posts', 'dw' ),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'Hide', 'dw' )
						),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'Show', 'dw' )
						)
					),
					'fly_box'                   => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Post Fly Box', 'dw' ),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'Show', 'dw' )
						),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'Hide', 'dw' )
						),
					),
				)
			),
			'review-tab'      => array(
				'type'    => 'tab',
				'title'   => esc_html__( 'Review System', 'dw' ),
				'options' => array(
					$prefix . 'review_position' => array(
						'type'       => 'radio',
						'value'      => 'off',
						'fw-storage'            => array(
							'type'      => 'post-meta',
							'post-meta' => 'fw_option:' . $prefix . 'review_position',
						 ),
						'label'      => esc_html__( 'Review Position', 'dw' ),
						'choices'    => array( // Note: Avoid bool or int keys http://bit.ly/1cQgVzk
							'off'    => esc_html__( 'Hide the review', 'dw' ),
							'top'    => esc_html__( 'Above the post', 'dw' ),
							'bottom' => esc_html__( 'Under the post', 'dw' )
						),
						// Display choices inline instead of list
						'inline'     => true
					),
					$prefix . 'review-title'    => array(
						'type'  => 'text',
						'label' => esc_html__( 'Review Title', 'dw' )
					),
					$prefix . 'review-desc'     => array(
						'type'  => 'textarea',
						'label' => esc_html__( 'Review Description', 'dw' )
					),
					$prefix . 'review-rating'   => array(
						'type'                  => 'addable-box',
						'label'                 => esc_html__( 'Rating', 'dw' ),
						'fw-storage'            => array(
							'type'      => 'post-meta',
							'post-meta' => 'fw_option:' . $prefix . 'review-rating',
						),
						'box-options'           => array(
							'feature_name' => array(
								'label' => esc_html__( 'Feature Name', 'dw' ),
								'type'  => 'text',
								'attr'  => array( 'placeholder' => esc_html__( 'Camera or ram or anything', 'dw' ) )
							),
							'score'        => array(
								'label'      => esc_html__( 'Score', 'dw' ),
								'type'       => 'slider',
								'properties' => array(
									'min'  => 0,
									'max'  => 10,
									'step' => 0.5,
								)
							)
						),
						'template'              => '{{- feature_name }} <i class="fa fa-long-arrow-right" aria-hidden="true"></i> {{- score }}',
						'add-button-text'       => esc_html__( 'Add Feature and Score', 'dw' ),
						'sortable'              => false
					)
				)
			),
			'body_box'        => array(
				'title'   => esc_html__( 'Post Background', 'dw' ),
				'type'    => 'tab',
				'options' => array(
					'body_background' => array(
						'type'    => 'multi-picker',
						'label'   => false,
						'picker'  => array(
							'control' => array(
								'label'        => esc_html__( 'Post Background', 'dw' ),
								'type'         => 'switch',
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
						'choices' => array(
							'background' => array(
								'color_select' => array(
									'type'  => 'color-picker',
									'label' => esc_html__( 'Background Color', 'dw' ),
									'value' => '#f5f5f5'
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
	)
);