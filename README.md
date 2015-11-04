#BST Plus

*Version 3.6.3*

**BST Plus is a WordPress Bootstrap starter theme. It has an increasing number of optional add-ons built in.** Examples: navbar drop-down on hover ('Hovernav'), navbar mega-menu ('Meganav'), and WooCommerce support. 

`Use what you want, and delete (or comment out) what you don't want. Each add-on is designed to be independant from the other add-ons, so that removal of one will not deactivate another. Deactivating an add-on will not remove any of the Bootstrap CSS or JS.`

**More information can be found in the BST Plus Docs here: [https://github.com/BST-Plus/bst-plus/wiki](https://github.com/BST-Plus/bst-plus/wiki).**

###BST Plus Child Theme

There's a BST Plus starter child theme if you are interested, called [bst-plus-child](https://github.com/SimonPadbury/bst-plus-child)

Initiating a child theme for BST Plus us a little unusual so I have started one for you, setting up the child stylesheet enqueue so that it is loaded after the BST Plus stylesheet.

-----

###Basic Features of BST Plus

* *Simple, intuitive, clean code.*
* CSS, JS, functions and template parts are organized into different folders.
* **Bootstrap 3.3.5** – CSS and JS included, enqueued. You can simply swap the default Bootstrap 3 files (included) for a custom made Bootstrap 3, and this theme will still work.
* **jQuery 1.11.3** – either using the Google CDN or WordPress's onboard jQuery. You decide.
* **modernizr-2.8.3.min.js** and **respond.js** – included, enqueued.
* **THA action hooks** have been added. (You will need the [THA-Hooks-Interface plugin] (https://github.com/ThematoSoup/THA-Hooks-Interface).)
* **Admin Page Framework** is now added. More information can be [found here](https://github.com/michaeluno/admin-page-framework).
* A starter CSS theme - `css/bst-plus.css`, enqueued. (**Don't** put your own styles in `style.css`.)
* Visual editor stylesheet - into which the same Bootstrap 3 and starter CSS theme are preloaded by `@import`, so that what you see in the visual editor is (mostly!) what you get at the front end (WYSI(M!)WYG). E.g. you will see the theme's typography in the WordPress Post/Page editor, but its width will not be the same as your article column width in the front end.
* Bootstrap pagination ( e.g. `1 | 2 | 3 | Older ->`) for Blog index and category pages.
* [MIT licence](http://opensource.org/licenses/MIT) (open source).

###Optional Features of BST Plus

* [Bootstrap Theme](http://getbootstrap.com/examples/theme/) included.
* jQuery loaded from either Google CDN (with local WordPress fallback), or simply from WordPress. You decide.
* WooCommerce plugin support. (You will also need the [WooCommerce plugin] (http://wordpress.org/plugins/woocommerce/)).
* Choice of two navbar positions (above and below the site title).
* **Hovernav** - navbar dropdown on hover.
* **NEW:** - Hovernav navbar parent links are now followable as links. :-)
* **Meganav** - navbar mega-menu, which automatically works whenever there are grand-child links (for screen sizes >= 768px).
* ** NEW:** - because Hovernav parent links are now followable, this means that parent links in the megamenu are also clickable. :-)
* In `functions/cleanup.php` there are some filters included (but commented-out, so are inactive) for removing WordPress IDs and classes from the navbar(s). If you would like to use these filters, then simply un-comment them.
* A few simple jQuery scripts - in `js/bst-plus.js`, enqueued.
* Custom comment list callback.
* A full-width page template.
* **Custom post type** - example: "Resource" - with instructions for use in comments within the file `functions/custom-post-type-resource.php`

And more to come.

-----

**More information can be found in the [BST Plus Docs here](https://github.com/BST-Plus/bst-plus/wiki).**

**Changelog can be [found here](https://github.com/BST-Plus/BST-Plus/wiki/02-Changelog).**

-----

BST Plus is the "big brother" of **BST**, Bootstrap Starter Theme [https://github.com/SimonPadbury/bst](https://github.com/SimonPadbury/bst). (BST and BST-Plus share the same basic features; see above.)

Is BST-Plus is too much for you? If you only need "BST with WooCommerce support, Hovernav and Meganav" then check out **WBST** – [https://github.com/SimonPadbury/WBST](https://github.com/SimonPadbury/WBST).
