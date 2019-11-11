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
define( 'DB_NAME', 'mrthenDBbm2mp' );

/** MySQL database username */
define( 'DB_USER', 'mrthenDBbm2mp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'gAfiaF7AUD' );

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
define( 'AUTH_KEY',         'xSeS95HD]#tp;+xea+xeaHDWT92;@-gdJCkRN40[JF}[v8|!zgcplSOGZWC9|_C41' );
define( 'SECURE_AUTH_KEY',  '_|_s#_plS}>vrYUokRNFgcJF},N30@z|!okVogdJG}cJF}|!40@zgfMIA<.73^$j' );
define( 'LOGGED_IN_KEY',    'j+mXuePLaL2;HA6.*{<^mjPyfbTA7XTA2IE{<umlSO51[D9#_p9|_pldwsZWCaWD' );
define( 'NONCE_KEY',        '2A*q;*qayiePAQB{$3^uf^qbMjfQAxiT9XH2.H2_~p#xiPePL6TE{+A]<xi*qaH-l' );
define( 'AUTH_SALT',        ',j$mXIfPA{eSD]H1_t1_td-paGWH6_D;*p;~paxiH4|wk!sdNscN8VF0!|whRpZK5' );
define( 'SECURE_AUTH_SALT', '7I>y>zvgQkUFQ3^J0}zvn62*+i{yubXxuaXDATP6;.fqfQufPATI3*tdO95H5_~95' );
define( 'LOGGED_IN_SALT',   'l9H2.x;*qb*ePmXH2lVG1O8[-8[@d-kVGWG1:K5_t1:~pZwhOK7,vgczkQBfQM7QB' );
define( 'NONCE_SALT',       'P.E]+miyjQbM3PME{<u6.uf1:-tdatpWOKlhOK1[S9]#t_tePxqaH96WSL1_95#x' );

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
