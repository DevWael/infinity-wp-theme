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

add_action( 'wp_ajax_dw_ajax_add_to_cart', 'dw_ajax_add_to_cart' );
add_action( 'wp_ajax_nopriv_dw_ajax_add_to_cart', 'dw_ajax_add_to_cart' );
function dw_ajax_add_to_cart() {
	check_ajax_referer( 'dw_ajax_requests', 'nonce' );
	$product_id        = apply_filters( 'woocommerce_add_to_cart_product_id', absint( $_POST['product_id'] ) );
	$quantity          = 1;
	$variation_id      = absint( $_POST['variation_id'] );
	$passed_validation = apply_filters( 'woocommerce_add_to_cart_validation', true, $product_id, $quantity );
	$product_status    = get_post_status( $product_id );
	if ( $passed_validation && WC()->cart->add_to_cart( $product_id, $quantity, $variation_id ) && 'publish' === $product_status ) {
		do_action( 'woocommerce_ajax_added_to_cart', $product_id );
		if ( 'yes' === get_option( 'woocommerce_cart_redirect_after_add' ) ) {
			wc_add_to_cart_message( array( $product_id => $quantity ), true );
		}
		wp_send_json_success( [
			'type'    => 'success',
			'title'   => esc_html__( 'Cart', 'dw' ),
			'message' => esc_html__( 'The Product has been added to cart', 'dw' )
		] );
	} else {
		wp_send_json_error( [
			'type'    => 'warning',
			'title'   => esc_html__( 'Cart', 'dw' ),
			'message' => esc_html__( 'Failed to add to cart', 'dw' ),
			'url'     => apply_filters( 'woocommerce_cart_redirect_after_error', get_permalink( $product_id ), $product_id )
		] );
	}
}

add_action( 'wp_ajax_dw_ajax_add_to_fav', 'dw_ajax_add_to_fav' );
add_action( 'wp_ajax_nopriv_dw_ajax_add_to_fav', 'dw_ajax_add_to_fav' );
function dw_ajax_add_to_fav() {
	check_ajax_referer( 'dw_ajax_requests', 'nonce' );
	if ( ! is_user_logged_in() ) {
		wp_send_json_error( [
			'type'    => 'warning',
			'title'   => esc_html__( 'Login Check', 'dw' ),
			'message' => esc_html__( 'You have to login to add to favorites', 'dw' ),
		] );
	}

	if ( isset( $_POST['product_id'] ) && ! empty( $_POST['product_id'] ) ) {
		$user_id = get_current_user_id();
		delete_post_meta( $user_id, 'dw_favorites' );
		$favorites = (array) get_user_meta( $user_id, 'dw_favorites', true );

		if ( empty( $favorites ) ) {
			update_user_meta( $user_id, 'dw_favorites', array( absint( $_POST['product_id'] ) ) );
			wp_send_json_success( [
				'type'    => 'success',
				'title'   => esc_html__( 'Favorites111', 'dw' ),
				'message' => esc_html__( 'The Product has been added to favorites', 'dw' )
			] );
		} else {
			if ( ! in_array( absint( $_POST['product_id'] ), $favorites ) ) {
				array_push( $favorites, absint( $_POST['product_id'] ) );
				update_user_meta( $user_id, 'dw_favorites', $favorites );
				wp_send_json_success( [
					'type'    => 'success',
					'title'   => esc_html__( 'Favorites', 'dw' ),
					'message' => esc_html__( 'The Product has been added to favorites', 'dw' )
				] );
			} else {
				wp_send_json_error( [
					'type'    => 'warning',
					'title'   => esc_html__( 'Favorites', 'dw' ),
					'message' => esc_html__( 'This product is already in favorites', 'dw' ),
				] );
			}
		}

	}
}

add_action( 'wp_ajax_dw_ajax_remove_fav', 'dw_ajax_remove_fav' );
add_action( 'wp_ajax_nopriv_dw_ajax_remove_fav', 'dw_ajax_remove_fav' );
function dw_ajax_remove_fav() {
	check_ajax_referer( 'dw_ajax_requests', 'nonce' );
	if ( ! is_user_logged_in() ) {
		return false;
	}
	if ( isset( $_POST['product_id'] ) && ! empty( $_POST['product_id'] ) ) {
		$user_id = get_current_user_id();
		delete_post_meta( $user_id, 'dw_favorites' );
		$favorites = (array) get_user_meta( $user_id, 'dw_favorites', true );
		if ( in_array( absint( $_POST['product_id'] ), $favorites ) ) {
			foreach ( $favorites as $key => $value ) {
				if ( $_POST['product_id'] == $value ) {
					unset( $favorites[ $key ] );
				}
			}
			update_user_meta( $user_id, 'dw_favorites', $favorites );
			wp_send_json_success( [
				'type'    => 'success',
				'title'   => esc_html__( 'Favorites', 'dw' ),
				'message' => esc_html__( 'The Product has been removed from favorites', 'dw' )
			] );
		}
	}
}