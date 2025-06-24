<?php
/**
 * GPA Calculator Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package GPA_Calculator_Theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Enqueue scripts and styles.
 */
function gpa_calculator_scripts() {
	// --- Enqueue STYLES ---

    // Google Fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700;800&display=swap', array(), null );
    
    // Font Awesome
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), '6.5.1' );

	// Main theme stylesheet
	wp_enqueue_style( 'gpa-calculator-style', get_stylesheet_uri(), array(), _S_VERSION );


	// --- Enqueue SCRIPTS ---

    // html2canvas library
    wp_enqueue_script( 'html2canvas', 'https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js', array(), '1.4.1', true );
    
    // Main theme javascript
	wp_enqueue_script( 'gpa-calculator-js', get_template_directory_uri() . '/js/main.js', array( 'html2canvas' ), _S_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'gpa_calculator_scripts' );

/**
 * Remove the WordPress admin bar for a cleaner app view.
 */
add_filter('show_admin_bar', '__return_false');
