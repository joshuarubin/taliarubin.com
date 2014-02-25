<?php

// Load Theme Options

//update_option( 'widescreen_options', $gpp );
$gpp = get_option( 'widescreen_options' );

// Theme Data Constants
	if ( function_exists('wp_get_theme') ) {
		$theme = wp_get_theme();		
		define('GPP_THEME_HOMEPAGE', $theme->get('AuthorURI'));
	} else {
		$theme = get_theme_data(get_stylesheet_directory().'/style.css');
		define('GPP_THEME_HOMEPAGE', $theme['AuthorURI']);
	}

//$theme_data = get_theme_data(get_stylesheet_directory().'/style.css');
define('GPP_THEME_NAME', $theme['Name']);
define('GPP_THEME_AUTHOR', $theme['Author']);
//define('GPP_THEME_HOMEPAGE', $theme['URI']);
define('WIDESCREEN_VERSION', trim($theme['Version']));
define('GPP_THEME_DESC', trim($theme['Description']));

			
add_action( 'after_setup_theme', 'widescreen_theme_setup' );

if ( ! function_exists( 'widescreen_theme_setup' ) ):

function widescreen_theme_setup() {
	
	// Internationalization
	load_theme_textdomain("gpp_i18n", TEMPLATEPATH . '/lang');
	
	// Content width
	if ( ! isset( $content_width ) ) $content_width = 1600;
	
	// Add Theme Support
	if ( function_exists( 'add_theme_support' ) ) {
	
		add_editor_style();
		if ( function_exists( 'wp_get_theme' ) ) {
			add_theme_support( 'custom-background' ); 
		} else {
			add_custom_background();
		}
		// Automatic Feed Links
		add_theme_support( 'automatic-feed-links' ).
	
		// Add Post Thumbnail Support
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 240, 240, true ); // 240x240 size
		add_image_size( '240x160', 240, 160, true ); // 240x160 image size
		add_image_size( '760x200', 760, 200, true ); // 760x200 image size
		add_image_size( '760', 760, 9999 ); // 760 image size
		add_image_size( '1600', 1600, 9999 ); // 1600 image size
		
		// Add post format support
		add_theme_support( 'post-formats', array( 'gallery' ) );
		
		// Add Nav Menu Support
		add_theme_support( 'nav-menus' );
		
		// Register our predefined menu positions
		add_action( 'init', 'registerwidescreen_menus' );
		function registerwidescreen_menus() {
			register_nav_menus(
				array(
					'main-menu' => __( 'Main Menu', 'gpp_i18n' )
				)
			);
		}
	}
}

endif;

// Make Menu Support compatible with earlier WP versions
function gpp_theme_nav() {
	if ( function_exists( 'wp_nav_menu' ) )
		wp_nav_menu( 'sort_column=menu_order&container_class=mainmenu&menu_class=menu sf-vertical&theme_location=main-menu&fallback_cb=gpptheme_nav_fallback' );
	else
		gpptheme_nav_fallback();
}

// Create our GPP Fallback Menu
function gpptheme_nav_fallback() {
    wp_page_menu( 'depth=1&show_home=Start&menu_class=menu sf-vertical' );
}

// Start Theme Functions - Please don't edit this
$includes_path = TEMPLATEPATH . '/lib/';

// Ad Codes
require_once ($includes_path . 'ads.php');

// Load Post Template
require_once ($includes_path . 'post-template.php');

// Custom Comments
require_once ($includes_path . 'theme-comments.php'); 

// Load Javascript
require_once ($includes_path . 'theme-js.php');

// Load App Stylesheets
require_once ($includes_path . 'theme-css.php');

// Widgets
require_once ($includes_path . 'widgets.php');

// Load PhotoShelter Meta
require_once ($includes_path . 'photoshelter-meta.php');

/* Load options */
	require_once( $includes_path . '/theme-options/config.php' );


/**
* Get Attachment ID by URL
*/    
/* function get_attachment_id_from_src ($image_src) {

		global $wpdb;
		$query = "SELECT ID FROM {$wpdb->posts} WHERE guid='$image_src'";
		$id = $wpdb->get_var($query);
		return $id;

	}   */    	

/**
 * Add menu script
 */
function gpp_hovernav_js() {
	
   $doc_ready_script = '
	<script type="text/javascript">
		jQuery(document).ready(function(){
			/* menu hover effect for small window */
	
			jQuery("#hovernav .small-menu").click(function(){
				if(jQuery("#hovernav #menu-main-menu").is(":visible")){			
					jQuery("#hovernav ul").fadeOut();
				} else {		
					jQuery("#hovernav ul").fadeIn();
				}
			});
		});
	</script>';					
	echo $doc_ready_script;     
}
add_action('wp_head', 'gpp_hovernav_js');
?>