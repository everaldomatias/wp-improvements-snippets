<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://everaldo.dev/plugins/wp-improvements-snippets/
 * @since      0.0.1
 *
 * @package    WP_Improvements_Snippets
 * @subpackage WP_Improvements_Snippets/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      0.0.1
 * @package    WP_Improvements_Snippets
 * @subpackage WP_Improvements_Snippets/includes
 * @author     Your Name <email@example.com>
 */
class WP_Improvements_Snippets_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    0.0.1
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-improvements-snippets',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
