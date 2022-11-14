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
define( 'DB_NAME', 'udemy' );

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
define( 'AUTH_KEY',         'QGp~&$e<BZuOg$2,qP*s&1fpOo;wU>NUN^>_fCP|aI`QF+Ji~.bbq8c2R87w(;%W' );
define( 'SECURE_AUTH_KEY',  'S>Uk4=NHcwC/e!mz+ZbZ%fo_{e{Em!5q~U$UNdY?uU~2ngzg|T)01O~I%(7Z<^HE' );
define( 'LOGGED_IN_KEY',    'wiwtc&ew^f9XM0gmYO4uR*kOw6f%assN%-;imsoyt0KB!bOi5Yq%5l-E1_;UZ^#>' );
define( 'NONCE_KEY',        '[2x{8|<fW:iR!ndhHeFY:ie^]4Ld4AFn-+N*h&D@PSVm j<AT0Mh]/6|{|`J,u&l' );
define( 'AUTH_SALT',        '98Es$zgP1pv&%P*_=lR8,`|S~%B85}d.u9~d+j8l>{M*L3S=`,Jy9c)F;9/@&<~@' );
define( 'SECURE_AUTH_SALT', ']r+J#K]kQ|;s|jy)m;7>)wI$DOC:4W8^2_ST@zDyF}XmruyWdo7,vEDaG=!Lej,4' );
define( 'LOGGED_IN_SALT',   '94(/M$cZ]lz`8v/x-e!*tB+4Bx;V_+~IgdXRJm#x5Um<@f[qzl3)T*BV3DG[]Lg0' );
define( 'NONCE_SALT',       '9zG V?#vN)hby=etWU.G{&}_kKm&Rip}3$+y(WS0.8%.A@/$;RH[aysiz:||#g^_' );

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
