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
define('DB_NAME', 'betovw9rhcp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '&SwFom4PszbTY-C2t$TeC=I>Z$F;n<lO84o;G2vXy9~A[t|efzmFXrRA6/_1OMi^');
define('SECURE_AUTH_KEY',  'P2<MBnkkQ]df$ju4$aaM@x/sFx]dBfQU@:xiX:<;UqO{[ViMfIUV;9W4:JAGmRwm');
define('LOGGED_IN_KEY',    '@Tqsq^XCaFvX__=O]EMNlwbQlv1[i(k/hLZ6)%=`FP-l5:P`wDFI:qV]2QgKbj<k');
define('NONCE_KEY',        'WFHk?%cq{^q?&g]&&jqoe*EC@fs_-`1Am<J2&W!c@[FLx>%QE7hpOLk #G0FL?=%');
define('AUTH_SALT',        'P?jFH}+2mhf(sQ)!CMvI8 iKf_;OGI-0UNUbZ$V)_u}9Ag8,Eil6]PRsu4q[XO}@');
define('SECURE_AUTH_SALT', '_^r<8BN<(Wi/M( -em#*Zafx>:N.A<HSKaaf;+~Qm/9^!B_$Ig~m}$umTkI0JbYG');
define('LOGGED_IN_SALT',   'SE6 FSiYPD8oJrU.yr2uO8&$t#&/z%0OeQqo0 I=gyILd~4`[h*=Ic;mj<;8VP6s');
define('NONCE_SALT',       'i&p?swl,<M?E3XJae$B(h-Q2eao5.XO)ObC oJ=&+@H&H0BL0>tfVZPQ=X)P}N{U');

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
