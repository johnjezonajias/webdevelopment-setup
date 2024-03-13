<?php
/**
 * Functions and definations.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Zonryll
 */

/**
 * Theme constants.
 */
define( 'ZONRYLL_VERSION', wp_get_theme()->get( 'Version' ) );
define( 'ZONRYLL_URL', get_template_directory_uri() . '/' );
define( 'ZONRYLL_PATH', get_template_directory() . '/' );
define( 'ZONRYLL_INC_PATH', ZONRYLL_PATH . 'includes' );
define( 'ZONRYLL_DIST_URL', ZONRYLL_URL . 'dist' );
define( 'ZONRYLL_DIST_PATH', ZONRYLL_PATH . 'dist' );

/**
 * Require composer autoloader if it exists.
 */
if ( file_exists( ZONRYLL_PATH . '/vendor/autoload.php' ) ) {
	require_once ZONRYLL_PATH . '/vendor/autoload.php';
}

/**
 * Include files.
 */
require_once ZONRYLL_INC_PATH . '/helpers.php';
require_once ZONRYLL_INC_PATH . '/core.php';
require_once ZONRYLL_INC_PATH . '/blocks/core.php';

/**
 * Starts initialization.
 */
\Zonryll\Core\setup();
\Zonryll\Blocks\setup();
