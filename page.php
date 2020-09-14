<?php 
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
	
	<div class="container">
	
		<div class="row">
	
		    <main class="main column column-75" role="main">

				
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
							
							<?php the_breadcrumbs(); ?>

							<header class="article-header">
								<h1 class="page-title"><?php the_title(); ?></h1>
							</header> <!-- end article header -->
											
							<section class="entry-content" itemprop="text">
								<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('large'); ?></a>
								<?php the_content(); ?>
							</section> <!-- end article section -->
												
							<footer class="article-footer">
								<?php //wp_link_pages(); ?>
							</footer> <!-- end article footer -->
											
						</article> <!-- end article -->
			    
			    <?php endwhile; endif; ?>							
			    					
			</main> <!-- end .main -->

		    <?php get_sidebar(); ?>
		    
		</div> <!-- end .row -->

	</div> <!-- end .container -->

<?php get_footer(); ?>