<?php
/**
 * Define plugin reusable functions.
 *
 * @package    PVR
 * @subpackage includes
 * @author     Phil Derksen <pderksen@gmail.com>, Nick Young <mycorpweb@gmail.com>
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

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

/**
 * Function to check if PIB Lite or PIB Pro are active
 * 
 * @since 1.0.2
 * 
 * @return bool
 */
function pvr_is_pib_active() {
	if( class_exists( 'Pinterest_Pin_It_Button' ) || class_exists( 'Pinterest_Pin_It_Button_Pro' ) ) 
		return true;
	
	return false;
}
