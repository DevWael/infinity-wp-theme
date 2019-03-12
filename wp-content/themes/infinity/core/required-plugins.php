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

add_action( 'tgmpa_register', 'window_mag_register_required_plugins' );

require WINDOW_MAG_CORE . 'class-tgm-plugin-activation.php';

if ( ! function_exists( 'window_mag_register_required_plugins' ) ) {
	function window_mag_register_required_plugins() {
		/**
		 * Array of plugin arrays. Required keys are name and slug.
		 * If the source is NOT from the .org repo, then source is also required.
		 */
		$plugins = array(
			array(
				'name'             => esc_html__( 'Unyson', 'window-mag' ),
				'slug'             => 'unyson',
				'required'         => true,
				'force_activation' => false
			),
			array(
				'name'             => esc_html__( 'Contact Form 7', 'window-mag' ),
				'slug'             => 'contact-form-7',
				'required'         => false,
				'force_activation' => false
			),
			array(
				'name'             => esc_html__( 'Font Awesome 4 Menus', 'window-mag' ),
				'slug'             => 'font-awesome-4-menus',
				'required'         => false,
				'force_activation' => false
			),
			array(
				'name'             => esc_html__( 'OneSignal - Free Web Push Notifications', 'window-mag' ),
				'slug'             => 'onesignal-free-web-push-notifications',
				'required'         => false,
				'force_activation' => false
			),
			array(
				'name'             => esc_html__( 'Envato Market', 'window-mag' ),
				'slug'             => 'envato-market',
				'source'           => WINDOW_MAG_CORE . 'plugins/envato-market.zip',
				'required'         => false,
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
