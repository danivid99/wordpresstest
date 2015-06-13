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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'numeropi3,14');

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
define('AUTH_KEY',         'XPZfx UB%$U@?R82<0{j;Xg+ UTbB2;kTD~F0w|-~h_P~2g?NwJ0j,Vng<%j/dsH');
define('SECURE_AUTH_KEY',  '=JC^/tVEgFmPEhEd/+-q i.pPGVdWFTEG(U (de>:LmZ.yC[(^pBL-ig4vEufb?6');
define('LOGGED_IN_KEY',    '.)n2$lY%3*etMb5mu|Y,IyO)ASx]X(<0Y~^eJ,lft)PhY?J<H815n]-=($:z8d.A');
define('NONCE_KEY',        'I3W/GwZ?oPgdsPe8vrXB5WH%f[.a1}9i89[!C&xSosW]Ot7`X7$;TaZq;b0#4PKH');
define('AUTH_SALT',        ')Wux[=Fu|Cw/+g/?FaS=KyH9UIsS` lF@1M^,<e+bYjR$ 5C}BUK]~|kX]Ab>PLc');
define('SECURE_AUTH_SALT', '1%Xi9twifP@Q4G]>..)BE6+},|z_2Um55fp03-/W|r.f$sVw >h^mEfTtie^GV1%');
define('LOGGED_IN_SALT',   '2U(Vgp%N~#-&cr<H+dbf-44H1_DB+]0%+.HEPZ *&={O$OSPJtU_ SQ$rB3tz1~i');
define('NONCE_SALT',       'k9X$l_-6&97JfbU9RC.jB&.5z?htOO@aL:#}ErkUxpqZ82vK6DAcd+C6{iJqvw#A');

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
