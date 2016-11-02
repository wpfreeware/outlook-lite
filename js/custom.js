/**	
	* Template Name: Outlook Pro
	* Version: 1.0	
	* Template Scripts
	* Author: WpFreeware
	* Author URI: https://www.wpfreeware.com

	Custom JS
	
	1. HEADER
	2. MENU SMOOTH SCROLLING 
	3. PRELOADER 	
	4. SCROLL TOP BUTTON
	5. HOVER DROPDOWN MENU
	6. MOBILE MENU CLOSE
	7. RETINA SUPPORT
	
**/

(function( $ ){
	
	"use strict";
	
	/* ----------------------------------------------------------- */
	/*  1. HEADER
	/* ----------------------------------------------------------- */
	
	// 	TRANSPARENT HEADER 

	$(window).bind('scroll', function () {
		
    if ($(window).scrollTop() > 100) {
	    
        $('.ol-transparent-header').addClass('ol-transparent-header-fixed');
        
	    } else {
	        $('.ol-transparent-header').removeClass('ol-transparent-header-fixed');

	    }
	});
	
	// 	HEADER WITH TOP BAR
	
	$(window).bind('scroll', function () {
		
    if ($(window).scrollTop() > 100) {
	    
        $('.ol-header-with-topbar').addClass('ol-header-with-topbar-fixed');
        
	    } else {
	        $('.ol-header-with-topbar').removeClass('ol-header-with-topbar-fixed');

	    }
	});
	
	// 	CENTER LOGO HEADER TOP BAR
	
	$(window).bind('scroll', function () {
		
    if ($(window).scrollTop() > 100) {
	    
        $('.ol-center-logo-header').addClass('ol-center-logo-header-fixed');
        
	    } else {
	        $('.ol-center-logo-header').removeClass('ol-center-logo-header-fixed');

	    }
	});
	
	// 	HEADER SPLIT FIXED BAR

	$(window).bind('scroll', function () {
		
    if ($(window).scrollTop() > 100) {
	    
        $('.ol-header-split').addClass('ol-header-split-fixed');
        
	    } else {
	        $('.ol-header-split').removeClass('ol-header-split-fixed');

	    }
	});
	
	// 	HEADER BOX FIXED BAR

	$(window).bind('scroll', function () {
		
    if ($(window).scrollTop() > 100) {
	    
        $('.ol-header-box').addClass('ol-header-box-fixed');
        
	    } else {
	        $('.ol-header-box').removeClass('ol-header-box-fixed');

	    }
	});
	
	
	// Control dynamic height of header topbar
		
	$(function() {
	    if ( $( "#ol-header" ).hasClass( "ol-header-with-topbar" ) ) {
		   var headHeight = $(".ol-header-with-topbar").outerHeight()+"px";
		  	$("#ol-main-slider").css('padding-top', headHeight);
		  	$("#ol-blog-sub-header").css('padding-top', headHeight);
		  	$("#ol-blog-single-sub-header").css('padding-top', headHeight);
		  	$("#ol-shop-sub-header").css('padding-top', headHeight);
		  	$("#ol-page-sub-header").css('padding-top', headHeight);
		  	$("#ol-portfolio-sub-header").css('padding-top', headHeight);
	    }
	});
	
	
	// Control dynamic height of header center logo 
	
	$(function() {
	    if ( $( "#ol-header" ).hasClass( "ol-center-logo-header" ) ) {
		    var headHeight = $(".ol-center-logo-header").outerHeight()+"px";
		  	$("#ol-main-slider").css('padding-top', headHeight);
		  	$("#ol-blog-sub-header").css('padding-top', headHeight);
		  	$("#ol-blog-single-sub-header").css('padding-top', headHeight);
		  	$("#ol-shop-sub-header").css('padding-top', headHeight);
		  	$("#ol-page-sub-header").css('padding-top', headHeight);
		  	$("#ol-portfolio-sub-header").css('padding-top', headHeight);
	    }
	});
	

	/* ----------------------------------------------------------- */
	/*  2. MENU SMOOTH SCROLLING 
	/* ----------------------------------------------------------- */
	
	//MENU SCROLLING WITH ACTIVE ITEM SELECTED
	
	// Cache selectors
	var lastId,
	topMenu = $(".ol-nav-scroll"),
	topMenuHeight = topMenu.outerHeight()+13,
	// All list items
	menuItems = topMenu.find('a[href^=\\#]'),
	// Anchors corresponding to menu items
	scrollItems = menuItems.map(function(){
	  var item = $($(this).attr("href"));
	  if (item.length) { return item; }
	});
	
	// Bind click handler to menu items
	// so we can get a fancy scroll animation
	menuItems.click(function(e){
	  var href = $(this).attr("href"),
	      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+20;
	  jQuery('html, body').stop().animate({ 
	      scrollTop: offsetTop
	  }, 2000);
	  e.preventDefault();
	});

	// Bind to scroll
	$(window).scroll(function(){
	   // Get container scroll position
	   var fromTop = $(this).scrollTop()+topMenuHeight;
	   
	   // Get id of current scroll item
	   var cur = scrollItems.map(function(){
	     if ($(this).offset().top < fromTop)
	       return this;
	   });
	   // Get the id of the current element
	   cur = cur[cur.length-1];
	   var id = cur && cur.length ? cur[0].id : "";
		
	   
	   if (lastId !== id) {
	       lastId = id;
	       // Set/remove active class
	       menuItems.parent().removeClass("current").end().filter("[href=\\#"+id+"]").parent().addClass("current");
	   }           
	});
	
		
	// HEADER TOP BAR MENU SCROLL
	

	// Cache selectors


	var lastId1,
	topMenu1 = $(".ol-header-with-topbar .ol-nav-scroll"),
	topMenuHeight1 = topMenu1.outerHeight()+13,
	// All list items
	menuItems1 = topMenu1.find('a[href^=\\#]'),
	// Anchors corresponding to menu items
	scrollItems1 = menuItems1.map(function(){
	  var item1 = $($(this).attr("href"));
	  if (item1.length) { return item1; }
	});
	
	// Bind click handler to menu items
	// so we can get a fancy scroll animation
	menuItems1.click(function(e){
	  var href = $(this).attr("href"),
	      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight1+32;
	  jQuery('html, body').stop().animate({ 
	      scrollTop: offsetTop
	  }, 2000);
	  e.preventDefault();
	});

	// Bind to scroll
	$(window).scroll(function(){
	   // Get container scroll position
	   var fromTop1 = $(this).scrollTop()+topMenuHeight1;
	   
	   // Get id of current scroll item
	   var cur1 = scrollItems1.map(function(){
	     if ($(this).offset().top < fromTop1)
	       return this;
	   });     
	});	

	/* ----------------------------------------------------------- */
	/*  3. PRELOADER 
	/* ----------------------------------------------------------- */ 
	
	 $(window).load(function() {

      $('#ol-preloader-wrapper').delay(200).fadeOut('slow'); //  fade out
    
    });

    
    
	/* ----------------------------------------------------------- */
	/*  4. SCROLL TOP BUTTON
	/* ----------------------------------------------------------- */


	
	//Check to see if the window is top if not then display button


	  $(window).scroll(function(){
	    if ($(this).scrollTop() > 300) {
			$('.ol-scroll-top').addClass("ol-scroll-top-show");

	    } else {
			$('.ol-scroll-top').removeClass("ol-scroll-top-show");
	    }
	  });

	   
	  //Click event to scroll to top


	  jQuery('.ol-scroll-top').click(function(){
	    $('html, body').animate({scrollTop : 0},800);
	    return false;
	  });
	  
  /* ----------------------------------------------------------- */
  /*  5. HOVER DROPDOWN MENU
  /* ----------------------------------------------------------- */ 
  
  	// for hover dropdown menu
  
    $('ul.nav li.dropdown').hover(function() {
	    
      $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
      
    },
     
    function() {
	    
      $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
      
    });

	
	/* ----------------------------------------------------------- */
	/*  6. MOBILE MENU CLOSE 
	/* ----------------------------------------------------------- */ 

	// 	when normal item click
	$('.ol-nav-scroll').on('click', 'li a', function() {
	  $('.ol-navbar .in').collapse('hide');
	});
	
	// 	when dropdown item click 
	$('.dropdown').on("click.bs.dropdown-toggle", function (e) { e.stopPropagation(); });

	
	
	/* ----------------------------------------------------------- */
	/*  7. RETINA SUPPORT
	/* ----------------------------------------------------------- */
	
	retinajs();	
		

})( jQuery );