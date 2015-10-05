<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', false); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '' ); //Added by WP-Cache Manager

define('DB_NAME', 'johnno44_newsitev2');

/** MySQL database username */
define('DB_USER', 'johnno44_artwork');

/** MySQL database password */
define('DB_PASSWORD', 'thevex2001');

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
define('AUTH_KEY',         '(cNA_ibDx#HOf5;N#**ra03!~*fUCOS4Qblkjf/LUh;67CpZx?W(hIm#<l-LzN-J!|l');
define('SECURE_AUTH_KEY',  '');
define('LOGGED_IN_KEY',    'YYzteggk~0);R19>=CfF)pp51^/jr^V5\`-|ay2X6$kP!xr6t1g$@bS2/TT=3o@I!4LK=');
define('NONCE_KEY',        'BFnWFk-hKyPUrGv/!cb3~FfCB97CxjlHuQ~^7qdWm$Lb?yqm^-=:2Clr2@<|2IDI)F8Jp#s*EgsqMS');
define('AUTH_SALT',        'y#_=S67H0@^dntRadGw!ZErMks=sF;9(^U8ooMrMvrTw^|b?EPGdRJ>EkXfx28ruhVLNx7cqJ7b#qXs');
define('SECURE_AUTH_SALT', '>tJG=joQ5bSOE3PARu4sZe8J3;hi\`m>dsMsdPSxjq?2sqv3v?o7T$iiQZgVdV:P\`(#g/#Mb');
define('LOGGED_IN_SALT',   'C8P_MKR#LRws7_i34rG-rt4GDc:ejX6Kl4Y-Ke~c)l8h_Bv_yYdjeU?!lpcqktJ1i0/8Hv(*JpN;Q4ftP');
define('NONCE_SALT',       'PVI~YaXvrzF9uA8VHNVYc98mEkH<c8m1^tl>Lal*dtd/VJep;Cc9-$M5GWtV6#s');

/**#@-*/
define('AUTOSAVE_INTERVAL', 600 );
define('WP_POST_REVISIONS', 1);
define( 'WP_CRON_LOCK_TIMEOUT', 120 );
define( 'WP_AUTO_UPDATE_CORE', true );
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'auto_update_theme', '__return_true' );
