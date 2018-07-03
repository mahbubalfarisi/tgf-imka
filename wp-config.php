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
define('DB_NAME', 'u452378591_egale');

/** MySQL database username */
define('DB_USER', 'u452378591_ejamu');

/** MySQL database password */
define('DB_PASSWORD', 'yPeVeVuzeN');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         'dAUAJyAJlWQgZ2CmMoxpuJDOiycWCTGBJvnf9LRDcUWsu6Q0QJRWseGOwt1sVsbQ');
define('SECURE_AUTH_KEY',  'kRuI6CMiYOx3Cas9XdVZoxdXGIj3XMSbZ3bC7Y1a6iEzZuUOU57ip2VD2JWiAAD6');
define('LOGGED_IN_KEY',    'rWAHM86o6rRvmIgFccSIRJUBr0UG2rfk2yGmQIpPul1pssdLrPPBi7O1H2rVMDnR');
define('NONCE_KEY',        '3Bc9OwDxAZ7nhORj5qOWIBztCjJtOiMA8fCR2JTbOXQsiinCIWnNXx3BWs73UqDx');
define('AUTH_SALT',        'QxNJ6Gr4kkAIvQT4N1RmpBaxKMsthUGWMPVqx7VJyCDwraHrYajnGmzxCqyYbzRx');
define('SECURE_AUTH_SALT', 'LbF0BFdnYzBntRKddfSVhSbEbE8atgWSzvGA8ATZpebEc99lwAKJVaQpdwTNNSyr');
define('LOGGED_IN_SALT',   '9k4J3667hccw33UTlypxgiE30UJdtapM1UjK8JFFFuiHly7CsqsNymzC1DFNkSBK');
define('NONCE_SALT',       'HpZsUMt8FU9jbgFZobt9bYO6Clcoi3eMyHszWY8M5L2lYXhghdCUL6P2AdMXC0S1');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

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
$table_prefix  = 'anxx_';

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
