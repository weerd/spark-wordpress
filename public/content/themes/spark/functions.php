<?php
/**
 * The theme's functions and definitions.
 */


/**
 * -----------------------------------------------------------------------------
 *  Define Constants
 * -----------------------------------------------------------------------------
 */
define( 'THEMEROOT', get_stylesheet_directory_uri() );
define( 'IMAGES', THEMEROOT . '/dist/images' );
define( 'SCRIPTS', THEMEROOT . '/dist/js' );
define( 'FRAMEWORK', get_template_directory() . '/framework' );


/**
 * -----------------------------------------------------------------------------
 *  Load the Framework
 * -----------------------------------------------------------------------------
 */
require_once( FRAMEWORK . '/init.php' );




require_once 'functions/functions-debug.php';

require_once 'functions/functions-wordpress.php';

// require_once 'functions/functions-ajax.php';

require_once 'functions/functions-custom.php';

// require_once 'functions/functions-shortcodes.php';
