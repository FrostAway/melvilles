<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'melville_db');

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
define('AUTH_KEY',         ']fg(_$s$l`w_93MF+?e+y&m| `EJ3-o}*]y**#Y4r36M#sB hAa+SDb7rBM&Y}/9');
define('SECURE_AUTH_KEY',  'QQegz2BZ1J6jp$N4h~=nTujZ[@42$A-:`rlm:DE-P#rvj#V/;xxb4H6S-~6dj6HE');
define('LOGGED_IN_KEY',    'vP`>RlF;mF/vtdM$|`dfO){hx?e@!{7%!p!|N$,G1`Xci6j+0jA`kx|?>^~a!3_U');
define('NONCE_KEY',        'BZRQg7TwDqd9f}p-y-m|eZDt|OJE_`OTi_u`5SUW.F<{%q1lHga:<^U<C7tau&+W');
define('AUTH_SALT',        ',~6+?,RW!Ep+5zF~%-YeEy+jERIT}zir03n?o|U5Smw}z|8sX Tz+e;0cwV;Ht}h');
define('SECURE_AUTH_SALT', 'xttWBY3K~EUy<_^[6LJ:6pC!*^#tOZys_3|@*`OR04W&y}#u>vSQ68vW)YN/rTh|');
define('LOGGED_IN_SALT',   'mI+[?GH`12lq6eu&/9 8R>RNu]Jo9- z]<N@.BJS)!euP7y#n2iX /.ZQK7M&XG]');
define('NONCE_SALT',       'J8k]y{Ea>0[|sT1u~TL6{!p73VCJM[66+-k+8ri-9eE+Ie$uJ3V!y}u~9+ Y#=P~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
