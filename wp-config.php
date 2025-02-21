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
define( 'AUTH_KEY',         '%9+@;LnT86san_H8`udWd?Z +&3)5hjSl`vZGVQeVC~/gP6.Dgg%X_Fs@rBpE6f9' );
define( 'SECURE_AUTH_KEY',  '<#zqzVJsJ&%?Yf6B3j0H<YfYs_Qw#oeJlr!-(h$TSSO#<6YI.o<z>_@)4kqg!k/R' );
define( 'LOGGED_IN_KEY',    '@Hr`f~@Uv<@mDHp1d|q4sdYqZXb2=;=5dR]l>_&r:^:$7eoy$4be.WH{G@nFz>])' );
define( 'NONCE_KEY',        'H:cBfC+-<@bY>RH&j[sO}|n),go!K+>pJ8r749$hi[4_QPd9?4Pm5:f `3oRa.}W' );
define( 'AUTH_SALT',        'T_Q}%16GIx;xa[2J|oG9H*WgIHYonXk!-#/Zs8zOLad5:2ZMOu GuzhNvb+Sk)Ha' );
define( 'SECURE_AUTH_SALT', 'X.aQi!O}=}CH[~U`V>w5yga`p4xW1XD0F#Z aD-,Gz^`_|)-%C,!n2:a@/UXnmt[' );
define( 'LOGGED_IN_SALT',   'h.NK(1!7*)aiG8J@.sJ&)LjD6)#*0)Q2n;!Fe/z.DViix7e3u 9xhf$Rm.;t5HhD' );
define( 'NONCE_SALT',       'oY@WVO+re;cTu[g]T^~V8,S)86diY{mUO/eT;_BPDA RJ0;;x4wm un__h9S5ar[' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
