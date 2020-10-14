<?php
/**
 * The template for displaying the header with sticky, replace header.php with this file for change to a sticky header
 */
?>

<!doctype html>

  <html <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/site-icon.png" rel="apple-touch-icon" />	
	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

	</head>
			
	<body <?php body_class(); ?>>
				
		<header class="header--sticky" id="site_header" role="banner">
			<div class="container">
				<div class="row">
					<div class="column">
						<a href="<?php echo home_url(); ?>" title="" class="site_logo">Logo</a>
						<div id="toggle_mobile_menu" class="hamburger hamburger--collapse" aria-label="<?php _e('Toggle menu visibility', 'wpcradle'); ?>">
							<div class="hamburger-box">
							<div class="hamburger-inner"></div>
							</div>
						</div>
					</div>
					<div class="column">
						<?php cradle_top_nav(); ?>
					</div>
				</div>
			</div>
		</header> <!-- end .header -->