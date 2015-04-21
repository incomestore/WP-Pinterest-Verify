<?php

/**
 * Pinterest Verify
 *
 * @package   PVR
 * @author    Phil Derksen <pderksen@gmail.com>, Nick Young <mycorpweb@gmail.com>
 * @license   GPL-2.0+
 * @link      http://pinplugins.com
 * @copyright 2013-2015 Phil Derksen
 *
 * @wordpress-plugin
 * Plugin Name: Pinterest Verify
 * Plugin URI: http://pinplugins.com/pinterest-website-verification/
 * Description: Verify your website with Pinterest by inserting a meta tag on your front page (no coding required).
 * Version: 1.0.4
 * Author: Phil Derksen
 * Author URI: http://philderksen.com
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * GitHub Plugin URI: https://github.com/pderksen/WP-Pinterest-Verify
 * Text Domain: pvr
 * Domain Path: /languages/
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'PVR_MAIN_FILE' ) ) {
	define( 'PVR_MAIN_FILE', __FILE__ );
}

require_once( plugin_dir_path( __FILE__ ) . 'class-pinterest-verify.php' );

// Register hooks that are fired when the plugin is activated, deactivated, and uninstalled, respectively.
register_activation_hook( __FILE__, array( 'Pinterest_Verify', 'activate' ) );

Pinterest_Verify::get_instance();
