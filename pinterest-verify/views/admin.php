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

			<h3>Screenshots & Instructions Coming Soon!</h3>

		</div><!-- #pvr-settings-content -->

		<div id="pvr-settings-sidebar">
			<?php //include( 'admin-sidebar.php' ); ?>
		</div>
	</div>

</div><!-- .wrap -->
