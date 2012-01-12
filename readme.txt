=== Islamic Graphics ===
Contributors: iMuslim
Donate link: http://muslimmatters.org/become-an-ansaar/
Tags: islam, islamic, muslim, arabic, prophet, muhammad, sallalahu 'alayhi wa salam, radiallahu anhu, radiallahu anhum, alayhis salam, subhanahu wa ta ala, SAW, RA, AS, SWT, shortcode, post, page, plugin, images, image
Requires at least: 2.0.2
Tested up to: 3.2.1
Stable tag: 1.0.2

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

Both black and white versions of each graphic are included.

Plugin produced by http://MuslimMatters.org


== Installation ==

1. Upload the folder 'islamic_graphics' to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress


== Frequently Asked Questions ==

= How do I use the shortcodes to insert the islamic graphics? =
The basic shortcode structure is [shortcode_name h=""]

The following are a list of possible values for shortcode_name, and the islamic phrases that will result when they are used:
* alayhis	- 'alayhis salam
* ranha		- radiallahu anha
* ranhu		- radiallahu anhu
* ranhum 	- radiallahu anhum
* saw		- sallalahu 'alayhi wa salam
* swt		- subhanahu wa ta 'ala

The h attribute is optional and controls the image height in pixels; it defaults to 20.

E.g., the shortcode to insert the black "sallalahu 'alayhi wa salam" graphic with a default height of 20px is: [saw]

E.g., the shortcode to insert the black "'alayhis salam" graphic with a height of 25px is: [alayhis h="25"]

= How do I insert a white version of the graphic? =
Append "_w" to the shortcode_name.

E.g., the shortcode to insert the white "subhanahu wa ta 'ala" graphic: [swt_w]

= Can I customise the graphic via CSS? =
Yes. Images have the class reference 'islamic_graphic' to allow CSS customisation.

= Who designed the graphics? =
The SAW graphic is based on the unicode symbol: ﷺ.
The other graphics were based on the font "Islamic Phrases", designed by AlMedia.net, which is available to download for free, for personal use only, from http://www.almedia.net/free-arabic-fonts.htm.


== Screenshots ==

1. screenshot1.jpg - View of shortcodes in post editor.
2. screenshot2.jpg - View of islamic graphics embedded in a post.


== Changelog ==

= 1.0.2 =
Fixed broken img src url.

= 1.0.1 =
Changed filenames of white images, and shortcode function used to insert them.

= 1.0.0 =
* Initial release.

