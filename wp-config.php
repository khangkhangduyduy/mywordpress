<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'xpkjvfwlhosting_48' );

/** Database username */
define( 'DB_USER', 'xpkjvfwlhosting_48' );

/** Database password */
define( 'DB_PASSWORD', '@2ISQRp6]8' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'tticyjlw1h3ppjekza4csoojbrw42d5qcp4babp7f9stoavybv6psm15vgcyakdo' );
define( 'SECURE_AUTH_KEY',  'zwowerlass8ehkp4qh67tyhfe4zpmxarpf1dhvajgzgezptnqymhbphsokpiwoam' );
define( 'LOGGED_IN_KEY',    'ntn85gtyxnoxblbasnrsrbzninucd9ozfe19plbpejrfzlth7vavvnmvj7k6ffru' );
define( 'NONCE_KEY',        '342cmq3cgcbgxmdjtwhxhufbjq4v71rcdaphrgruvpyuiyqjnvvarce9cbw6ljpz' );
define( 'AUTH_SALT',        '4z4zk2bfruua96edh5i54ycozdtdnaxbik5ldoxwqkn2lgkw8zfqkxu8ipd19rci' );
define( 'SECURE_AUTH_SALT', 'v4ycplocqnxx92yaevft1vyupwpzf7ndjbypvulcaa3jkoujzuaupz6tyk1khl26' );
define( 'LOGGED_IN_SALT',   'wr3tor2nfd7kcgk8djjpqglpsdnnwzg39a9hmwqaulr7zm8ljrfjhloyjfwwrtdc' );
define( 'NONCE_SALT',       'seyx76rqnezyut7joiseapnfjtjgwlgzaud1duhaxfaj1gsuflbzg8aaopprbmpo' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpxv_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
