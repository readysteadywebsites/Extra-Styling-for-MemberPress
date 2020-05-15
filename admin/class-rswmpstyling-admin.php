<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    RSW_MP_Styling
 * @subpackage RSW_MP_Styling/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    RSW_MP_Styling
 * @subpackage RSW_MP_Styling/admin
 * @author     Your Name <email@example.com>
 */
class RSW_MP_Styling_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $RSW_MP_Styling    The ID of this plugin.
	 */
	private $RSW_MP_Styling;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $RSW_MP_Styling       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $RSW_MP_Styling, $version ) {

		$this->RSW_MP_Styling = $RSW_MP_Styling;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in RSW_MP_Styling_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The RSW_MP_Styling_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->RSW_MP_Styling, plugin_dir_url( __FILE__ ) . 'css/rswmpstyling-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in RSW_MP_Styling_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The RSW_MP_Styling_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		//wp_enqueue_script( $this->RSW_MP_Styling, plugin_dir_url( __FILE__ ) . 'js/rswmpstyling-admin.js', array( 'jquery' ), $this->version, false );

	}

}
