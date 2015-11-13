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
define('DB_NAME', 'demo_gianty');

/** MySQL database username */
define('DB_USER', 'vn_thanhloan');

/** MySQL database password */
define('DB_PASSWORD', 'oro5545');

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
define('AUTH_KEY',         'yv#Nr}&&2(9QDMh}7pV7aEy~-[4LYiY &XP?M}qH*D{%_e|<|HX#<sMkTdJ9Ov6.');
define('SECURE_AUTH_KEY',  '7`2tn@qt<7Dd,&Z>zMqNyu4v)}/khPqztW-#E!p!nHtw}*OM<ehIORl7Zs&jA~AD');
define('LOGGED_IN_KEY',    '4%82%?k}5C-/fJ$? 25G(leLaL?4~!G7G996,NM/<&e;DR->|#yW/W~2=}23@7KR');
define('NONCE_KEY',        'sr[F@z2FKaABDSpLyA@|0t[}|w1z0N&2d+j3(xZh>4W>[8{@X4/1,sdn8*[@`H,,');
define('AUTH_SALT',        'L);xBFI2$V},,QwM<sCxU]~n0]:w<n#(f]Ubg7=Ra;3[ymdgTtK+8c=e)%m68|B<');
define('SECURE_AUTH_SALT', 'OstzEKvn)Z9a!*)9^]=D}|O12g=bG(YUES;#j}E1xrsnu_#JPx:J3dt{t+^e%Eyz');
define('LOGGED_IN_SALT',   '>]6vUP_d/1bG<GR{E,3Y%,+b;qp.&PG||x3Qm4jFMpSraCM7P+N!+Us#XsBg)Q]&');
define('NONCE_SALT',       'aYjMu/)QqG*nMr*o1RE]sylI2wu? vVVO5M|-FrnPE)CnUWC:kD!jzvvQ+>*#^Zs');

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
