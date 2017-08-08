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
define('DB_NAME', 'wp_db');

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
define('AUTH_KEY',         '_>^g.(e(5=&iQOXGd:Bw{`Tk54M7:8i-rRI[stdZxiJAVxqLacAjvbAXESzTUDT6');
define('SECURE_AUTH_KEY',  '|$H1{ru:W<gE;>c2m,es%Nu3Nr2*h&6Zj<jSv2MuJ55D#]f-8uaukEQ~HqW,hHJl');
define('LOGGED_IN_KEY',    'e$U:sY,J~o~++]vR}#`Xih.Ic6;;J^7l:UIl:YQK2!RQwza,.F4/PN MmUUSgcY[');
define('NONCE_KEY',        'F3%PX}shP?61d(~*gDh;HjL}%~}_DxG]SfOIEI/AsZC]Zr0-yd~J)S-S6q%jO7b?');
define('AUTH_SALT',        'w!J!P$7l9#!$VC}F.Urs+sv0#NjW==|1- |SXKVFSr}mPIz,ZQs#ZP$4ecX)`1Q?');
define('SECURE_AUTH_SALT', 'Ux ]1k&{HByRL_Az0lk2!JhBM~pK@+PEG>XNap|HBIL=!4Fz;-rn/NPEwbZUkJ~4');
define('LOGGED_IN_SALT',   '`X2=X gxr>E2aQWp?|,Jc[uH-uheI5d1}Bp&Yh7:hhl5WJ/hz=OGmd9FVU(&l}`k');
define('NONCE_SALT',       'ai }8^lT`w$oi(fH&Ez;1;?a&:-XRQ!g#+E~~DF@0=9;(f<4VYV^axD.*c2Vbo;R');

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
