<?php   
  
/* 
Plugin Name: Islamic Graphics
Plugin URI: http://plugins.muslimmatters.org
Description: Shortcodes for the insertion of graphics representing the common Islamic phrases: SAW, RA, SWT and AS, into Wordpress posts and pages.
Version: 1.1.0
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


/* OPTIONS PAGE */

// Add admin actions
add_action('admin_menu', 'islamic_graphics_menu');
add_action( 'admin_init', 'islamic_graphics_init' );

// Add sub-menu to Settings Top Menu
function islamic_graphics_menu() {
	add_options_page('Islamic Graphics - Options', 'Islamic Graphics', 'manage_options', 'islamic-graphics', 'islamic_graphics_options');
}

// Register settings
function islamic_graphics_init(){
    register_setting( 'islamic-graphics-option-group', 'islamic_graphics_default_height', 'validate_default_height' );
    register_setting( 'islamic-graphics-option-group', 'islamic_graphics_display_type' );
    register_setting( 'islamic-graphics-option-group', 'islamic_graphics_default_colour' );
 }

// HTML for options page
function islamic_graphics_options() {
	if (!current_user_can('manage_options'))  {
		wp_die( __('You do not have sufficient permissions to access this page.') );
	}
?>
    <div class="wrap">
        <h2>Islamic Graphics - Options</h2>
        <p>Use the following options to alter the display of Islamic Graphics in your posts and pages.</p>
        <form method="post" action="options.php">
        <?php settings_fields( 'islamic-graphics-option-group' ); ?>
        <?php do_settings_fields( 'islamic-graphics-option-group' ); ?>
        <!-- Input for default img height -->
        <p>Default height of embedded images in pixels (value > 40 will be accepted, but not recommended!)
        <br/><input type="text" name="islamic_graphics_default_height" value="<?php echo get_option('islamic_graphics_default_height', 20); ?>" />    
        </p>
        <!-- Options for Islamic Graphics colour -->
        <p>Default colour of images?
        <br/><select name="islamic_graphics_default_colour" id="islamic_graphics_default_colour">
                <!-- Select the option that is stored in wp_options; else select black -->
                <?php
                    $display_type_options = array(
                            "black" => "Black",
                            "white" => "White");
                    
                    $stored_type = get_option('islamic_graphics_default_colour', 'black');
                    
                    foreach ($display_type_options as $key => $row) {
                        echo '<option value="' . $key . '"';
                        if ($stored_type == $key) { echo 'selected="selected"'; }
                        echo '>'. $row .'</option>';
                    }                
                ?>
           </select>
        </p>        
        <!-- Options for Islamic Graphics type -->
        <p>How do you wish to display the Islamic Graphics?
        <br/><select name="islamic_graphics_display_type" id="islamic_graphics_display_type">
                <!-- Select the option that is stored in wp_options; else select images -->
                <?php
                    $display_type_options = array(
                            "images" => "Images only",
                            "images_trans" => "Images (with translation)",
                            "text_rom_trans" => "Romanized text (with translation)",
                            "text_rom" => "Romanized text only",
                            "text_trans" => "Translation only");
                    
                    $stored_type = get_option('islamic_graphics_display_type', 'images');
                    
                    foreach ($display_type_options as $key => $row) {
                        echo '<option value="' . $key . '"';
                        if ($stored_type == $key) { echo 'selected="selected"'; }
                        echo '>'. $row .'</option>';
                    }                
                ?>
           </select>
        </p>
        <!-- Submit Button -->
        <p class="submit">
        <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
        </p>
        </form>
    </div>
        
<?php }


// Validate height input
function validate_default_height($input) {
    $newinput = trim($input);
    
    if (!is_numeric($newinput)){
        $newinput = 20; // if not numeric, then use 20 as default value
    }
    return $newinput;
}



/* GLOBAL ARRAY OF SHORTCODES + ALT TEXT VALUES */

$alt_text = array();

function add_to_alt_text($code, $romanized, $translation){
    $GLOBALS['alt_text'][$code] = array("romanized" => $romanized, "translation" => $translation); 
}

add_to_alt_text("alayhis", "'alayhi'l-salām", "peace be upon him");
add_to_alt_text("rahimaha", "raḥimahā Allāh", "may Allāh have mercy upon her");
add_to_alt_text("rahimahu", "raḥimahullāh","may Allāh have mercy upon him");
add_to_alt_text("rahimahum", "raḥimahum Allāh","may Allāh have mercy upon them");
add_to_alt_text("ranha", "raḍyAllāhu 'anha","may Allāh be pleased with her");
add_to_alt_text("ranhu", "raḍyAllāhu 'anhu","may Allāh be pleased with him");
add_to_alt_text("ranhum", "raḍyAllāhu 'anhum","may Allāh be pleased with them");
add_to_alt_text("saw", "ṣallallāhu 'alayhi wa sallam","peace and blessings of Allāh be upon him");
add_to_alt_text("swt", "subḥānahu wa ta'āla","glorified and exalted be He");


/* ADD SHORTCODES */
        
foreach ($alt_text as $key => $row) {
    add_shortcode( $key, 'insert_islamic_graphic' );
    add_shortcode( $key.'_w', 'insert_islamic_graphic' ); // to be compatible with pre-v1.1 shortcodes
}   


/* ISLAMIC GRAPHIC SHORTCODE FUNCTION */

function insert_islamic_graphic( $atts, $content=null, $code="" ) {
        $code = preg_replace("/_w/", "", $code); // to be compatible with pre-v1.1 shortcodes   
    
        // fetch display type from wp options (default to images)
        $display_type = get_option('islamic_graphics_display_type', 'images');
        
        // Fetch alt_text
        $romanized = $GLOBALS['alt_text'][$code]['romanized'];
        $translation = $GLOBALS['alt_text'][$code]['translation'];
        
        if ($display_type == 'images' || $display_type == 'images_trans'){
            // fetch default height from wp options (default of 20 if not set)
            $default_height = get_option('islamic_graphics_default_height', 20);
            
            // fetch default colour from wp_options (default to black if not set)
            $default_colour = get_option('islamic_graphics_default_colour', 'black');

            // extract attributes
            extract( shortcode_atts( array(
                    'h' => $default_height,
                    'c' => $default_colour,
            ), $atts ) );
            
            // plugin URL
            $plugin_url = plugin_dir_url( "islamic_graphics.php" );
            
            // Construct alt_text
            $alt_text_str =  $romanized . ' (' . $translation . ')';

            // Build HTML
            $html  = '<img title="' . $alt_text_str . '"';
            $html .= ' alt="' . $alt_text_str . '"';
            $html .= ' class="islamic_graphic"';
            $html .= ' src="'. $plugin_url . 'islamic-graphics/img/' . "{$c}" . '/';

            if ("{$h}" <= 20) { $html .= "20"; }
            else { $html .= "40"; }

            $html .= '/' . $code . '.png" height="'. "{$h}" . 'px">';
            
            if ($display_type == 'images_trans') {
                $html .= '<span class="islamic_graphic"> (' . $translation . ')</span>';
            }
            
        }       
        elseif ($display_type == 'text_rom_trans') {          
            $html = '<span class="islamic_graphic"> '. $romanized . ' (' . $translation . ')</span>';           
        }
        elseif ($display_type == 'text_rom') {          
            $html = '<span class="islamic_graphic"> ' . $romanized . '</span>';         
        }
        elseif ($display_type == 'text_trans') {          
            $html = '<span class="islamic_graphic">(' . $translation . ')</span>';         
        }
        
	return $html;
	}


?>