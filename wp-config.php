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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'landing-on-wp' );

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
define( 'AUTH_KEY',         'p0nkhaP/fdt !3Noa>JN}(.gm<w_nYPqN3uVI79@YT>CZwq<t#3bv(:CBqTR`ho/' );
define( 'SECURE_AUTH_KEY',  'qQF(;Yht=v;fM.0U}-/yVQU)K^vgTEEi1%reeH9jRpOGXS `g?-RWCTAwcC78rXF' );
define( 'LOGGED_IN_KEY',    'o-g#59:FWbdo#/Fcy^{j?la.U?qd:f5~4:fNSS|/AmWB+_;4abe[p:l`(+0<@Utq' );
define( 'NONCE_KEY',        'QcDLIvpnxS![p ~ub>q4Ub3jcbk]<IJtQ?CF8GX{)U.j{-jZHd~tgsPg<Y#8Q/-p' );
define( 'AUTH_SALT',        'dkZd0m90-7wduXzZNacyH)D<cYPa5)N{X36EEM!>6U/IC08md^31i;-/OzF6TO4z' );
define( 'SECURE_AUTH_SALT', 'EwUXyxnuqMDSK7_>dV>ZmZtf6l)uv8z-BEX+nS0+OcGE]0Cn$Z$hR<fF%() rM!V' );
define( 'LOGGED_IN_SALT',   '{T&jf~4 c0E4S`72,v>DNH=#`YsQ=F3<2P0U=`[O!H0<Bga_9sE1zpbrI;i2C!dc' );
define( 'NONCE_SALT',       'Sl,L%HG]s<Mf_Bs{DdVelj2teTN<Axdc$1z#j<|f3B:SV:`x}+#0l3W=N+6|sjPf' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
