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
define('DB_NAME', 'nowlabne_wp931');

/** MySQL database username */
define('DB_USER', 'nowlabne_wp931');

/** MySQL database password */
define('DB_PASSWORD', 'p2FS)6YD-6');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'k4hn37bg4wqzs8jfg75wqawp0okwp6wry418mnusmrcbfmezxn6d023gjnfe04ll');
define('SECURE_AUTH_KEY',  'y6dvosizo0ywc7o1urlrjak8a8quo1enqmqxjkihtxr1ok6dqs52n4lsta9ypzbg');
define('LOGGED_IN_KEY',    'razrkwbbkdrgrdloh4ousbjgvgvjayjucoma32w4tbodqfv71vnfbo2kwdwavvqd');
define('NONCE_KEY',        'tj74n766ktvedw9zhumogwgjtgyqdx82ikoj07gqhin3jfoman5vlax3gnbs9gvd');
define('AUTH_SALT',        'xaybiezadjalntwwfc6e0gohictg0qfqktwkzi1ttmp2ewqwcxhc3zzm7jg1kj4v');
define('SECURE_AUTH_SALT', '8hidptnmnp3w4cpa36jlll9uo9i0edsbavrqbrodsdxp2wzelnqv5iyukztd0uu2');
define('LOGGED_IN_SALT',   'wdz120z38zgdpf0rnt9g5o8lwect53ezgqdbasp87f8ytzlk0hraeaj9whuy2s3b');
define('NONCE_SALT',       'xowfc7cxo6l3eruiva0l17du2nstls6kq83shhln3gv5bwwizoom9ehmdo49dlap');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wplq_';

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
