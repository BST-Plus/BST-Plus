<?php

/* Exit if accessed directly */
if ( ! defined( 'ABSPATH' ) ) { exit; }

/* Define constants for the demo plugin - these are not necessary in your project */
define( 'APFDEMO_FILE', __FILE__ );
define( 'APFDEMO_DIRNAME', dirname( APFDEMO_FILE ) );

/* Localization */      
if ( is_admin() ) {
    load_plugin_textdomain( 
        'admin-page-framework-demo', // text domain
        false,   // deprecated
        basename( APFDEMO_DIRNAME ) . '/library/language/'  // Relative path to WP_PLUGIN_DIR where the .mo file resides.
    );
    load_plugin_textdomain( 
        'admin-page-framework',     // text domain
        false,  // deprecated
        basename( APFDEMO_DIRNAME ) . '/library/language/'  // Relative path to WP_PLUGIN_DIR where the .mo file resides.
    );      
}

/* Include the library file */
if ( ! class_exists( 'AdminPageFramework' ) ) {
    include( 
        defined( 'WP_DEBUG' ) && WP_DEBUG
            ? APFDEMO_DIRNAME . '/library/development/admin-page-framework.php' // use the development version when you need to do debugging.
            : APFDEMO_DIRNAME . '/library/admin-page-framework.min.php' // use the minified version in your plugins or themes.
    );
}



/**
 *  Create admin pages
 *
 *
 */ 
if ( is_admin() ) :
    /** 
     *  The (apf-settings.php) below will load up the complete framework options for you to explore. 
     *  Simply comment it out so as to not load the full settings.
     *  Note that if you remove this line, then also remove the associated folders found in these locations:
     *  admin_page found here: "includes > options > settings"
     *  post_type found here: "includes > options > settings"
     *  widget found here: "includes > options > settings"
     *  network_admin found here: "includes > options > settings"
     */

    include( APFDEMO_DIRNAME . '/settings/apf-settings.php' );

    /**
     *  The (load_basic_usage.php) below will load up the basic framework settings. Simply uncomment it 
     *  out to use the basic usage settings.
     *  Note that if you remove this line, then also remove the associated folder: 
     *  basic_usage found here: "includes > options > settings"
     */

    //  include( APFDEMO_DIRNAME . '/settings/basic_usage/load_basic_usage.php' );
    
endif;
