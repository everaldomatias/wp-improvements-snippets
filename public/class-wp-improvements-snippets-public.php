<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://example.com
 * @since      0.0.1
 *
 * @package    WP_Improvements_Snippets
 * @subpackage WP_Improvements_Snippets/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    WP_Improvements_Snippets
 * @subpackage WP_Improvements_Snippets/public
 * @author     Your Name <email@example.com>
 */
class WP_IMPROVEMENTS_SNIPPETS_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    0.0.1
	 * @access   private
	 * @var      string    $WP_Improvements_Snippets    The ID of this plugin.
	 */
	private $WP_Improvements_Snippets;

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
	 * @param      string    $WP_Improvements_Snippets       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $WP_Improvements_Snippets, $version ) {

		$this->WP_Improvements_Snippets = $WP_Improvements_Snippets;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    0.0.1
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in WP_IMPROVEMENTS_SNIPPETS_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The WP_IMPROVEMENTS_SNIPPETS_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->WP_Improvements_Snippets, plugin_dir_url( __FILE__ ) . 'css/wp-improvements-snippets-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    0.0.1
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in WP_IMPROVEMENTS_SNIPPETS_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The WP_IMPROVEMENTS_SNIPPETS_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->WP_Improvements_Snippets, plugin_dir_url( __FILE__ ) . 'js/wp-improvements-snippets-public.js', array( 'jquery' ), $this->version, false );

	}

}
