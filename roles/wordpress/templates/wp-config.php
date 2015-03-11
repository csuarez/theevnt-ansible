<?php
define('DB_NAME', '{{ wordpress_db }}');

define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');

define('AUTH_KEY',         'LDGp2q!=MIDCNuqXL|S&?(T$c%4f7~/%yIEu~y#uHF)w$nlVbji#==r6~wMK3MC=');
define('SECURE_AUTH_KEY',  '1py<|$U<e>|X1#nTWO~gPWYGiZ)csw%2.Jm[7m|CiAl9 An~f(U#~PuB[p!4 @--');
define('LOGGED_IN_KEY',    'QF`YGH+]f<|)o!1 p,-EcEiduQ]J=*l`UGED.r;.-.FsdVR_u:&G,D#[)3THWy-/');
define('NONCE_KEY',        'l@KpFL_he<y-Nt|~~1~r&;=Ns5|k}fxJ1/FbP@s>WIw[&a3pMB(K}uUve[|Uy,d-');
define('AUTH_SALT',        '?g+FE+7b+^)7@_nloms!!i<]CAIc#0P|w]<f+A^y~aU1(=q}s;6qw;@sjzHjrEiO');
define('SECURE_AUTH_SALT', 'w)p:G/W/hok)+}eke/^_ e80nBL*Fx#9} *i^G]&t#*$D$N!mNSBYN;sg`~W^NYr');
define('LOGGED_IN_SALT',   ']07iZWfg) 3e5da0wr+7Y$|@-fJlVS&fI2Y1$AHk0O23_8kr7<27?tsl0bgejY=e');
define('NONCE_SALT',       'SpH8)!^i@xuMh}B6 vqN/oZmL=pJMl-{9P~K_6sT)<l^Me7-m&pC9$$+Y32j*l`!');

$table_prefix  = 'wp_';

define('WP_DEBUG', false);

if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
