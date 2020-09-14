<?php
/**
 * The main template file
 */

get_header(); ?>
			
	<div class="container">

		<div class="row">
	
		    <main class="main column column-75">

				<header class="site-title" >
					<h1><?php echo get_bloginfo('name'); ?></h1>	
				</header>
				
			    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">					
		
						<header class="article-header">
							<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
							<?php get_template_part( 'parts/byline' ); ?>
						</header> <!-- end article header -->
										
						<section class="entry-content" itemprop="text">
							<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('large'); ?></a>
							<?php the_excerpt(); ?>
						</section> <!-- end article section -->
																
					</article> <!-- end article -->

				<?php endwhile; endif; ?>
																								
		    </main> <!-- end .main -->
		    
		    <?php get_sidebar(); ?>

		</div> <!-- end .row -->

	</div> <!-- end .container -->

<?php get_footer(); ?>