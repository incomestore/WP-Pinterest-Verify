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

<?php if( ! pvr_is_pib_active() ) { ?>
<div class="sidebar-container">
	<h3 class="sidebar-title-large"><?php _e( 'Need more Pinterest traffic?', 'pvr' ); ?></h3>

	<div class="sidebar-content">
		<p>
			<?php _e( 'Check out our Pinterest "Pin It" Button plugin. Now with <strong>' . pvr_get_pib_downloads() . '</strong> downloads!', 'pvr' ); ?>
		</p>

		<p class="small-text">
			<a href="<?php echo add_query_arg( array(
				'tab'  => 'search',
				'type' => 'term',
				's'    => urlencode('"pinterest pin it button"')
			), admin_url( 'plugin-install.php' ) ); ?>" class="btn btn-small btn-block btn-danger">
				<?php _e( 'Get the Free "Pin It" Button plugin', 'pvr' ); ?></a><br/>
			<a href="http://wordpress.org/plugins/pinterest-pin-it-button/" target="_blank"><?php _e( 'Visit the "Pin It" Button plugin page', 'pvr' ); ?></a>
		</p>
	</div>
</div>
<?php } ?>

<div class="sidebar-container">
	<div class="sidebar-content">
		<p>
			<?php _e( "Help us get noticed (and boost our egos) with a rating and short review.", 'pvr' ); ?>
		</p>

		<a href="http://wordpress.org/support/view/plugin-reviews/pinterest-verify" target="_blank">
			<?php _e( 'Rate this plugin on WordPress.org', 'pvr' ); ?></a>
	</div>
</div>
