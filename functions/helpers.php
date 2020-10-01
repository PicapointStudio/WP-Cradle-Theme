<?php
// Helper functions for WordPress


function is_post_type($post_type="") {
	
	global $post;
	$current_post_type = get_post_type($post->ID);

	if($current_post_type == $post_type) {
		return true;
	} else {
		return false;
	}

}