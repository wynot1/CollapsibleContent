<?php
/**
 * Collapsible Content plugin
 *
 * @package WynotWebdev\CollapsibleContent
 * @since   1.0.0
 * @author  wynot
 * @link    http://example.com
 * @license GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: Collapsible Content
 * Plugin URI:
 * Description: Collapsible Content is a WordPress Plugin that shows and hides hidden content.  Practical examples include Q&As, FAQs, hints, marketing teasers, and more. Click the icon to open and reveal the content. Click again to close and hide it.
 * Version: 1.0.0
 * Author: wynot
 * Author URI: http://example.com
 * Text Domain: collapsible_content
 * Requires WP: 4.7
 * Requires PHP: 5.6
 */

/*
This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see {License URI}.
*/
namespace WynotWebdev\CollapsibleContent;

if ( ! defined( 'ABSPATH' ) ) {
	die( "Oh, silly, there's nothing to see here." );
}

define( 'COLLAPSIBLE_CONTENT_PLUGIN', __FILE__ );
define( 'COLLAPSIBLE_CONTENT_DIR', plugin_dir_path( __FILE__ ) );
$plugin_url = plugin_dir_url( __FILE__ );
if ( is_ssl() ) {
	$plugin_url = str_replace( 'http://', 'https://', $plugin_url );
}
define( 'COLLAPSIBLE_CONTENT_URL', $plugin_url );
define( 'COLLAPSIBLE_CONTENT_TEXT_DOMAIN', 'collapsible_content' );

include( __DIR__ . '/src/plugin.php' );
