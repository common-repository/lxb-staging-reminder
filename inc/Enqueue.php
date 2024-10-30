<?php

/**
 * A class for enqueing stuff.
 *
 * @package WordPress
 * @subpackage LXB_Staging_Reminder
 * @since LXB_Staging_Reminder 0.1
 */

namespace LXB_Staging_Reminder;

class Enqueue {

	function __construct() {

		// Add our JS.
		add_action( 'wp_enqueue_scripts', array( $this, 'script' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'script' ) );
		add_action( 'login_enqueue_scripts', array( $this, 'script' ) );				


		// Add our CSS.
		add_action( 'wp_enqueue_scripts', array( $this, 'style' ) );		
		add_action( 'admin_enqueue_scripts', array( $this, 'style' ) );	
		add_action( 'login_enqueue_scripts', array( $this, 'style' ) );				
        
	}

	/**
	 * Register and enqueue our JS.
	 * 
	 * @param string $hook The current page slug.
	 */
	function script( $hook = '' ) {

		// Register our JS for when we need it.
		wp_register_script( LXB_STAGING_REMINDER . '-script', LXB_STAGING_REMINDER_URL . 'js/script.js', array( 'jquery' ), LXB_STAGING_REMINDER_VERSION, FALSE );

		// Enqueue our plugin JS.
		wp_enqueue_script( LXB_STAGING_REMINDER . '-script' );

	}

	/**
	 * Register and enqueue our CSS.
	 * 
	 * @param string $hook The current page slug.
	 */
	function style( $hook = '' ) {

		// Register our CSS for when we need it.
		wp_register_style( LXB_STAGING_REMINDER . '-style', LXB_STAGING_REMINDER_URL . 'css/style.css', FALSE, LXB_STAGING_REMINDER_VERSION, FALSE );

		wp_enqueue_style( LXB_STAGING_REMINDER . '-style' );
		
	}	

}