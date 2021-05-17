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
define( 'DB_NAME', 'h5p_test' );

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
define( 'AUTH_KEY',         'erw}|0_<{Dx!t|17@a*rLyY5b~mH>[MQ]=I@F|_(izn>glO|D_d:afl&)Ui&|{BF' );
define( 'SECURE_AUTH_KEY',  'Dwx{f;7.VrOR?PZe}KS MBV3ff>fSaP>o$|0KpqusFtmx]LBZUb5J29vXPXVZVq6' );
define( 'LOGGED_IN_KEY',    'H*q2J(6A5w~$]EhUme^:bZs!+:ffcGzG3r@|r,~{;p}3ag4)+4d};_Gr{S#?I[(G' );
define( 'NONCE_KEY',        'BhNHUXC^-!l$Z]^K7uYO+ ]BrnNpu?>rdW|)cBt>/^XS[DVz~w (c2MrJJo4H$][' );
define( 'AUTH_SALT',        '~gAv[}z+(+(hj2uf5q_mGY|}4ddf:V(A8^4deXIaMX;3Ka*%J``[wQ;&87cw@lgk' );
define( 'SECURE_AUTH_SALT', 'H/= W?ey{|R6;YNds)k1cHY9PMImk{DIO7`4%;[d6I~_3XE}{!x-v1_5/e:.POz3' );
define( 'LOGGED_IN_SALT',   's~O(:n;t|`vW8qZlS8Mwoz)Z xWbWj>pM(Us]@u7PiIa~*59ajb$Ux&q<E!WNOuv' );
define( 'NONCE_SALT',       'Lk`+p|SuVs)@~5dNQ(ZJsE[Y}|0wqJS?Tm&`E{PCcdI8S3<6gz?+_*7}~Y-U@Kq ' );

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
