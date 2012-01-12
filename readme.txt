=== Plugin Name ===
Contributors: imuslim
Donate link: http://muslimmatters.org/become-an-ansaar/
Tags: islam, islamic, muslim, arabic, prophet, muhammad, sallalahu 'alayhi wa salam, radiallahu anhu, radiallahu anhum, alayhis salam, subhanahu wa ta ala, SAW, RA, AS, SWT, shortcode, post, page, plugin, images, image
Requires at least: 2.0.2
Tested up to: 3.2.1
Stable tag: 1.0.0

Shortcode for the insertion of graphics representing the common Islamic phrases: SAW, RA, SWT and AS, into Wordpress posts and pages.

== Description ==
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

Images have the class reference 'islamic_graphic' to allow CSS customisation.

---
Acknowledgements
The graphics supplied with this plugin were originally designed by AlMedia.net.
The font from which the graphics were generated is available to download for free, for personal use only.
http://www.almedia.net/free-arabic-fonts.htm
---

== Installation ==

1. Upload the folder 'islamic_graphics' to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Changelog ==

= 1.0.0 =
* Initial release.