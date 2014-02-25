<?php
	
	$gpp = get_option( 'widescreen_options' );
	global $is_iphone;
	get_header();
?>

<!-- Slideshow -->
<?php
	$imgcount = 0;
	if ( isset( $gpp['gpp_slideshow_image'] ) && $gpp['gpp_slideshow_image'] != "" ) {
		$slides = $gpp['gpp_slideshow_image'];
		$imgcount = count( $slides['title'] );	
	
		$slideshows = array();
		foreach ($slides['title'] as $k => $v) {
			$slideshows[] = array(
				'title' => $v,
				'link' => $slides['link'][$k],
				'caption' => $slides['caption'][$k],
				'image' => $slides['image'][$k]
			);
		}
	}
	//print_r($slideshows);
	
	echo '<div class="jbgallery" id="slideshow-api">';
	echo '<ul>';
	
	
	if ( $imgcount >= 1 ) {
		$i=1;
		foreach( $slideshows as $slideshow ) {  
			
			$img = $slideshow['image'];			
			$description  = $slideshow['caption'];
			$link  = $slideshow['link'];			
			$caption = stripslashes($slideshow['title']);
			
			echo '<li>';
				if($link == '') { $link = "#"; }
				
				echo '<a title="'.$caption.'" href="'.$img.'" rel="'.$link.'"><img src="'.$img.'" alt="'.$caption.'" /></a>';
				
				echo '<div class="caption" rel="'.$link.'">'.$description.'</div>';        
			echo '</li>';
			$i++;
		}
	} /* else {
		for( $j = 1; $j <= 5; $j++ ) {
			echo '<li>';
			echo '<a href="';
			echo ''.get_template_directory_uri().'/images/slideshow/image'.$j.'.jpg';
			echo '" title="">';
			echo '</a>';
			echo '</li>';
		}			
	} */
	
	echo '</ul>';
	echo '</div>';
?>

<?php get_footer( 'slideshow' ); ?>