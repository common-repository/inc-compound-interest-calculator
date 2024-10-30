<?php

/** 
 *
 * @link              https://www.indianic.com
 * @since             1.0.0
 * @package           Compound_Interest_Calculator
 *
 * @wordpress-plugin
 * Plugin Name:       Interest Calculator (LOAN, SIP, FD, BANK)
 * Plugin URI:        https://www.indianic.com
 * Description:       Its simple plugin that calculate interest.
 * Version:           1.0.0
 * Author:            MageINIC
 * Author URI:        https://www.indianic.com/enquiry
 * License:           GPL-3.0
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       compound-interest-calculator
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}


define( 'COMPOUND_INTEREST_CALCULATOR_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-compound-interest-calculator-activator.php
 */
function activate_compound_interest_calculator() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-compound-interest-calculator-activator.php';
	Compound_Interest_Calculator_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-compound-interest-calculator-deactivator.php
 */
function deactivate_compound_interest_calculator() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-compound-interest-calculator-deactivator.php';
	Compound_Interest_Calculator_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_compound_interest_calculator' );
register_deactivation_hook( __FILE__, 'deactivate_compound_interest_calculator' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-compound-interest-calculator.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_compound_interest_calculator() {

	$plugin = new Compound_Interest_Calculator();
	 
	$plugin->run();

}
run_compound_interest_calculator();
