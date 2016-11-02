<?php
/*
 *	Displays output for preloaders contents.
 *	
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
 ?>
<div id="ol-preloader-wrapper">
	
	<?php
		$preloader	=	esc_html( get_theme_mod( 'outlook_preloaders_style', 'style-1' ) );
		
		if( $preloader == 'style-1' ) :	?>
		
			<!-- End preloader one -->
			<div class="ol-preloader-one">
			    <span></span>
			    <span></span>
			</div>
			<!-- End preloader one -->
		
	<?php elseif( $preloader == 'style-2' ) : ?>
	
			<!-- Start preloader two -->
			<div class="ol-preloader-two">
			    <span></span>
			    <span></span>
			    <span></span>
			    <span></span>
			    <span></span>
			</div>
			<!-- End preloader two -->

	<?php elseif( $preloader == 'style-3' ) : ?>
	
			<!-- Start preloader three -->
			<div class="ol-preloader-three"></div>
			<!-- End preloader three -->

	<?php elseif( $preloader == 'style-4' ) : ?>
	
			<!-- Start preloader four -->
			<div class="ol-preloader-four">
			    <span></span>
			    <span></span>
			</div>
			<!-- End preloader four -->
	
	<?php elseif( $preloader == 'style-5' ) : ?>
	
			<!-- Start preloader five -->
			<div class="ol-preloader-five">
				<div class="ol-preloader-cube ol-preload-c1"></div>
				<div class="ol-preloader-cube ol-preload-c2"></div>
				<div class="ol-preloader-cube ol-preload-c4"></div>
				<div class="ol-preloader-cube ol-preload-c3"></div>
			</div>
			<!-- End preloader five -->
	
	<?php endif; ?>


</div>
