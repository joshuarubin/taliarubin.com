<?php

// Load jbgallery styles
function gpp_styles() {
	global $post;
	$template = get_template_directory_uri();
	$format = has_post_format('gallery',$post->ID);
	if ( is_home() || is_page_template('page_fullscreen_slideshow.php') || $format ) {
		echo '<link href="'.$template.'/styles/jbgallery-3.0.css" rel="stylesheet" type="text/css" />';
	}
}
add_action('wp_head', 'gpp_styles');