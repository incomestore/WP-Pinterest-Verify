<?php

/**
 * Represents the view for the administration dashboard.
 *
 * This includes the header, options, and other information that should provide
 * The User Interface to the end user.
 *
 * @package    PVR
 * @subpackage Views
 * @author     Phil Derksen <pderksen@gmail.com>
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<div class="wrap">

	<div id="pvr-settings">
		<div id="pvr-settings-content">
			<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>

			<p>
				<?php _e( 'Copy and paste your verification code from Pinterest to include the proper meta tag on your front page. See screenshots below for further help.', 'pvr' ); ?>
			</p>
			<p>
				<?php _e( 'If you have any caching plugins or options running make sure those are cleared before verifying.', 'pvr' ); ?>
			</p>
			<p>
				<?php _e( 'At this point you should now be able to verify your site with Pinterest.', 'pvr' ); ?>
			</p>

			<form method="post" action="options.php">
				<?php

				settings_fields( 'pvr_settings_general' );
				do_settings_sections( 'pvr_settings_general' );

				submit_button();
				?>
			</form>

			<h3><?php _e( 'Step by Step Verification Instructions', 'pvr' ); ?></h3>

			<!-- TODO localize, add image borders -->

			<p>
				<?php
					printf( __( '1. Go to Pinterest\'s %1$s and complete steps 1 and 2.', 'pvr' ), 
							'<strong><a href="http://business.pinterest.com/verify/" target="_blank">' . __( 'Verify Your Website', 'pvr' ) . '</a></strong>' );
				?>
			</p>
			<p>
				<?php
					printf( __( '2. Next click %1$s at the bottom of this popup.', 'pvr' ), '<strong>' . __( 'Verify with a meta tag', 'pvr' ) . '</strong>' );
				?>
				<br/>
				<img class="pvr-screenshot" src="<?php echo PVR_PLUGIN_URL . 'assets/pinterest-verify-1.png'; ?>" />
			</p>
			<p>
				<?php
					printf( __( '3. Now select the 32-character unique code within the quotes in %1$s and copy.', 'pvr' ), '<code>content=""</code>' );
				?>
				<br/>
				<img class="pvr-screenshot" src="<?php echo PVR_PLUGIN_URL . 'assets/pinterest-verify-2.png'; ?>" />
			</p>
			<p>
				<?php
					printf( __( '4. Come back to this settings page and paste the 32-character code into the textbox above, then click %1$s.', 'pvr' ), 
							'<strong>' . __( 'Save Changes', 'pvr' ) . '</strong>' ); 
				?>
			</p>
			<p>
				<?php
					printf( __( '5. Finally, go back to Pinterest and click %1$s. That should be it!', 'pvr' ), 
							'<strong>' . __( 'Complete Verification', 'pvr' ) . '</strong>' );
				?>
			</p>

		</div><!-- #pvr-settings-content -->

		<div id="pvr-settings-sidebar">
			<?php include( 'admin-sidebar.php' ); ?>
		</div>
	</div>

</div><!-- .wrap -->
