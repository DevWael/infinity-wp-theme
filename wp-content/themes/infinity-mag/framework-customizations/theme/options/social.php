<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}


$options = array(
	'social' => array(
		'title'   => esc_html__( 'Social Media', 'dw' ),
		'type'    => 'tab',
		'options' => array(
			'social-box' => array(
				'title'   => esc_html__( 'Social media urls', 'dw' ),
				'type'    => 'tab',
				'options' => array(
					'social_icon' => array(
						'type'            => 'addable-box',
						'attr'            => array( 'class' => 'box-width' ),
						'label'           => esc_html__( 'Social media links', 'dw' ),
						'box-options'     => array(
							'title' => array(
								'type'  => 'text',
								'label' => esc_html__( 'Title', 'dw' ),
							),
							'url'   => array(
								'type'  => 'text',
								'label' => esc_html__( 'Url', 'dw' ),
							),
							'icon'  => array(
								'type'  => 'icon',
								'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
								'label' => esc_html__( 'Social network icon', 'dw' ),
							),
							'tab'   => array(
								'type'  => 'checkbox',
								'value' => true,
								'label' => esc_html__( 'Open url in new tab', 'dw' )
							)
						),
						'template'        => '<i class="{{- icon }}"></i> {{- title }}', // box title
						'add-button-text' => esc_html__( 'Add social media button', 'dw' ),
						'sortable'        => true,
					)
				)
			)
		)
	)
);