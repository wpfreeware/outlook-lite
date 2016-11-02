<?php
/*
 *	This file contains WooCommerce title section
 *
 *	@version 1.0
 *	@since outlook-lite 1.0
 */
?>
<?php 
	/*
	 *	If it's a product single page then go ahead & display product single title bar
	 *
	 *	@since outlook-lite 1.0
	 */
	
	// First check if WooCommerce installed & activated
	if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) :
	 
		if( is_product() ) : ?>
	
		<?php
		/*
		 *	Enable/disable product single title section
		 *
		 *	@since outlook-lite 1.0
		 */ 
		$shop_single_title	=	esc_html( get_theme_mod( 'outlook_woocommerce_product_single_title_option', '1' ) );
		
		if( $shop_single_title == true ) : ?>
		
			<!-- Start sub header -->
			<div class="ol-wrapper">
				<section id="ol-shop-sub-header">
					<div class="container">
						<div class="ol-shop-sub-header-area">						
							
							<?php if ( function_exists('yoast_breadcrumb') ) { ?>
								<!-- start breadcrumb -->
								<div class="ol-breadcrumb-area">
									<?php yoast_breadcrumb('<p class="ol-breadcrumb">','</p>'); ?>
								</div>
								<!-- End breadcrumb -->
							<?php } ?>
							
						</div>
					</div>
				</section>
			</div>
			<!-- End sub header -->
			
		<?php endif; ?>
	
	<?php 
		/*
		 *	If it's not product single page then go ahead & display shop title bar
		 *
		 *	@since outlook-lite 1.0
		 */
		else : ?>
	
		<?php
		/*
		 *	Enable/disable shop title section
		 *
		 *	@since outlook-lite 1.0
		 */ 
		$shop_title	=	esc_html( get_theme_mod( 'outlook_woocommerce_title_option', '1' ) );
		
		if( $shop_title == true ) : ?>
		
			<!-- Start sub header -->
			<div class="ol-wrapper">
				<section id="ol-shop-sub-header">
					<div class="container">
						<div class="ol-shop-sub-header-area">
							
							<div class="ol-subheader-title">
								<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
									<h1 class="page-title">
										<?php woocommerce_page_title();?>
									</h1>
								<?php endif; ?>
							</div>
							
							<?php if ( function_exists('yoast_breadcrumb') ) { ?>
								<!-- start breadcrumb -->
								<div class="ol-breadcrumb-area">
									<?php yoast_breadcrumb('<p class="ol-breadcrumb">','</p>'); ?>
								</div>
								<!-- End breadcrumb -->
							<?php } ?>
							
						</div>
					</div>
				</section>
			</div>
			<!-- End sub header -->
			
		<?php endif; ?>
		
	<?php endif; ?>

<?php endif; ?>
<!-- End WooCommerce check -->