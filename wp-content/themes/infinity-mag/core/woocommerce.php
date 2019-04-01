<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( 'Forbidden' );
}
add_filter( 'woocommerce_add_to_cart_fragments', 'dw_cart_counter', 10, 1 );
function dw_cart_counter( $fragments ) {
	$fragments['span#dw_cart_count_num'] = '<span id="dw_cart_count_num">' . WC()->cart->get_cart_contents_count() . '</span>';

	return $fragments;
}