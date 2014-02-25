<?php

//add single post template depending on category slug

add_filter('single_template', 'gpp_single_template');

function gpp_single_template($single) {
	global $wp_query, $post;	
	
	foreach((array)get_the_category() as $cat) :
		
		// single posts template based on category slug
		if(file_exists(STYLESHEETPATH . '/single-' . $cat->slug . '.php'))
			return STYLESHEETPATH . '/single-' . $cat->slug . '.php';
			
		//else load single.php	
		elseif(file_exists(STYLESHEETPATH . '/single.php'))
			return STYLESHEETPATH . '/single.php';

	endforeach;
	
	return $single;
}
?>