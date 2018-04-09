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
define('DB_NAME', 'balijewe_02173wpdcd');

/** MySQL database username */
define('DB_USER', 'balijewe_wpdcd');

/** MySQL database password */
define('DB_PASSWORD', 'Joinnow123!');

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
define('AUTH_KEY',         ';Sb4y) <7KG,/|x1lyo~kM{gDL(]Z6,;|$wgP;%~L}$J^t,?MKU[h&&.Wg%5;3?0');
define('SECURE_AUTH_KEY',  't%s+)wk}nB[Xw9h[pHaJ%TG.)KzR9/C7Ni`5g<P2kzPNwW[nDHV|D /&,%kP?!7~');
define('LOGGED_IN_KEY',    ':Xq72xdV-(Mw{w9KraGu<.Q{A)z&9;~m~073RnEXmDCYE5)a5O,.SiRyOVYe(l:w');
define('NONCE_KEY',        'zY3)[=m#8Lf/DV2/!C2o#U4:laY7tfHRnBRmnU.[V~?C8=D-w@49=za`)7 yBHZ[');
define('AUTH_SALT',        'S-6v]tr+&BkpL8cd;D;=~.N2z6x?y<*%hU!v~6e,#dA~M&Z H-7b<` GR@Z_^lDg');
define('SECURE_AUTH_SALT', 'WQS(;ny@*iu.$tq^<^BLBP1yW&~m1qM[{BTJKC4iBO#&+HWVlJNqGV%pvVYwr-ek');
define('LOGGED_IN_SALT',   'H-+qgX$,Bl&^*X@F1nh4elhovc^4:b:lO~wxs!x)87)Ew4$KfLv#sfSr^&][L=.&');
define('NONCE_SALT',       'lo{*K6br[D955o2F3V[y<^M5z5B{%<#D$@+& Wh-4:mE(LpT0^FQW<R1tZyZ{Qvg');

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
