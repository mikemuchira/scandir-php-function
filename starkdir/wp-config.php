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
define('DB_NAME', 'wp-techblog');

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
define('AUTH_KEY',         '%@MI)*xMoom8dn?+vvVvf]|GNF]h0eNrUVhm|$H!Y&2T*qxR.(0AyRRc4a9MT d{');
define('SECURE_AUTH_KEY',  ' 8X50,{#5adMepKRcpn>I=&:XW%Ul~#&~#+jV;oj#`7P8y+JGJ?Gk2S=)l[HTVwq');
define('LOGGED_IN_KEY',    'ya,}<pE^a(^7tcF6+|5wk}V644{pW|bNxkX7m?RkP0G@x$cX|$ZRA? pXgNG01-N');
define('NONCE_KEY',        'C3@Rmxf7YJD2)YSdrDCZy_^$8D.>=}6X|l_{n@EW6@L/2N<Cht(A}A!j^K<G~^WK');
define('AUTH_SALT',        '`HjU9J#aireim]7d>Wzd5L0~{>Ge`ErLn$D0yx.[j<P:X%x.wAWZvUtnz18fH#A+');
define('SECURE_AUTH_SALT', '=fuEQu@[ER 3GnQP1vqRApUDWv`au:Bn^-$)IUKj,|4uap!~]~OB.<xLGsXjn*2i');
define('LOGGED_IN_SALT',   '~se!e}!Qz$$nC_.hkMJ=GUXtF[zo1 ^:i_*_?q[]BFviNuJFA1$btF,y+AhE${>H');
define('NONCE_SALT',       'eW57UEg_vVRmzX/pUQAo#}|,47`wYvMS8k7]Tm;RRIEwu]UbvLag^w]Px)dp|pM]');

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
