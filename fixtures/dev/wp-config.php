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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysecretpassword');

/** MySQL hostname */
define('DB_HOST', 'mysql');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'yGK&EM._|LJZj4ipBNd$-|N*9IM$VA9zMIN#7+^NA/Gjp&5ma~iM{d,2fl8O s2Z');
define('SECURE_AUTH_KEY',  'o!18+y<h8{8Xp5%zcs4eq+a$,EXkDk2j-6+HLm{y8V]4D`loJ~qG$/.14Ou[2;RJ');
define('LOGGED_IN_KEY',    '85i}U?; Bn;g79>erOE5=}y@bY&0Qzs7zCMG;!#MiDa|gFJ{kH/.uG-@ A B+]y+');
define('NONCE_KEY',        '}wpYH90=/B:~-Q8}_&1f8miB+F<hPxDDAV%&mk0;~WGJGB$kHaIlujAzuy_P.6/k');
define('AUTH_SALT',        '7:/-8~P6)|IudR n`RH%)x$z3&bkBJtGe1kG<:8pGX3 ]4<-|3[xIwV| ;9a[sKm');
define('SECURE_AUTH_SALT', 'EJi140/+h/s=5{D;=pDCt|JRWJHD_G!v3 g;mI>Y/G-$>0YU(h!9tkU8Y{6cn8Sb');
define('LOGGED_IN_SALT',   ']u[DXw|7;#O<Z-G0O5z(EqmE1UF:g-l4O)JEr,x#a|ly?F9`:Klp *v9-xiZot?(');
define('NONCE_SALT',       'RX3t|-1`W:?~:D g#-wY*|:T{lI09<|tru+6:tt5Jb]+&e.j+rR,c2OIBEi?9~(%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
