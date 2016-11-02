/*
 *	This file contains "Portfolio" call js
 *
 *	@since outlook-lite 1.0
 */
(function( $ ){
	
	/* ----------------------------------------------------------- */
	/*  Portfolio GALLERY
	/* ----------------------------------------------------------- */

	$(".ol-work-item-info").fadeOut();
	$("#ol-work-item-details").fadeOut();
	
	// 	when click single item 
	
	$(".ol-work-item-thumbonil").on('click', function( e ){
		e.preventDefault();
		$("#ol-work-item-details").fadeOut();
		var portfolio_details = $(this).parent(".ol-work-item").find(".ol-work-item-info").html();
		$("#ol-work-item-details").fadeIn();
		$(".ol-work-item-details-content").html(portfolio_details);
		$("#ol-work-item-details").css('transform','scale(1)')
		$("#ol-work-item-details .ol-work-item-info").delay(8000).fadeIn("slow");
		
		// 	for smooth scroll to item details view section
		
		$('html, body').animate({
	        scrollTop: $("#ol-our-work").offset().top
	    }, 600);
		
	});
	
	
	// 	when click details close button
	
	$(".ol-work-details-close-btn").on('click', function(e){
		e.preventDefault();
		$("#ol-work-item-details").css('transform','scale(0)');
		$("#ol-work-item-details").fadeOut("slow");
	});
	
})( jQuery );	