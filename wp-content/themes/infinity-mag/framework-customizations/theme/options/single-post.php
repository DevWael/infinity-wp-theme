<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}


$options = array(
	'single' => array(
		'title'   => esc_html__( 'Post Settings', 'dw' ),
		'type'    => 'tab',
		'options' => array(
			'single-box'  => array(
				'title'   => esc_html__( 'Post Settings', 'dw' ),
				'type'    => 'tab',
				'options' => array(
					'single_sidebar'         => array(
						'type'         => 'switch',
						'value'        => 'right_sidebar',
						'label'        => esc_html__( 'Sidebar Position', 'dw' ),
						'right-choice' => array(
							'value' => 'right_sidebar',
							'label' => esc_html__( 'Right', 'dw' )
						),
						'left-choice'  => array(
							'value' => 'left_sidebar',
							'label' => esc_html__( 'Left', 'dw' )
						),
					),
					'date_meta'              => array(
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
					'categories_meta'        => array(
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
					'tags_meta'              => array(
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
					'views_meta'             => array(
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
					'like_meta'              => array(
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
					'author_name'            => array(
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
					'author_bio_box'         => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Author bio', 'dw' ),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'Show', 'dw' )
						),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'Hide', 'dw' )
						),
					),
					'nxt_prv_posts'          => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Next and prev posts', 'dw' ),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'Show', 'dw' )
						),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'Hide', 'dw' )
						),
					),
					'fly_box'                => array(
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
					'reading_indicator_post' => array(
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
					'share_posts'            => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Share buttons on posts', 'dw' ),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'Show', 'dw' )
						),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'Hide', 'dw' )
						),
					),
					'share_pages'            => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Share buttons on pages', 'dw' ),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'Show', 'dw' )
						),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'Hide', 'dw' )
						),
					),
					'comments_system'        => array(
						'type'  => 'multi-picker',
						'label' => false,

						'picker'  => array(
							'control' => array(
								'type'         => 'switch',
								'label'        => esc_html__( 'Comments system', 'dw' ),
								'desc'         => esc_html__( 'if DISQUS system selected the default comments system will be disabled', 'dw' ),
								'value'        => 'normal',
								'right-choice' => array(
									'value' => 'normal',
									'label' => esc_html__( 'Traditional', 'dw' )
								),
								'left-choice'  => array(
									'value' => 'disqus',
									'label' => esc_html__( 'Disqus', 'dw' )
								),
							)
						),
						'choices' => array(
							'disqus' => array(
								'id' => array(
									'type'  => 'text',
									'label' => esc_html__( 'Disqus short name', 'dw' ),
									'desc'  => esc_attr__( 'Create a disqus account and get the short name here ', 'dw' ) . '<a target="_blank" href="https://disqus.com/profile/signup">' . esc_html__( 'DISQUS', 'dw' ) . '</a>'
								)
							)
						)
					),
				)
			),
			'share_box'   => array(
				'title'   => esc_html__( 'Share icons', 'dw' ),
				'type'    => 'tab',
				'options' => array(
					'share_facebook'  => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Share on Facebook', 'dw' ),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'show', 'dw' )

						),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'hide', 'dw' )
						)
					),
					'share_twitter'   => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Share on Twitter', 'dw' ),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'show', 'dw' )

						),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'hide', 'dw' )
						)
					),
					'share_pinterest' => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Share on Pinterest', 'dw' ),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'show', 'dw' )

						),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'hide', 'dw' )
						)
					),
					'share_google'    => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Share on Google Plus', 'dw' ),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'show', 'dw' )

						),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'hide', 'dw' )
						)
					),
					'share_linked'    => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Share on Linked in', 'dw' ),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'show', 'dw' )

						),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'hide', 'dw' )
						)
					)
				)
			),
			'related_box' => array(
				'title'   => esc_html__( 'Related Posts', 'dw' ),
				'type'    => 'tab',
				'options' => array(
					'related_posts_box' => array(
						'type'    => 'multi-picker',
						'label'   => false,
						'picker'  => array(
							'control' => array(
								'type'         => 'switch',
								'label'        => esc_html__( 'Related Posts', 'dw' ),
								'value'        => 'on',
								'left-choice'  => array(
									'value' => 'off',
									'label' => esc_html__( 'Hide', 'dw' ),
								),
								'right-choice' => array(
									'value' => 'on',
									'label' => esc_html__( 'Show', 'dw' ),
								),
							)
						),
						'choices' => array(
							'on' => array(
								'related_title' => array(
									'type'  => 'text',
									'value' => esc_html__( 'Related Posts', 'dw' ),
									'label' => esc_html__( 'Title', 'dw' ),
								),
								'related_count' => array(
									'type'       => 'slider',
									'value'      => 4,
									'properties' => array(
										'min'  => 1,
										'max'  => 12,
										'step' => 1
									),
									'label'      => esc_html__( 'Number of posts', 'dw' ),
								),
								'query'         => array(
									'type'    => 'radio',
									'value'   => 'category',
									'label'   => esc_html__( 'Query based on', 'dw' ),
									'choices' => array(
										'tag'      => esc_html__( 'Tags', 'dw' ),
										'category' => esc_html__( 'Categories', 'dw' ),
										'author'   => esc_html__( 'Author', 'dw' ),
									),
									'inline'  => true
								)
							)
						)
					)
				)
			)
		)
	)
);