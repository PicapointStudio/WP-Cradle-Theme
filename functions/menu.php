<?php
// Register menus
register_nav_menus(
	array(
		'main-nav'		=> __( 'The Main Menu', 'wpcradle' ),		// Main nav in header
	)
);

// The Top Menu
function cradle_top_nav() {
	wp_nav_menu(array(
		'container'			=> true,						
		'menu_id'			=> 'main_nav',					
		'menu_class'		=> 'menu right-aligned',							
		'items_wrap'		=> '<nav id="%1$s"><ul class="%2$s">%3$s</ul></nav>',
		'theme_location'	=> 'main-nav',					
		'depth'				=> 5,
		'fallback_cb'		=> false								
	));
}

// Add active class to menu
function required_active_nav_class( $classes, $item ) {
	if ( $item->current == 1 || $item->current_item_ancestor == true ) {
		$classes[] = 'active';
	}
	return $classes;
}
add_filter( 'nav_menu_css_class', 'required_active_nav_class', 10, 2 );