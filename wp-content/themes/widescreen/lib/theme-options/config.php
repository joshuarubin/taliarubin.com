<?php

/**
 * Config Theme Options class
 *
 * @package Widescreen
 * @since 1.7
 */

// Require the main plugin class
if( !class_exists( 'GPPThemeOptions' ) ) {
	require_once( dirname(__FILE__) . '/inc/class-theme-options.php' );
}

// Call new class
$theme_options = new GPPThemeOptions;

// True for section tabs, false for no tabs
$theme_options->tabbed = true;

// Sections
$theme_options->sections['general'] = __( 'General', 'widescreen' );
$theme_options->sections['fonts'] = __( 'Fonts', 'widescreen' );
$theme_options->sections['customcss'] = __( 'Custom CSS', 'widescreen' );
$theme_options->sections['slideshow'] = __( 'Slideshow', 'widescreen' );
$theme_options->sections['featured'] = __( 'Featured', 'widescreen' );
$theme_options->sections['aboutyou'] = __( 'About You', 'widescreen' );
$theme_options->sections['advertising'] = __( 'Advertising', 'widescreen' );


// Options
$theme_options->settings['gpp_logo_src'] = array(
			'section' => 'general',
			'title'   => __( 'Logo', 'widescreen' ),
			'desc'    => __( 'Upload a logo for your theme. Logos should be in transparent PNG format and be 60px in max height and 200px in max width. IMPORTANT: Make sure your have FILE URL selected in the LINK URL section and that you click the Insert into Post button. Otherwise, your logo won\'t be added.', 'widescreen' ),
			'type'    => 'upload',
			'std'     => ''
		);
		
$theme_options->settings['gpp_description'] = array(
			'section' => 'general',
			'title'   => __( 'Site Description', 'widescreen' ),
			'desc'    => __( 'Do you want to show or hide your site description in the menu? ', 'widescreen' ),
			'type'    => 'select',
			'std'     => '',
			'choices' => array(
				'' => '-- Choose One --',
				'show' => 'Show',
				'hide' => 'Hide'
				)
		);		
		

$theme_options->settings['gpp_custom_favicon'] = array(
			'section' => 'general',
			'title'   => __( 'Custom Favicon', 'widescreen' ),
			'desc'    => __( 'Upload a 16px x 16px Png/Gif image that will represent your website\'s favicon.', 'widescreen' ),
			'type'    => 'upload',
			'std'     => ''
		);

$theme_options->settings['gpp_excerpt'] = array(
			'section' => 'general',
			'title'   => __( 'Excerpts', 'widescreen' ),
			'desc'    => __( 'Shows or hides the post excerpt beneath your post thumbnails on archive pages.', 'widescreen' ),
			'type'    => 'select',
			'std'     => '',
			'choices' => array(
				'' => '-- Choose One --',
				'show' => 'Show',
				'hide' => 'Hide'
				)
		);	

$theme_options->settings['gpp_meta'] = array(
			'section' => 'general',
			'title'   => __( 'Metadata', 'widescreen' ),
			'desc'    => __( 'Shows or hides the post metadata beneath your post thumbnails on archive pages.', 'widescreen' ),
			'type'    => 'select',
			'std'     => '',
			'choices' => array(
				'' => '-- Choose One --',
				'show' => 'Show',
				'hide' => 'Hide'
				)
		);		
		
$theme_options->settings['gpp_tracking_code_new'] = array(
			'section' => 'general',
			'title'   => __( 'Analytics Tracking', 'widescreen' ),
			'desc'    => __( 'Paste your Google Analytics Account Number (UA-xxxxxx-x) here. This will be added into the footer of the theme. <a href="http://www.google.com/support/analytics/bin/answer.py?hl=en&answer=81977">Help me find my Account Number</a>', 'widescreen' ),
			'type'    => 'text',
			'std'     => ''
		);

$theme_options->settings['gpp_feedburner_url'] = array(
			'section' => 'general',
			'title'   => __( 'RSS URL', 'widescreen' ),
			'desc'    => __( 'Enter your preferred RSS URL. (Feedburner or other)', 'widescreen' ),
			'type'    => 'text',
			'std'     => ''
		);

$theme_options->settings['font'] = array(
			'section' => 'fonts',
			'title'   => __( 'Headline Font', 'widescreen' ),
			'desc'    => __( 'Select a font to use for your headlines.', 'widescreen' ),
			'type'    => 'select',
			'std'     => '',
			'choices' => gpp_font_array()
		);

 $theme_options->settings['font_alt'] = array(
			'section' => 'fonts',
			'title'   => __( 'Body Font', 'widescreen' ),
			'desc'    => __( 'Select a font to use for your paragraphs.', 'widescreen' ),
			'type'    => 'select',
			'std'     => '',
			'choices' => gpp_font_array()
		); 
		
$theme_options->settings['gpp_custom_css'] = array(
			'section' => 'customcss',
			'title'   => __( 'Custom CSS', 'widescreen' ),
			'desc'    => __( 'Add some custom CSS to quickly change the design of your site.', 'widescreen' ),
			'type'    => 'textarea',
			'std'     => ''
		);

$theme_options->settings['gpp_slideshow_image'] = array(
    'section' => 'slideshow',
    'title'   => __( 'Slideshow Images', 'widescreen' ),
    'desc'    => __( 'Upload your first slideshow. Images should be sized at 1280 pixels wide max, jpg only, compressed to 6, in sRGB mode. ', 'widescreen' ),
    'type'    => 'slide',
    'std'     => ''
);
		
$theme_options->settings['gpp_slideshow_menu'] = array(
			'section' => 'slideshow',
			'title'   => __( 'Slideshow Menu', 'widescreen' ),
			'desc'    => __( 'Choose if you want to hide or show the slideshow controls.', 'widescreen' ),
			'type'    => 'select',
			'std'     => '',
			'choices' => array(
				'none' => 'None',
				'simple' => 'Simple',
				'numbers' => 'Numbers'
				)
		);			
		
$theme_options->settings['gpp_slideshow_style'] = array(
			'section' => 'slideshow',
			'title'   => __( 'Slideshow Style', 'widescreen' ),
			'desc'    => __( 'Choose the slideshow style Default - Streches images proportionally to fill entire browser window. Centered - Stretches images proportionally vertically or horizontally to fit in browser window, no image cut-off occurs ', 'widescreen' ),
			'type'    => 'select',
			'std'     => '',
			'choices' => array(
				'' => '-- Choose One --',
				'zoom' => 'Zoom',
				'centered' => 'Centered'
				)
		);			

$theme_options->settings['gpp_slideshow_captions'] = array(
			'section' => 'slideshow',
			'title'   => __( 'Show Captions', 'widescreen' ),
			'desc'    => __( 'Choose whether or not to show captions by default on your home page slideshow.', 'widescreen' ),
			'type'    => 'checkbox',
			'std'     => ''
		);		
		
$theme_options->settings['gpp_slideshow_time'] = array(
			'section' => 'slideshow',
			'title'   => __( 'Slideshow Time', 'widescreen' ),
			'desc'    => __( 'The length of time the image stays on the page. Numbers in milliseconds. e.g. 1000 = 1 second.', 'widescreen' ),
			'type'    => 'text',
			'std'     => '3000'
		);

$theme_options->settings['gpp_slideshow_speed'] = array(
			'section' => 'slideshow',
			'title'   => __( 'Slideshow Speed', 'widescreen' ),
			'desc'    => __( 'How fast / slow the slides changes from image to image. Numbers in milliseconds. e.g. 1000 = 1 second.', 'widescreen' ),
			'type'    => 'text',
			'std'     => '1000'
		);

$theme_options->settings['gpp_welcome'] = array(
			'section' => 'featured',
			'title'   => __( 'Featured Message', 'widescreen' ),
			'desc'    => __( 'Enter the message or video embed code that you want to show about your Featured Posts. This will only show up on the Featured Page template. HTML is allowed!', 'widescreen' ),
			'type'    => 'textarea',
			'std'     => '<h2 class="fancy">This is the welcome message.  Change this to whatever you want.</h2><iframe src="http://player.vimeo.com/video/30788123?title=0&byline=0&portrait=0" width="795" height="472" frameborder="0" webkitAllowFullScreen allowFullScreen></iframe>'
		);

		
$theme_options->settings['gpp_featured_cat'] = array(
			'section' => 'featured',
			'title'   => __( 'Featured Post Category', 'widescreen' ),
			'desc'    => __( 'Select the Post category that you want to display on the Featured Page template. You can assign the Featured Page to the Static Page on the home page on Settings -> Reading.', 'widescreen' ),
			'type'    => 'select',
			'std'     => '',
			'choices' => $theme_options->getCategories(null,true)
		);			
		
$theme_options->settings['gpp_featured_number'] = array(
			'section' => 'featured',
			'title'   => __( 'No. of Featured Posts', 'widescreen' ),
			'desc'    => __( 'How many posts do you want to show on the Featured page template?', 'widescreen' ),
			'type'    => 'select',
			'std'     => '',
			'choices' => array(
				'' => '-- Choose One --',
				'1' => '1',
				'3' => '3',
				'6' => '6',
				'9' => '9',
				'12' => '12',
				'15' => '15',
				)
		);	
		
$theme_options->settings['gpp_about'] = array(
			'section' => 'aboutyou',
			'title'   => __( 'About You Snippet', 'widescreen' ),
			'desc'    => __( 'Include a little snippet about yourself that is displayed in the header.', 'widescreen' ),
			'type'    => 'textarea',
			'std'     => ''
		);

$theme_options->settings['gpp_about_link'] = array(
			'section' => 'aboutyou',
			'title'   => __( 'About You Read More Link', 'widescreen' ),
			'desc'    => __( 'URL of the read more link e.g. http://www.yoursite.com/about', 'widescreen' ),
			'type'    => 'text',
			'std'     => ''
		);		

$theme_options->settings['gpp_main_ad_code'] = array(
			'section' => 'advertising',
			'title'   => __( 'Primary Ad Code', 'widescreen' ),
			'desc'    => __( 'Insert an advertisement beneath the first post on the Blog Page , Archive pages, and single Posts. This measures 795px wide.', 'widescreen' ),
			'type'    => 'textarea',
			'std'     => ''
		);

$theme_options->settings['gpp_footer_ad_code'] = array(
			'section' => 'advertising',
			'title'   => __( 'Footer Ad Code', 'widescreen' ),
			'desc'    => __( 'Insert advertisements in the footer of your site. This measures 795px wide.', 'widescreen' ),
			'type'    => 'textarea',
			'std'     => ''
		);

global $gpp_settings;
$gpp_settings = $theme_options->settings;


/**
 * Items that need to be ran during "theme activation".
 */
add_action( 'load-themes.php', 'gpp_theme_activation' );

function gpp_theme_activation() {

	global $gpp_settings;	
	
	$gpp_theme = new GPPThemeOptions;

	$new_version = $gpp_theme->theme['version']; // activating theme version
	$version_var = 'widescreen_version';
	$version = get_option( $version_var ); // already existing theme version

	update_option( $version_var, $new_version );

	//If the theme option is not already set, then initialize the settings.
	if ( ! get_option( 'widescreen_options' ) ) {
		$gpp_theme->initializeSettings( $gpp_settings );
	}

}

/**
 * Integrates with the Theme Customizer in WP 3.4
 * @package Widescreen
 * @since Widescreen 1.7
 */
add_action( 'customize_register', 'widescreen_customize_register' );

function widescreen_customize_register( $wp_customize ) {

// extending the field type to textarea
	class gpp_CSS_Control extends WP_Customize_Control {
		public $type = 'customarea';

		public function render_content() {
			$options = get_option( 'widescreen_options' );
			$stored = "";
			if( isset( $options['gpp_custom_css'] ) ) { $stored = $options['gpp_custom_css']; }
			echo '<textarea style="width:100%;height:200px;">' . $stored . '</textarea>';
		}
		public function enqueue() {
			wp_enqueue_script( 'customarea', get_template_directory_uri() . '/lib/theme-options/js/customarea.js', array( 'customize-controls' ), '20120607', true );
		}
	}

	// get our theme options so we can use defaults below
	$options = get_option( 'widescreen_options' );

	// enables live change support
	$wp_customize->get_setting('blogname')->transport='postMessage';
	$wp_customize->get_setting('blogdescription')->transport='postMessage';	

	// add a setting to an existing theme option
	$wp_customize->add_setting( 'widescreen_options[gpp_logo_src]', array(
		'default'        => '',
		'type'           => 'option',
		'capability'     => 'edit_theme_options',
		//'transport'      => 'postMessage'
	) );

	// intercept the theme option and control it
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'gpp_logo_src', array(
		'label'      => __( 'Upload Logo', 'gpp_i18n' ),
		'section'    => 'title_tagline',
		'settings'   => 'widescreen_options[gpp_logo_src]'
	) ) );	

	// add customizer section
	$wp_customize->add_section( 'widescreen_fonts', array(
		'title'			=> __( 'Fonts', 'gpp_i18n' ),
		'priority'		=> 45
	) );

	// add a setting to an existing theme option
	$wp_customize->add_setting( 'widescreen_options[font]', array(
		'default'        => '',
		'type'           => 'option',
		'capability'     => 'edit_theme_options',
		'transport'      => 'postMessage'
	) );

	// intercept the theme option and control it
	$wp_customize->add_control( 'widescreen_font_customizer', array(
		'settings'		=> 'widescreen_options[font]',
		'label'			=> __( 'Headline Font', 'gpp_i18n' ),
		'section'		=> 'widescreen_fonts',
		'type'			=> 'select',
		'choices'		=> gpp_font_array() // don't call all fonts on public themes. Choose a few.
	) );
	
	// add a setting to an existing theme option
	$wp_customize->add_setting( 'widescreen_options[font_alt]', array(
		'default'        => '',
		'type'           => 'option',
		'capability'     => 'edit_theme_options',
		'transport'      => 'postMessage'
	) );

	// intercept the theme option and control it
	$wp_customize->add_control( 'widescreen_font_alt_customizer', array(
		'settings'		=> 'widescreen_options[font_alt]',
		'label'			=> __( 'Body Font', 'gpp_i18n' ),
		'section'		=> 'widescreen_fonts',
		'type'			=> 'select',
		'choices'		=> gpp_font_array() // don't call all fonts on public themes. Choose a few.
	) );
	

	// add customizer section
	$wp_customize->add_section( 'widescreen_css', array(
		'title'			=> __( 'Custom CSS', 'gpp_i18n' ),
		'priority'		=> 60
	) );

	// add a setting to an existing theme option
	$wp_customize->add_setting( 'widescreen_options[gpp_custom_css]', array(
		'default'        => '',
		'type'           => 'option',
		'capability'     => 'edit_theme_options',
		'transport'      => 'postMessage'
	) );

	// intercept the theme option and control it
	$wp_customize->add_control( new gpp_CSS_Control( $wp_customize, 'gpp_custom_css', array(
		'settings'		=> 'widescreen_options[gpp_custom_css]',
		'label'			=> __( 'Custom CSS', 'gpp_i18n' ),
		'section'		=> 'widescreen_css'
	) ) );


	/**
	 * Bind JS handlers to make Theme Customizer preview reload changes asynchronously.
	 * Used with fonts
	 *
	 * @since Widescreen 1.7
	 */
	function gpp_customize_preview_js() { ?>
		<?php
		$doc_ready_script = '
		<script type="text/javascript">
			(function($){
				$(document).ready(function() {

					wp.customize("blogname", function(value) {
						value.bind(function(to) {
							$(".sitename a").html(to);
						});
					});

					wp.customize("blogdescription", function(value) {
						value.bind(function(to) {
							$(".description").html(to);
						});
					});

					wp.customize("widescreen_options[gpp_logo_src]", function(value) {
						value.bind(function(to) {
							$(".site-title a").html("<img class=\"sitetitle\" alt=\"' . get_bloginfo( 'name' ) . '\" src=\"" + to + "\">" );
						});
					});

					wp.customize("widescreen_options[font]",function(value) {
						value.bind(function(to) {
							$("#fontdiv").remove();
							var googlefont = to.split(",");
							$("body").append("<div id=\"fontdiv\"><link href=\"http://fonts.googleapis.com/css?family="+googlefont[0]+"\" rel=\"stylesheet\" type=\"text/css\" /><style type=\"text/css\">	h1, h2, h3, h4, h5, h6, .fancy, .image-wrap span.title {font-family: "+googlefont[1]+"}</style></div>");

						});
					});
					
					wp.customize("widescreen_options[font_alt]",function(value) {
						value.bind(function(to) {
							$("#fontaltdiv").remove();
							var googlefont = to.split(",");
							$("body").append("<div id=\"fontaltdiv\"><link href=\"http://fonts.googleapis.com/css?family="+googlefont[0]+"\" rel=\"stylesheet\" type=\"text/css\" /><style type=\"text/css\">	body, p, textarea, input, blockquote, p.credits, .postmetadata {font-family: "+googlefont[1]+"}</style></div>");

						});
					});

					wp.customize("widescreen_options[gpp_custom_css]",function(value) {
						value.bind(function(to) {
							$("#tempcss").remove();
							var googlefont = to.split(",");
							$("body").append("<div id=\"tempcss\"><style type=\"text/css\">"+to+"</style></div>");
						});
					});
			});
		})(jQuery);
		</script>';

		echo $doc_ready_script;
	}
	if ( $wp_customize->is_preview() && ! is_admin() )
		add_action( 'wp_footer', 'gpp_customize_preview_js', 21 );
}