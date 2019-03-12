<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$prefix  = 'window_';
$options = array(
	'customizations' => array(
		'title'   => esc_html__( 'Post Customizations', 'window-mag' ),
		'type'    => 'box',
		'options' => array(
			'meta-visibility' => array(
				'type'    => 'tab',
				'title'   => esc_html__( 'Post Options', 'window-mag' ),
				'options' => array(
					$prefix . 'post_cover'      => array(
						'type'    => 'multi-picker',
						'label'   => false,
						'picker'  => array(
							'control' => array(
								'type'         => 'switch',
								'value'        => 'off',
								'label'        => esc_html__( 'Post Cover', 'window-mag' ),
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
					$prefix . 'single_sidebar'  => array(
						'type'    => 'radio',
						'value'   => '',
						'label'   => esc_html__( 'Sidebar Position', 'window-mag' ),
						'desc'    => esc_html__( 'This option will override the sidebar position selected in theme options page for this post only.', 'window-mag' ),
						'choices' => array(
							''      => esc_html__( 'Do not Change', 'window-mag' ),
							'right' => esc_html__( 'Right Sidebar', 'window-mag' ),
							'left'  => esc_html__( 'Left Sidebar', 'window-mag' )
						),
						'inline'  => true
					),
					'post_thumb'      => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Featured image visibility', 'window-mag' ),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'Hide', 'window-mag' )
						),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'Show', 'window-mag' )
						)
					),
					$prefix . 'top_banner'      => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Top post banner', 'window-mag' ),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'Hide', 'window-mag' )
						),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'Show', 'window-mag' )
						)
					),
					$prefix . 'bottom_banner'   => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Bottom post banner', 'window-mag' ),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'Hide', 'window-mag' )
						),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'Show', 'window-mag' )
						)
					),
					'reading_indicator'   => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Reading position indicator', 'window-mag' ),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'Show', 'window-mag' )
						),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'Hide', 'window-mag' )
						),
					),
					$prefix . 'date_meta'       => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Date Meta', 'window-mag' ),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'Show', 'window-mag' )
						),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'Hide', 'window-mag' )
						),
					),
					$prefix . 'categories_meta' => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Categories meta', 'window-mag' ),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'Show', 'window-mag' )
						),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'Hide', 'window-mag' )
						),
					),
					$prefix . 'tags_meta'       => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Tags meta', 'window-mag' ),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'Show', 'window-mag' )
						),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'Hide', 'window-mag' )
						),
					),
					$prefix . 'views_meta'      => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Views meta', 'window-mag' ),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'Show', 'window-mag' )
						),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'Hide', 'window-mag' )
						),
					),
					$prefix . 'like_meta'       => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Like meta', 'window-mag' ),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'Show', 'window-mag' )
						),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'Hide', 'window-mag' )
						),
					),
					$prefix . 'author_name'     => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Author name', 'window-mag' ),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'Show', 'window-mag' )
						),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'Hide', 'window-mag' )
						),
					),
					$prefix . 'author_bio'      => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Author Bio Box', 'window-mag' ),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'Show', 'window-mag' )
						),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'Hide', 'window-mag' )
						),
					),
					$prefix . 'share_posts'     => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Share buttons', 'window-mag' ),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'Show', 'window-mag' )
						),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'Hide', 'window-mag' )
						),
					),
					$prefix . 'single_related'  => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Related posts', 'window-mag' ),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'Hide', 'window-mag' )
						),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'Show', 'window-mag' )
						)
					),
					'fly_box'                   => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Post Fly Box', 'window-mag' ),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'Show', 'window-mag' )
						),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'Hide', 'window-mag' )
						),
					),
				)
			),
			'review-tab'      => array(
				'type'    => 'tab',
				'title'   => esc_html__( 'Review System', 'window-mag' ),
				'options' => array(
					$prefix . 'review_position' => array(
						'type'                  => 'radio',
						'value'                 => 'off',
						'save-in-separate-meta' => true,
						'label'                 => esc_html__( 'Review Position', 'window-mag' ),
						'choices'               => array( // Note: Avoid bool or int keys http://bit.ly/1cQgVzk
							'off'    => esc_html__( 'Hide the review', 'window-mag' ),
							'top'    => esc_html__( 'Above the post', 'window-mag' ),
							'bottom' => esc_html__( 'Under the post', 'window-mag' )
						),
						// Display choices inline instead of list
						'inline'                => true
					),
					$prefix . 'review-title'    => array(
						'type'  => 'text',
						'label' => esc_html__( 'Review Title', 'window-mag' )
					),
					$prefix . 'review-desc'     => array(
						'type'  => 'textarea',
						'label' => esc_html__( 'Review Description', 'window-mag' )
					),
					$prefix . 'review-rating'   => array(
						'type'                  => 'addable-box',
						'label'                 => esc_html__( 'Rating', 'window-mag' ),
						'save-in-separate-meta' => true,
						'box-options'           => array(
							'feature_name' => array(
								'label' => esc_html__( 'Feature Name', 'window-mag' ),
								'type'  => 'text',
								'attr'  => array( 'placeholder' => esc_html__( 'Camera or ram or anything', 'window-mag' ) )
							),
							'score'        => array(
								'label'      => esc_html__( 'Score', 'window-mag' ),
								'type'       => 'slider',
								'properties' => array(
									'min'  => 0,
									'max'  => 10,
									'step' => 0.5,
								)
							)
						),
						'template'              => '{{- feature_name }} <i class="fa fa-long-arrow-right" aria-hidden="true"></i> {{- score }}',
						// box title
						'add-button-text'       => esc_html__( 'Add Feature and Score', 'window-mag' ),
						'sortable'              => false
					)
				)
			),
			'body_box'        => array(
				'title'   => esc_html__( 'Post Background', 'window-mag' ),
				'type'    => 'tab',
				'options' => array(
					'body_background' => array(
						'type'    => 'multi-picker',
						'label'   => false,
						'picker'  => array(
							'control' => array(
								'label'        => esc_html__( 'Post Background', 'window-mag' ),
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
						'choices' => array(
							'background' => array(
								'color_select' => array(
									'type'  => 'color-picker',
									'label' => esc_html__( 'Background Color', 'window-mag' ),
									'value' => '#f5f5f5'
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
			)
		)
	)
);