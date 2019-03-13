<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$manifest                         = array();
$manifest['id']                   = 'dw';
$manifest['supported_extensions'] = array(
	'backups'     => array(),
	'breadcrumbs' => array(),
	'sidebars'    => array(),
	'analytics'   => array()
);
$manifest['requirements']         = array(
	'wordpress' => array(
		'min_version' => '4.4',
	),
	'framework' => array(
		'min_version' => '2.6.8'
	)
);