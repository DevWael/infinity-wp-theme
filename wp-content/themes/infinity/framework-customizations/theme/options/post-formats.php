<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$prefix  = 'window_';
$options = array(
	$prefix . 'link'    => array(
		'title'   => esc_html__( 'URL Options', 'window-mag' ),
		'type'    => 'box',
		'options' => array(
			'link-box' => array(
				'type'  => 'text',
				'label' => esc_html__( 'Write a URL', 'window-mag' )
			)
		)
	),
	$prefix . 'quote'   => array(
		'title'   => esc_html__( 'Quote Options', 'window-mag' ),
		'type'    => 'box',
		'options' => array(
			'quote-author' => array(
				'type'  => 'text',
				'label' => esc_html__( 'Author', 'window-mag' )
			),
			'quote-body'   => array(
				'type'  => 'textarea',
				'label' => esc_html__( 'Quote text', 'window-mag' ),
			)
		)
	),
	$prefix . 'gallery' => array(
		'title'   => esc_html__( 'Gallery Options', 'window-mag' ),
		'type'    => 'box',
		'options' => array(
			'gallery-box' => array(
				'type'        => 'multi-upload',
				'label'       => esc_html__( 'Select Images', 'window-mag' ),
				'images_only' => true,
			)
		)
	),
	$prefix . 'video'   => array(
		'title'   => esc_html__( 'Video Options', 'window-mag' ),
		'type'    => 'box',
		//'context' => 'advanced',
		'options' => array(
			'video-box' => array(
				'type'    => 'multi-picker',
				'label'   => false,
				'picker'  => array(
					'gadget' => array(
						'label'        => esc_html__( 'Video Source', 'window-mag' ),
						'type'         => 'switch',
						'left-choice'  => array(
							'value' => 'remote',
							'label' => esc_html__( 'Url', 'window-mag' ),
						),
						'right-choice' => array(
							'value' => 'local',
							'label' => esc_html__( 'file', 'window-mag' ),
						),
						'value'        => 'on',
					)
				),
				'choices' => array(
					'remote' => array(
						'video-url' => array(
							'type'    => 'oembed',
							'attr'    => array( 'placeholder' => 'https://www.youtube.com/watch?v=kGdxP0RJwv8' ),
							'label'   => esc_html__( 'Video URL', 'window-mag' ),
							'desc'    => __( 'Enter a video url: Youtube, vimeo, or dailymotion. Supported services listed at <a href="http://codex.wordpress.org/Embeds">http://codex.wordpress.org/Embeds.</a>', 'window-mag' ),
							'preview' => array(
								'keep_ratio' => true
							)
						)
					),
					'local'  => array(
						'video-file' => array(
							'type'        => 'upload',
							'label'       => esc_html__( 'Upload a video file', 'window-mag' ),
							'desc'        => esc_html__( 'Allowed file types : mp4, m4v, webm, ogv, wmv, flv', 'window-mag' ),
							'images_only' => false,
							'files_ext'   => array( 'mp4', 'm4v', 'webm', 'ogv', 'wmv', 'flv' ),
						)
					)
				)
			)
		)
	),

	$prefix . 'audio' => array(
		'title'   => esc_html__( 'Audio Options', 'window-mag' ),
		'type'    => 'box',
		//'context' => 'advanced',
		'options' => array(
			'audio-box' => array(
				'type'    => 'multi-picker',
				'label'   => false,
				'picker'  => array(
					'gadget' => array(
						'label'        => esc_html__( 'Audio Source', 'window-mag' ),
						'type'         => 'switch',
						'left-choice'  => array(
							'value' => 'remote',
							'label' => esc_html__( 'Url', 'window-mag' ),
						),
						'right-choice' => array(
							'value' => 'local',
							'label' => esc_html__( 'file', 'window-mag' ),
						),
						'value'        => 'on',
					)
				),
				'choices' => array(
					'remote' => array(
						'audio-url' => array(
							'type'    => 'oembed',
							'attr'    => array( 'placeholder' => 'https://soundcloud.com/gracedaviesofficial/hello-adele' ),
							'label'   => esc_html__( 'Audio URL', 'window-mag' ),
							'desc'    => __( 'Enter a audio url : Soundcloud, mixcloud, or Spotify. Supported services listed at <a href="http://codex.wordpress.org/Embeds">http://codex.wordpress.org/Embeds.</a>', 'window-mag' ),
							'preview' => array(
								'keep_ratio' => true
							)
						)
					),
					'local'  => array(
						'audio-file' => array(
							'type'        => 'upload',
							'label'       => esc_html__( 'Upload a audio file', 'window-mag' ),
							'desc'        => esc_html__( 'Allowed file types : mp3, ogg, wma, m4a, wav', 'window-mag' ),
							'images_only' => false,
							'files_ext'   => array( 'mp3', 'ogg', 'wma', 'm4a', 'wav' )
						)
					)
				)
			)
		)
	)
);