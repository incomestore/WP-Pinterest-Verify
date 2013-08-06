<?php

/**
 * Register Settings
 *
 * @package    PVR
 * @subpackage Views
 * @author     Phil Derksen <pderksen@gmail.com>
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) )
	exit;

function pvr_register_settings() {
	$pvr_settings = array(
		/* General Settings */
		'general' => array(
			'verification_code' => array(
				'id' => 'verification_code',
				'name' => __( 'Pinterest Verification Code', 'pvr' ),
				'desc' => __( 'This is your website\'s unique 32-character code. It is the code shown within ', 'pvr' ) .
					'<code>content=""</code>' .
					__( ' inside the meta tag given to you.', 'pvr' ),
				'type' => 'text'
			)
		)
	);

	/* If the options do not exist then create them for each section */
	if ( false == get_option( 'pvr_settings_general' ) ) {
		add_option( 'pvr_settings_general' );
	}

	/* Add the General Settings section */
	add_settings_section(
		'pvr_settings_general',

		// Don't need a section header yet.
		// __( 'General Settings', 'pvr' ),
		'',

		'__return_false',
		'pvr_settings_general'
	);

	foreach ( $pvr_settings['general'] as $option ) {
		add_settings_field(
			'pvr_settings_general[' . $option['id'] . ']',
			$option['name'],
			function_exists( 'pvr_' . $option['type'] . '_callback' ) ? 'pvr_' . $option['type'] . '_callback' : 'pvr_missing_callback',
			'pvr_settings_general',
			'pvr_settings_general',
			array(
				'id' => $option['id'],
				'desc' => $option['desc'],
				'name' => $option['name'],
				'section' => 'general',
				'size' => isset( $option['size'] ) ? $option['size'] : null,
				'options' => isset( $option['options'] ) ? $option['options'] : '',
				'std' => isset( $option['std'] ) ? $option['std'] : '',

				// Link label to input if text, select, textarea, etc.
				// TODO 'label_for' => 'pvr_settings_general[' . $option['id'] . ']'
				'label_for' => ( in_array( $option['type'], array( 'text', 'select', 'textarea' ) ) ) ? 'pvr_settings_general[' . $option['id'] . ']' : ''
			)
		);
	}

	/* Register all settings or we will get an error when trying to save */
	register_setting( 'pvr_settings_general',		'pvr_settings_general',			'pvr_settings_sanitize' );

}
add_action( 'admin_init', 'pvr_register_settings' );


/*
 * Text Callback
 */
function pvr_text_callback( $args ) {
	global $pvr_options;

	if ( isset( $pvr_options[ $args['id'] ] ) )
		$value = $pvr_options[ $args['id'] ];
	else
		$value = isset( $args['std'] ) ? $args['std'] : '';

	$size = ( isset( $args['size'] ) && ! is_null( $args['size'] ) ) ? $args['size'] : 'regular';
	$html = '<input type="text" class="' . $size . '-text" id="pvr_settings_' . $args['section'] . '[' . $args['id'] . ']" name="pvr_settings_' . $args['section'] . '[' . $args['id'] . ']" value="' . esc_attr( $value ) . '"/>';

	// Render and style description text underneath textarea if it exists.
	if ( ! empty( $args['desc'] ) )
		$html .= '<p class="description">' . $args['desc'] . '</p>';

	echo $html;
}

/*
 * Function we can use to sanitize the input data and return it when saving options
 */
function pvr_settings_sanitize( $input ) {
	add_settings_error( 'pvr-notices', '', __( 'Settings Updated', 'pvr' ), 'updated' );
	return $input;
}

/*
 *  Default callback function if correct one does not exist
 */
function pvr_missing_callback( $args ) {
	printf( __( 'The callback function used for the <strong>%s</strong> setting is missing.', 'pvr' ), $args['id'] );
}

/*
 * Function used to return an array of all of the plugin settings
 */
function pvr_get_settings() {
	$general_settings =	is_array( get_option( 'pvr_settings_general' ) ) ? get_option( 'pvr_settings_general' )  : array();

	return array_merge( $general_settings );
}
