=== Simple Google Maps Short Code ===
Author URI: http://pippinsplugins.com
Plugin URI: http://pippinsplugins.com/simple-google-maps-short-code
Contributors: mordauk
Donate link: http://pippinsplugins.com/support-the-site
Tags: Google Maps, Google Map, Short Code, gmaps, Pippin Williamson, Pippin's Plugins
Requires at least: 3.2
Tested up to: 4.8
Stable Tag: 1.3.1


A simple short code for embedding Google Maps in any WordPress post or page.

== Description ==

This plugin will enable a simple short code that you can use for embedding Google Maps in any WordPress post or page. The short code uses the [WordPress HTTPS API](http://codex.wordpress.org/HTTP_API) and the [Transients API](http://codex.wordpress.org/Transients_API) for delivering cached maps with little to no impact on your site's performance.

Maps are displayed with the [pw_map]] short code:

`[pw_map address="New York City" key="YOUR API KEY"]`

Google now requires that new accounts use an API key. You can register a free API key [here](https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key).

== Frequently Asked Questions ==

1. Can I change the width or height of the map?

Yes, simply supply a width and height parameter:

`[pw_map address="New York City" width="400px" height="200px" key="YOUR API KEY"]`

You can also use percentages for heights:

`[pw_map address="New York City" width="50%" height="200px" key="YOUR API KEY"]`

2. Can I disable the scroll wheel?

Yes, simple add `enablescrollwheel="false"` to the short code.

`[pw_map address="New York City" enablescrollwheel="false" key="YOUR API KEY"]`

3. Can I disable the map controls?

Yes, simple add `disablecontrols="true"` to the short code.

`[pw_map address="New York City" disablecontrols="true" key="YOUR API KEY"]`

4. How are the maps cached?

Maps are cached using the WordPress [Transients API](http://codex.wordpress.org/Transients_API), which allows for very simple database-based caching.

Each time you display a map, the address specified is used to generate a unique md5 hash, which is used for the cache identifier. This means that if you change the address used for your map, the cache will be refreshed.

5. How often do caches refresh?

The maps are cached for 3 months. Caches are automatically cleared (for individual maps) when you change the address in the short code.

== Installation ==

1. Activate the plugin.
2. Obtain an API key [here](https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key).
3. Added [pw_map address="your address here" key="YOUR API KEY"] to any post or page.

== Changelog ==

= 1.3.1 =

* Fix: API key was not passed to the pw_map_get_coordinates() function

= 1.3 =

* Added `key` parameter to the [pw_map] short code.

= 1.2 =

* Added missing load_plugin_textdomain()
* Changed textdomain for language packs

= 1.1.2 =

* Fixed a bug with the zoom parameter not working

= 1.1.1 =

* Fixed a bug with sites on HTTPS

= 1.1 =

* Added support for disabling map controls via disablecontrols="true", thanks to Alex Hochberger
* Added support for disabling the scroll wheel zoom via enablescrollwheel="false", thanks to Alex Hochberger

= 1.0.3 =

* Fixed a conflict with the Live Composer plugin.

= 1.0.2 =

* Updated Google Maps API to fix broken maps after version 2 was deprecated on March 8, 2013
* Improved error responses

= 1.0.1 =

* Added CSS to fix a problem with responsive themes

= 1.0 =

* First release!