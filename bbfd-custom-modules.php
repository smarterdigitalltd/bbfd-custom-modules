<?php

/**
 * Plugin Name: Beaver Builder for Developers - Custom Modules
 * Plugin URI:  https://beaverdevs.com
 * Description: Custom modules plugin for Beaver Builder for Developers course
 * Version:     1.0.0
 * Author:      Doug Belchamber
 * Author URI:  https://wpdevelopers.co.uk
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) || ! class_exists( 'FLBuilder' ) ) {
    die;
}

/**
 * Define constants
 *
 * @since   1.0.0
 */
define( 'BBFD_PLUGIN_DIR', plugin_dir_path( __FILE__ ) ); // eg. wp-content/plugins/bbfd-custom-modules/
define( 'BBFD_MODULES_DIR', BBFD_PLUGIN_DIR . 'modules/' ); // eg. wp-content/plugins/bbfd-custom-modules/modules

define( 'BBFD_PLUGIN_URL', plugins_url( '/', __FILE__ ) ); // eg. http://mywebsite.com/wp-content/plugins/bbfd-custom-modules/
define( 'BBFD_MODULES_URL', BBFD_PLUGIN_URL. 'modules/', __FILE__ ); // eg. http://mywebsite.com/wp-content/plugins/bbfd-custom-modules/modules/

/**
 * Load modules
 *
 * @since   1.0.0
 */
add_action( 'init', function () {
    // We'll include our modules here
} );