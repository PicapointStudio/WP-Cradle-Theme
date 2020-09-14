<?php 
/**
 * The template for displaying search results pages
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 */

get_header(); ?>

	<div class="container">

		<div class="row">

			<main class="main column column-75" role="main">

				<header>
					<h1 class="archive-title"><?php _e( 'Search Results for:', 'wpcradle' ); ?> <?php echo esc_attr(get_search_query()); ?></h1>
				</header>

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(' row'); ?> role="article">					

						<div class="column column-25">
							<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('medium-large'); ?></a>
						</div>

						<div class="columns column-75">

							<header class="article-header">
								<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
								<?php get_template_part( 'parts/byline' ); ?>
							</header> <!-- end article header -->
											
							<section class="entry-content" itemprop="text">
								<?php the_excerpt(); ?>
							</section> <!-- end article section -->
						</div>
																
					</article> <!-- end article -->
				    
				<?php endwhile; ?>

					<?php cradle_page_navi(); ?>
					
				<?php else : ?>
				
					<?php get_template_part( 'parts/missing' ); ?>
						
			    <?php endif; ?>
	
		    </main> <!-- end .main -->
		
		    <?php get_sidebar(); ?>
		
		</div> <!-- end .row -->

	</div> <!-- end .container -->

<?php get_footer(); ?>
