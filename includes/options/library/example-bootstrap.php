<?php

// Create admin pages.
if ( is_admin() ) :

    // Add pages and forms in the custom post type root page.
    include( APFDEMO_DIRNAME . '/example/admin_page/load_demo_pages.php' );
    
endif;