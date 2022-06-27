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
define( 'DB_NAME', 'apidshop' );

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
define( 'AUTH_KEY',         's~c( FI15c(#F=2]TaIwF0[[4~&!eo^+;*pZF$*x,WcHge1GPJ1qQ(m/1&>jA@lj' );
define( 'SECURE_AUTH_KEY',  '+PBHMRC79oZ$kC8w<lj]@t|`m[G O3IGyjZ1DBG7b.H2=!|%s1SJGu-K|.y{rjm)' );
define( 'LOGGED_IN_KEY',    '(.No+B?zv{aa0UR5v?:(F%R3a0[?8gbkac2}P;#o}w9rWIDp<W1,3GOap~%[I% X' );
define( 'NONCE_KEY',        '0ZG2RC<4h],Y<]b4|PY9(0M*>KZVBF[k-(Rvd;kINOj4]>Doi*.Cl3X;Xq#droM%' );
define( 'AUTH_SALT',        '2$1mywta4{4A~1Kp/1?pb-Te{>jz$CPh$@(R7W[rp1R0F;x^!cG,D%JB*w?4)~;!' );
define( 'SECURE_AUTH_SALT', ']D2RN:yCoVw=z_r7oH/qwmk@q8PN:0qx/%XoZ4O./KZfnHB1N!n~G7rADri1$>D;' );
define( 'LOGGED_IN_SALT',   'Yz(ybiHmqKaodp6}zw;8:BLRq6$;Gc$Z-=?Up9Dgu8[g0B?qhUF760W ,Ym1bH: ' );
define( 'NONCE_SALT',       'O=[j$>@RNs}kY(VubCuwTZArQ^SF<oB%sts` *C3SQ[IZU:hD~E<4dgeUlL6}cVI' );

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
