<?php
/**
 * Infinity Demo content
 */
add_filter( 'fw:ext:backups-demo:demos', 'dw_demo_content' );
function dw_demo_content( $demos ) {
	$demos_array = array(
		'rtl_magazine_no_ads'   => array(
			'title'        => esc_html__( 'RTL Magazine No Ads', 'dw' ),
			'screenshot'   => 'https://infinity.4hoste.com/demo/files/rtl_magazine.png',
			'preview_link' => 'http://bbioon.com/window/news'
		),
	);

	$download_url = 'https://infinity.4hoste.com/demo/index.php';

	foreach ( $demos_array as $id => $data ) {
		$demo = new FW_Ext_Backups_Demo( $id, 'piecemeal', array(
			'url'     => $download_url,
			'file_id' => $id,
		) );
		$demo->set_title( $data['title'] );
		$demo->set_screenshot( $data['screenshot'] );
		$demo->set_preview_link( $data['preview_link'] );

		$demos[ $demo->get_id() ] = $demo;

		unset( $demo );
	}

	return $demos;
}