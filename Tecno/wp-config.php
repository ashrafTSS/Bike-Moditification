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
define( 'DB_NAME', 'tecno-wp' );

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
define( 'AUTH_KEY',         'K6`L=R]8!m[8d3sY]+@mI_#4u.5j|2:/Zvff3/.9`!sb#ychDmS=ZrI=2VJn;Bz<' );
define( 'SECURE_AUTH_KEY',  '~_D&FR!#@lFBD{.Bi,:]b8Hm#G)p>;CP?b5@zE/W3-*_9095c5_`G< [OasSns S' );
define( 'LOGGED_IN_KEY',    'Y&|vrqapLR2Z;$?5N1VFSu<Ki}(qr;oTKIXz$e(L+RIG2#C8PMsg/Z7C<JjsR*pz' );
define( 'NONCE_KEY',        '!?,J^aE71;]5exvBh&xo=TJ!#zEU|`-@J?*IlE_l$G<Gk08?i,g(n6AO|vXQF lu' );
define( 'AUTH_SALT',        'hH%7p|)fgX(|nvREPQF>-#^Ynk~{h_ykRt&NYolcf ,20H5jY##1)Twl! j)E(^Y' );
define( 'SECURE_AUTH_SALT', '|k&$ LOx%(#uTEsD,.qZ`|qipBGVDVS1RhT; x!Mr:GubJ~P:4!iX*q&EY+HZ5aH' );
define( 'LOGGED_IN_SALT',   ' z/L#dSuu<odoB]ALSzeQ_N&Z#U65YAAm7=vW_7,B5fT tZFu1F`857X3-)]A)_T' );
define( 'NONCE_SALT',       '{ApZ ^/*go+, i}FR`g{ oUuUP1V XCG=P6y3q1BDh1{%F~R80Rs6z:YlSq)cJ{T' );

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
