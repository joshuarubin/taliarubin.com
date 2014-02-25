<?php 
global $gpp;

	$gpp = get_option( 'widescreen_options' );
//calculate No of Images Uploaded in the slideshow

if ( isset( $gpp['gpp_slideshow_image'] ) && $gpp['gpp_slideshow_image'] != "" ) {	
	$slides = $gpp['gpp_slideshow_image'];
	$imgcount = count( $slides['title'] );
}


// Load Base Javascripts
function load_base_js( ) {
	wp_enqueue_script('jquery');
	wp_enqueue_script('widescreen', get_template_directory_uri().'/lib/js/widescreen.js', array('jquery'));
	wp_enqueue_script('swfobject');
}

if (!is_admin())
	add_action( 'init', 'load_base_js' );

// Load Conditional Javascripts
function load_conditional_js() {
		
	//$gpp = get_option( 'widescreen_options' );
	//global $imgcount;
	
	if (is_home()) {
			wp_enqueue_script('jbgallery', get_template_directory_uri().'/lib/js/jbgallery-3.0.min.js', array('jquery'));
	}
	
	if(has_post_format('gallery') || is_page_template('page_fullscreen_slideshow.php')) {
		wp_enqueue_script('jbgallery', get_template_directory_uri().'/lib/js/jbgallery-3.0.min.js', array('jquery'));
	}
	
	if (is_page_template('page_slideshow.php') || in_category('galleries') ) {
		wp_enqueue_script('cycle', get_template_directory_uri().'/lib/js/jquery.cycle.js', array('jquery'));
	}
	
}

add_action('template_redirect', 'load_conditional_js');


// Load Dom Ready Javascripts
function load_dom_ready_js() {
	
	$gpp = get_option( 'widescreen_options' );
	global $imgcount;
	$slideshow_menu = ''; 
	$slideshow_time = ''; 
	$slideshow_speed = '';
	$slideshow_style = '';
	$slideshow_captions = '';
	$slideshow_link = ''; 
	
	
	/* if ( isset( $gpp['gpp_slideshow_image'] ) && $gpp['gpp_slideshow_image'] != "" ) {
		$slideshows = $gpp['gpp_slideshow_image'];
		$imgcount = count( $slideshows ); 
		}  */
	
        /* if ( $imgcount >= 1 ) {
        		$i=1;
        		foreach( $slideshows as $slideshow ) {
        			$ss[$i] = $slideshow["image"];
        			$img = $ss[$i]; 
                    $image_link  = $slideshow["link"];
        	    $i++;
        		}
    		} */

	
	if(isset($gpp['gpp_slideshow_menu']))  {
	$slideshow_menu = $gpp['gpp_slideshow_menu']; }
	if(isset($gpp['gpp_slideshow_time']))  { 
	$slideshow_time = $gpp['gpp_slideshow_time']; }
	if(isset($gpp['gpp_slideshow_speed']))  { 
	$slideshow_speed = $gpp['gpp_slideshow_speed']; }
	if(isset($gpp['gpp_slideshow_style']))  { 
	$slideshow_style = $gpp['gpp_slideshow_style']; }
	if(isset($gpp['gpp_slideshow_captions']))  { 
	$slideshow_captions = $gpp['gpp_slideshow_captions']; }
	$slideshow_autostart = "true";
	if($imgcount == 1) {
		$slideshow_fader = "false";
	} else {
		$slideshow_fader = "true";
	}
	if(!$slideshow_menu) { $slideshow_menu = "false"; }
	if(($slideshow_menu) == 'none') { $slideshow_menu = "false"; }
	if(($slideshow_menu) == 'simple') { $slideshow_menu = "'simple'"; }
	if(($slideshow_menu) == 'numbers') { $slideshow_menu = "'numbers'"; }
	if(($slideshow_menu) == 'thumbnails') { $slideshow_menu = "'slider'"; }
	if(!$slideshow_captions) { $slideshow_captions = "false"; }
	if(($slideshow_style) == 'zoom') { $slideshow_style = "'zoom'"; }
	if(($slideshow_style) == 'centered') { $slideshow_style = "'centered'"; }
	if(!$slideshow_style) { $slideshow_style = "'zoom'"; }
	if(!$slideshow_time) { $slideshow_time = "3500"; }
	if(!$slideshow_speed) { $slideshow_speed = "1000"; }
   

  $doc_ready_script = '';
				
	if(is_home()) {
	$doc_ready_script .= '
	<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery(".jbgallery").jbgallery({
					caption   	: 	'. $slideshow_captions. ',
					style 		:	' .$slideshow_style. ',
					menu 		:	' . $slideshow_menu . ',
					autohide	:	false,
					slideshow 	:	'.$slideshow_autostart.',
					fade	 	:	'.$slideshow_fader.',
					timers		: 	{
					fade		:	' . $slideshow_speed . ',
					interval  	:	' . $slideshow_time . '
				}
			});
									
		});
	</script>';
	}
					
	echo $doc_ready_script;
	
}

// Gallery Post format 
function load_gallery_js() {
	
	$gpp = get_option( 'widescreen_options' );
    
    $slideshow_menu = ''; 
  	$slideshow_time = ''; 
  	$slideshow_speed = '';
  	$slideshow_style = '';
  	$slideshow_captions = '';

  	if(isset($gpp['gpp_slideshow_menu']))  {
  	$slideshow_menu = $gpp['gpp_slideshow_menu']; }
  	if(isset($gpp['gpp_slideshow_time']))  { 
  	$slideshow_time = $gpp['gpp_slideshow_time']; }
  	if(isset($gpp['gpp_slideshow_speed']))  { 
  	$slideshow_speed = $gpp['gpp_slideshow_speed']; }
  	if(isset($gpp['gpp_slideshow_style']))  { 
  	$slideshow_style = $gpp['gpp_slideshow_style']; }
  	
	
	
	$slideshow_fader = true;
	$slideshow_autostart = true;

	if(!$slideshow_menu) { $slideshow_menu = "false"; }
	if(($slideshow_menu) == 'none') { $slideshow_menu = "false"; }
	if(($slideshow_menu) == 'simple') { $slideshow_menu = "'simple'"; }
	if(($slideshow_menu) == 'numbers') { $slideshow_menu = "'numbers'"; }
	if(($slideshow_menu) == 'thumbnails') { $slideshow_menu = "'slider'"; }
	if(($slideshow_style) == 'zoom') { $slideshow_style = "'zoom'"; }
	if(($slideshow_style) == 'centered') { $slideshow_style = "'centered'"; }
	if(!$slideshow_style) { $slideshow_style = "'zoom'"; }
	if(!$slideshow_time) { $slideshow_time = "3500"; }
	if(!$slideshow_speed) { $slideshow_speed = "1000"; }

  $gallery_script = '';
				
	if (is_single() && (has_post_format('gallery')) || is_page_template('page_fullscreen_slideshow.php')) {
	$gallery_script .= '
	<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery("#slideshow").jbgallery({
					caption   	: 	false,
					style 		:	' .$slideshow_style. ',
					menu 		:	' . $slideshow_menu . ',
					autohide	:	false,
					slideshow 	:	true,
					fade	 	:	true,
					timers		: 	{
					fade		:	' . $slideshow_speed . ',
					interval  	:	' . $slideshow_time . ',
					autohide	:	2000
				}
			});
			
			
			
		});
	</script>';
		}

					
	echo $gallery_script;
}


// Add Javascripts
add_action('wp_head', 'load_dom_ready_js');
add_action('wp_head', 'load_gallery_js');

/*-----------------------------------------------------------------------------------*/
/* FOOTER - TRACKING CODE */
/*-----------------------------------------------------------------------------------*/
function gpp_tracking_code_hook() {

	
	$gpp = get_option( 'widescreen_options' );
	$tracking_code_new = "";
	if(isset($gpp['gpp_tracking_code_new']) && $gpp['gpp_tracking_code_new'] != "" ){$tracking_code_new = $gpp['gpp_tracking_code_new'];		
	echo "\n",'<!-- Begin Tracking Code -->
	<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src=\'" + gaJsHost + "google-analytics.com/ga.js\' type=\'text/javascript\'%3E%3C/script%3E"));
		</script>
		<script type="text/javascript">
		try{
		var pageTracker = _gat._getTracker("'.$tracking_code_new.'");
		pageTracker._trackPageview();
		} catch(err) {}
	</script>
<!-- End Tracking Code -->';
	
	}
}

add_action('wp_head', 'gpp_tracking_code_hook');

?>