( function( api ) {

	// Extends our custom "misbah-architecture-blocks" section.
	api.sectionConstructor['misbah-architecture-blocks'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );