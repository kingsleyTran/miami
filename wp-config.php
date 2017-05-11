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
define('DB_NAME', 'azwiki');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '?HtC7{PpDVaiXov[LM:B? zttl/-y]UxdzMJ<4T0^@.E%`J@PgUKAKheUQV?Y>r)');
define('SECURE_AUTH_KEY',  '4<EU`$E,~8xp+<2efBdtA~j `hTJ$V})b/n3$-`9w`!eEa1hr6x&]qv:i%9q&aT~');
define('LOGGED_IN_KEY',    '4`$%9.h(8-$TnYePPTd9(_YHovCtn3~*tTmt{ZNFPyy,$/Xzod@zXGQD^5*OxU1/');
define('NONCE_KEY',        ';n1KoefXwL8d[S~zWk_t*ZK*wpo@h$ID]FK@km#clQ9P2z=o-L3K,nWiap`~$pe(');
define('AUTH_SALT',        'v}m<sqr[vB#;)].FbANtg:D-,JX4?yWsF9[Yn+nsw>FeuYRO8G78Y:r8FZ6?+Da5');
define('SECURE_AUTH_SALT', '[al3CrZH{k}-!y0)M8T*PF!oZ!GeEXtuNs~ax1ssoTNnZX7k#h6T4L)nku?fJXZg');
define('LOGGED_IN_SALT',   't#-JNh:+@i2^?!@?Uq~`W?PxL+$(O0b~RR0F?U0A<cJ_;.}okEH{*7fiB10O^)5%');
define('NONCE_SALT',       'IK~H$w-s-0WEB#bH03PEAG1rAvbE:R#VoV(EEDT}mQ}}O6~&!^Lj /MBtxNlRjz1');

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
define( 'WP_MEMORY_LIMIT', '96M' );
define('WP_MAX_MEMORY_LIMIT', '256M' );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
