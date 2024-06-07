<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'phuong19' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '5Dl*4u5(2/cM2nXmB1ZN`LGq,Z![{^$@3:V^w4rpi AdE%npYOY#i4G~,7-[Av?D' );
define( 'SECURE_AUTH_KEY',  'x6ftQvcfk#EKS}ZN(gmn2c4k+>gZm{Dy_U7ao;Oixoof-ql&at-ozMM~WZAxQK.U' );
define( 'LOGGED_IN_KEY',    '| ,3^{@$!1K,sV0|ldvX/[iLSf//8{4TyS.8>+k!Z J2_&HIIw^CU<mOy)J{q44-' );
define( 'NONCE_KEY',        'tX}v.b3%uWSX%rODawI0@kkY0T$@n];^;O|UCBjjcL10l_u=L=<J+Exe{tI76}p,' );
define( 'AUTH_SALT',        'Dq4~N3a;~j@X}X!mOkA!=i:.D`!+3eJ$1*4,W+8re#6:`n-0K_5ES1-{w]NRae@,' );
define( 'SECURE_AUTH_SALT', 'C{=heoAt}lp)^&Drak~aX5[?|.T3*oEAua+99B[:k4=yPt214jrdHe;MG] E+h>2' );
define( 'LOGGED_IN_SALT',   'c[4/@2=}W.Tx^>NYZZF,^omREHh!Wn(5s0;P)M*`i7vnHU~?~XL-*80S_b[36@.k' );
define( 'NONCE_SALT',       'fo+AS|9Cqakze(Q(1A1y2gAjFOp|kU>{U<.v|8JeyIQ58s-O%erZtN.u$wo;[AaW' );

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
