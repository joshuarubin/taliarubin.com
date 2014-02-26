<?php function gpp_photoshelter_meta(){

    global $query_string;

	$gpp = get_option( 'widescreen_options' );
	if ( function_exists('wp_get_theme') ) {
		$theme_data = wp_get_theme();
	} else {
		$theme_data = get_theme_data(get_stylesheet_directory().'/style.css');
	}
	$themename =  $theme_data['Name'];
	$theme_version = $theme_data['Version'];
    $theme_template = $theme_data['Template'];
    $parent_dir = get_template_directory_uri();

    echo "\n\n",'<meta name="ps_configurator" content="thmNm='. $themename.';thmVsn='. $theme_version .';hd_bgn=BeginHeader;hd_end=EndHeader;ft_bgn=BeginFooter;ft_end=EndFooter;scptInc=http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js;scptInc='. $parent_dir .'/lib/js/widescreen.js;lnkInc='.$parent_dir.'/style.css" />',"\n\n";

}

add_action('wp_head','gpp_photoshelter_meta');

?>