/**
 * Our plugin-wide JS file.
 *
 * @package WordPress
 * @subpackage LXB Staging Reminder
 * @since LXB Staging Reminder 0.1
 */

/**
 * A global object with members that any of our jQuery plugins can use.
 * 
 * @type {Object}
 */
var lxbStagingReminder = {};

/**
 * Our jQuery plugin for doing something.
 */
jQuery( document ).ready( function() {

	// Start an options object that we'll pass when we use our jQuery plugin.
	var options = {};

	// Apply our plugin to our thing.
	jQuery( '.LXB_Staging_Reminder' ).lxbStagingReminderThing( options );

});

jQuery( document ).ready( function( $ ) {

	/**
	 * Define our jQuery plugin for doing things.
	 * 
	 * @param  {array}  options An array of options to pass to our plugin, documented above.
	 * @return {object} Returns the item that the plugin was applied to, making it chainable.
	 */
	$.fn.lxbStagingReminderThing = function( options ) {

		// For each element to which our plugin is applied...
		return this.each( function() {

			// Save a reference to the thing, so that we may safely use "this" later.
			var that = this;

			$( that ).click( function() {
				$( this ).fadeOut();
			});

			// Make our plugin chainable.
			return this;

		// End for each element to which our plugin is applied.
		});

	// End the definition of our plugin.
	}

}( jQuery ) );