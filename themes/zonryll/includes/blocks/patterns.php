<?php
/**
 * Block patterns
 *
 * @package Zonryll\Blocks
 */

namespace Zonryll\Blocks\Patterns;

/**
 * Default setup routine.
 */
function setup(): void {
	add_action( 'init', __NAMESPACE__ . '\\unregister_patterns', 10 );
}

/**
 * This is an example of how to unregister a core block pattern and a block pattern category.
 *
 * Must be called after the patterns and pattern categories that you want to unregister have been added.
 *
 * @see https://developer.wordpress.org/reference/functions/unregister_block_pattern/
 * @see https://developer.wordpress.org/reference/functions/unregister_block_pattern_category/
 */
function unregister_patterns(): void {
	unregister_block_pattern( 'core/query-small-posts' );
	unregister_block_pattern( 'core/query-large-title-posts' );
	unregister_block_pattern( 'core/query-offset-posts' );
	unregister_block_pattern_category( 'header' );
}
