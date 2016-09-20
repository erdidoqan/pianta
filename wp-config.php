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
define('DB_NAME', 'pianeta_italiadb');

/** MySQL database username */
define('DB_USER', 'pianeta_italia');

/** MySQL database password */
define('DB_PASSWORD', 'pn4411');

/** MySQL hostname */
define('DB_HOST', '185.67.207.44');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_ALLOW_REPAIR', true);
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '[|}4/BGWYMvO^OIa+X/tY%4 M*YvI-3Hk`zT_uvT%h.mW`2-e|uT5+T|O9vMq/8K');
define('SECURE_AUTH_KEY',  'wP*fNk3=!?~=Dwv`o8*##y8K_jxrjSkFv]a0x$&<}4<uM*)g1yK5;ni+a?.FZGjm');
define('LOGGED_IN_KEY',    'e3fi;B-J0|At+BycU1NQd,8_G9$=%wQKX){5Xf9Ay>9ommdT(h~xVC(2>)-wC1;a');
define('NONCE_KEY',        'uxYK$W ?_6?vf[hJ:xL/v-7J_#XL:yo0?Hf,gs>q3Dff!>3-VS)4L~`L/1$6EO1~');
define('AUTH_SALT',        'uBzgc&e1OB12L2IDa.EW-8gx-,/9ofEqG`m3v&$((Gx[-{>e?SX^nc/|m1FVk@2u');
define('SECURE_AUTH_SALT', 'C}2|Rw8})%Jr#9{c|a!O^P.Cq?(/P>-paO/]J6CXxn+Nie30<jZ{9-*]-G )4k38');
define('LOGGED_IN_SALT',   'qm*WRoV-f|XT2nx-CwB!I QM?oaPX+D[yKk),$Nk`-ZS-vh :46{EP;ibm~!S46n');
define('NONCE_SALT',       'v2YDhZ{i-qjX*eVc!;|O3_dr:1V8&2upH@pbFH^xQ0 9p.zZq 4@D`cxLp#-z{2y');

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
