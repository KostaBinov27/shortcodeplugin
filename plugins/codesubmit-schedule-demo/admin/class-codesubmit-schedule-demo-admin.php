<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://codesubmit.io
 * @since      1.0.0
 *
 * @package    Codesubmit_Schedule_Demo
 * @subpackage Codesubmit_Schedule_Demo/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Codesubmit_Schedule_Demo
 * @subpackage Codesubmit_Schedule_Demo/admin
 * @author     CodeSubmit <hello@codesubmit.io>
 */
class Codesubmit_Schedule_Demo_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
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
		 * defined in Codesubmit_Schedule_Demo_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Codesubmit_Schedule_Demo_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/codesubmit-schedule-demo-admin.css', array(), $this->version, 'all' );

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
		 * defined in Codesubmit_Schedule_Demo_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Codesubmit_Schedule_Demo_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/codesubmit-schedule-demo-admin.js', array( 'jquery' ), $this->version, false );

	}

	public function register_top_level_menu_api(){
		add_menu_page(
			'Schedule Timing',
			'Schedule Timing',
			'manage_options',
			'schedule-settings',
			array($this, 'shecdule_dashboard_settings_view'),
			'',
		);
	}
	
	public function shecdule_dashboard_settings_view(){
		include( plugin_dir_path( __FILE__ ) . 'partials/codesubmit-schedule-demo-admin-display.php');
	}
	
	public function saveSchedule(){
		if (isset($_POST['saveSchedule'])){
			$timeavaliablehoursfrom   = $_POST['timeavaliablehoursfrom'];
			$timeavaliableminutesfrom = $_POST['timeavaliableminutesfrom'];
			$ampmfrom 				  = $_POST['ampmfrom'];
			$ampmtoo 				  = $_POST['ampmtoo'];
			$timeavaliablehoursto     = $_POST['timeavaliablehoursto'];
			$timeavaliableminutesto   = $_POST['timeavaliableminutesto'];
			$phoneNumber 			  = $_POST['phoneNumber'];
			$days		 			  = $_POST['days'];

			if (! get_option('days')) {
				add_option('days', $days);
			} else {
				update_option('days', $days);
			}

			if (! get_option('timeavaliablehoursfrom')) {
				add_option('timeavaliablehoursfrom', $timeavaliablehoursfrom);
			} else {
				update_option('timeavaliablehoursfrom', $timeavaliablehoursfrom);
			}
			
			if (! get_option('timeavaliableminutesfrom')) {
				add_option('timeavaliableminutesfrom', $timeavaliableminutesfrom);
			} else {
				update_option('timeavaliableminutesfrom', $timeavaliableminutesfrom);
			}
			
			if (! get_option('ampmfrom')) {
				add_option('ampmfrom', $ampmfrom);
			} else {
				update_option('ampmfrom', $ampmfrom);
			}
			
			if (! get_option('ampmtoo')) {
				add_option('ampmtoo', $ampmtoo);
			} else {
				update_option('ampmtoo', $ampmtoo);
			}

			if (! get_option('timeavaliablehoursto')) {
				add_option('timeavaliablehoursto', $timeavaliablehoursto);
			} else {
				update_option('timeavaliablehoursto', $timeavaliablehoursto);
			}

			if (! get_option('timeavaliableminutesto')) {
				add_option('timeavaliableminutesto', $timeavaliableminutesto);
			} else {
				update_option('timeavaliableminutesto', $timeavaliableminutesto);
			}

			if (! get_option('phoneNumber')) {
				add_option('phoneNumber', $phoneNumber);
			} else {
				update_option('phoneNumber', $phoneNumber);
			}
		}
	}
}
