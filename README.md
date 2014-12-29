#BST Plus

*Version 2.2*

**BST Plus is a WordPress starter theme loaded with Bootstrap 3. It has an increasing number of optional add-ons built in - to name a few examples: navbar drop-down on hover ('Hovernav'), navbar mega-menu 'Meganav'), and WooCommerce support. Simply use what you want, delete (or comment out) what you don't want

BST Plus is the big brother of BST [https://github.com/SimonPadbury/bst](https://github.com/SimonPadbury/bst). It shares the same basic features as BST.

##Basic Features of BST Plus

* *Simple, intuitive, clean code.*
* CSS, JS, functions and template parts are organized into different folders.
* **Bootstrap 3.3.1** - CSS and JS enqueued. You can simply swap the default Bootstrap 3 files (included) for a custom made Bootstrap 3, and this theme will still work.
* **jQuery 1.11.1** either using the hosted Google CDN or WordPress's onboard jQuery. (You decide).
* `Modernizr.js`, `respond.js` and `html5shiv.css` included - enqueued. (Keep what you want; delete what you don't.)
* A starter CSS theme - `css/bst-plus.css`, enqueued. (**Don't** put your own styles in `style.css`.)
* Visual editor stylesheet - into which the same Bootstrap 3 and starter CSS theme are preloaded by `@import`, so that what you see in the visual editor is (mostly!) what you get at the front end (WYSI(M!)WYG). E.g. you will see the theme's typography in the WordPress Post/Page editor, but its width will not be the same as your article column width in the front end.
* Bootstrap pagination ( e.g. `<- Previous | 1 | 2 | 3 | Next ->`) for Blog index and category pages.
* [MIT licence](http://opensource.org/licenses/MIT) (open source).

##Optional Features of BST Plus

* [Bootstrap Theme](http://getbootstrap.com/examples/theme/) included.
* jQuery loaded from either Google CDN (with local WordPress fallback), or simply from WordPress. You decide.
* **WooCommerce** plugin support. (You will also need the [WooCommerce plugin] (http://wordpress.org/plugins/woocommerce/)). _Delete the CSS and JS for this if you don't want it._
* Choice of two navbar positions (top of screen and/or below site title). _Simply delete what you don't need._ **You can't have both** navbars because that will give you a two hamburgers (and two collapsed navbars) on small-screen devices.
* **Hovernav** - navbar dropdown on hover.
* **Meganav** - navbar mega-menu, which automatically works whenever there are grand-child links (for screen sizes >= 768px).
* In `functions/cleanup.php` there are some filters are included (but commented-out, so are inactive) for removing WordPress IDs and classes from the navbar(s). If you would like to use these filters, then simply un-comment them.
* A few simple jQuery scripts - in `js/bst-plus.js`, enqueued. Example: **Hovernav** (see below).
* Custom comment list callback.
* **A full-width page template** - you can select it in the WordPress Page Editor **Page Attributes** panel.

MORE INFORMATION can be found in the [BST Plus Wiki](https://github.com/SimonPadbury/bst-plus/wiki).

-----

##Hovernav

The navbar has some modifications that make the dropdown menu appear on hover (in `js/bst-plus.js` plus `css/bst-plus.css`). *The Bootstrap js and css have not been changed*.

_Hovernav_ only operates for screen sizes >=768px. It doesn't operate on phones, where Bootstrap displays the navbar as as the usual dropdown menu system).

You can easily delete the _hovernav_ segments of `js/bst-plus.js` and `css/bst-plus.css` if you don't want them. Removing _hovernav_ will not affect the functionality of _meganav_.

-----

##Meganav

The navbar has some modifications that enable **child links and grandchild links** to be shown in a **megamenu** (in `js/bst-plus.js` plus `css/bst-plus.css`). 

Meganav is **responsive**. Explanation:

* For screen sizes < 768px, _meganav_ detects those dropdowns containing grandchild links and displays them differently: the child links are set `font-weight: bold` while their corresponding grandchild links are set `font-weight: normal` and with added left margin.
* For screen sizes >= 768px (with the navbar in menubar mode), all _dropdowns with child links and grandchild links_ are displayed as a _full-width megamenu_. Meanwhile, dropdowns not containing grandchild links are displayed in the normal Bootstrap style.
* In the megamenu: child links are displayed horizontally in bold, as heads of columns containing their respective grandchild links.
* If the megamenu content is too wide for a grid width (e.g. in medium screen sizes), then the content will scroll horizontally.

You can easily delete the _meganav_ segments of `js/bst-plus.js` and `css/bst-plus.css` if you don't want them. Removing _meganav_ will not affect the functionality of _hovernav_.

-----

##WooCommerce support

* You will need to install the [WooCommerce plugin](http://wordpress.org/plugins/woocommerce/).
* **Improvements since version 1.9:** Now with lots of re-styling of WooCommerce as Bootstrap (see `js/bst-plus.js` and `css/bst-plus.css`). Note: the WooCommerce stylesheet has not been 'put out of gear'. Therefore some of the basic WooCommerce styling is implemented while others styles (e.g. buttons, form elements, message and information panels) have had their styles _over-ridden_ by Bootstrap styles. This has been accomplished mostly by using jQuery to swap WooCommerce classes for Bootstrap classes; however, some jQuery-added inline styles and some stylesheet-added button styles have also been used. (These are all easy to remove by deleting if you don't want them - see below.)
* Your website will need hyperlinks to "Shop", "My Account", "Cart" and "Checkout" e.g. in your primary menu.
* You will need to add some WooCommerce Widgets to the sidebar (at minimum, WooCommerce Cart and WooCommerce Categories)
* And, of course, you will need to add salable items to your shop, and set up your payment gateway.

Find out more about WooCommerce here: [http://www.woothemes.com/woocommerce/](http://www.woothemes.com/woocommerce/).

-----

####What if you don't want WooCommerce support?

Simply remove and delete these things that you won't be needing - and everything else will just work fine:

* **Remove:** woocommerce.php.
* **Remove:** `/functions/woocommerce-setup.php`.
* **Delete:** in /functions/setup.php, scroll to the bottom and delete the line
`add_theme_support('woocommerce');`.
* **Delete:** in `/css/bst.css`, scroll to the bottom and delete all style rules that have to do with WooCommerce.
* **Delete:** in `/js/bst.js`, scroll to the bottom and delete all jQuery code that has to do with WooCommerce.

-----

##Easily make this theme your own

* **Rename** the root folder from `bst-plus/` to `yourtheme/`.
* **Rename** `bst-plus.css` to `yourtheme.css`.
* **Rename** `bst-plus.js` to `yourtheme.js`.
* **Do a global search-and-replace** ("Replace in files...") to rename "bst-plus" to "your-theme" and "bst_plus" to "your_theme" **everywhere** in the theme's code.
* **Modify** the comments in `style.css`.

Do all that correctly, and this WordPress theme will still work!
