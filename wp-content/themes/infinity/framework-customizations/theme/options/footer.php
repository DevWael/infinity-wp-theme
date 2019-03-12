<?php
if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'footer_layout' => array(
		'title'   => esc_html__( 'Footer Settings', 'window-mag' ),
		'type'    => 'tab',
		'options' => array(
			'footer_box'      => array(
				'title'   => esc_html__( 'Footer Settings', 'window-mag' ),
				'type'    => 'tab',
				'options' => array(
					'footer_instagram'    => array(
						'type'         => 'multi-picker',
						'label'        => false,
						'picker'       => array(
							'control' => array(
								'label'        => esc_html__( 'Footer Instagram', 'window-mag' ),
								'type'         => 'switch', // or 'short-select'
								'inline'       => true,
								'value'        => 'off',
								'left-choice'  => array(
									'value' => 'off',
									'label' => esc_html__( 'Off', 'window-mag' ),
								),
								'right-choice' => array(
									'value' => 'on',
									'label' => esc_html__( 'On', 'window-mag' ),
								),
							)
						),
						'choices'      => array(
							'on' => array(
								'insta_user' => array(
									'type'  => 'text',
									'label' => esc_html__( 'Instagram user', 'window-mag' ),
									'desc'  => esc_html__( 'Must be entered correctly to run the instagram carousel.', 'window-mag' )
								),
								'limit'      => array(
									'type'       => 'slider',
									'value'      => 10,
									'properties' => array(
										'min'  => 6,
										'max'  => 50,
										'step' => 1
									),
									'label'      => esc_html__( 'Pictures count', 'window-mag' )
								)
							)
						),
						'show_borders' => false
					),
					'footer_widgets'      => array(
						'type'         => 'switch',
						'value'        => 'off',
						'label'        => esc_html__( 'Footer Widgets', 'window-mag' ),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__( 'Show', 'window-mag' )
						),
						'left-choice'  => array(
							'value' => 'off',
							'label' => esc_html__( 'Hide', 'window-mag' )
						),
					),
					'footer_rights_block' => array(
						'type'    => 'radio',
						'value'   => 'social',
						'label'   => esc_html__( 'Footer rights block', 'window-mag' ),
						'choices' => array(
							'navbar' => esc_html__( 'Footer Menu', 'window-mag' ),
							'social' => esc_html__( 'Social icons', 'window-mag' ),
							'off'    => esc_html__( 'Off', 'window-mag' )
						),
						'inline'  => true
					),
					'footer_rights'       => array(
						'type'          => 'textarea',
						'value'         => esc_html__( 'All rights reserved to', 'window-mag' ) . ' ' . esc_html( get_bloginfo( 'name' ) ),
						'label'         => esc_html__( 'Footer Copyrights', 'window-mag' ),
						'size'          => 'large',
						'editor_height' => 200
					),
					'footer_background'   => array(
						'type'         => 'multi-picker',
						'label'        => false,
						'picker'       => array(
							'control' => array(
								'label'        => esc_html__( 'Footer Background', 'window-mag' ),
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
									'value'    => '#0b171d'
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
			'footer_carousel' => array(
				'title'   => esc_html__( 'Footer Carousel', 'window-mag' ),
				'type'    => 'tab',
				'options' => array(
					'footer_posts_switch' => array(
						'type'         => 'multi-picker',
						'label'        => false,
						'picker'       => array(
							'control' => array(
								'type'         => 'switch',
								'value'        => 'off',
								'desc'         => esc_html__( 'Enable or disable posts carousel in the footer', 'window-mag' ),
								'label'        => esc_html__( 'Show footer posts carousel', 'window-mag' ),
								'left-choice'  => array(
									'value' => 'off',
									'label' => esc_html__( 'off', 'window-mag' ),
								),
								'right-choice' => array(
									'value' => 'on',
									'label' => esc_html__( 'on', 'window-mag' ),
								),
							)
						),
						'choices'      => array(
							'on' => array(
								'top_posts_query' => array(
									'type'    => 'multi-picker',
									'label'   => false,
									'picker'  => array(
										'type' => array(
											'label'   => esc_html__( 'Query Based On : ', 'window-mag' ),
											'type'    => 'radio',
											'value'   => 'trend',
											'choices' => array(
												'trend'    => esc_html__( 'Popular posts ( Top Commented )', 'window-mag' ),
												'likes'    => esc_html__( 'Most liked posts', 'window-mag' ),
												'views'    => esc_html__( 'Most viewed posts', 'window-mag' ),
												'category' => esc_html__( 'Selected categories', 'window-mag' ),
												'tag'      => esc_html__( 'Selected tags', 'window-mag' ),
												'author'   => esc_html__( 'Selected author', 'window-mag' )
											),
											'inline'  => false
										)
									),
									'choices' => array(
										'category' => array(
											'cat_select' => array(
												'type'        => 'multi-select',
												'label'       => esc_html__( 'Select Categories', 'window-mag' ),
												'prepopulate' => 999,
												'choices'     => window_mag_categories()
											)
										),
										'tag'      => array(
											'tag_select' => array(
												'type'       => 'multi-select',
												'label'      => esc_html__( 'Select Tags', 'window-mag' ),
												'population' => 'taxonomy',
												'source'     => 'post_tag'
											)
										),
										'author'   => array(
											'author_select' => array(
												'type'        => 'select',
												'label'       => esc_html__( 'Select author', 'window-mag' ),
												'choices'     => window_mag_users(),
												'no-validate' => false
											)
										),
									),
								),
								'posts_count'     => array(
									'type'       => 'slider',
									'value'      => 10,
									'properties' => array(
										'min'  => 7,
										'max'  => 40,
										'step' => 1,
									),
									'label'      => esc_html__( 'Posts count', 'window-mag' )
								),
								'home_only'       => array(
									'type'         => 'switch',
									'value'        => 'off',
									'desc'         => esc_html__( 'Show the carousel on home page only or show on all pages', 'window-mag' ),
									'label'        => esc_html__( 'Show on home page only', 'window-mag' ),
									'left-choice'  => array(
										'value' => 'off',
										'label' => esc_html__( 'no', 'window-mag' ),
									),
									'right-choice' => array(
										'value' => 'on',
										'label' => esc_html__( 'yes', 'window-mag' )
									)
								),
								'visible_mobile'  => array(
									'type'         => 'switch',
									'value'        => 'on',
									'label'        => esc_html__( 'Show on Mobile Devices', 'window-mag' ),
									'left-choice'  => array(
										'value' => 'off',
										'label' => esc_html__( 'no', 'window-mag' )
									),
									'right-choice' => array(
										'value' => 'on',
										'label' => esc_html__( 'yes', 'window-mag' )
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