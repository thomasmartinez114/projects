<?php
define('WP_CACHE', true); // Added by WP Rocket
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
define('DB_NAME', 'mrthen_wp');

/** MySQL database username */
define('DB_USER', 'mrthen_user');

/** MySQL database password */
define('DB_PASSWORD', 'FG%gL2kYc!31');

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
define('AUTH_KEY',         '+>?a4~EEoz6ySz7gKI1d7??k6HX[Y_#xtYH1]JF-[LR}%Q#|^VQ>AuH095.(2]|K');
define('SECURE_AUTH_KEY',  'e>sF/X=8_D2R7WM;avTW-}v1?2Nej9uK7<T68gc|%2t`~?/y0QfVJaTMBsi2j2J@');
define('LOGGED_IN_KEY',    'Q+[7}b|HfktBTOi_;jK.LZ|Y;Q0N*~/4:/@[yOkf7RuJ9IE$`NL}C,:Jb|,O >k0');
define('NONCE_KEY',        '7x[z[dLa-W%(kfb@d#H>Xy)M]KeY0AZyncj-Tn(W+=ub]uo0{0|i!uk(Ef16%*%e');
define('AUTH_SALT',        '<C8s3BhA.]QBE-`cCk4_I9aEjq>A5K1x_VO|E[PJe$(&v {Y+[C9VB) O|XwF+(x');
define('SECURE_AUTH_SALT', 'C!bnUd*|Ay0X%#+zHURKVQ8H;2EJHu%^=S|)6ZLJlR(.URrXBu7!d`;v4`9)11+:');
define('LOGGED_IN_SALT',   '!/`5O4K-M/,)Nrb8=/HxTFA7&0ZqlE.E)zF(0ebiAB|7Kw(Hdd^XOO4YP`Ban>p3');
define('NONCE_SALT',       '9_0xl)ke(r3{khR^-AoJKfKpDUJ1ZLBWCQx|<htD^PL0 <-WaZCMoAqlyYhg(ziN');

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

define('WP_MEMORY_LIMIT', '256M');
