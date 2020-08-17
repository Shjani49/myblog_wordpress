<?php 

/**
 * Enqueue theme stylesheet and scripts.
 */
add_action( 'wp_enqueue_scripts', function() {
    // Get our Js ready to output in the <head> via wp_head() (see header.php)
    wp_enqueue_script(
        'techcareers-theme-scripts', // Our new name for this script file.
        get_theme_file_uri( '/assets/js/scripts.js' ), // URL / path to your script.
        //array( 'react', 'jquery' ), // Does your script depend on other Js libraries /files?
        strftime( get_theme_file_uri( '/assets/js/scripts.js' ) ), // Version number of this script.
        FALSE // Output in the "footer"? <Before </body> closing tag.)
    );

} );