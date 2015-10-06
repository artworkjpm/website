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

define('WP_CACHE', false); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '' ); //Added by WP-Cache Manager

define('DB_NAME', 'johnno44_artworkjpm');

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
define('AUTH_KEY',         'v*&L#83!~B{Pzf+j*=T}.D2m]J(MG$uZ<1=k`LRS1Td*R=beN5a2k[]DOxMhJyaC');
define('SECURE_AUTH_KEY',  'Z3_Q7I[zL96o,K ag9m]AID+De&}DA},T4;X4US4n}kA[Ln8ycK)b<jr7j N+bh7');
define('LOGGED_IN_KEY',    'ya#q~ATkTP@`(S651mP[hp#bTvB! (W:{VNZGvTunRevte]RkpI&n5+hyB|<J/Qx');
define('NONCE_KEY',        'qP0&o?fg>9X7/nuAzFaFRXN7j9Wf$cK;]$*K@EI&:TUEc2jST,mGB@>)P=T`=i7n');
define('AUTH_SALT',        'S?I)OJUhAAi3IVRRMw*>C0#anft7.a<1xoFf;!<l:JfhTq+.a{/c8@z$Al_]^X!~');
define('SECURE_AUTH_SALT', 'DwLL,KZ[ .v-T3S$L)@qGihL$1`&Xn;Kn27+-y(xK|>A)guP5}+2Xx$|@O~SF^;o');
define('LOGGED_IN_SALT',   'j26B?VH>GG8,o@,+2F TfLE+pUuVqSbG @qpm57<J{q|k>Fqxx+}Xt6Q)cc{OK8H');
define('NONCE_SALT',       'Kz+G?<63[D>f08[?F|QQq |L7AvqGvD-4lO<%k-<-,--c9y# f|cLuJLY:T/szwt');

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
