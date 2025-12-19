<?php
/**
 * Plugin Name: Modern Login Styler
 * Description: Customize wp-login.php (login/register/forgot) background, form colors, text colors, and logo.
 * Version: 1.0.0
 * Requires at least: 6.0
 * Requires PHP: 7.4
 * License: GPLv2 or later
 * Text Domain: modern-login-styler
 * Domain Path: /languages
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'MLS_VERSION', '1.0.0' );
define( 'MLS_FILE', __FILE__ );
define( 'MLS_DIR', plugin_dir_path( __FILE__ ) );
define( 'MLS_URL', plugin_dir_url( __FILE__ ) );

require_once MLS_DIR . 'includes/class-plugin.php';

add_action(
	'plugins_loaded',
	static function () {
		MLS_Plugin::instance()->init();
	}
);
