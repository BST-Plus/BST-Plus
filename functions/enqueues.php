<?php

/*
OPTIONAL: Google CDN jQuery with a local fallback
See http://www.wpcoke.com/load-jquery-from-cdn-with-local-fallback-for-wordpress/
If you want to use this, simply delete (or comment-out) the block of code below lines 9-27 
*/

if( !is_admin()){
	$url = 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'; 
	$test_url = @fopen($url,'r'); 
	if($test_url !== false) { 
		function load_external_jQuery() {
			wp_deregister_script('jquery'); 
			wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'); 
			wp_enqueue_script('jquery'); 
		}
		add_action('wp_enqueue_scripts', 'load_external_jQuery'); 
	} else {
		function load_local_jQuery() {
			wp_deregister_script('jquery'); 
			wp_register_script('jquery', get_bloginfo('template_url').'/js/jquery-1.11.1.min.js', __FILE__, false, '1.11.1', true); 
			wp_enqueue_script('jquery'); 
		}
		add_action('wp_enqueue_scripts', 'load_local_jQuery'); 
	}
}

function bst_plus_enqueues() {
/*
OPTIONAL: Enqueue WordPress's onboard jQuery
Simply un-comment the next lines of code below (line 35-36) if you want to use WordPress's onboard jQuery
*/
//	wp_register_script('jquery', get_bloginfo('template_url').'/js/jquery-1.11.1.min.js', __FILE__, false, '1.11.1', true);
//	wp_enqueue_script( 'jquery' );

	wp_register_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', false, null);
	wp_enqueue_style('bootstrap-css');

/*
OPTIONAL: Bootstrap Theme enqueued.
Simply delete (or comment-out) the next two lines of code below (lines 45-46) if you don't want the Bootstrap Theme.
*/
  	wp_register_style('bootstrap-theme-css', get_template_directory_uri() . '/css/bootstrap-theme.min.css', false, null);
	wp_enqueue_style('bootstrap-theme-css');

  	wp_register_style('bst-plus-css', get_template_directory_uri() . '/css/bst-plus.css', false, null);
	wp_enqueue_style('bst-plus-css');

  	wp_register_script('modernizr', get_template_directory_uri() . '/js/modernizr-2.6.2.min.js', false, null, true);
	wp_enqueue_script('modernizr');

	wp_register_script('html5shiv.js', get_template_directory_uri() . '/js/html5shiv.js', false, null, true);
	wp_enqueue_script('html5shiv.js');

  	wp_register_script('respond', get_template_directory_uri() . '/js/respond.min.js', false, null, true);
	wp_enqueue_script('respond');

  	wp_register_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', false, null, true);
	wp_enqueue_script('bootstrap-js');

	wp_register_script('bst-plus-js', get_template_directory_uri() . '/js/bst-plus.js', false, null, true);
	wp_enqueue_script('bst-plus-js');

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'bst_plus_enqueues', 100);

?>
