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
define( 'DB_NAME', 'mrthensiDBeessk' );

/** MySQL database username */
define( 'DB_USER', 'mrthensiDBeessk' );

/** MySQL database password */
define( 'DB_PASSWORD', 'vPGJvbgHyY' );

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
define( 'AUTH_KEY',         '<+m6<bL*qoYz@RCwgB}gRrF0rcg7@UYNvkrB3rQ>}^J7BdGK_h9D1aOS|-~V5pw' );
define( 'SECURE_AUTH_KEY',  '}Brb^UQ{$QBub,fP^qEnXVCwh4|ZK|wJ4o[-VBzg40ZV0!UFvg4|D;i_tH2td1' );
define( 'LOGGED_IN_KEY',    'qTE+a2A*XbPcRU}rJN0osg0,>UJN,kBF4nrf>$^Y7F@cBE3bQY^vyQ19~WZOwlpG' );
define( 'NONCE_KEY',        '@p9]eP.tWLx+p2_]iH#]~H5Dlae5-ZdS~_w9:1pOquj{^.bAy$qAI6fTXy$T3x+q' );
define( 'AUTH_SALT',        '{bI$mA7XVG-k8:hR!sG0oZ:@YcN!vJ4oN>zN7vg48}L5pa;~S2tpD_WH~pK5ptd1_' );
define( 'SECURE_AUTH_SALT', '8d8[oN!sG1wc0|ZJ@o#xL6qa;*aL*ptH2mW~SDH+l9]lW]-ODxhfQ,r{fQ{$QAuf3' );
define( 'LOGGED_IN_SALT',   '4d:[dN[zN8sc0wRBvg8>cN>}@QBvg4,_tH5lW]+WG-pD:hS:~SCwh5#hR|wK5pZyi' );
define( 'NONCE_SALT',       'Qz0^,F>yM7fbv:~VG~pC:oZ:~VG-lG0ZJ@o0sc0!ca9]ePD;pa;OL+:d:-O9XI$n' );

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
