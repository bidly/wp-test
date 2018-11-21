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
define('DB_NAME', 'wordpress_test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ']qzoRnL5/1LZN?YU<q,afUV[Xs#!N|iN4spum`+v%{:]^0GrC]b{`av*wM%7N,N4');
define('SECURE_AUTH_KEY',  '9t/BY55]H0;G`.2%xch%3E@fm{#]Q$8q3u&f-OxnkKr7<~;jlaz]!>7QNY,n>lT0');
define('LOGGED_IN_KEY',    '=O1X5BK(1f8&b~_.K@@K!6}H5VB(Qs2>7[zF+1 Dxev?IPmz+.fwc#vh$-A|sSV ');
define('NONCE_KEY',        'P(XYU[Q~~&X!(-~%$hE:c{A[!_`$W6T]w w)v[N!K _)|S79>_yyUdS^w/yX8DhQ');
define('AUTH_SALT',        '|9gQKn5EIzua#@$JN&tMAfT/J`ud[_H*HY1GEF5l@;-6XaOD8Ay[^PpMAIm}&/LY');
define('SECURE_AUTH_SALT', 'CXkbd rDQp2@Q[Y|S,p=}GYiq& 2(J3<Du-agW4kM.lmS/6lN tZ]pu-:h2a(-x5');
define('LOGGED_IN_SALT',   '?FIouGh,m`MyO|JNW&mc^)mAN}2f0Zv2dhgcR,Z$gQZB C;B0Is:je=WlU8~o^$o');
define('NONCE_SALT',       'j;SK_gDY3`^Qr6#P>,*fz>xkN?cCA>Q-wy!v(}y7Ue.^#|!j@%eDMD{Ax.z U>0I');

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
