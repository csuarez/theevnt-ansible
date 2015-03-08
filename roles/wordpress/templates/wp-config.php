<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', '{{ wordpress_db }}');

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
define('AUTH_KEY',         'LDGp2q!=MIDCNuqXL|S&?(T$c%4f7~/%yIEu~y#uHF)w$nlVbji#==r6~wMK3MC=');
define('SECURE_AUTH_KEY',  '1py<|$U<e>|X1#nTWO~gPWYGiZ)csw%2.Jm[7m|CiAl9 An~f(U#~PuB[p!4 @--');
define('LOGGED_IN_KEY',    'QF`YGH+]f<|)o!1 p,-EcEiduQ]J=*l`UGED.r;.-.FsdVR_u:&G,D#[)3THWy-/');
define('NONCE_KEY',        'l@KpFL_he<y-Nt|~~1~r&;=Ns5|k}fxJ1/FbP@s>WIw[&a3pMB(K}uUve[|Uy,d-');
define('AUTH_SALT',        '?g+FE+7b+^)7@_nloms!!i<]CAIc#0P|w]<f+A^y~aU1(=q}s;6qw;@sjzHjrEiO');
define('SECURE_AUTH_SALT', 'w)p:G/W/hok)+}eke/^_ e80nBL*Fx#9} *i^G]&t#*$D$N!mNSBYN;sg`~W^NYr');
define('LOGGED_IN_SALT',   ']07iZWfg) 3e5da0wr+7Y$|@-fJlVS&fI2Y1$AHk0O23_8kr7<27?tsl0bgejY=e');
define('NONCE_SALT',       'SpH8)!^i@xuMh}B6 vqN/oZmL=pJMl-{9P~K_6sT)<l^Me7-m&pC9$$+Y32j*l`!');

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
