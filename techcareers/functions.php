<?php 
// Functions.php executes on each page load so as long as this theme is active
/**
 * Enqueue theme stylesheet and scripts.
 */
add_action( 'wp_enqueue_scripts', function() {
    // Get our Js ready to output in the <head> via wp_head() (see header.php)
    wp_enqueue_script(
        'techcareers-theme-scripts', // Our new name for this script file.
        get_theme_file_uri( '/assets/js/scripts.js' ), // URL / path to your script.
        //array( 'react', 'jquery' ), // Does your script depend on other Js libraries /files?
        strftime( get_theme_file_uri( '/assets/js/scripts.js' ) ), // Version number of this script. prevent from browser crash
        FALSE // Output in the "footer"? <Before </body> closing tag.)
    );
    // Get our CSS ready to output in the <head> via wp_head() (see header.php)
    wp_enqueue_style(
        'techcareers-theme-styles', // Our new name for this stylesheet file.
        get_theme_file_uri( '/assets/css/main.css' ),// URL / path to your styles.
        strftime( get_theme_file_uri( '/assets/css/main.css' ) ), // version number of your stylesheet
        'all' // What sort of stylesheet (media query) is this?
    );
} );

/**
 *  Register a navigation menu.
 */
register_nav_menus( // We must register navigation, so that WP knows about them!

    array( // An Array of Menu "IDs" and "plain english names."Associative"
        'main_menu' => 'Main Menu',
        'footer_menu' => 'Footer Menu'
    )
);