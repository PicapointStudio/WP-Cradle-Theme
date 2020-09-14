<?php
// Calling your own login css so you can style it
function cradle_login_css() {
	wp_enqueue_style( 'login-css', get_template_directory_uri() . '/assets/styles/login.min.css', false );
}

// changing the logo link from wordpress.org to home_url
function cradle_login_url() {  return home_url(); }

// changing the alt text on the logo to show your site name
function cradle_login_title() { return get_option('blogname'); }

// calling it only on the login page
add_action('login_enqueue_scripts', 'cradle_login_css', 10);
add_filter('login_headerurl', 'cradle_login_url');
add_filter('login_headertitle', 'cradle_login_title');