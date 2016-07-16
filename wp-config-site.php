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
define('DB_NAME', '94wood78wose');

/** MySQL database username */
define('DB_USER', 'w00dw053');

/** MySQL database password */
define('DB_PASSWORD', ';vrBo23_P1#D');

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
define('AUTH_KEY',         'IOpomwD_M(s>aBIukvlL;YW9M#z8<kNRm%T9.-<E!0KQpd0{rid};0CA#YCSCax(');
define('SECURE_AUTH_KEY',  'qrRurl<My:QR+t n_+j3GDzNFU5k.O;<42jm6V!i3,| {#2w_>og_qO0am`%N:[N');
define('LOGGED_IN_KEY',    'Ok$/w}g414KpWU!8@d09sR_;v({q.|+fr4K(O2]B6yG;9=%dN`]?9LRQr/Z|GD,o');
define('NONCE_KEY',        'r[&$=IW6/EAr=m}f9l{w?TlwYPPQ~ego^~xpqaWuhp3mWo(Mr;Z>/=GFq)Ke/${_');
define('AUTH_SALT',        '(* u(#B.U9lq|K+@RLN!!w>1MGk%RM>P6<l^_2W7?(T?Wp%S4HhLHmDRF?=:!ZiV');
define('SECURE_AUTH_SALT', 'uKJE}rBb~4qVHW,-07OFEY!WBZycHsR>wXa??*xPSZM>Xj0s8#gF2]VAg?9dm1Hq');
define('LOGGED_IN_SALT',   '-vpx1RiWleE_/[;SU~Lsc}1_6C6:/wConZ6)n{l> M.]tXDM4XDu&W{$Il0b,R!#');
define('NONCE_SALT',       'i&3XdAVc!EXn^]($[Qfd4MNwDER@Ly|Pe[BIK[>{?X$]szI6=!ojV#5@{o<*/]jP');

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
define('WP_MEMORY_LIMIT', '128M');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
