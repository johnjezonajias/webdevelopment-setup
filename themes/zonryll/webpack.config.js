const { resolve } = require( 'path' );
const defaultConfig = require( '@wordpress/scripts/config/webpack.config' );
const { getWebpackEntryPoints } = require( '@wordpress/scripts/utils' );
const CopyWebpackPlugin = require( 'copy-webpack-plugin' );
const { tools } = require( './package.json' );

module.exports = {
	...defaultConfig,
	entry: {
		...getWebpackEntryPoints(),
		...tools.entry,
	},
	output: {
		path: resolve( process.cwd(), 'dist' ),
	},
	plugins: [
		...defaultConfig.plugins,
		new CopyWebpackPlugin( {
			patterns: [
				{ from: 'src/fonts', to: 'fonts' },
				{ from: 'src/images', to: 'images' },
			],
		} ),
	],
};
