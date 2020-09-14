<?php
/**
 * The template for displaying the footer. 
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
					
				<footer class="footer container" role="contentinfo">
					
					<div class="inner-footer row">
						
						<div class="column">

							<?php if ( is_active_sidebar( 'footersidebar' ) ) : ?>

								<?php dynamic_sidebar( 'footersidebar' ); ?>

							<?php endif; ?>

	    				</div>
						
					
					</div> <!-- end .inner-footer -->

					<div class="row">
						<div class="column">
							<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
						</div>
					</div>
				
				</footer> <!-- end .footer -->
		
		<?php wp_footer(); ?>
		
	</body>
	
</html> <!-- end page -->