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
define( 'DB_NAME', 'h5p' );

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
define( 'AUTH_KEY',         '1U_@srcR)q_O=F[T_Kb>tr|U{}f8P)!q*T,j/d<OX2~UckpdtzSff@|@}RCs? 9u' );
define( 'SECURE_AUTH_KEY',  'vGr+xlk:8AsXM;:95OHAtbDHZxGL8qvfUQyK(/Q}L9o= wE@G{CGjlpVg^rN=8E9' );
define( 'LOGGED_IN_KEY',    'aA:)?8npGgmK{yL`0/7]Y&jfimmgVc-~bE22@_vg,O<hr[OXcy=rCn)kosZY4@I?' );
define( 'NONCE_KEY',        'Zb~a^u~j0Nw`Jz So+{NI;ga@ie,ki5#+*!{~<oE0F T{*HvNf[!En06k:b!n<rs' );
define( 'AUTH_SALT',        'Wj7Oz:|<$ E7X;qbPz{Ctm+4V_pM1lp]<I[l+gSei0di;gTcv>>DiZ8q) ,f>B $' );
define( 'SECURE_AUTH_SALT', 'c@U0ywm_NR`C(xsS<|FS+5<9ZZT5p.lY4NUDP-@eWdgjzbL,Bv,pxdotk%b{5pkO' );
define( 'LOGGED_IN_SALT',   'El%mY=/!d/hJz#p@?2!QS.Az}HoGlr1*=JDpD}2rwIeA]jP=+_4 xOvHm7^8F 2z' );
define( 'NONCE_SALT',       'fx 5OIts^-aO73W/Lj*xlz]zRo$2%cIN0I4j6}(MlOu;qer!(T_3(i*;`UxAc$:%' );

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
