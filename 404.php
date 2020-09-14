<?php
/**
 * The template for displaying 404 (page not found) pages.
 *
 * For more info: https://codex.wordpress.org/Creating_an_Error_404_Page
 */

get_header(); ?>
			
	<div class="container">

		<div class="inner-content row">
	
			<main class="main column" role="main">

				<article class="content-not-found">
				
					<header class="article-header">
						<h1><?php _e( '404 - Not Found', 'wpcradle' ); ?></h1>
					</header> <!-- end article header -->
			
					<section class="entry-content">
						<p><?php _e( 'The article you were looking for was not found, but maybe try looking again!', 'wpcradle' ); ?></p>
					</section> <!-- end article section -->
			
				</article> <!-- end article -->
	
			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>