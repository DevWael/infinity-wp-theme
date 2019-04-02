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

function dw_product_discount_percentage() {
	if ( ! class_exists( 'woocommerce' ) ) {
		return false;
	}
	global $product;
	if ( $product->is_type( 'variable' ) ) {
		$percentages = array();
		// Get all variation prices
		$prices = $product->get_variation_prices();
		// Loop through variation prices
		foreach ( $prices['price'] as $key => $price ) {
			// Only on sale variations
			if ( $prices['regular_price'][ $key ] !== $price ) {
				// Calculate and set in the array the percentage for each variation on sale
				$percentages[] = round( 100 - ( $prices['sale_price'][ $key ] / $prices['regular_price'][ $key ] * 100 ) );
			}
		}
		// We keep the highest value
		$percentage = max( $percentages ) . '%';
	} else {
		$regular_price = (float) $product->get_regular_price();
		$sale_price    = (float) $product->get_sale_price();

		$percentage = round( 100 - ( $sale_price / $regular_price * 100 ) ) . '%';
	}

	return $percentage;
}