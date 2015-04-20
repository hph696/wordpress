<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bitnami_wordpress');

/** MySQL database username */
define('DB_USER', 'bn_wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'd0ed39cc59');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1:3306');

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
define('AUTH_KEY',         'edc99dd238cc30fb769af90c66178029e2403e7779c44001187e540012948c55');
define('SECURE_AUTH_KEY',  'ec41cc82803993299f9778928cecd6ffac73b145b1bd8d8cdd490c2a04777831');
define('LOGGED_IN_KEY',    '1fa1857cbd3fbf460b0fc661605bcfc4d469ff2bb24b9a197754fec920a7d7c9');
define('NONCE_KEY',        'c9a0870498ca3cd14f94dfc5628e73a943a7b28fa7284205ed03dac2c89c53e8');
define('AUTH_SALT',        '2a3c79201ca1775e210cedad594ebcc56467b43dde19fed833ddbb4319d5825d');
define('SECURE_AUTH_SALT', '63414d1394b076807e162ff5fad36d596c389613dd03fa8b7f4ea68389fff420');
define('LOGGED_IN_SALT',   '2ef05242d300b7c9b3ac354ab907f45da6e78c29cb987174a545d9caa6e69c26');
define('NONCE_SALT',       '963f03edb71289c965f78ef2557584a72dd0242c37c65816018cf141997ae03d');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */
/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','http://example.com');
 *  define('WP_SITEURL','http://example.com');
 *
*/

define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_TEMP_DIR', 'C:\Bitnami\wordpress-4.1.1-0/apps/wordpress/tmp');

