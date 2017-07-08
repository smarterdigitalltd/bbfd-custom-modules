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
define( 'BBFD_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'BBFD_PLUGIN_URL', plugins_url( '/', __FILE__ ) );

/**
 * Load modules
 *
 * @since   1.0.0
 */
add_action( 'init', function () {
    // We'll include our modules here
} );