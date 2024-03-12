<?php
/**
 * Helper functions
 *
 * @package Zonryll
 */

namespace Zonryll\Helpers;

/**
 * Get asset info from generated @wordpress/scripts .asset.php file.
 *
 * @param string $slug File name.
 * @param string $attribute Optional attribute to get. Can be version or dependencies.
 */
function get_asset( $slug, $attribute = null ): mixed {
	static $assets = [];

	if ( isset( $assets[ $slug ] ) ) {
		$asset = $assets[ $slug ];
	} elseif ( file_exists( ZONRYLL_DIST_PATH . '/' . $slug . '.asset.php' ) ) {
		$asset = require ZONRYLL_DIST_PATH . '/' . $slug . '.asset.php';
	} elseif ( file_exists( ZONRYLL_DIST_PATH . '/js/' . $slug . '.asset.php' ) ) {
		$asset = require ZONRYLL_DIST_PATH . '/js/' . $slug . '.asset.php';
	} elseif ( file_exists( ZONRYLL_DIST_PATH . '/css/' . $slug . '.asset.php' ) ) {
		$asset = require ZONRYLL_DIST_PATH . '/css/' . $slug . '.asset.php';
	} else {
		return null;
	}

	if ( ! empty( $asset ) ) {
		$assets[ $slug ] = $asset;
	}
	if ( ! empty( $attribute ) && isset( $asset[ $attribute ] ) ) {
		return $asset[ $attribute ];
	}

	return $asset;
}
