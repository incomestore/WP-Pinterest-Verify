<?php

/**
 * Sidebar portion of the administration dashboard view.
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

<?php if ( ! pvr_is_pib_pro_active() ): // If "Pin It" Button Pro is already active don't show. ?>

	<!-- Use some built-in WP admin theme styles. -->

	<div class="sidebar-container metabox-holder">
		<div class="postbox">
			<h3 class="wp-ui-primary"><span><?php _e( 'Need an awesome "Pin It" button?', 'pvr' ); ?></span></h3>
			<div class="inside">
				<div class="main">
					<ul>
						<li><div class="dashicons dashicons-yes"></div> <?php _e( 'Add "Pin It" buttons on image hover', 'pvr' ); ?></li>
						<li><div class="dashicons dashicons-yes"></div> <?php _e( 'Add "Pin It" buttons under images', 'pvr' ); ?></li>
						<li><div class="dashicons dashicons-yes"></div> <?php _e( '30 custom "Pin It" button designs', 'pvr' ); ?></li>
						<li><div class="dashicons dashicons-yes"></div> <?php _e( 'Upload your own button designs', 'pvr' ); ?></li>
						<li><div class="dashicons dashicons-yes"></div> <?php _e( 'Twitter, Facebook & G+ buttons', 'pvr' ); ?></li>
						<li><div class="dashicons dashicons-yes"></div> <?php _e( 'Use with featured images', 'pvr' ); ?></li>
						<li><div class="dashicons dashicons-yes"></div> <?php _e( 'Use with custom post types', 'pvr' ); ?></li>

						<li><div class="dashicons dashicons-yes"></div> <?php _e( 'Automatic updates & email support', 'pvr' ); ?></li>
					</ul>

					<p class="last-blurb centered">
						<?php _e( 'Get all of these and more with Pinterest "Pin It" Button Pro!', 'pvr' ); ?>
					</p>

					<div class="centered">
						<a href="<?php echo pvr_ga_campaign_url( PINPLUGIN_BASE_URL . 'pin-it-button-pro/', 'pinterest_verify', 'sidebar_link', 'pro_upgrade' ); ?>"
						   class="button-primary button-large" target="_blank">
							<?php _e( 'Get "Pin It" Pro Now', 'pvr' ); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php endif; // End "Pin It" Button Pro check. ?>

<div class="sidebar-container metabox-holder">
	<div class="postbox">
		<div class="inside">
			<p>
				<?php _e( 'Your review helps more folks find our plugin. Thanks so much!', 'pvr' ); ?>
			</p>
			<div class="centered">
				<a href="https://wordpress.org/support/view/plugin-reviews/pinterest-verify#postform" class="button-primary" target="_blank">
					<?php _e( 'Review this Plugin Now', 'pvr' ); ?></a>
			</div>
		</div>
	</div>
</div>

<div class="sidebar-container metabox-holder">
	<div class="postbox">
		<div class="inside">
			<ul>
				<li>
					<div class="dashicons dashicons-arrow-right-alt2"></div>
					<a href="https://wordpress.org/support/plugin/pinterest-verify" target="_blank">
						<?php _e( 'Community support forums', 'pvr' ); ?></a>
				</li>
			</ul>
		</div>
	</div>
</div>

<div class="sidebar-container metabox-holder">
	<div class="postbox">
		<h3><?php _e( 'Recent News from pinplugins.com', 'pvr' ); ?></h3>
		<div class="inside">
			<?php pvr_rss_news(); ?>
		</div>
	</div>
</div>
