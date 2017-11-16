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
define('DB_NAME', 'wp_bootcamp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'qt$wa9Gni(nI5A,h,{x/^`B|jJd2<H^3WZyCtkHQ-Ub6eGXUTX>TM+oRnMT8 XJ6');
define('SECURE_AUTH_KEY',  '3QG6^Qw<LD78MmbfYb3N%3OTr(X[+q<LJli;>h]{Rm[8) <zhFnh|,j.5aK|W58[');
define('LOGGED_IN_KEY',    'T_[jT*+UbQ<_Y<1i2(sT^%XtX6![}:j^IRK>^V3uGFX3pvLmsV6d {Vc7vxuTNN{');
define('NONCE_KEY',        '^Sv^!!rg`t H@o-pkQ XayAnSsiMYOm/~?T}Y@0o<-o-hP!)>w3()E.j?P}Wj;|s');
define('AUTH_SALT',        'cy=gK0SS*tC~,S@TSm`lzfJ;(byM,dUjhhda5s%B5W L!N2-K<me|?{3k+!g,mO9');
define('SECURE_AUTH_SALT', '{|V3TS1cOKe6A;Jc3&)CxH=fF0&TtE5>Wk4BSW3O-BtwK2D46YW2R<d!UPXq)i0!');
define('LOGGED_IN_SALT',   'U#5bCIF0/3_(-Z0AKOKnVd]q;MpZ:6[6$>M%NpYEE{%Dx>sNT7f(]z ~@*a%U0*R');
define('NONCE_SALT',       'GmWrt,pB<MH|m>9>IJL@,z#T}n[$Ro~k(?u:(H!}MV%3BScm!KsT:Te$&-ONmu[F');

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
