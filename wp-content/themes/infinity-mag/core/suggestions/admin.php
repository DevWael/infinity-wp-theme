<?php
//suggest_id, suggest_name ,suggest_content, suggest_activate_url
//$response = wp_remote_post( 'http://localhost/infinity/wp-json/suggestions/v1/create_suggest',
//	[
//		'method'      => 'POST',
//		'timeout'     => 45,
//		'redirection' => 5,
//		'blocking'    => true,
//		'body'        => array(
//			'suggest_id'           => 7473,
//			'suggest_name'         => 'test name',
//			'suggest_content'      => 'test content',
//			'suggest_activate_url' => 'test url',
//		),
//		'cookies'     => array()
//	]
//);
//if ( ! is_wp_error( $response ) ) {
//	echo 'Response:<pre>';
//	fw_print( json_decode( wp_remote_retrieve_body( $response ), true ) );
//	echo '</pre>';
//}