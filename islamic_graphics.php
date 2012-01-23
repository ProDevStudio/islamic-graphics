<?php   
  
/* 
Plugin Name: Islamic Graphics
Plugin URI: http://plugins.muslimmatters.org
Description: Shortcodes for the insertion of graphics representing the common Islamic phrases: SAW, RA, SWT and AS, into Wordpress posts and pages.
Version: 1.0.7
Author: Mehzabeen Ibrahim
Author URI: http://imuslim.tv
*/

/*
Copyright (C) 2012  Mehzabeen Ibrahim, email: info@imuslim.tv

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

/* GLOBAL ARRAY OF SHORTCODE-ALT TEXT VALUES */
$alt_text = array(
            "alayhis" => "'alayhi'l-salām (peace be upon him)",
            "rahimaha" => "raḥimahā Allāh (may Allah have mercy upon her)",
            "rahimahu" => "raḥimahullāh (may Allah have mercy upon him)",
            "rahimahum" => "raḥimahum Allāh (may Allah have mercy upon them)",
            "ranha" => "raḍyAllāhu 'anha (may Allah be pleased with her)",
            "ranhu" => "raḍyAllāhu 'anhu (may Allah be pleased with him)",
            "ranhum" => "raḍyAllāhu 'anhum (may Allah be pleased with them)",
            "saw" => "ṣallallāhu 'alayhi wa sallam (peace and blessings of Allah be upon him)",
            "swt" => "subḥānahu wa ta'āla (glorified and exalted be He)",
            "alayhis_w" => "'alayhi'l-salām (peace be upon him)",
            "rahimaha_w" => "raḥimahā Allāh (may Allah have mercy upon her)",
            "rahimahu_w" => "raḥimahullāh (may Allah have mercy upon him)",
            "rahimahum_w" => "raḥimahum Allāh (may Allah have mercy upon them)",
            "ranha_w" => "raḍyAllāhu 'anha (may Allah be pleased with her)",
            "ranhu_w" => "raḍyAllāhu 'anhu (may Allah be pleased with him)",
            "ranhum_w" => "raḍyAllāhu 'anhum (may Allah be pleased with them)",
            "saw_w" => "ṣallallāhu 'alayhi wa sallam (peace and blessings of Allah be upon him)",
            "swt_w" => "subḥānahu wa ta'āla (glorified and exalted be He)"    
            );


/* ISLAMIC GRAPHIC SHORTCODE FUNCTION */

function insert_islamic_graphic( $atts, $content=null, $code="" ) {
	extract( shortcode_atts( array(
		'h' => '20',
	), $atts ) );
	
	$plugin_url = plugin_dir_url( "islamic_graphics.php" );
        
        $alt_text_str = $GLOBALS['alt_text'][$code];
        
	$html = "<img title=\"". $alt_text_str . "\" alt=\"". $alt_text_str . "\" class=\"islamic_graphic\" src=\"$plugin_url" . "islamic-graphics/img/";
	
	if ("{$h}" <= 20) { $html .= "20"; }
	else { $html .= "40"; }
	
	$html .= "/$code" . ".png\" height=\"{$h}px\">";
	
	return $html;
	}

// Add shortcodes
add_shortcode( 'alayhis', 'insert_islamic_graphic' );
add_shortcode( 'rahimaha', 'insert_islamic_graphic' );
add_shortcode( 'rahimahu', 'insert_islamic_graphic' );
add_shortcode( 'rahimahum', 'insert_islamic_graphic' );
add_shortcode( 'ranha', 'insert_islamic_graphic' );
add_shortcode( 'ranhu', 'insert_islamic_graphic' );
add_shortcode( 'ranhum', 'insert_islamic_graphic' );
add_shortcode( 'saw', 'insert_islamic_graphic' );
add_shortcode( 'swt', 'insert_islamic_graphic' );

add_shortcode( 'alayhis_w', 'insert_islamic_graphic' );
add_shortcode( 'rahimaha_w', 'insert_islamic_graphic' );
add_shortcode( 'rahimahu_w', 'insert_islamic_graphic' );
add_shortcode( 'rahimahum_w', 'insert_islamic_graphic' );
add_shortcode( 'ranha_w', 'insert_islamic_graphic' );
add_shortcode( 'ranhu_w', 'insert_islamic_graphic' );
add_shortcode( 'ranhum_w', 'insert_islamic_graphic' );
add_shortcode( 'saw_w', 'insert_islamic_graphic' );
add_shortcode( 'swt_w', 'insert_islamic_graphic' );

?>