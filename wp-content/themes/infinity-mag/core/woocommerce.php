<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( 'Forbidden' );
}

add_action( 'after_setup_theme', 'dw_woocommerce_compatibility' );
if ( ! function_exists( 'dw_woocommerce_compatibility' ) ) {
	function dw_woocommerce_compatibility() {
		add_theme_support( 'woocommerce', array(
			'thumbnail_image_width' => 150,
			'single_image_width'    => 300,
		) );
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );
	}
}

add_filter( 'woocommerce_add_to_cart_fragments', 'dw_cart_counter', 10, 1 );
function dw_cart_counter( $fragments ) {
	$fragments['span#dw_cart_count_num'] = '<span id="dw_cart_count_num">' . WC()->cart->get_cart_contents_count() . '</span>';

	return $fragments;
}