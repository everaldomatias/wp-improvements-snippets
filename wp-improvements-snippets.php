<?php

/**
 * WP Improvements Snippets
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://everaldo.dev/plugins/wp-improvements-snippets/
 * @since             0.0.1
 * @package           WP_Improvements_Snippets
 *
 * @wordpress-plugin
 * Plugin Name:       WP Improvements Snippets
 * Plugin URI:        https://everaldo.dev/plugins/wp-improvements-snippets/
 * Description:       Custom snippets from improvements WP for our daily use.
 * Version:           0.0.1
 * Author:            Everaldo Matias
 * Author URI:        https://everaldo.dev/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-improvements-snippets
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Plugin version.
 */
define( 'WPIS_VERSION', '0.0.1' );

/**
 * Plugin path
 */
define( 'WPIS_PATH', plugin_dir_path( __FILE__ ) );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-improvements-snippets.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    0.0.1
 */
function run_wp_improvements_snippets() {

	$plugin = new WP_Improvements_Snippets();
	$plugin->run();

}
run_wp_improvements_snippets();
