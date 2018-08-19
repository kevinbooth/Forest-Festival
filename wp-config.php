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
define('DB_NAME', 'kevinbooth_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '.IZH*;ZS s5_b5;|Si*o_7E:T%G-Q,#,4dGq_RV/m+`,<nX/]13tt%v2(;2_i^Ns');
define('SECURE_AUTH_KEY',  'ue+CNE2_q4$m(}VHge%NNn0V*{x^GB|K6Rc.Oazu/$~m-#^Fei@?(0Bf)]YCU-mH');
define('LOGGED_IN_KEY',    'FqJGzb<:ie ]sq47,?nc1g~+2d$[N*OGTWG-@r) w.BM/-WKfWFe}L3HXKH-Wva`');
define('NONCE_KEY',        'A6<K@+?AO?k+*X;&7Z36}Ta;8N(Y!XX^ 8ff|WF2,9G2|<euFtA-*,q-.At6rcr2');
define('AUTH_SALT',        '_ )H~meyoC{C6X8-gS1:SB#r+u#bjI,E*95UYPfpLGI9-~5dTEsg*5<k|>]TIuBj');
define('SECURE_AUTH_SALT', '|&9%X=}0^44[l,#,94kHo|hV_|a`v=ZM4fSweNZE#2~aX*#Z|?d:jwe9KsC/j>S{');
define('LOGGED_IN_SALT',   '5-rJ~h&)$g][S2yYPd)AUKa*Z9F!uR(z.n-jCOEKCr=<!?eG!*O1|>3-33Kn!Ar4');
define('NONCE_SALT',       'wqjwn+%0>:2F[(fHGL=:b`Nq&*>zJ2T%+]>d5u *;~I$,U<yrd8.Hn`9=<=cU|{G');

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
