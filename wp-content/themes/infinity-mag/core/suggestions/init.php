<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

define( 'DW_REMOTE_SITE_URL', 'https://wp.4hoste.com/wael/magazine' );

//Registering plugin admin setting page template
add_action( 'admin_menu', 'dw_shipping_cities_pagea', 99 );
function dw_shipping_cities_pagea() {
	add_theme_page(
		esc_html__( 'Suggestions', 'dw' ),
		esc_html__( 'Suggestions', 'dw' ),
		'manage_options',
		'dw-suggestions',
		'dw_suggestions_callback'
	);
}

//Plugin admin setting page template
function dw_suggestions_callback() {
	include DW_CORE . 'suggestions/admin.php';
}

add_action( 'admin_enqueue_scripts', 'dw_suggestions_scripts' );
if ( ! function_exists( 'dw_suggestions_scripts' ) ) {
	function dw_suggestions_scripts() {
		wp_enqueue_style( 'suggestions_css', DW_CORE_URI . 'suggestions/style.css' );
		wp_enqueue_script( 'suggestions_js', DW_CORE_URI . 'suggestions/main.js', [ 'jquery' ] );
		wp_localize_script( 'suggestions_js', 'dw_suggestions_url', [
				'ajax_url'   => admin_url( 'admin-ajax.php' ),
				'ajax_nonce' => wp_create_nonce( 'dw_ajax_requests' ),
			]
		);
	}
}

add_action( 'init', 'dw_suggestions_init' );
function dw_suggestions_init() {
	$labels = array(
		'name'               => esc_html__( 'Suggestions', 'dw' ),
		'singular_name'      => esc_html__( 'Suggestion', 'dw' ),
		'menu_name'          => esc_html__( 'Suggestions', 'dw' ),
		'name_admin_bar'     => esc_html__( 'Suggestion', 'dw' ),
		'add_new'            => esc_html__( 'Add New', 'dw' ),
		'add_new_item'       => esc_html__( 'Add New Suggestion', 'dw' ),
		'new_item'           => esc_html__( 'New Suggestion', 'dw' ),
		'edit_item'          => esc_html__( 'Edit Suggestion', 'dw' ),
		'view_item'          => esc_html__( 'View Suggestion', 'dw' ),
		'all_items'          => esc_html__( 'All Suggestions', 'dw' ),
		'search_items'       => esc_html__( 'Search Suggestions', 'dw' ),
		'parent_item_colon'  => esc_html__( 'Parent Suggestions:', 'dw' ),
		'not_found'          => esc_html__( 'No Suggestions found.', 'dw' ),
		'not_found_in_trash' => esc_html__( 'No Suggestions found in Trash.', 'dw' )
	);

	$args = array(
		'labels'              => $labels,
		'public'              => true,
		'publicly_queryable'  => false,
		'exclude_from_search' => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'query_var'           => true,
		'capabilities'        => array(
			'edit_post'          => 'update_core',
			'read_post'          => 'update_core',
			'delete_post'        => 'update_core',
			'edit_posts'         => 'update_core',
			'edit_others_posts'  => 'update_core',
			'delete_posts'       => 'update_core',
			'publish_posts'      => 'update_core',
			'read_private_posts' => 'update_core'
		),
		'has_archive'         => true,
		'hierarchical'        => false,
		'menu_icon'           => 'dashicons-format-status',
		'menu_position'       => 120,
		'supports'            => array( 'title', 'editor' )
	);

	register_post_type( 'suggestions', $args );
}

add_filter( 'manage_suggestions_posts_columns', 'dw_suggestions_columns' );
function dw_suggestions_columns( $columns ) {
	$columns['dw_status'] = __( 'Status', 'dw' );

	return $columns;
}

// Add the data to the custom columns for the book post type:
add_action( 'manage_suggestions_posts_custom_column', 'dw_suggestions_column_data', 10, 2 );
function dw_suggestions_column_data( $column, $post_id ) {
	switch ( $column ) {
		case 'dw_status' :
			$status = get_post_meta( $post_id, 'dw_admin_suggest_status', true );
			esc_html_e( 'Status:', 'dw' );
			echo ' ';
			if ( $status == 'on_going' ) {
				esc_html_e( 'On Going', 'dw' );
			} else {
				esc_html_e( 'Pending', 'dw' );
			}
			break;
	}
}

add_action( 'add_meta_boxes', 'dw_client_suggestions_status_meta_box' );
function dw_client_suggestions_status_meta_box() {
	add_meta_box(
		'client-suggestions-status-box',
		esc_html__( 'Status', 'dw' ),
		'dw_suggestions_status_client_fields',
		'suggestions',
		'side',          // The part of the page where the edit screen section should be shown.
		'default'
	);
}

function dw_suggestions_status_client_fields() {
	$status = get_post_meta( get_the_ID(), 'dw_admin_suggest_status', true );
	?>
    <div class="dw-status">
		<?php esc_html_e( 'Status:', 'dw' );
		echo ' ';
		if ( $status == 'on_going' ) {
			esc_html_e( 'On Going', 'dw' );
		} else {
			esc_html_e( 'Pending', 'dw' );
		}
		?>
    </div>
	<?php
}

add_action( 'rest_api_init', 'dw_client_suggestions_routes' );
function dw_client_suggestions_routes() {
	register_rest_route(
		'local-suggestions/v1',
		'/suggest_status/',
		array(
			'methods'  => WP_REST_Server::CREATABLE,
			'callback' => 'dw_change_suggestion_status',
		)
	);
}

function dw_change_suggestion_status( $data ) {//suggest_status
	if ( isset( $data['client_suggest_id'] ) && ! empty( $data['client_suggest_id'] ) && is_numeric( $data['client_suggest_id'] ) ) {
		if ( isset( $data['suggest_status'] ) && $data['suggest_status'] == 'on_going' ) {
			update_post_meta( $data['client_suggest_id'], 'dw_admin_suggest_status', 'on_going' );
		}
	}
}

add_action( 'save_post', 'set_rating_title', 12 );
function set_rating_title( $post_id ) {
	if ( $post_id == null || empty( $_POST ) ) {
		return;
	}
	if ( ! isset( $_POST['post_type'] ) || $_POST['post_type'] != 'suggestions' ) {
		return;
	}

	$publish = get_post_meta( $post_id, 'dw_post_update_check', true );
	if ( $publish == 'done' ) {
		return;
	} else {
		update_post_meta( $post_id, 'dw_post_update_check', 'done' );
	}

	$post_content = get_post( $post_id );
	$title        = get_the_title( $post_id );
	$content      = $post_content->post_content;
	$response     = wp_remote_post( DW_REMOTE_SITE_URL . '/wp-json/suggestions/v1/create_suggest',
		[
			'method'      => 'POST',
			'timeout'     => 45,
			'redirection' => 5,
			'blocking'    => true,
			'body'        => [
				'suggest_id'           => $post_id,
				'suggest_name'         => $title,
				'suggest_content'      => $content,
				'suggest_activate_url' => home_url( '/' ),
			],
			'cookies'     => []
		]
	);
	if ( ! is_wp_error( $response ) ) {
		$new_data = json_decode( wp_remote_retrieve_body( $response ), true );
		if ( isset( $new_data['code'] ) && $new_data['code'] == 0 ) {
			update_post_meta( $post_id, 'dw_admin_suggest', $new_data['created_suggest_id'] );
		}
	}
}

add_action( 'init', 'dw_check_ongoing_suggestions' );
function dw_check_ongoing_suggestions() {
	$transient_key = 'dw_check_ongoing_suggestions_flag';
	if ( ! get_transient( $transient_key ) ) {
		$args  = [
			'post_type'      => 'suggestions',
			'posts_per_page' => - 1,
			'fields'         => 'ids',
			'meta_query'     => [
				array(
					'key'     => 'dw_admin_suggest_status',
					'value'   => 'on_going',
					'compare' => '!=',
				)
			]
		];
		$query = new WP_Query( $args );
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				$post_id  = get_the_ID();
				$response = wp_remote_post( DW_REMOTE_SITE_URL . '/wp-json/suggestions/v1/check_suggest',
					[
						'method'      => 'POST',
						'timeout'     => 45,
						'redirection' => 5,
						'blocking'    => true,
						'body'        => [
							'suggest_id' => $post_id
						],
						'cookies'     => []
					]
				);
				if ( ! is_wp_error( $response ) ) {
					$new_data = json_decode( wp_remote_retrieve_body( $response ), true );
					if ( isset( $new_data['code'] ) && $new_data['code'] == 0 ) {
						if ( $new_data['suggest_status'] == 'on_going' ) {
							update_post_meta( $post_id, 'dw_admin_suggest_status', $new_data['suggest_status'] );
						}
					}
				}
			}
		}
		wp_reset_postdata();
	}
	set_transient( $transient_key, 'done', DAY_IN_SECONDS / 4 );
}

add_action( 'init', 'dw_resend_failed_suggestions' );
function dw_resend_failed_suggestions() {
	$transient_key = 'dw_resend_failed_suggestions_flag';
	if ( ! get_transient( $transient_key ) ) {
		$args  = [
			'post_type'      => 'suggestions',
			'posts_per_page' => - 1,
			'meta_query'     => [
				array(
					'key'     => 'dw_admin_suggest',
					'value'   => '',
					'compare' => '!=',
				)
			]
		];
		$query = new WP_Query( $args );
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				$post_id  = get_the_ID();
				$title    = get_the_title();
				$content  = get_the_content();
				$response = wp_remote_post( DW_REMOTE_SITE_URL . '/wp-json/suggestions/v1/create_suggest',
					[
						'method'      => 'POST',
						'timeout'     => 45,
						'redirection' => 5,
						'blocking'    => true,
						'body'        => [
							'suggest_id'           => $post_id,
							'suggest_name'         => $title,
							'suggest_content'      => $content,
							'suggest_activate_url' => home_url( '/' ),
						],
						'cookies'     => []
					]
				);
				if ( ! is_wp_error( $response ) ) {
					$new_data = json_decode( wp_remote_retrieve_body( $response ), true );
					if ( isset( $new_data['code'] ) && $new_data['code'] == 0 ) {
						update_post_meta( $post_id, 'dw_admin_suggest', $new_data['created_suggest_id'] );
					}
				}
			}
		}
		wp_reset_postdata();
	}
	set_transient( $transient_key, 'done', DAY_IN_SECONDS / 4 );
}