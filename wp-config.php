<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'moktarul_wp5');

/** MySQL database username */
define('DB_USER', 'moktarul_wp5');

/** MySQL database password */
define('DB_PASSWORD', 'E#bi9D7AK7(m~L]o]&^57*&2');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'dJ9t30AsAVziVK8tH8CJHvJS6QV6PF40VqVMdUsrmJRqMs4ZrNTTpL0rDtewM8Wd');
define('SECURE_AUTH_KEY',  'cLhSdZELrR7kh0n50PmfbAX2KrGXTaBu2rmXfoP4v2gImEaLYhxjGv7jDSFwBLCZ');
define('LOGGED_IN_KEY',    'Th2vy12XE9Oe672xhaAyUb6tR6m3pxQfhBMJjmPYGrN2GF2Ig0j7r08COWtkXfPx');
define('NONCE_KEY',        'WZH8SdLujoYSnYIjAtsrBnVp5erOMf0RsQU2f0gcqTsAJaPPpwzXcf7qXsdSyEg6');
define('AUTH_SALT',        'Ma6wzx7SV2wW7ITRt41DWO98v988lNOGHLFy3l7boaApCJXeGsZ9xQmGXBaoyFWy');
define('SECURE_AUTH_SALT', 'vNMx4XhcmHcap4sUBmZ3ZNvN0xjVawEWROfDKwctePsIbaWHVPsbzLpxdMNRDt32');
define('LOGGED_IN_SALT',   'KNDS5vHfZIF4J5lViIDfve7yTpTOo30A1qSrAN8g9ne2jCPNnbQ2zWsIx7cm9ulg');
define('NONCE_SALT',       'LCkC6Joc41ykCMx0MWFCKiySb7XyLs6igOuYoh69tIaUt4Xue8oslUVuKPfR77iF');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

define('WP_MEMORY_LIMIT', '128M');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
