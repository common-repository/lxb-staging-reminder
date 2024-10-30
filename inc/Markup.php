<?php

/**
 * A class for outputting markup.
 *
 * @package WordPress
 * @subpackage LXB_Staging_Reminder
 * @since LXB_Staging_Reminder 0.1
 */

namespace LXB_Staging_Reminder;

class Markup {

	function __construct() {

		add_action( 'wp_footer', array( $this, 'out' ) );
		add_action( 'admin_footer', array( $this, 'out' ) );
		add_action( 'login_footer', array( $this, 'out' ) );	
        
	}

	function out( $hook = '' ) {

		$class = LXB_STAGING_REMINDER;

		$title = esc_attr__( 'You are on staging.', 'lxb-staging-reminder' );

		$out = "<div title='$title' class='$class'></div>";

		echo $out;

	}

}