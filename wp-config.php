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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'beauty' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'UdS*Jho xpD|2rIwS L:Xfp_bI=PsE4w8m 0o,;d||Q5k[/?zbrvmqch~b+<e3=#' );
define( 'SECURE_AUTH_KEY',  '?KK2@w<tX}5w`%`{}p+,J>4b?_n+~K__[8;T3u&ne.S.u;XT/mY1*jy{pvsbb3i*' );
define( 'LOGGED_IN_KEY',    'r%HQ8/$)t/?(c,?k^eLm!g!mmktecXJmAPlj-TF<g*Qg)2`{vAfYjv~[6V-7&N8<' );
define( 'NONCE_KEY',        '3WgWC3vykQO+&K!;|1jv:XIKEK*hi)m3Vg3W?+>(_nu/v5?5?>!QV*j:F*%3>FZ>' );
define( 'AUTH_SALT',        '#uZa2ZoV#OryiJj1(h4zT&K.^6L:v`fkg=>&e|orPuE(~v0.,ZXkF3{s~#5 DqVW' );
define( 'SECURE_AUTH_SALT', 'OhS(Ql5Fnpw>dL`k2fa7R(b%=JhmY?wIx!%u^]JRHcC)g]sKLg sYvQ;|y-l*_Pw' );
define( 'LOGGED_IN_SALT',   'S@A1J)+_+Fq6!|(t9}.$6@bdwru+h>Mfj83,d/a[b5kU+bwiv-Y%#F%?*EETl9^-' );
define( 'NONCE_SALT',       'MazX3HY0^!YMLf%<]i2L2;tpnku(,6iUahldj-L:f4[$rP4V0zne HTQ~~1wzcot' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
