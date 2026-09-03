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
define( 'DB_NAME', 'db_poliwangi' );

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
define( 'AUTH_KEY',         ')LLU-F}iy!HEqYb|[zQztA5y0!4<tm@z<V6yI`a:YN$bj=Rouk,-6YJb0Q:Vc1&f' );
define( 'SECURE_AUTH_KEY',  'V2)#ccg#Ms}|gBrL$ta6eDMPi}d,.;c5qyqdC2-T[vb6q{6-%zq4Zz$LAAxDJwBV' );
define( 'LOGGED_IN_KEY',    'L8X/>60hf&mT:3EQQa&$A;p]q_+$FD^hXY9Qp%=X+r/G?)h$ym;hWE+M;X7|[VI%' );
define( 'NONCE_KEY',        'MwT1K}[bY3]s%(?[E5,tb6osQb]2[8_jhNnQi=,N{jF#AiS6]z@n2V>Ez bJ=e M' );
define( 'AUTH_SALT',        'RsuOi3CzyU&+WkoR7d!)+VWwZdFF&yH=+T&n,UlK,ANN|atIIFD{odb(#A/VX4rh' );
define( 'SECURE_AUTH_SALT', '`r)ru#1yA(>HIPW`v-.gRyvYGEN56251vXanEv(Wre HL)F?(S3CaomI8>{s~G|0' );
define( 'LOGGED_IN_SALT',   'Yt/LAg`^vY#C?xmWj_5>1}I~2RydPUk]hxMrmtjmPf**H#C; Xh;3ARy]@V5_L/y' );
define( 'NONCE_SALT',       '0y;88EeUlhW1:`!)?Bmnt<m{)st_j 7*;dP!VIQCF@&pl[fwAAI DI{reGLn9+4Y' );

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
