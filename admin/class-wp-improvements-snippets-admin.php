<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://everaldo.dev/plugins/wp-improvements-snippets/
 * @since      0.0.1
 *
 * @package    WP_Improvements_Snippets
 * @subpackage WP_Improvements_Snippets/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    WP_Improvements_Snippets
 * @subpackage WP_Improvements_Snippets/admin
 * @author     Everaldo Matias <aoseudispor@everaldo.dev>
 */
class WP_Improvements_Snippets_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    0.0.1
	 * @access   private
	 * @var      string    $wp_improvements_snippets    The ID of this plugin.
	 */
	private $wp_improvements_snippets;

	/**
	 * The version of this plugin.
	 *
	 * @since    0.0.1
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    0.0.1
	 * @param      string    $wp_improvements_snippets       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $wp_improvements_snippets, $version ) {

		$this->wp_improvements_snippets = $wp_improvements_snippets;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    0.0.1
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in WP_Improvements_Snippets_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The WP_Improvements_Snippets_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->wp_improvements_snippets, plugin_dir_url( __FILE__ ) . 'css/wp-improvements-snippets-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    0.0.1
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in WP_Improvements_Snippets_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The WP_Improvements_Snippets_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->wp_improvements_snippets, plugin_dir_url( __FILE__ ) . 'js/wp-improvements-snippets-admin.js', array( 'jquery' ), $this->version, false );

	}

}
