=== Islamic Graphics ===
Contributors: iMuslim
Donate link: http://muslimmatters.org/become-an-ansaar/
Tags: islam, islamic, muslim, arabic, prophet, muhammad, sallalahu 'alayhi wa salam, radiallahu anhu, radiallahu anhum, alayhis salam, subhanahu wa ta ala, SAW, RA, AS, SWT, shortcode, post, page, plugin, images, image
Requires at least: 2.0.2
Tested up to: 3.2.1
Stable tag: 1.0.0

Shortcode for the insertion of graphics representing the common Islamic phrases: SAW, RA, SWT and AS, into Wordpress posts and pages.

== Description ==

A simple set of shortcodes to allow authors to insert graphics that represent the common Islamic phrases: SAW, RA, SWT and AS, into Wordpress posts and pages.

Phrases included:
* 'alayhis salam
* radiallahu anha
* radiallahu anhu
* radiallahu anhum
* sallalahu 'alayhi wa salam
* subhanahu wa ta 'ala

Plugin produced by http://MuslimMatters.org


== Installation ==

1. Upload the folder 'islamic_graphics' to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress


== Frequently Asked Questions ==

= How do I use the shortcodes to insert the islamic graphics? =
The basic shortcode structure is [shortcode_name h="" c=""]

The following are a list of possible values for shortcode_name, and the islamic phrases that will result when they are used:
* alayhis	- 'alayhis salam
* ranha		- radiallahu anha
* ranhu		- radiallahu anhu
* ranhum 	- radiallahu anhum
* saw		- sallalahu 'alayhi wa salam
* swt		- subhanahu wa ta 'ala

The h attribute is optional and controls the image height in pixels; it defaults to 20.
The c attribute is optional and controls the image colour; a value of "w" will insert the white version of the image, rather than the default black version.

E.g., the shortcode to insert the black "sallalahu 'alayhi wa salam" graphic with a default height of 20px is: [saw]

E.g., the shortcode to insert the black "'alayhis salam" graphic with a height of 25px is: [alayhis h="25"]

E.g., the shortcode to insert the white "subhanahu wa ta 'ala" graphic: [swt c="w"]


= Can I customise the graphic via CSS? =
Yes. Images have the class reference 'islamic_graphic' to allow CSS customisation.

= Who designed the graphics? =
The graphics supplied with this plugin were originally designed by AlMedia.net.
The font from which the graphics were generated is available to download for free, for personal use only.
http://www.almedia.net/free-arabic-fonts.htm


== Changelog ==

= 1.0.0 =
* Initial release.

