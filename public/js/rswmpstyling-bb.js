(function( $ ) {
	'use strict';
	 $( window ).load(function() {
		 // Simulate button click
		 $('.fl-builder--tab-button[data-tab="templates"]').on( 'click' , function(e) {
			 e.preventDefault();
			 $('.fl-builder--menu .fl-builder--menu-item[data-view="user-templates"]').trigger('click');
		 });
	 });
})( jQuery );
