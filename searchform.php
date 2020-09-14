<?php
/**
 * The template for displaying search form
 */
 ?>

<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'wpcradle' ) ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search...', 'wpcradle' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'wpcradle' ) ?>" />
	</label>
	<input type="submit" class="search-submit button-primary" value="<?php echo esc_attr_x( 'Search', 'wpcradle' ) ?>" />
</form>