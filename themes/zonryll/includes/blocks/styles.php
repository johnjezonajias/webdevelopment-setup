<?php
/**
 * Block styles
 *
 * @package Zonryll\Styles
 */

namespace Zonryll\Blocks\Styles;

/**
 * Default setup routine.
 */
function setup(): void {
	add_action( 'init', __NAMESPACE__ . '\\add_block_styles' );
}

/**
 * Register block styles.
 */
function add_block_styles(): void {
	register_block_style(
		'core/group',
		[
			'name'  => 'zonryll-box-shadow',
			'label' => __( 'Box shadow', 'zonryll' ),
		]
	);

	register_block_style(
		'core/column',
		[
			'name'  => 'zonryll-box-shadow',
			'label' => __( 'Box shadow', 'zonryll' ),
		]
	);

	register_block_style(
		'core/columns',
		[
			'name'  => 'zonryll-box-shadow',
			'label' => __( 'Box shadow', 'zonryll' ),
		]
	);
}
