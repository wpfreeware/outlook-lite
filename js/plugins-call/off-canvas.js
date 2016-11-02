/*
 *	This file contains "off-canvas" call js
 *
 *	@since outlook-lite 1.0
 */
(function( $ ){
	
	/* ----------------------------------------------------------- */
	/*  Off-canvas Menu 
	/* ----------------------------------------------------------- */
   $('.ol-sidemenu-btn').on('click', function(event) {
	   
        event.preventDefault();
        
        $('.ol-side-menu-area').addClass('ol-side-menu-area-show');
       
    });
    
	// when click close btn side menu will colse 
	
    $('.ol-side-menu-close-btn').on('click', function(event) {
	    
	    event.preventDefault();
	    
		$('.ol-side-menu-area').removeClass('ol-side-menu-area-show');
		
    });
    
    // when click overlay bg side menu will colse 
    

    $('.ol-side-menu-area').on('click', function(event) {
	    
	   $(this).removeClass('ol-side-menu-area-show');
	   
    });
    
    // when click side menu inner
    
    $('.ol-side-menu').click(function(e){ 
	     e.stopPropagation(); 
	 });
	 
})( jQuery );	 