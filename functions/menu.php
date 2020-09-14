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
		'container'			=> true,						// Remove nav container
		'menu_id'			=> 'main-nav',					// Adding custom nav id
		'menu_class'		=> '',							// Adding custom nav class
		'items_wrap'		=> '<nav><ul id="%1$s" class="menu right-aligned %2$s">%3$s</ul></nav>',
		'theme_location'	=> 'main-nav',					// Where it's located in the theme
		'depth'				=> 5,							// Limit the depth of the nav
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