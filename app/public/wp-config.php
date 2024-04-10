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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ']I&PUHMwIwZF`Ep~Jb1)&NiB_B~[&[fN`P0`nC^<>gx&sdBvMt ?g=w`RsBK 8L;' );
define( 'SECURE_AUTH_KEY',   'lbYVy!>w*x;=V7rkGOqEb*b>/bWJNGM9A`r,F%9S`l{OUaX!&XyK.Gal$*lI9 K[' );
define( 'LOGGED_IN_KEY',     '{>DLWHU|>rzNN`ez(5(6j%F]BoQTTD||3w| TrzmK<U.v$*ZRe`updhh19mc#D0^' );
define( 'NONCE_KEY',         'Q#R:_%4pO#+o6xM5(1Zg?`}Io~Cq1^yMQ>A<or_sjYpao[~$3 }F7vDY@bq)g~I*' );
define( 'AUTH_SALT',         '0Xx+5lXIJsxR_PzOrw*b:I o{*@PyEG~,Vfh]QtAEUk&px4)LD<J?%S?+g>i*.in' );
define( 'SECURE_AUTH_SALT',  'R)=;](i1f``{uR1*LiTZcz!asH<c,t#6vvWwuzvq/HBbgViH &|7.ah>ihi:HqTX' );
define( 'LOGGED_IN_SALT',    'cPf1VQ;+]?AVXK_G5aZ#.,cd[7./pr6vj`E!:;.69]EuC{IN85e{L+B426;M!@r<' );
define( 'NONCE_SALT',        'Wr 4^m:}|yA_<`DhC|_A2aF< Y&kO3vsHs?t@0; *3ec![wz[}.K1,q<XwIs^TC4' );
define( 'WP_CACHE_KEY_SALT', ';N!*.l {M0x UEv@7W(+&z`OF3SioH{3sef`OZ|vKz,5YV:ineBbT4NxWO,f5PnG' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define('JWT_AUTH_SECRET_KEY', '-myj1tW$f[~ +QN7iE(B*|<!---ff,g9b)<Cx#yaXPI:|xfBR%[~X;=zkD2sb[g>');
define('JWT_AUTH_CORS_ENABLE', true);
/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
