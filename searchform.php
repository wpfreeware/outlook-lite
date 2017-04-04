<?php
/**
 * The template for displaying search form
 *
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
?>
<!-- Start single sidebar item -->
<div class="ol-blog-single-sidebar">
	<form role="search" method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<input type="text" placeholder="<?php echo esc_attr_e( 'Search', 'outlook-lite' );?>" name="s" id="search" />
		<input type="hidden" name="post_type" value="post"/>
		<input type="submit" id="searchsubmit" value="Search">
	</form>
</div>
<!-- Start single sidebar item	 -->