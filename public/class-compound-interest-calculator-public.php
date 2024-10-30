<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://www.indianic.com
 * @since      1.0.0
 *
 * @package    Compound_Interest_Calculator
 * @subpackage Compound_Interest_Calculator/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Compound_Interest_Calculator
 * @subpackage Compound_Interest_Calculator/public
 * @author     indianic <help@indianic.com>
 */
class Compound_Interest_Calculator_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-cicw-widget.php';
	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/compound-interest-calculator-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
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
		global $cicw_title, $cicw_amount_text, $cicw_year_text, $cicw_interest_text, $cicw_currency_text, $cicw_primary_color, $cicw_secondary_color, $cicw_tertiary_color,
$cicw_range_color;
		wp_enqueue_script( $this->plugin_name.'chart-js', plugin_dir_url( __FILE__ ) . 'js/chart.min.js', array( 'jquery' ), $this->version, true );
		wp_enqueue_script( $this->plugin_name.'js', plugin_dir_url( __FILE__ ) . 'js/compound-interest-calculator-public.js', array( 'jquery' ), $this->version, true );
		//wp_enqueue_script( $this->plugin_name.'js', plugin_dir_url( __FILE__ ) . 'js/compound-interest-calculator-public.js', array( 'jquery' ), $this->version, true );
		wp_localize_script( $this->plugin_name.'js', 'cicw_front_object',
		array( 
			'ajaxurl' => admin_url( 'admin-ajax.php' ),
			'cicw_title' => $cicw_title,
			'cicw_amount_text' => $cicw_amount_text,
			'cicw_year_text' => $cicw_year_text,
			'cicw_currency_text' => $cicw_currency_text,
			'cicw_primary_color' => $cicw_primary_color,
			'cicw_secondary_color' => $cicw_secondary_color,
			'cicw_tertiary_color' => $cicw_tertiary_color,
		));

	}

	public function register_shortcodes() {
		add_shortcode( 'cicw_shortcode', array( $this, 'shortcode_function') );
	}
	public function register_settings() {
		include( plugin_dir_path( __FILE__ ) . 'cicw_setting.php' );
		 	 
	}
	public function cicw_register_widgets() {
		register_widget( 'cicw_Widget' );
	}

        public function shortcode_function() {
            //echo plugin_dir_path( __FILE__ ) . 'front.php';
            if(!is_admin()) {
        $html  =            include( plugin_dir_path( __FILE__ ) . 'front.php' );
        return $html;
            }
            //Get all options value
        }

}

