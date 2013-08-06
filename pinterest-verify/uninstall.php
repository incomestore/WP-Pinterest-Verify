<?php
/**
 * Fired when the plugin is uninstalled.
 *
 * @package PVR
 * @author  Phil Derksen <pderksen@gmail.com>
 */

// If uninstall, not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

// Remove option records from options table.
delete_option( 'pvr_settings_general' );
delete_option( 'pvr_show_admin_install_notice' );
