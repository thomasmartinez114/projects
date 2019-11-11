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
define( 'DB_NAME', 'mrthenwoDBocoiw' );

/** MySQL database username */
define( 'DB_USER', 'mrthenwoDBocoiw' );

/** MySQL database password */
define( 'DB_PASSWORD', '1OW1FlcqLZ' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'X*maePD+queT2<]*eaeOD_xhla9#x+pPD;2#lhlWK[~_wVKO5-ladS1#]~wVKNC!s' );
define( 'SECURE_AUTH_KEY',  'mPL2.aH6.uL2.*xeO#xeOD;*paH*tdZG1pZ95#tK5_-wd4|sdSC[hR8[}@oV}@oN' );
define( 'LOGGED_IN_KEY',    '@kRF0vknc4[z@sRFJ8@zjncB3>nYFJ7@rcgU3>},yXMQE.y$qI7BujnbB3uim' );
define( 'NONCE_KEY',        'tK5paWH;~dO5|_oZD-lSO9[@oG0@okO4|dN4|>zg8>vrVCzkRN8}$UB}>vY0^nYUF' );
define( 'AUTH_SALT',        '*m3^qbM73+LAE2.iPTI<+*qfE262xiWaP;_txeD26]qaPTH:_txlK9D1weiWH#+~t' );
define( 'SECURE_AUTH_SALT', 'JjQ{$mfM.qUQ7ubUEA*ueiX6];*iX6{.iTILH#+*tSHL5]iXaP;.#xmLHK9~txl' );
define( 'LOGGED_IN_SALT',   ';TL2phO95_td;+xhO9xoVS8[hR1:-SC[-@kC}zvcG@khR8[oYF0}zkN8>gNJ4}zQB' );
define( 'NONCE_SALT',       'oG|soSD:-lWG1wgNJ4!sC[-wdN}zvcN,rVR8vgN8B}zQB{ynUF@jgQE^qI^vfM7' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
