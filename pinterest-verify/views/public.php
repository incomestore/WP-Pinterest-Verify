<?php

/**
 * Represents the view for the public-facing component of the plugin.
 *
 * @package    PVR
 * @subpackage Views
 * @author     Phil Derksen <pderksen@gmail.com>
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Render Pinterest verification META tag to page <head> section.
 *
 * @since   1.0.0
 */
function pvr_render_meta_tag() {
	global $pvr_options;

	$ver_code = ( isset( $pvr_options['verification_code'] ) ? $pvr_options['verification_code'] : '' );

	// Output only on front page of site.
	if ( is_front_page() && ( $ver_code != '' ) )
		echo '<meta name="p:domain_verify" content="' . htmlspecialchars( $ver_code ) . '"/>' . "\n";

	return;
}
add_action( 'wp_head', 'pvr_render_meta_tag' );
