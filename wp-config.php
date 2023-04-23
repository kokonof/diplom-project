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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '-?htI)uJz1]]} yMD1<bzmbl>MGw&Y}4z%>$wxI`(<-da76}]<J2PR__y:b[5|MF' );
define( 'SECURE_AUTH_KEY',  '/ %=`drAI9/i>vm|{oI6xV{L(jn_ Z&yRkD}|p*rR&9}GyWjs.&mu9BPV3V>G?hk' );
define( 'LOGGED_IN_KEY',    ',QrcRT1PXL<p0S^<%V2Q0w!$MV%BylB(eBR|_7NbRI(mKMj!Cqt|&*ax6Jb?(b*#' );
define( 'NONCE_KEY',        'Q[SiXh.}N[a`?$mz,Y;c81$|.:vADKRNrE%xq6&~Ba@sfO.aj7%Gt _^@XhX11R}' );
define( 'AUTH_SALT',        '6b(?%2py{fQ$~1dM._MoXoK3 1)Kw9XqMbS7~q%xdY*W,98v3Jgi(;6?H=(~;iU.' );
define( 'SECURE_AUTH_SALT', 'En+< C{0r1?j}0l~8G=Ulp[.v`muHs$7C`P[4,|.lA:z_n0+0P6L_^ 1Bw(1?Z9O' );
define( 'LOGGED_IN_SALT',   '{@WZB58[Gp@?XDc0y|]mh%AK0$.|CHR1p@BmD)vU7# 3Gg1FOF5Z:]lS2TCt,C?H' );
define( 'NONCE_SALT',       '4l }DHMu:L)vB3_H^{V@A2g=w`29;YuiCBLh>@?iW?4WR 05MxzybSEq5sKHLMvj' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
