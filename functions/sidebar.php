<?php
// SIDEBARS AND WIDGETIZED AREAS
function cradle_register_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar1',
		'name' => __('Sidebar', 'wpcradle'),
		'description' => __('Primary sidebar area.', 'wpcradle'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	register_sidebar(array(
		'id' => 'footersidebar',
		'name' => __('Footer widgets', 'wpcradle'),
		'description' => __('Widget area for the footer', 'wpcradle'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

} /* end register sidebars */

add_action( 'widgets_init', 'cradle_register_sidebars' );