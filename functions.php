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

function reign_get_theme_mod( $name, $default = false ) {

	if ( is_child_theme() )
		return get_theme_mod( $name, reign_get_parent_theme_mod( $name, $default ) );

	return get_theme_mod( $name, $default );
}

function reign_get_parent_theme_mods() {

	$slug = get_option( 'template' );

	return get_option( "theme_mods_{$slug}", array() );
}

function reign_get_parent_theme_mod( $name, $default = false ) {
	$mods = reign_get_parent_theme_mods();

	if ( isset( $mods[ $name ] ) )
		return $mods[ $name ];

	if ( is_string( $default ) )
		$default = sprintf( $default, get_template_directory_uri(), get_stylesheet_directory_uri() );

	return $default;
}
