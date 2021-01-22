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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '#/W|^6~g[w3N/Pc/xs3SyK,wl}$jap;-l$RcQ7~qfwI<Gz1p0C43U6`wT<WmI5Cc' );
define( 'SECURE_AUTH_KEY',  'WL`Xl(+#skRkFIM_{wv0xP/O|w|/%YkG70m.~>f8;8Ek#oB(1wIncW$~`U8:^G,E' );
define( 'LOGGED_IN_KEY',    '&5{-#+89+<KR@}ojq]Gf,QTH#+K3J *!`:/McK?o6nKT#!@Y&>?U6i8Az2UQsWA*' );
define( 'NONCE_KEY',        'SQRfZ$9)7zTLC]v*D9mc(7,a` Ba0.m%(eNMVhV(hls$T8@rwTydRi{DI;SSuc&$' );
define( 'AUTH_SALT',        '.|Z[)QTdJJxTS0XF#_~B(uSZ}g-(Hx$cx1~0ZQu8lA0wZ.yv:pu-o&Muy-cs#Ex@' );
define( 'SECURE_AUTH_SALT', 'zm?t~6gBt~XMFs3`{Q#4}ow<,5=xU4^rEXM0&9/;wCYN--tBR$N(8G 5}a3$_Mn0' );
define( 'LOGGED_IN_SALT',   'q(R/@S?iM*o7rcFkGtQjJ5{:|@zzNwT+:idPyr.m}.-,RsTH&g[k_jD k4o+sL|B' );
define( 'NONCE_SALT',       '!wi4I{7IpdHt|&EqWYM26^2E?r`FBSvcLH&S6f&/:ONtateqzOsiSFK+SJ?VNv_:' );

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
