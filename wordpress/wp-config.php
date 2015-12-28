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
define('DB_NAME', 'prototype');

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
define('AUTH_KEY',         'Fjn~bV>^?V$JooL0+?e=)]YAwdmsnh/N]avq?W3h/EQ+;zoDXeyQheah&z`~ZcgC');
define('SECURE_AUTH_KEY',  'AWgXY7C^}!cOyHhtN1mzQ2rwL;[!}#L>CjcPSV|I_&<4m[Q/r MKKI(H|OtD@WFq');
define('LOGGED_IN_KEY',    ',(|4%X`8/>$f@Sgqp,v~)&xW9#W5JO>E51V2#IlR~pDl?r=Qkl;RN_9yL41q?jNA');
define('NONCE_KEY',        '9r`n[K@de8n8#@.9H4p{{{D^Q-C.ZFb^8,EP|pxJ[v XG]J.EscSP4-D~ WvFe H');
define('AUTH_SALT',        'F2B244E2o)sEw[6$V$!@[:%UzIFQ9o6$0!ak?G=9{y%QonESLu_/ZR$c&L?lL0f(');
define('SECURE_AUTH_SALT', '#_tkwXSRLLfE&yiObZNgq*#T^zpfo:CykNNh6>P+*Tn dY~mDN5lOu8!fAw>sC|O');
define('LOGGED_IN_SALT',   'hYoQ$<FgZDjXehXr&[)dewd6{#Bq3QX0;88$#7v%.[iN;Ij1JZT5(2R[&u(B3BpM');
define('NONCE_SALT',       'Fi}dlf;? s9~UH+9O{.~zYuye}X!#|1r~E.hgpV|V~BU2Om7bn2r04sDob:TUgh@');

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
