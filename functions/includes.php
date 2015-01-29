<?php

/*
These action hooks add the theme header(s), sidebar(s) and footer(s) to the 
*fallback* (ancient) WordPress core header, sidebar and footer.

These fallbacks are used by WordPress because the header(s), sidebar(s) 
and footer(s) of this theme are not in the root folder but in 'includes/'.

Note: There is some accompanying jQuery that removes these defaults from 
the HTML (see js/bst-plus.js) - so all that is displayed is your 
header(s), sidebar(s) and footer(s).

Note: you can't use these IDs in your theme design, because the jQuery
mentioned above removes them: #page, #header, #sidebar, #footer.

These action hooks below are used so that you can use the *normal* 
get_header(), get_sidebar() and get_footer calls in your templates 
(index.php, etc.). Therefore:

(1.) Any plugin that also makes use of get_header() etc. will work exactly 
as it should.

(2.) You can create custom parts (e.g. header-home.php) and call them in
the normal way (e.g. in index.php, you would have 
<?php get_header('home'); ?>

(3.) And this theme is tidy and organized, with all the template parts in 
the includes/ folder.

If you don't want to use these action hooks, then simply remove the line
require_once locate_template('functions/includes.php') from functions.php
and edit all your base templates (index.php etc.) so that they have:

<?php get_template_part('includes/header.php') ?>
<?php get_template_part('includes/sidebar.php') ?>
<?php get_template_part('includes/footer.php') ?>
*/

function bst_plus_header( $name = null ) {
    do_action( 'bst_plus_header', $name );
 
    $templates = array();
    if ( isset($name) )
      $templates[] = "includes/header-{$name}.php";
  	else
    	$templates[] = "includes/header.php";
 
    if ('' == locate_template($templates, true))
			load_template( TEMPLATEPATH . '/includes/header.php');
}
add_action('get_header', 'bst_plus_header');

function bst_plus_sidebar( $name = null ) {
    do_action( 'bst_plus_sidebar', $name );
 
    $templates = array();
    if ( isset($name) )
      $templates[] = "includes/sidebar-{$name}.php";
  	else
    	$templates[] = "includes/sidebar.php";
 
    if ('' == locate_template($templates, true))
			load_template( TEMPLATEPATH . '/includes/sidebar.php');
}
add_action('get_sidebar', 'bst_plus_sidebar');

function bst_plus_footer( $name = null ) {
    do_action( 'bst_plus_footer', $name );
 
    $templates = array();
    if ( isset($name) )
      $templates[] = "includes/footer-{$name}.php";
  	else
    	$templates[] = "includes/footer.php";
 
    if ('' == locate_template($templates, true))
			load_template( TEMPLATEPATH . '/includes/footer.php');
}
add_action('get_footer', 'bst_plus_footer');
