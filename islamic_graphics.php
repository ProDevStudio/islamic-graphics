<?php   
  
/* 
Plugin Name: Islamic Graphics
Plugin URI: http://plugins.muslimmatters.org
Description: Shortcodes for the insertion of graphics representing the common Islamic phrases: SAW, RA, SWT and AS, into Wordpress posts and pages.
Version: 1.0.5
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


/* ISLAMIC GRAPHIC SHORTCODE FUNCTION */

function insert_islamic_graphic( $atts, $content=null, $code="" ) {
	extract( shortcode_atts( array(
		'h' => '20',
	), $atts ) );
	
	$plugin_url = plugin_dir_url( "islamic_graphics.php" );

	$html = "<img class=\"islamic_graphic\" src=\"$plugin_url" . "islamic-graphics/img/";
	
	if ("{$h}" <= 20) { $html .= "20"; }
	else { $html .= "40"; }
	
	$html .= "/$code" . ".png\" height=\"{$h}px\">";
	
	return $html; 
	}

// Add shortcodes
add_shortcode( 'alayhis', 'insert_islamic_graphic' );
add_shortcode( 'ranha', 'insert_islamic_graphic' );
add_shortcode( 'ranhu', 'insert_islamic_graphic' );
add_shortcode( 'ranhum', 'insert_islamic_graphic' );
add_shortcode( 'saw', 'insert_islamic_graphic' );
add_shortcode( 'swt', 'insert_islamic_graphic' );

add_shortcode( 'alayhis_w', 'insert_islamic_graphic' );
add_shortcode( 'ranha_w', 'insert_islamic_graphic' );
add_shortcode( 'ranhu_w', 'insert_islamic_graphic' );
add_shortcode( 'ranhum_w', 'insert_islamic_graphic' );
add_shortcode( 'saw_w', 'insert_islamic_graphic' );
add_shortcode( 'swt_w', 'insert_islamic_graphic' );

?>