<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}


$options = array(
	'banners' => array(
		'title'   => esc_html__( 'Advertisements', 'window-mag' ),
		'type'    => 'tab',
		'options' => array(
			'banners-box1' => array(
				'title'   => esc_html__( 'Header Banner', 'window-mag' ),
				'type'    => 'tab',
				'options' => array(
					'banner_box1' => array(
						'type'    => 'multi-picker',
						'label'   => false,
						'picker'  => array(
							'gadget' => array(
								'label'   => esc_html__( 'AD Type', 'window-mag' ),
								'type'    => 'radio',
								'choices' => array(
									'image' => esc_html__( 'Image AD', 'window-mag' ),
									'code'  => esc_html__( 'Custom Code', 'window-mag' ),
									'off'   => esc_html__( 'Off', 'window-mag' ),
								),
								'inline'  => true,
								'value'   => 'off'
							)
						),
						'choices' => array(
							'image' => array(
								'img'    => array(
									'type'        => 'upload',
									'label'       => esc_html__( 'Image banner', 'window-mag' ),
									'images_only' => true
								),
								'url'    => array(
									'type'  => 'text',
									'label' => esc_html__( 'Banner url', 'window-mag' ),
								),
								'alt'    => array(
									'type'  => 'text',
									'label' => esc_html__( 'Alternative Text For The image', 'window-mag' ),
								),
								'tab'    => array(
									'type'  => 'checkbox',
									'value' => true,
									'label' => esc_html__( 'Open url in new tab', 'window-mag' )
								),
								'follow' => array(
									'type'  => 'checkbox',
									'value' => false,
									'label' => esc_html__( 'No follow', 'window-mag' )
								),
							),
							'code'  => array(
								'code_block' => array(
									'type'  => 'textarea',
									'label' => esc_html__( 'Custom Ad Code', 'window-mag' ),
									'desc'  => esc_html__( 'Supports: HTML, Javascript, Text and Shortcodes.', 'window-mag' )
								)
							)
						)
					)
				)
			),
			'banners-box2' => array(
				'title'   => esc_html__( 'Footer Banner', 'window-mag' ),
				'type'    => 'tab',
				'options' => array(
					'banner_box2' => array(
						'type'    => 'multi-picker',
						'label'   => false,
						'picker'  => array(
							'gadget' => array(
								'label'   => esc_html__( 'AD Type', 'window-mag' ),
								'type'    => 'radio',
								'choices' => array(
									'image' => esc_html__( 'Image AD', 'window-mag' ),
									'code'  => esc_html__( 'Custom Code', 'window-mag' ),
									'off'   => esc_html__( 'Off', 'window-mag' ),
								),
								'inline'  => true,
								'value'   => 'off'
							)
						),
						'choices' => array(
							'image' => array(
								'img'    => array(
									'type'        => 'upload',
									'label'       => esc_html__( 'Image banner', 'window-mag' ),
									'images_only' => true
								),
								'url'    => array(
									'type'  => 'text',
									'label' => esc_html__( 'Banner url', 'window-mag' ),
								),
								'alt'    => array(
									'type'  => 'text',
									'label' => esc_html__( 'Alternative Text For The image', 'window-mag' ),
								),
								'tab'    => array(
									'type'  => 'checkbox',
									'value' => true,
									'label' => esc_html__( 'Open url in new tab', 'window-mag' )
								),
								'follow' => array(
									'type'  => 'checkbox',
									'value' => false,
									'label' => esc_html__( 'No follow', 'window-mag' )
								),
							),
							'code'  => array(
								'code_block' => array(
									'type'  => 'textarea',
									'label' => esc_html__( 'Custom Ad Code', 'window-mag' ),
									'desc'  => esc_html__( 'Supports: HTML, Javascript, Text and Shortcodes.', 'window-mag' )
								)
							)
						)
					)
				)
			),
			'banners-box3' => array(
				'title'   => esc_html__( 'Above article Banner', 'window-mag' ),
				'type'    => 'tab',
				'options' => array(
					'banner_box3' => array(
						'type'    => 'multi-picker',
						'label'   => false,
						'picker'  => array(
							'gadget' => array(
								'label'   => esc_html__( 'AD Type', 'window-mag' ),
								'type'    => 'radio',
								'choices' => array(
									'image' => esc_html__( 'Image AD', 'window-mag' ),
									'code'  => esc_html__( 'Custom Code', 'window-mag' ),
									'off'   => esc_html__( 'Off', 'window-mag' ),
								),
								'inline'  => true,
								'value'   => 'off'
							)
						),
						'choices' => array(
							'image' => array(
								'img'    => array(
									'type'        => 'upload',
									'label'       => esc_html__( 'Image banner', 'window-mag' ),
									'images_only' => true
								),
								'url'    => array(
									'type'  => 'text',
									'label' => esc_html__( 'Banner url', 'window-mag' ),
								),
								'alt'    => array(
									'type'  => 'text',
									'label' => esc_html__( 'Alternative Text For The image', 'window-mag' ),
								),
								'tab'    => array(
									'type'  => 'checkbox',
									'value' => true,
									'label' => esc_html__( 'Open url in new tab', 'window-mag' )
								),
								'follow' => array(
									'type'  => 'checkbox',
									'value' => false,
									'label' => esc_html__( 'No follow', 'window-mag' )
								),
							),
							'code'  => array(
								'code_block' => array(
									'type'  => 'textarea',
									'label' => esc_html__( 'Custom Ad Code', 'window-mag' ),
									'desc'  => esc_html__( 'Supports: HTML, Javascript, Text and Shortcodes.', 'window-mag' )
								)
							)
						)
					)
				)
			),
			'banners-box4' => array(
				'title'   => esc_html__( 'Below Article Banner', 'window-mag' ),
				'type'    => 'tab',
				'options' => array(
					'banner_box4' => array(
						'type'    => 'multi-picker',
						'label'   => false,
						'picker'  => array(
							'gadget' => array(
								'label'   => esc_html__( 'AD Type', 'window-mag' ),
								'type'    => 'radio',
								'choices' => array(
									'image' => esc_html__( 'Image AD', 'window-mag' ),
									'code'  => esc_html__( 'Custom Code', 'window-mag' ),
									'off'   => esc_html__( 'Off', 'window-mag' ),
								),
								'inline'  => true,
								'value'   => 'off'
							)
						),
						'choices' => array(
							'image' => array(
								'img'    => array(
									'type'        => 'upload',
									'label'       => esc_html__( 'Image banner', 'window-mag' ),
									'images_only' => true
								),
								'url'    => array(
									'type'  => 'text',
									'label' => esc_html__( 'Banner url', 'window-mag' ),
								),
								'alt'    => array(
									'type'  => 'text',
									'label' => esc_html__( 'Alternative Text For The image', 'window-mag' ),
								),
								'tab'    => array(
									'type'  => 'checkbox',
									'value' => true,
									'label' => esc_html__( 'Open url in new tab', 'window-mag' )
								),
								'follow' => array(
									'type'  => 'checkbox',
									'value' => false,
									'label' => esc_html__( 'No follow', 'window-mag' )
								),
							),
							'code'  => array(
								'code_block' => array(
									'type'  => 'textarea',
									'label' => esc_html__( 'Custom Ad Code', 'window-mag' ),
									'desc'  => esc_html__( 'Supports: HTML, Javascript, Text and Shortcodes.', 'window-mag' )
								)
							)
						)
					)
				)
			)
		)
	)
);