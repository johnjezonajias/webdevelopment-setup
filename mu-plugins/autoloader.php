<?php
/**
 * Plugin Name: Autoloader
 * Description: An autoloader that enables standard plugins to be required just like must-use plugins.
 * Version: 1.0.0
 * Author: John Jezon Ajias
 * Author URI: http://webdevjohnajias.one
 *
 * @package Autoloader
 */

use Roots\Bedrock\Autoloader;

$vendor = dirname( __DIR__ ) . '/vendor/autoload.php';
if ( file_exists( $vendor ) ) {
	require_once $vendor;
}

/**
 * Start the autoloading
 */
if ( is_blog_installed() && class_exists( Autoloader::class ) ) {
	new Autoloader();
}
