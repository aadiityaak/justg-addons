<?php
/**
 * Plugin Name: Justg Addons
 * Version: 1.0.0
 * Plugin URI: https://github.com/aadiityaak/
 * Description: Addon for justg themes
 * Author: Hugh velocitydeveloper
 * Author URI: https://github.com/aadiityaak/
 * Requires at least: 4.0
 * Tested up to: 4.0
 *
 * Text Domain: justg-addons
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author velocitydeveloper
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Load plugin class files.
require_once 'includes/class-justg-addons.php';
require_once 'includes/class-justg-addons-settings.php';

// Load plugin libraries.
require_once 'includes/lib/class-justg-addons-admin-api.php';
require_once 'includes/lib/class-justg-addons-post-type.php';
require_once 'includes/lib/class-justg-addons-taxonomy.php';

/**
 * Returns the main instance of Justg_Addons to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object Justg_Addons
 */
function justg_addons() {
	$instance = Justg_Addons::instance( __FILE__, '1.0.0' );

	if ( is_null( $instance->settings ) ) {
		$instance->settings = Justg_Addons_Settings::instance( $instance );
	}

	return $instance;
}

justg_addons();
