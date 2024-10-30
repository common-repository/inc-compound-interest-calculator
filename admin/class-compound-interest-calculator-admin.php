<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://www.indianic.com
 * @since      1.0.0
 *
 * @package    Compound_Interest_Calculator
 * @subpackage Compound_Interest_Calculator/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Compound_Interest_Calculator
 * @subpackage Compound_Interest_Calculator/admin
 * @author     indianic <help@indianic.com>
 */
class Compound_Interest_Calculator_Admin {

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
		 * defined in Compound_Interest_Calculator_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Compound_Interest_Calculator_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		wp_enqueue_style( 'wp-color-picker' );
		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/compound-interest-calculator-admin.css', array(), $this->version, 'all' );

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
		 * defined in Compound_Interest_Calculator_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Compound_Interest_Calculator_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		wp_enqueue_script( 'wp-color-picker');
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/compound-interest-calculator-admin.js', array( 'jquery' ), $this->version, false );

	}
	public function add_admin_menu()
    {
        // add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
        add_menu_page( "Compound Interest Calculator", "Calculator", 'manage_options', $this->plugin_name . '-cic', array( $this, 'page_cic' ),'dashicons-calculator');
	}
	public function cic_register_setting(){
		register_setting(
            'cic-settings-group', // Option group
            'cic_title', // Option name
            array( $this, 'sanitize' ) // Sanitize
		);
		register_setting(
            'cic-settings-group', // Option group
            'cic_amount_text', // Option name
            array( $this, 'sanitize' ) // Sanitize
		);
		register_setting(
            'cic-settings-group', // Option group
            'cic_year_text', // Option name
            array( $this, 'sanitize' ) // Sanitize
		);
		register_setting(
            'cic-settings-group', // Option group
            'cic_interest_text', // Option name
            array( $this, 'sanitize' ) // Sanitize
		);
		register_setting(
            'cic-settings-group', // Option group
            'cic_currency_text', // Option name
            array( $this, 'sanitize' ) // Sanitize
		);
		register_setting(
            'cic-settings-group', // Option group
            'cic_primary_color', // Option name
            array( $this, 'sanitize' ) // Sanitize
		);
		register_setting(
            'cic-settings-group', // Option group
            'cic_secondary_color', // Option name
            array( $this, 'sanitize' ) // Sanitize
		); 
		register_setting(
            'cic-settings-group', // Option group
            'cic_tertiary_color', // Option name
            array( $this, 'sanitize' ) // Sanitize
		);
        register_setting(
            'cic-settings-group', // Option group
            'cic_range_color', // Option name
            array( $this, 'sanitize' ) // Sanitize
        );

        register_setting(
            'cic-settings-group', // Option group
            'cic_graph_select', // Option name
            array( $this, 'sanitize' ) // Sanitize
        );




    }
	
	
	public function page_cic() {
        include( plugin_dir_path( __FILE__ ) . 'setting.php' );
    }

}
