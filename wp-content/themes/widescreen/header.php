<?php 
 
$gpp = get_option( 'widescreen_options' ); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">


	<title><?php wp_title( '-', true, 'right' ); echo esc_html( get_bloginfo('name'), 1 ); ?></title>

	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
	<meta name="viewport" content="initial-scale=1.0, width=device-width" />
	<?php if(is_search()) { ?><meta name="robots" content="noindex, nofollow" /><?php }?>
    
<!-- BeginStyle -->

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/print.css" type="text/css" media="print" />
	<!--[if IE]><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/ie.css" type="text/css" media="screen, projection" /><![endif]-->
	<!--[if IE 7]><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/ie7.css" type="text/css" media="screen, projection" /><![endif]-->
    
	
<!-- EndStyle -->

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php if ( $gpp['gpp_feedburner_url'] <> "" ) { echo $gpp['gpp_feedburner_url']; } else { echo get_bloginfo_rss('rss2_url'); } ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php 
		if(isset($gpp['gpp_custom_favicon']) && $gpp['gpp_custom_favicon'] != ''){
			echo '<link rel="shortcut icon" href="'.  $gpp['gpp_custom_favicon']  .'"/>'."\n";
		} 
    ?>
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>

</head>

<?php if ( is_home() || is_page_template('page_fullscreen_slideshow.php') || ( is_singular() && has_post_format('gallery') && !in_category('galleries') ) ) { ?>
<body <?php body_class('fsslideshow'); ?>><?php } else { ?> <body <?php body_class(); ?>> <?php } ?>

<p id="hidep"><a href="#" id="hide"><?php _e('- Hide menu','gpp_i18n'); ?></a></p>

<!-- BeginHeader -->

<div id="menu">
	<h1 class="sitename"><a href="<?php echo home_url(); ?>" title="<?php bloginfo('description'); ?>"><?php if ( isset($gpp['gpp_logo_src']) && $gpp['gpp_logo_src'] <> "" ) { ?><img class="title" src="<?php echo $gpp['gpp_logo_src']; ?>" alt="<?php bloginfo('name'); ?>" /><?php } else { ?><?php bloginfo('name'); } ?></a></h1>
	<div class="description fancy" <?php if(isset($gpp['gpp_description']) && $gpp['gpp_description'] == "hide") { ?>style="text-indent:-999em"<?php } ?>><?php bloginfo('description'); ?></div>
	
	<?php gpp_theme_nav(); ?>
	<?php 
		$locations = get_nav_menu_locations();			
		if($locations["main-menu"] != 0) : ?>
			<div id="hovernav">
				<div class="small-menu"><?php _e( 'Menu','gpp_lang' ); ?></div>
				<?php
					$menu_name = trim(key($locations));										
					$menu = wp_get_nav_menu_object( $locations[ $menu_name ] ); 
					$menu_items = wp_get_nav_menu_items($menu->term_id);							
					$menu_list = '<ul class="mobilemenu" id="menu-' . $menu_name . '">';

					foreach ( (array) $menu_items as $key => $menu_item ) {
						$title = $menu_item->title;
						$url = $menu_item->url;
						$menu_list .= '<li><a href="' . $url . '">' . $title . '</a></li>';
					}
					$menu_list .= '</ul>';
					
					echo $menu_list;
				?>
			</div>
	<?php endif; // end $locations; ?>
	
</div><!-- #menu -->

<!-- EndHeader -->
<?php
	if ( is_home() || is_page_template('page_fullscreen_slideshow.php') || ( is_singular() && has_post_format('gallery') && !in_category('galleries') ) )
		echo '<div id="jbg-content">';
	else
		echo '<div class="container">';
?>
	
