<?php

/**
 * Pinterest Verify
 *
 * Verify your website with Pinterest by inserting a meta tag on your front page (no coding required).
 *
 * @package   PVR
 * @author    Phil Derksen <pderksen@gmail.com>
 * @license   GPL-2.0+
 * @link      http://philderksen.com
 * @copyright 2013-2014 Phil Derksen
 *
 * @wordpress-plugin
 * Plugin Name: Pinterest Verify
 * Plugin URI: http://pinterestplugin.com/pinterest-website-verification/
 * Description: Verify your website with Pinterest by inserting a meta tag on your front page (no coding required).
 * Version: 1.0.2
 * Author: Phil Derksen
 * Author URI: http://philderksen.com
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) )
	exit;

// Require main class file
require_once( plugin_dir_path( __FILE__ ) . 'class-pinterest-verify.php' );

// Register hooks that are fired when the plugin is activated, deactivated, and uninstalled, respectively.
register_activation_hook( __FILE__, array( 'Pinterest_Verify', 'activate' ) );
//register_deactivation_hook( __FILE__, array( 'Pinterest_Verify', 'deactivate' ) );

// Get class instance
Pinterest_Verify::get_instance();

define( 'PVR_MAIN_FILE', __FILE__ );

