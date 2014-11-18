=== Menu Breadcrumb ===
Contributors: jchristopher
Donate link: https://mondaybynoon.com/donate/
Tags: menu, breadcrumb, breadcrumbs, nav, navigation, menus
Requires at least: 4.0
Tested up to: 4.0
Stable tag: 1.0.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Generate a breadcrumb trail from a WordPress Menu

== Description ==

Breadcrumbs are often generated from Page structure, but in a world of Custom Post Types that doesn't always work. Menu Breadcrumb uses your WordPress Menu to generate a breadcrumb trail based on the current page.

[View on GitHub!](https://github.com/jchristopher/menu-breadcrumb)

== Installation ==

1. Download `menu-breadcrumb.zip` and extract
1. Upload the `menu-breadcrumb` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place `<?php if ( function_exists( 'menu_breadcrumb') ) { menu_breadcrumb( 'my-menu-id' ); } ?>` in your templates where you want the breadcrumb to appear

== Frequently Asked Questions ==

= How do I output a breadcrumb trail? =

Add the following to your theme template where you would like to output the breadcrumb:

`<?php
    if ( function_exists( 'menu_breadcrumb') ) {
        menu_breadcrumb(
            'main',                             // Menu Location to use for breadcrumb
            ' &raquo; ',                        // separator between each breadcrumb
            '<p class="menu-breadcrumb">',      // output before the breadcrumb
            '</p>'                              // output after the breadcrumb
        );
    }
?>`

= More documentation? =

Of course! [https://github.com/jchristopher/menu-breadcrumb](https://github.com/jchristopher/menu-breadcrumb)

= Can I contribute? =

Of course! [https://github.com/jchristopher/menu-breadcrumb](https://github.com/jchristopher/menu-breadcrumb)

== Changelog ==

= 1.0.2 =
* Added a `menu_breadcrumb_level` property to each breadcrumb object

= 1.0.1 =
* Fixed an issue where the Menu wasn't properly retrieved from the location

= 1.0.0 =
* Initial release
