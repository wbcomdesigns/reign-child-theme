<?php
/**
 * REIGN Child theme functions.
 *
 * Add your own PHP below the marked line at the end of this file. Everything
 * in this child theme survives Reign updates.
 *
 * Docs: https://reigntheme.com/docs/developer-guide/child-theme/
 *
 * @package Reign_Child
 */

defined( 'ABSPATH' ) || exit;

/**
 * Load the child stylesheet after all of Reign's stylesheets.
 *
 * Reign's own CSS ships as compiled bundles, not through its style.css, so the
 * parent style.css is not enqueued here (it only holds the theme header).
 *
 * Reign queues its styles late (priority 5001), and with Smart Performance on it
 * also loads a "critical" stylesheet that repeats its base rules. This runs
 * after Reign and depends on both, so the child file is printed last and your
 * rules win when they are equally specific. The version is the file's modified
 * time, so browsers pick up your edits straight away.
 */
function reign_child_enqueue_styles() {
	$path = get_stylesheet_directory() . '/style.css';
	$deps = array();

	foreach ( array( 'reign_main_style', 'reign-critical' ) as $handle ) {
		if ( wp_style_is( $handle, 'enqueued' ) ) {
			$deps[] = $handle;
		}
	}

	wp_enqueue_style(
		'reign-child-style',
		get_stylesheet_uri(),
		$deps,
		file_exists( $path ) ? (string) filemtime( $path ) : wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'reign_child_enqueue_styles', 6000 );

/**
 * Load translations for strings you add in this child theme.
 *
 * Put reign-child-{locale}.mo files in the child theme's /languages folder.
 */
function reign_child_load_textdomain() {
	load_child_theme_textdomain( 'reign-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'reign_child_load_textdomain' );

/**
 * Keep Reign's own settings in step with changes made in the child theme.
 *
 * Reign copies the parent theme's Customizer settings into this child theme
 * every time you switch to it. Without this mirror, anything you change while
 * the child theme is active would be replaced by the parent's older copy the
 * next time you switch themes. Theme switches themselves (Appearance > Themes)
 * are left alone.
 *
 * @param mixed $value     New theme mods for the child theme.
 * @param mixed $old_value Previous theme mods.
 * @return mixed The child theme's value, unchanged.
 */
function reign_child_mirror_theme_mods( $value, $old_value ) {
	global $pagenow;

	if ( 'themes.php' !== $pagenow ) {
		update_option( 'theme_mods_' . get_template(), $value );
	}

	return $value;
}
if ( get_stylesheet() !== get_template() ) {
	add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), 'reign_child_mirror_theme_mods', 10, 2 );
}

/*
 * ---------------------------------------------------------------------------
 * Your custom code goes below this line.
 *
 * Examples:
 *
 * Run code on a Reign hook (see the hooks reference in the docs):
 *
 *     add_action( 'reign_before_footer', function () {
 *         echo '<div class="my-notice">Hello from the child theme.</div>';
 *     } );
 *
 * Override a Reign template: copy the file from the reign-theme folder into
 * this child theme at the same relative path, for example
 * template-parts/content.php, then edit the copy.
 * ---------------------------------------------------------------------------
 */
