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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'samsara' );

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
define( 'AUTH_KEY',         '&v`WQ=5w,,uj(QlwxZR!}C/!@g1rpqu1RIa$*6w9@Xsc?>F69T}m4@[9#>yN.:3E' );
define( 'SECURE_AUTH_KEY',  'zZn4 Km|bh{p6ti;hw?kWJvmmV`ltP)^de@KI]fe_hoSI[dd#O9Yh!BVReo7IfB{' );
define( 'LOGGED_IN_KEY',    'bT9<vJ1o;j/EyE JS8Qls@,WnS(]StJd*@a<Y,ItP]0l`yupZ`!Q|8mmWN1vC-[<' );
define( 'NONCE_KEY',        'g_bVQ,|/d8v8Kd4)U+XRsXl+8]BKR-5m4QS=g,b0yj!C^Qo,a9V)bx(Z5V#mtQb3' );
define( 'AUTH_SALT',        'cF}6m0>EP=jN-7D2O]EIuP^BY6k-3h?u+26DD#s5,mFLsLTBasNM/9:8p8Z$r !l' );
define( 'SECURE_AUTH_SALT', '^[WJ,]6|+zpVf@c3md!CkZpE<r_-J=:rK$=@)!2a%EiC3kHs)=Q(G*`L;q1*7`CX' );
define( 'LOGGED_IN_SALT',   ';3l`[g!Tv.IpCNU6[7T~_:w4n<v?]+F?0ROJc7g2g2<p:y<Cf2qCa?D/*D{I1bcW' );
define( 'NONCE_SALT',       'rHz96(,,LHicsOi@G`$ZU>)Y?qH@(vw9hHZfC]<h[Nq^`hZw}J[t0<~eAiGT5RA?' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'samsara_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
