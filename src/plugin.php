<?php
/**
 * Plugin Handler
 *
 * @package namespace WynotWebdev\CollapsibleContent;
 * @since   1.0.0
 * @author  wynot
 * @link    http://example.com
 * @license GNU-2.0+
 */
namespace WynotWebdev\CollapsibleContent;

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_assets');
/**
 * Enqueue the plugin assets (scripts and styles).
 *
 * @return void
 * @since 1.0.0
 *
 */
function enqueue_assets() {
	wp_enqueue_style( 'dashicons' );

	wp_enqueue_script(
		'collapsible-content-plugin-script',
		COLLAPSIBLE_CONTENT_URL . 'assets/dist/js/jquery.plugin.js',
		array( 'jquery' ),
		'1.0.0',
		true
	);
}


/**
 * Autoload plugin files.
 *
 * @return void
 * @since 1.0.0
 *
 */
function autoload() {
	$files = array(
		'shortcode/shortcodes.php',
	);
	foreach ( $files as $file ) {
		include( __DIR__ . '/' . $file );
	}
}
autoload();