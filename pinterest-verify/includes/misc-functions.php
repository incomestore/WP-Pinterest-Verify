<?php
/**
 * Define plugin reusable functions.
 *
 * @package    PVR
 * @subpackage includes
 * @author     Phil Derksen <pderksen@gmail.com>, Nick Young <mycorpweb@gmail.com>
 */

/**
 * Function to return the number of PIB Lite downloads from wordpress.org
 * 
 * @since 1.0.2
 * 
 */
function pvr_get_pib_downloads() {
	
	require_once( ABSPATH . 'wp-admin/includes/plugin-install.php' );
	
	$plugin_info = plugins_api( 'plugin_information', array( 'slug' => 'pinterest-pin-it-button' ) );
	
	return number_format_i18n( $plugin_info->downloaded );
}