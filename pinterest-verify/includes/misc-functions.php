<?php
/**
 * Define plugin reusable functions.
 *
 * @package    PVR
 * @subpackage includes
 * @author     Phil Derksen <pderksen@gmail.com>, Nick Young <mycorpweb@gmail.com>
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Google Analytics campaign URL.
 *
 * @since     1.0.2
 *
 * @param   string  $base_url Plain URL to navigate to
 * @param   string  $source   GA "source" tracking value
 * @param   string  $medium   GA "medium" tracking value
 * @param   string  $campaign GA "campaign" tracking value
 * @return  string  $url     Full Google Analytics campaign URL
 */
function pvr_ga_campaign_url( $base_url, $source, $medium, $campaign ) {
	// $medium examples: 'sidebar_link', 'banner_image'

	$url = add_query_arg( array(
		'utm_source'   => $source,
		'utm_medium'   => $medium,
		'utm_campaign' => $campaign
	), $base_url );

	return $url;
}

/**
 * Render RSS items from pinplugins.com in unordered list.
 * http://codex.wordpress.org/Function_Reference/fetch_feed
 * Based on pib_rss_news() in Pin it button plugin.
 *
 * @since   1.0.2
 */

function pvr_rss_news() {
	// Get RSS Feed(s).
	include_once( ABSPATH . WPINC . '/feed.php' );

	// Get a SimplePie feed object from the specified feed source.
	$rss = fetch_feed( PINPLUGIN_BASE_URL . 'feed/' );

	if ( ! is_wp_error( $rss ) ) {
		// Checks that the object is created correctly.
		// Figure out how many total items there are, but limit it to 5.
		$maxitems = $rss->get_item_quantity( 3 );

		// Build an array of all the items, starting with element 0 (first element).
		$rss_items = $rss->get_items( 0, $maxitems );
	}
	?>

	<ul>
		<?php if ($maxitems == 0): ?>
			<li><?php _e( 'No items.', 'pvr' ); ?></li>
		<?php else: ?>
			<?php
			// Loop through each feed item and display each item as a hyperlink.
			foreach ( $rss_items as $item ): ?>
				<?php $post_url = add_query_arg( array(

					// Google Analytics campaign URL
					'utm_source'   => 'pinterest_verify',
					'utm_medium'   => 'sidebar_link',
					'utm_campaign' => 'blog_post_link'

				), esc_url( $item->get_permalink() ) ); ?>

				<li>
					&raquo; <a href="<?php echo $post_url; ?>" target="_blank"><?php echo esc_html( $item->get_title() ); ?></a>
				</li>
			<?php endforeach; ?>
		<?php endif; ?>
	</ul>

<?php
}

/**
 * Check if the "Pin It" Button Pro plugin is active.
 *
 * @since   1.0.2
 *
 * @return  boolean
 */
function pvr_is_pib_pro_active() {
	return class_exists( 'Pinterest_Pin_It_Button_Pro' );
}
