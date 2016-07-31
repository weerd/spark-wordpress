<?php
/**
 * The base configurations of the WordPress across various environments.
 *
 * This file has the following configurations: Application Route Path, Table 
 * Prefix, Secret Keys, WordPress Language, and ABSPATH. You can find more 
 * information by visiting {@link http://codex.wordpress.org/Editing_wp-config.php 
 * Editing wp-config.php} Codex page. You can get the MySQL settings from your 
 * web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */


/**
 * APP_ROOT: defines the application root directory.
 * APP_ENV: defines the application environment added via an .htaccess file.
 * 
 * @NOTE: Due to production setup need to use __FILE__ instead of __DIR__
 */
define('APP_ROOT', dirname(__DIR__));
define('APP_ENV', getenv('APPLICATION_ENV')); 
// Alternatively, could use $_ENV['APPLICATION_ENV']
// may not be able to use $_ENV['APPLICATION_ENV'] OR getenv('APPLICATION_ENV'), 
// if mod_env not enabled and need to define it manually: define('APP_ENV', 'production'); 


/** 
 * Require environment-specific configuration.
 */
if (file_exists(APP_ROOT . '/config/env/local.php')) {
	require APP_ROOT . '/config/env/local.php';
} else {
	require APP_ROOT . '/config/env/' . APP_ENV . '.php'; // Specified using .htaccess in root directory
}


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'spark_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
