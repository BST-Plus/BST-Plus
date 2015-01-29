<?php

/*
Action hooks add the theme header(s), sidebar(s) and footer(s) to the 
WordPress fallback header, sidebar and footer (found in 
wordpress/wp-content/includes/.

There is some accompanying jQuery that removes these defaults from 
the HTML (see js/bst-plus.js) - so all that is displayed is your 
header(s), sidebar(s) and footer(s).

Note: you can't use these IDs in your theme design, because the jQuery
mentioned above removes them: #page, #header, #sidebar, #footer.

More information can be found in the BST-Plus wiki:
https://github.com/BST-Plus/BST-Plus/wiki
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
