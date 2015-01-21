<?php
/**
 * Admin Page Framework - Demo
 * 
 * Demonstrates the usage of Admin Page Framework.
 * 
 * http://en.michaeluno.jp/admin-page-framework/
 * Copyright (c) 2013-2014 Michael Uno; Licensed GPLv2
 * 
 */

// Create a custom post type - this class deals with front-end components so checking with is_admin() is not necessary.
include( APFDEMO_DIRNAME . '/settings/post_type/load_post_types.php' );

// Create widgets - this class also deals with front-end components so no need to check with is_admin().
include( APFDEMO_DIRNAME . '/settings/widget/load_widgets.php' );

// Create admin pages.
if ( is_admin() ) :

    // Add pages and forms in the custom post type root page.
    include( APFDEMO_DIRNAME . '/settings/admin_page/load_demo_pages.php' );
        
    // Create admin pages in the network admin area.
    if ( is_network_admin() ) {
        include( APFDEMO_DIRNAME . '/settings/network_admin/load_network_admin_pages.php' );
    }
    
endif;