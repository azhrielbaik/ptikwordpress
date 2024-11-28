( function( api ) {

	// Extends our custom "online-resume" section.
	api.sectionConstructor['online-resume'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );