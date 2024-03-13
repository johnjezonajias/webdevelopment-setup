<?php
/**
 * Blocks core setup
 *
 * @package Zonryll\Blocks
 */

namespace Zonryll\Blocks;

/**
 * Default setup routine.
 */
function setup(): void {
	// Include files.
	require_once ZONRYLL_INC_PATH . '/blocks/patterns.php';
	require_once ZONRYLL_INC_PATH . '/blocks/styles.php';

	// Start initialization.
	Patterns\setup();
	Styles\setup();

	add_action( 'init', __NAMESPACE__ . '\\register_blocks', 0 );
}

/**
 * Automatically registers all blocks that are located within the dist/blocks directory.
 */
function register_blocks(): void {
	// Register all the blocks in the theme.
	if ( file_exists( ZONRYLL_DIST_PATH ) ) {
		$block_json_files = glob( ZONRYLL_DIST_PATH . '/**/*/block.json' );

		// Auto register all blocks that were found.
		foreach ( $block_json_files as $filename ) {
			$block_folder    = dirname( $filename );
			$block_options   = [];
			$asset_file_path = $block_folder . '/index.asset.php';

			if ( ! defined( 'SCRIPT_DEBUG' ) && file_exists( $asset_file_path ) ) {
				$asset = require $asset_file_path;
				// Determine React refresh hot module replacement.
				if ( isset( $asset['dependencies'] ) && in_array( 'wp-react-refresh-runtime', $asset['dependencies'], true ) ) {
					wp_die( 'You are in development mode, enable SCRIPT_DEBUG in your wp-config.php file.' );
					exit;
				}
			}

			register_block_type_from_metadata( $block_folder, $block_options );
		}
	}
}

/**
 * Register block categories.
 *
 * @param array $categories Array of block categories.
 * @return array Modified array of block categories.
 */
function register_categories( $categories ) {
	return array_merge(
		$categories,
		[
			[
				'slug'  => 'zonryll',
				'title' => __( 'Zonryll', 'zonryll' ),
				'icon'  => 'theme',
			],
		]
	);
}
