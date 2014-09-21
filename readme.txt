=== oik-read-more ===
Contributors: bobbingwide, vsgloik
Donate link: http://www.oik-plugins.com/oik/oik-donate/
Tags: shortcodes, smart, lazy, [bw_more]
Requires at least: 3.9
Tested up to: 4.0
Stable tag: 0.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Progressively reveal content by clicking on "read more" buttons.

== Description ==
Implements the [bw_more] shortcode to progressively reveal content by clicking on "read more" buttons.

* Type the [bw_more] shortcode into your content at the point from where you want to hide the remaining content.
* When the content is displayed the shortcode is replaced by a 'read more' button.
* The user reveals the remaining content by clicking on the 'read more' button.

Choose the text to be displayed in the button using

[bw_more "my read more text"]




== Installation ==
1. Upload the contents of the oik-read-more plugin to the `/wp-content/plugins/oik-read-more' directory
1. Activate the oik-read-more plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==
= Is it dependent upon oik? =
Yes. It depends on the oik base plugin.

= What is the syntax of the [bw_more] shortcode? =

[bw_more
 read_more="read more|text - Text for read more button"
 class="|CSS class - CSS class name(s)"]
 
 
Note: You do not need to use the read_more= parameter name

= How do I style the 'read more' button? =

Use custom CSS to style the 'read more' text.



== Screenshots ==
1. oik-read-more in action
2. result after 'read more' clicked

== Upgrade Notice ==
= 0.2 =
Tested up to WordPress 4.0

= 0.1 =
Tested up to WordPress 3.9 

== Changelog ==
= 0.2 = 
* Changed: Does not need to set the plugin server for a plugin hosted on WordPress.org
* Tested: With WordPress 4.0
* Fixed: readme.txt file
 
= 0.1 =
* Added: New plugin implementing the [bw_more] shortcode

== Further reading ==
If you want to read more about the oik plugins then please visit the
[oik plugin](http://www.oik-plugins.com/oik) 
**"the oik plugin - for often included key-information"**

