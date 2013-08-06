<?php

/**
 * Sidebar portion of the administration dashboard view.
 *
 * @package    PVR
 * @subpackage Views
 * @author     Phil Derksen <pderksen@gmail.com>
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) )
	exit;
?>

<div class="sidebar-container">
	<h3 class="sidebar-title-large"><?php _e( 'Need more Pinterest traffic?', 'pvr' ); ?></h3>

	<div class="sidebar-content">
		<p>
			<?php _e( 'Check out our Pinterest "Pin It" Button plugin. Now with over <strong>150,000</strong> downloads!', 'pvr' ); ?>
		</p>

		<p class="small-text">
			<a href="<?php echo add_query_arg( array(
					'tab' => 'search',
					'type' => 'author',
					's' => 'pderksen'
				), admin_url( 'plugin-install.php' ) ); ?>" class="btn btn-small btn-block btn-danger">
				<?php _e( 'Get the Free "Pin It" Button plugin', 'pvr' ); ?></a><br/>
			<a href="http://wordpress.org/plugins/pinterest-pin-it-button/" target="_blank"><?php _e( 'Visit the "Pin It" Button plugin page', 'pvr' ); ?></a>
		</p>
	</div>
</div>

<div class="sidebar-container">
	<div class="sidebar-content">
		<p>
			<?php _e( "Help us get noticed (and boost our egos) with a rating and short review.", 'pvr' ); ?>
		</p>

		<a href="http://wordpress.org/support/view/plugin-reviews/pinterest-verify" class="btn btn-small btn-block btn-inverse" target="_blank">
			<?php _e( 'Rate this plugin on WordPress.org', 'pvr' ); ?></a>
	</div>
</div>
