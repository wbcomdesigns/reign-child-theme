<?php
/**
 * Reign Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Reign-child
 *
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'REIGN_CHILD_THEME_VERSION', '1.0.0' );

/**
 * Enqueue styles.
 */
add_action( 'wp_enqueue_scripts', 'enqueue_reign_child_styles', 15 );
function enqueue_reign_child_styles() {
	wp_enqueue_style( 'reign-child-css', get_stylesheet_directory_uri() . '/style.css', array( 'reign_style' ), REIGN_CHILD_THEME_VERSION, 'all' );
}