<?php
/**
 * Infinity Demo content
 */
add_filter( 'fw:ext:backups-demo:demos', 'dw_demo_content' );
function dw_demo_content( $demos ) {
	$demos_array = array(
		'rtl_magazine'   => array(
			'title'        => esc_html__( 'RTL Magazine', 'dw' ),
			'screenshot'   => 'https://infinity.4hoste.com/demo/files/rtl_magazine.png',
			'preview_link' => 'https://infinity.4hoste.com/theme/rtl-magazine'
		),
		'rtl_magazine_2' => array(
			'title'        => esc_html__( 'RTL Magazine 2', 'dw' ),
			'screenshot'   => 'https://infinity.4hoste.com/demo/files/rtl_magazine_2.png',
			'preview_link' => 'https://infinity.4hoste.com/theme/rtl-magazine-2'
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