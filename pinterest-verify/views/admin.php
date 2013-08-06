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
if ( ! defined( 'ABSPATH' ) )
	exit;
?>

<div class="wrap">

	<div id="pvr-settings">
		<div id="pvr-settings-content">

			<?php screen_icon( 'pinterest-32' ); ?>
			<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>

			<p>
				<?php _e( 'Copy and paste your verification code from Pinterest to include the proper meta tag on your front page. See screenshots below for further help.', 'pvr' ); ?>
			</p>
			<p>
				<?php _e( 'If you have any caching plugins or options running make sure those are cleared before verifying.', 'pvr' ); ?>
			</p>
			<p>
				<?php _e( 'You should now be able to verify your site with Pinterest.', 'pvr' ); ?>
			</p>

			<form method="post" action="options.php">
				<?php

				settings_fields( 'pvr_settings_general' );
				do_settings_sections( 'pvr_settings_general' );

				submit_button();
				?>
			</form>

			<h3><?php _e( 'Step by Step Verification Instructions', 'pvr' ); ?></h3>

			<p>
				1. Complete steps 1 and 2 of <a href="http://business.pinterest.com/verify/" target="_blank">Pinterest's Verify Your Website Instructions</a>.
			</p>
			<p>
				2. For the next step, click the <strong>Verify with a Meta Tag</strong> link.<br/>
				<img src="../assets/pinterest-verify-1.png" />
				<img src="<?php echo plugins_url( 'assets/pinterest-verify-1.png', __FILE__ ); ?>" />
			</p>
			<p>
				3. Now select the 32-character unique code within the quotes in <code>content=""</code> and copy.<br/>
				<img src="../assets/pinterest-verify-2.png" />
			</p>
			<p>
				4. Finally, paste this 32-character code into the textbox above and click Save Changes.
			</p>

		</div><!-- #pvr-settings-content -->

		<div id="pvr-settings-sidebar">
			<?php include( 'admin-sidebar.php' ); ?>
		</div>
	</div>

</div><!-- .wrap -->
