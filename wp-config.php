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
define('DB_NAME', 'wp-test');

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
define('AUTH_KEY',         'id52&H&zE5PP2gL|qpWG yu<L+I=hX{$Lwe@Q,n4/l,+yVx*S6K:pbsTp)B3pe)z');
define('SECURE_AUTH_KEY',  'Qso5TI7f]eGl{,r7I$u,a2M8h7U-Z7~V/2.CCQh}3!W<xk@2>v_<ZH,=@YPMmCq[');
define('LOGGED_IN_KEY',    '* 8(K-^hi9f}q{0X%!.+4zz*&8czGs1R0#XXR7@rLI8(Euz/Dqu[D(Lao7J=MkUK');
define('NONCE_KEY',        'RbiIT2:q%X&_L.O/=|RH}4@^:Gg9bAg]|5flWA[L7cQDAcMY%NDFs( cY=J$ERbg');
define('AUTH_SALT',        'z3e?Fux}~R=BbB,W@]3JR[KePqfE9/@ZnSt#{MH*riPnnJ</A;iuE.yUS- vQVZ(');
define('SECURE_AUTH_SALT', '>U.B@Zjy^x#iyhJo0YMr;q:Ewuv7a_BR4|@nvq&<EXa #sai=h(lIdW-&eHFqTk>');
define('LOGGED_IN_SALT',   '/B.$]:9L/hWfc7nTe@v.TxNhpksGf.qXu<k-!PjZi mXKG:[17&p9:p}lBaMcRw:');
define('NONCE_SALT',       'F |9Yd}<Q]0xx?VY8Q#RYl^5lHWCtkK$UL>vE>Eac1mq3C#|@_y kEnt1]u!({5p');

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
