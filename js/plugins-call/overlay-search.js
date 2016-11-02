/*
 *	This file contains "overlay search" call js
 *
 *	@since outlook-lite 1.0
 */
(function( $ ){
	
	/* ----------------------------------------------------------- */
	/*  FULL OVERLYAY SEARCH FORM
	/* ----------------------------------------------------------- */
	
	$('.ol-search-btn').on('click', function(event) {
	   
	    event.preventDefault();
	    
	    $('.ol-search-full-overlay').addClass('ol-search-full-overlay-show');
	    
		//searcbox focus
		
		 setTimeout(function() { $('#ol-overlay-search-form input[name="s"]').focus() }, 100);
	   
	});
	
	// when click colose btn
	
	$('.ol-search-close-btn').on('click', function(event) {
	    
	    event.preventDefault();
	    
		$('.ol-search-full-overlay').removeClass('ol-search-full-overlay-show');
		
	});

})( jQuery );