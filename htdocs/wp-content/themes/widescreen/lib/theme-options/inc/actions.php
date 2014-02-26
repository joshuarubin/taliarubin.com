<?php
/**
 * Widescreen Actions
 * @package Widescreen
 * @author Thad Allender
 */

/**
 * Widescreen Custom CSS
 * @since Widescreen 1.7
 */
function gpp_css() {

    $theme_options = get_option( 'widescreen_options' );

    if ( isset( $theme_options['gpp_custom_css'] ) && '' != $theme_options['gpp_custom_css'] ) {

        echo '<!-- BeginHeader -->';
        echo '<style type="text/css">';
        echo sanitize_text_field( $theme_options['gpp_custom_css'] );
        echo '</style>';
        echo '<!-- EndHeader -->';

    }
}

add_action( 'wp_head', 'gpp_css' );

/**
 * Widescreen Google Font Integration
 * @since Widescreen 1.7
 */
function gpp_include_font() {

    $theme_options = get_option( 'widescreen_options' );

    if ( ( isset ( $theme_options['font'] ) && '' != $theme_options['font'] ) || ( isset ( $theme_options['font_alt'] ) && '' != $theme_options['font_alt'] ) ) {

        list( $font_parameter, $font_name ) = explode( ',', $theme_options['font'] );
        list( $font_alt_parameter, $font_alt_name ) = explode( ',', $theme_options['font_alt'] );

         if ( 'None' != $font_name || 'None' != $font_alt_name ) {

			if ( isset ( $font_alt_name ) && '' != $font_alt_name && 'None' != $font_alt_name && isset ( $font_name ) && '' != $font_name && 'None' != $font_name ) {
				$sep = '|';
			} else {
				$sep = '';
			}
			if( $font_parameter == 'None' ) {
				$font_parameter = '';
				$font_name = '';
			}
			if( $font_alt_parameter == 'None' ) {
				$font_alt_parameter = '';
				$font_alt_name = '';
			}
            echo '<!-- BeginHeader -->';
			echo '<link href="http://fonts.googleapis.com/css?family=' . $font_parameter . $sep . $font_alt_parameter . '" rel="stylesheet" type="text/css" />',"\n";
			echo '<style type="text/css">';
			if ( isset ( $font_alt_name ) && '' != $font_alt_name && 'None' != $font_alt_name ) {
				echo 'body, p, textarea, input, blockquote, p.credits, .postmetadata { font-family: "' . $font_alt_name . '" !important; }';
			}

			if ( isset ( $font_name ) && '' != $font_name && 'None' != $font_name ) {
				echo 'h1, h2, h3, h4, h5, h6, .fancy, .image-wrap span.title  { font-family: "' . $font_name . '" !important; }';
			}

          echo '</style>',"\n";
          echo '<!-- EndHeader -->';

       }
    }
}

add_action( 'wp_head', 'gpp_include_font' );