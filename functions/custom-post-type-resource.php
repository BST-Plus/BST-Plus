<?php

/*
Register the custom post type
=============================
E.g. here I have called them 'Resources'.

To change this, do a search-and-replace for:
	"Resource" (singular)
	"Resources" (plural)
	"resource" (singular)
And replace with "your-type" -- as above: uppercase singular, uppercase plural, lowercase singular.

Be sure to rename the TEMPLATE too -- single-resource.php => single-your-type.php
*/

function create_resource_post_type() {
    $args = array(
        'description' => 'Resources Post Type',
        'show_ui' => true, // So it appears in the WordPress admin sidebar.
        'menu_position' => 20, 
        // This menu_position is just below 'Pages' in the WordPress Admin sidebar.
        // If you have multiple Custom Post Types, then position them how you like.
        'exclude_from_search' => true,
        'menu_icon' => 'dashicons-book-alt',
        // Or choose another dashicon, http://www.kevinleary.net/wordpress-dashicons-list-custom-post-type-icons/
        'labels' => array(
            'name'=> 'Resources',
            'singular_name' => 'Resource',
            'add_new' => 'Add New Resource',
            'add_new_item' => 'Add New Resource',
            'edit' => 'Edit Resources',
            'edit_item' => 'Edit Resource',
            'new-item' => 'New Resource',
            'view' => 'View Resources',
            'view_item' => 'View Resource',
            'search_items' => 'Search Resources',
            'not_found' => 'No Resources Found',
            'not_found_in_trash' => 'No Resources Found in Trash',
            'parent' => 'Parent Resource'
        ),
        'public' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes',)
        // Delete [, comments] above if not appropriate.
    );
    register_post_type( 'resource' , $args );
}

add_action( 'init', 'create_resource_post_type' );

/*
NOTES on registering a custom post type
=======================================
You can now create these 'posts' in the normal way: Start a New Resource, e.g. compose a Resources 'post' and hit PUBLISH. Job done.

NOTE: WordPress throws a 404 error on NEW custom post types, because the CMS can't discover them for some reason. So you will need to go into PERMALINKS and change the settings to "Post name" /%postname%/ and hit SAVE. (Even if you have this setting already, please hit SAVE again.) This will flush the rewrite rules so WordPress rebuilds its permalinks (Just remember to do this every time you write code like this to register *another* Custom Post Type.)
*/

/*
Register the custom post taxonomy
=================================
E.g. Building upon the same example ('Resources') as above.
You need STEP TWO (the code below) so that you can have a hierarchy of sub-pages, e.g.
    • Resources
        - Free Resources
        - Cheap Resources
        – Expensive Resources
*/

function register_resource_taxonomy() {
    register_taxonomy('resource_category', 'resource', array (
        'labels' => array (
            'name' => 'Resource Categories',
            'singular_name' => 'Resource Category',
            'search_items' => 'Search Resource Categories',
            'popular_items' => 'Popular Resource Categories',
            'all_items' => 'All Resource Categories',
            'parent_item' => 'Parent Resource Category',
            'parent_item_colon' => 'Parent Resource Category:',
            'edit_item' => 'Edit Resource Category',
            'update_item' => 'Update Resource Category',
            'add_new_item' => 'Add New Resource Category',
            'new_item_name' => 'New Resource Category',
            ),
            'hierarchical' =>true,
            'show_ui' => true,
            'show_tagcloud' => true,
            'rewrite' => false,
            'public'=>true
        )
    );
}

add_action('init', 'register_resource_taxonomy');

/*
NOTES on registering the custom post taxonomy
=============================================
So, now you will see a form in the Resource Editor's Right Column, containing an option to "+ Add New Resource Category". You can do this, calling it (e.g.) Health Resources. Next, create some more Resource 'posts' and you can use that same form to [] check them into your Resource Categories.

And you will notice that you can ORGANIZE (and reorganise) your Resource categories into a hierarchical tree, easily.
*/

/*
Displaying, managing, editing and filtering your custom post types
==================================================================
*/

function resource_edit_columns($columns){
    $columns = array(
        "cb" => "<input type='checkbox' />",
        "photo" => __("Image"),
        "title" => __("Resource"),
        "resource_category" => __("Resource Category"),
        "date" => __("Date")
    );
    return $columns;
}
add_filter("manage_edit-resource_columns", "resource_edit_columns");
 
function resource_custom_columns($column){
    global $post;
    switch ($column){
        case "photo": if(has_post_thumbnail()) the_post_thumbnail(array(50,50));
        break;
        case "resource_category": echo get_the_term_list($post->ID, 'resource_category', '', ', ','');
        break;
    }
}
add_action("manage_resource_posts_custom_column",  "resource_custom_columns");

if ( isset($_GET['post_type']) ) {
    $post_type = $_GET['post_type'];
} else {
    $post_type = '';
}
 
if ( $post_type == 'resource' ) {
    add_action( 'restrict_manage_posts','resource_filter_list' );
    add_filter( 'parse_query','perform_filtering' );
}

function resource_filter_list() {
    global $typenow, $wp_query;
    if ($typenow == 'resource') {
        wp_dropdown_categories(array(
            'show_option_all' => 'Show All Resource Categories',
            'taxonomy' => 'resource_category',
            'name' => 'resource_category',
            'orderby' => 'name',
            'selected' =>( isset( $wp_query->query['resource_category'] ) ? $wp_query->query['resource_category'] : '' ),
            'hierarchical' => false,
            'depth' => 3,
            'show_count' => false,
            'hide_empty' => true,
        ));
    }
}
 
function perform_filtering( $query ){
    $qv = &$query->query_vars;
    if (( $qv['resource_category'] ) && is_numeric( $qv['resource_category'] ) ) {
        $term = get_term_by( 'id', $qv['resource_category'], 'resource_category' );
        $qv['resource_category'] = $term->slug;
    }
}

/*
NOTES on displaying, managing, editing and filtering your custom post types
===========================================================================
All of the above is required to properly 'wire in' your custom post type, so that when you have lots of these 'pages' and categories, you can go to their Listing and do 'quick edits' on them there, renaming, reorganizing, renaming slugs, changing their publication date, changing their status [Published, Pending Review, Draft], etc.
*/
