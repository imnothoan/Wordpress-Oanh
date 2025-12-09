( function( api ) {

	// Extends our custom "real-estate-developer" section.
	api.sectionConstructor['real-estate-developer'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );