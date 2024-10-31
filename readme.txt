=== autometa's NOWON ===
Contributors: JorgeAmVF
Donate link: https://quaestio.org/
Tags: shortcode, automation, current, current date, current time, date, time
Requires at least: 2.5.0
Tested up to: 4.9.2
Stable Tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

It reproduces current time and date in pages, posts, portfolios or products simply via: `[nowon]` and `[nowadays]`.
== Description ==

**autometa's NOWON** is a simple plugin that uses the following shortcodes:

* `[nowon]`    = to generate the current time;
* `[nowadays]` = to generate the current date.

**autometa's NOWON** is a standalone component of **[autometa](https://wordpress.org/plugins/autometa/)** shortcodes pack.

== Installation ==

1. Install it from *Dashboard*/*Plugins*/*Add Plugins* or download it to your plugin folder;
2. Activate it from *Dashboard*/*Plugins*/*Installed Plugins*;
3. Write the following shortcodes in text fields: `[nowon]`, `[nowadays]`.

== Frequently Asked Questions ==

= Plugin Features =

**[autometa](https://wordpress.org/plugins/autometa/)** reproduces metadata information automatically via shorcodes in general, **autometa's NOWON** reproduces time-related data in special.

= How To =

Just write one or more of the following shortcodes inside a text field and between brackets as usual: `[nowon]` and/or `[nowadays]`.

= CSS Style Selectors =

* `#nowon`    = `[nowon]` ID;
* `#nowadays` = `[nowadays]` ID;
* `.autometa` = **autometa** class.

= PHP Functions Reference =

* [`add_shortcode()`](https://developer.wordpress.org/reference/functions/add_shortcode/)
* [`current_time()`](https://developer.wordpress.org/reference/functions/current_time/)
