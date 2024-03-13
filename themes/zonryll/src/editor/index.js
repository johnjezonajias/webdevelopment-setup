import './scss/styles.scss';

import domReady from '@wordpress/dom-ready';
import {
	unregisterBlockStyle,
	registerBlockVariation,
} from '@wordpress/blocks';

domReady( function () {
	/**
	 * Register block variations.
	 */
	registerBlockVariation( 'core/group', {
		name: 'full-width-group',
		title: 'Full width group',
		attributes: {
			align: 'full',
		},
	} );

	/**
	 * Unregister block variations.
	 */
	unregisterBlockStyle( 'core/quote', 'large' );
	unregisterBlockStyle( 'core/quote', 'plain' );
} );
