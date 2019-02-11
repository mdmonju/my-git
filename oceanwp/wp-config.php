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
define('DB_NAME', 'oceanwp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'Localhost');

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
define('AUTH_KEY',         '8O9`-Z#pQeid%,RB0eH*;mg1be57xgLd0,N|t.[W#pKpG*7TP0K`!o#hlvBvXZ~H');
define('SECURE_AUTH_KEY',  'iTa#DOi@]RC1;S~[5U=)3@@XBI..[kNYp}{#/CPR#N[{{G#4z?>>j)tR:j2wQOLn');
define('LOGGED_IN_KEY',    '{Hgyr88ed1SFX}Bim<GakyBpdU+fyScH d%Q7jo=RY s(FYL;#Nf@P@q.}8aahup');
define('NONCE_KEY',        '8p}>Sw>>xfQs:rFt>k}B0;rY4yLNFtlsQ)OqfYXxEfrw]Q8fnHl1pQFS$){(#((~');
define('AUTH_SALT',        'WTX5gzG1%Zc9i<0jF91:aM$Iv&<u6_ank+4$um%}Tg2rgwc%wXY9*Z_o.=aid^ac');
define('SECURE_AUTH_SALT', '(^w#~l=D9cR6N|[,@[9%es@Bu;b1 5lB^mgBKHRXz8k]u<]2!i<ot[_FKXRJda&&');
define('LOGGED_IN_SALT',   '<zb)7C iQal[?mQc.04cr#ErcC($MWlyVF$w^+wy+GZ1+;yId{`l~+U[kq2K~A4=');
define('NONCE_SALT',       '(zCT[rzA0>)K`X?3`LYB5.(sk,AERD3N$zPk5t!myd_RG?&q|49@csT Cr0n@t#X');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_201820192020';

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
