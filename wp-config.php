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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/millzoac/public_html/stanfordlin.com/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'millzoac_wp222');

/** MySQL database username */
define('DB_USER', 'millzoac_wp222');

/** MySQL database password */
define('DB_PASSWORD', 'p04S!R!7G1');

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
define('AUTH_KEY',         'qhiljo1ykxuithwm5koapizfacpek3gynzwkkvpgwcyhhldwvkuf1ngjbni6rj7s');
define('SECURE_AUTH_KEY',  'jh5pa0b3dgjskuqt7pu9qzjgrmrraupfit5sawsvq9b1o2iwoedbfzkab5h0nlnj');
define('LOGGED_IN_KEY',    'uwyp6k8bn5zcnxdbt8ygsgfninisw4x8wsvie80dkotqwzlroofvsz6oh9of1gup');
define('NONCE_KEY',        'kshvihpp1y7bmfhgklbxhye2lou8abnto3ypkb6eupj4wifneixkwc9azfa8jque');
define('AUTH_SALT',        'a3iahndt4swikb12voczkp85fgvxgdweetujyg2irqueloagkxar0tf4pid20kbf');
define('SECURE_AUTH_SALT', '8yrncdfrra6gbz8zjskgsp3idz6chinax6xyh851yodapjnaog6zsznyatqnzqaq');
define('LOGGED_IN_SALT',   'yzwqq7z3egsdaywvn7mppuet5kwhomzmsx4mhm0mrrlwldwnlc4i38cnirxxmlkh');
define('NONCE_SALT',       '8govtmtvvwfx9a5vljtzjodmjxom1ulike2wmq5n2y5ynwqfwktd6sf535ttw13f');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpvc_';

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
