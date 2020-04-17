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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'curso_wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '58+k;CACPH=r;60!GJc[G8(&(lvbm3X>q(rt~#WDZveJs9S;[rXE6=;sJOrOFw6)' );
define( 'SECURE_AUTH_KEY',  '3wWAz/WTO.^BIw(41,W]VsA Nsba5$W/GTQSlrJ@17Y_39KjKb9<C|Xc3Ge6dMob' );
define( 'LOGGED_IN_KEY',    '&<v:[b?-v(g[pX;d;Ozsc4S=[a7:qa20GtDaRjwgC4!@cV`mGYHtOJiK&)1dB r)' );
define( 'NONCE_KEY',        '8E#!]lsu[?{OP+^Gx@7u`dTyQwL@]T6rMpJ7g>nm2H(<Y:5_2+eQ1RSfQ*3-^e,f' );
define( 'AUTH_SALT',        'RHQ{KY (3A/W0xrK+c.!f&GYD?gYvZ Kx{s$6M,:55.|6h!orz.~;Q%Pd:m3M.T9' );
define( 'SECURE_AUTH_SALT', '0pCxXTH<H [BRF-f9E~l:^k#SiN?&-J.QqZ>|>CWc,-M#Qd]jb8Kh~cP,;O!CLH(' );
define( 'LOGGED_IN_SALT',   '7}^dxZwHVL22WXireOaYe{FB`5&rfNvGOux5a=}mSGgKa~i>}JE>F?lFu`/:yrpl' );
define( 'NONCE_SALT',       'kw7/gaiq>Se{$Tg@zJ7Ow%>^0P4Fc>9,:[S,:L|.Kp(oh<q8Qo8h69pR?(Of5:h=' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
