/**
 * 	Upsell notice for theme
 *
 *	@since outlook pro 1.0
 */
( function( $ ) {
 // Add Upgrade Message
 if ('undefined' !== typeof outlookL10n) {
		 upsell = $('<a class="outlook-upsell-link"></a>')
		 .attr('href', outlookL10n.outlookURL)
		 .attr('target', '_blank')
		 .text(outlookL10n.outlookLabel)
		 .css({
			 'display' 			: 'inline-block',
			 'background-color' : '#be1931',
			 'color' 			: '#fff',
			 'text-transform' 	: 'uppercase',
			 'margin-top' 		: '6px',
			 'padding' 			: '3px 6px',
			 'font-size'		: '9px',
			 'letter-spacing'	: '1px',
			 'line-height'		: '1.5',
			 'clear' 			: 'both'
	 	});
	 
	 setTimeout(function () {
	 	$('#accordion-section-themes h3').append(upsell);
	 }, 200);
	 
	 // Remove accordion click event
	 $('.outlook-upsell-link').on('click', function(e) {
	 	e.stopPropagation();
	 });
 }
} )( jQuery );