<?php

/**
 * A plugin for reminding the WP-Engine user that he is on staging.
 *
 * @package WordPress
 * @subpackage LXB_Staging_Reminder
 * @since LXB_Staging_Reminder 0.1
 * 
 * Plugin Name: LXB Staging Reminder
 * Plugin URI: https://www.lexblog.com
 * Description: A plugin for reminding the WP-Engine user that he is on staging.
 * Author: Scott Fennell
 * Version: 0.1.1
 * Author URI: http://www.scottfennell.org
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2, as 
 * published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */
	
// Peace out if you're trying to access this up front.
if( ! defined( 'ABSPATH' ) ) { exit; }

// Watch out for plugin naming collisions.
if( defined( 'LXB_STAGING_REMINDER' ) ) { exit; }
if( isset( $lxb_staging_reminder ) ) { exit; }

// This is it, in all it's glory:  The "single point of truth" as to whether we are on staging:
if( strstr( DB_NAME, 'snapshot' ) ) {

	// A slug for our plugin.
	define( 'LXB_STAGING_REMINDER', 'LXB_Staging_Reminder' );

	// Establish a value for plugin version to bust file caches.
	define( 'LXB_STAGING_REMINDER_VERSION', '0.1.1' );

	// A constant to define the paths to our plugin folders.
	define( 'LXB_STAGING_REMINDER_FILE', __FILE__ );
	define( 'LXB_STAGING_REMINDER_PATH', trailingslashit( plugin_dir_path( LXB_STAGING_REMINDER_FILE ) ) );

	// A constant to define the urls to our plugin folders.
	define( 'LXB_STAGING_REMINDER_URL', trailingslashit( plugin_dir_url( LXB_STAGING_REMINDER_FILE ) ) );

	// Our master plugin object, which will own instances of various classes in our plugin.
	$lxb_staging_reminder  = new stdClass();
	$lxb_staging_reminder -> bootstrap = LXB_STAGING_REMINDER . '\Bootstrap';

	// Register an autoloader.
	require_once( LXB_STAGING_REMINDER_PATH . 'autoload.php' );

	// Execute the plugin code!
	new $lxb_staging_reminder -> bootstrap;

}