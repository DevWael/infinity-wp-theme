<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}


$options = array(
	'single' => array(
		'title'   => esc_html__( 'Post Settings', 'window-mag' ),
		'type'    => 'tab',
		'options' => array(
			'single-box'  => array(
				'title'   => esc_html__( 'Post Settings', 'window-mag' ),
				'type'    => 'tab',
				'options' => array(
					'single_sidebar'  => array(
						'type'         => 'switch',
						'value'        => 'right_sidebar',
						'label'        => esc_html__( 'Sidebar Position', 'window-mag' ),
						'right-choice' => array(
							'value' => 'right_sidebar',
							'label' => esc_html__( 'Right', 'window-mag' )
						),
						'left-choice'  => array(
							'value' => 'left_sidebar',
							'label' => esc_html__( 'Left', 'window-mag' )
						),
					),
					'date_meta'       => array(
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
					'categories_meta' => array(
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
					'tags_meta'       => array(
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
					'views_meta'      => array(
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
					'like_meta'       => array(
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
					'author_name'     => array(
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
					'author_bio_box'  => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Author bio', 'window-mag' ),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'Show', 'window-mag' )
						),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'Hide', 'window-mag' )
						),
					),
					'nxt_prv_posts'   => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Next and prev posts', 'window-mag' ),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'Show', 'window-mag' )
						),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'Hide', 'window-mag' )
						),
					),
					'fly_box'   => array(
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
					'reading_indicator_post'   => array(
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
					'share_posts'     => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Share buttons on posts', 'window-mag' ),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'Show', 'window-mag' )
						),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'Hide', 'window-mag' )
						),
					),
					'share_pages'     => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Share buttons on pages', 'window-mag' ),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'Show', 'window-mag' )
						),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'Hide', 'window-mag' )
						),
					),
					'comments_system' => array(
						'type'  => 'multi-picker',
						'label' => false,

						'picker'  => array(
							'control' => array(
								'type'         => 'switch',
								'label'        => esc_html__( 'Comments system', 'window-mag' ),
								'desc'         => esc_html__( 'if DISQUS system selected the default comments system will be disabled', 'window-mag' ),
								'value'        => 'normal',
								'right-choice' => array(
									'value' => 'normal',
									'label' => esc_html__( 'Traditional', 'window-mag' )
								),
								'left-choice'  => array(
									'value' => 'disqus',
									'label' => esc_html__( 'Disqus', 'window-mag' )
								),
							)
						),
						'choices' => array(
							'disqus' => array(
								'id' => array(
									'type'  => 'text',
									'label' => esc_html__( 'Disqus short name', 'window-mag' ),
									'desc'  => esc_attr__( 'Create a disqus account and get the short name here ', 'window-mag' ) . '<a target="_blank" href="https://disqus.com/profile/signup">' . esc_html__( 'DISQUS', 'window-mag' ) . '</a>'
								)
							)
						)
					),
				)
			),
			'share_box'   => array(
				'title'   => esc_html__( 'Share icons', 'window-mag' ),
				'type'    => 'tab',
				'options' => array(
					'share_facebook'  => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Share on Facebook', 'window-mag' ),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'show', 'window-mag' )

						),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'hide', 'window-mag' )
						)
					),
					'share_twitter'   => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Share on Twitter', 'window-mag' ),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'show', 'window-mag' )

						),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'hide', 'window-mag' )
						)
					),
					'share_pinterest' => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Share on Pinterest', 'window-mag' ),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'show', 'window-mag' )

						),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'hide', 'window-mag' )
						)
					),
					'share_google'    => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Share on Google Plus', 'window-mag' ),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'show', 'window-mag' )

						),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'hide', 'window-mag' )
						)
					),
					'share_linked'    => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Share on Linked in', 'window-mag' ),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'show', 'window-mag' )

						),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'hide', 'window-mag' )
						)
					),
					'share_stumble'   => array(
						'type'         => 'switch',
						'value'        => 'on',
						'label'        => esc_html__( 'Share on Stumbleupon', 'window-mag' ),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'show', 'window-mag' )

						),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'hide', 'window-mag' )
						)
					)
				)
			),
			'related_box' => array(
				'title'   => esc_html__( 'Related Posts', 'window-mag' ),
				'type'    => 'tab',
				'options' => array(
					'related_posts_box' => array(
						'type'    => 'multi-picker',
						'label'   => false,
						'picker'  => array(
							'control' => array(
								'type'         => 'switch',
								'label'        => esc_html__( 'Related Posts', 'window-mag' ),
								'value'        => 'on',
								'left-choice'  => array(
									'value' => 'off',
									'label' => esc_html__( 'Hide', 'window-mag' ),
								),
								'right-choice' => array(
									'value' => 'on',
									'label' => esc_html__( 'Show', 'window-mag' ),
								),
							)
						),
						'choices' => array(
							'on' => array(
								'related_title' => array(
									'type'  => 'text',
									'value' => esc_html__( 'Related Posts', 'window-mag' ),
									'label' => esc_html__( 'Title', 'window-mag' ),
								),
								'related_count' => array(
									'type'       => 'slider',
									'value'      => 4,
									'properties' => array(
										'min'  => 1,
										'max'  => 12,
										'step' => 1
									),
									'label'      => esc_html__( 'Number of posts', 'window-mag' ),
								),
								'query'         => array(
									'type'    => 'radio',
									'value'   => 'category',
									'label'   => esc_html__( 'Query based on', 'window-mag' ),
									'choices' => array(
										'tag'      => esc_html__( 'Tags', 'window-mag' ),
										'category' => esc_html__( 'Categories', 'window-mag' ),
										'author'   => esc_html__( 'Author', 'window-mag' ),
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