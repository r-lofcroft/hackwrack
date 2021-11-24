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
define( 'DB_NAME', 'hackwrack' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '9$Esb^TlvHM3pQFD0Jh]hjmCO43<-.1&5wn7f9Hf^c2dqS*3sP8=iJ2$W Zivg$S' );
define( 'SECURE_AUTH_KEY',  '_2joeD1 .Y|GX#f#$L;wV41D,B[KQJFVwCFX_v03QWm.*eEis@q=&>wkkrw7C9n2' );
define( 'LOGGED_IN_KEY',    '_h*.`k8A!|Lz#f]2O1.c=O< d3s2][jpqVGz@lvOeur-hpC3Ut4/)4)A1Eku./TJ' );
define( 'NONCE_KEY',        'J~,.b*T?,.K#M6-7MXZ3>y9}s#?qnVY_;avG8CLMO}=S nwOwx+c4qWA[O|e|}AO' );
define( 'AUTH_SALT',        'BE/)zM}]sTnOdX@%G>V?`|{%c0@J!Gw>3m`}{$I#TChvc^U5-M*CwimtRn>/97FT' );
define( 'SECURE_AUTH_SALT', 'H<b:P;~-VqyKUD7 U%0]wZ#|,QAo)oZC+2>}vI;1)cB+[rU;B0/dL)2?ZyuRE^n&' );
define( 'LOGGED_IN_SALT',   ',G2M$<*@TS`23_?JW@kzA/rkGq|bFq9/Bgo~1:yB5(slKUWT@)8l_41&Ry`h9-2]' );
define( 'NONCE_SALT',       '`Ve}$`k&:#}:-sj$`Xn@`LrwdRu_R Ie8;/c]&%42SC5jR:W@9#YBa4+W%zW] iC' );

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
