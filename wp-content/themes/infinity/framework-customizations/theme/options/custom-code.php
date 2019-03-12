<?php
if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'custom_code' => array(
		'title'   => esc_html__( 'Custom Code', 'window-mag' ),
		'type'    => 'tab',
		'options' => array(
			'custom_code_box' => array(
				'title'   => esc_html__( 'Custom Code', 'window-mag' ),
				'type'    => 'tab',
				'options' => array(
					'css' => array(
						'type'  => 'textarea',
						'attr'  => array( 'placeholder' => "body{\n background-color: #f5f5f5; \n}" ),
						'label' => esc_html__( 'Custom css', 'window-mag' ),
					),
					'js'  => array(
						'type'  => 'textarea',
						'attr'  => array( 'placeholder' => "jQuery(document).ready(function ($) {\n\n});" ),
						'label' => esc_html__( 'Custom javascript', 'window-mag' ),
					)
				)
			)
		)
	)
);