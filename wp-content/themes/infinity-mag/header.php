<?php
$dw_title_text   = $dw_sticky_nav = $dw_center_logo = $dw_retina = '';
$dw_header_style = dw_get_setting( 'header_types' );
if ( dw_get_setting( 'site_logo/tagline/center_text' ) == true ) {
	$dw_title_text = ' text-center';
}

if ( dw_get_setting( 'site_logo/logo/center_logo' ) ) {
	$dw_center_logo = ' center-block';
}

if ( 'on' === dw_get_setting( 'sticky_nav' ) ) {
	$dw_sticky_nav = ' sticky-nav';
}

?>
<!doctype html>
<html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="<?php echo esc_attr( get_bloginfo( 'charset' ) ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="wrapper">
	<?php
	if ( dw_get_setting( 'alert_bar/control' ) == 'on' ) {
		get_template_part( 'headers/alert-bar' );
	}
	?>
	<?php
	if ( dw_get_setting( 'header_types' ) ) {
		get_template_part( 'headers/' . dw_get_setting( 'header_types' ) );
	} else {
		get_template_part( 'headers/header-one' );
	}
	?>


