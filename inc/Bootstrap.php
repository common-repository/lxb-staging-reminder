<?php

/**
 * A class for loading plugin classes.
 *
 * @package WordPress
 * @subpackage LXB_Staging_Reminder
 * @since LXB_Staging_Reminder 0.1
 */
namespace LXB_Staging_Reminder;

class Bootstrap {

	public function __construct() {

		add_action( 'plugins_loaded', array( $this, 'create' ), 100 );

	}

	/**
	 * Instantiate and store a bunch of our plugin classes.
	 */
	function create() {

		global $lxb_staging_reminder;

		$lxb_staging_reminder -> markup  = new Markup;
		$lxb_staging_reminder -> enqueue = new Enqueue;		
		
		return $lxb_staging_reminder;

	}

}