<?php
function site_scripts() {

  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way
    
    // Remove jQuery frontend
    if ( !is_admin() ) wp_deregister_script('jquery');

    // Adding scripts file in the footer
    wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/scripts/scripts.min.js', array( ), filemtime(get_template_directory() . '/assets/scripts/js'), true );
   
    // Register main stylesheet
    wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/styles/styles.min.css', array(), filemtime(get_template_directory() . '/assets/styles/scss'), 'all' );

}
add_action('wp_enqueue_scripts', 'site_scripts', 999);