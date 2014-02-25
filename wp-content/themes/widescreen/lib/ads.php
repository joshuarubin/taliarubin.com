<?php
/*
 * Ad codes
 */
function gpp_ad_code($location) {
	global $gpp;
	if ($location == 'footer')
		$html = $gpp["gpp_footer_ad_code"];
	else
		$html = $gpp["gpp_main_ad_code"];
	$html = stripslashes(html_entity_decode($html));
	if($html != "")
		echo "<div class='ad'>".$html."</div>";
}
