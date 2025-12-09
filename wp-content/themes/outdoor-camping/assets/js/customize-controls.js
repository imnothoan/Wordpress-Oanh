( function( api ) {

	// Extends our custom "outdoor-camping" section.
	api.sectionConstructor['outdoor-camping'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );