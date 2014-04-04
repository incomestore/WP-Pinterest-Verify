<?php

/**
 * Show notice after plugin install/activate in admin dashboard.
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

<style>
	#pvr-install-notice .button-primary,
	#pvr-install-notice .button-secondary {
		margin-left: 15px;
	}
</style>

<div id="pvr-install-notice" class="updated">
	<p>
		<?php echo $this->get_plugin_title() . __( ' is now installed.', 'pvr' ); ?>
		<a href="<?php echo add_query_arg( 'page', $this->plugin_slug, admin_url( 'admin.php' ) ); ?>" class="button-primary"><?php _e( 'Setup Pinterest Verification Now', 'pvr' ); ?></a>
		<a href="<?php echo add_query_arg( 'pvr-dismiss-install-nag', 1 ); ?>" class="button-secondary"><?php _e( 'Hide this', 'pvr' ); ?></a>
	</p>
</div>
