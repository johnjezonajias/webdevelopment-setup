<?php
/**
 * Core theme setup
 *
 * @package Zonryll
 */

namespace Zonryll\Core;

use Zonryll\Helpers;

/**
 * Default setup routine.
 */
function setup(): void {
	add_action( 'after_setup_theme', __NAMESPACE__ . '\\theme_setup' );
	add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\frontend_styles' );
	add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\frontend_scripts' );
	add_action( 'enqueue_block_assets', __NAMESPACE__ . '\\editor_styles' );
	add_action( 'enqueue_block_assets', __NAMESPACE__ . '\\editor_scripts' );
	add_action( 'wp_head', __NAMESPACE__ . '\\add_favicon', 10 );
}

/**
 * Fires after the theme is loaded.
 */
function theme_setup(): void {
	add_editor_style( ZONRYLL_DIST_URL . '/shared.css' );

	// Fully supports WooCommerce.
	add_theme_support( 'woocommerce' );
}

/**
 * Enqueue `frontend` styles.
 */
function frontend_styles(): void {
	wp_enqueue_style(
		'frontend',
		ZONRYLL_DIST_URL . '/frontend.css',
		[],
		Helpers\get_asset( 'frontend', 'version' )
	);

	wp_enqueue_style(
		'shared',
		ZONRYLL_DIST_URL . '/shared.css',
		[],
		Helpers\get_asset( 'shared', 'version' )
	);
}

/**
 * Enqueue scripts.
 */
function frontend_scripts(): void {
	wp_enqueue_script(
		'frontend',
		ZONRYLL_DIST_URL . '/frontend.js',
		Helpers\get_asset( 'frontend', 'dependencies' ),
		Helpers\get_asset( 'frontend', 'version' ),
		true
	);

	wp_enqueue_script(
		'shared',
		ZONRYLL_DIST_URL . '/shared.js',
		Helpers\get_asset( 'shared', 'dependencies' ),
		Helpers\get_asset( 'shared', 'version' ),
		true
	);

	wp_localize_script(
		'frontend',
		'siteData',
		[
			'baseUrl' => esc_url( home_url( '/' ) ),
		]
	);
}

/**
 * Enqueue `editor` styles.
 */
function editor_styles(): void {
	wp_enqueue_style(
		'shared',
		ZONRYLL_DIST_URL . '/shared.css',
		[],
		Helpers\get_asset( 'shared', 'version' )
	);

	wp_enqueue_style(
		'theme-editor',
		ZONRYLL_DIST_URL . '/editor.css',
		[],
		Helpers\get_asset( 'editor', 'version' )
	);
}

/**
 * Enqueue `editor` scripts.
 */
function editor_scripts(): void {
	wp_enqueue_script(
		'shared',
		ZONRYLL_DIST_URL . '/shared.js',
		Helpers\get_asset( 'shared', 'dependencies' ),
		Helpers\get_asset( 'shared', 'version' ),
		true
	);

	wp_enqueue_script(
		'theme-editor',
		ZONRYLL_DIST_URL . '/editor.js',
		Helpers\get_asset( 'editor', 'dependencies' ),
		Helpers\get_asset( 'editor', 'version' ),
		true
	);
}

/**
 * Add site favicon.
 */
function add_favicon(): void {
	echo "<link rel='shortcut icon' href='" . esc_url( ZONRYLL_DIST_URL . '/images/favicon.png' ) . "' />\n";
}
