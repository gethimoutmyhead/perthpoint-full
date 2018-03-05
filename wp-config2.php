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

define('DB_NAME', 'admin_PPDemo');

/** MySQL database username */
define('DB_USER', 'admin_PPDemoUser');

/** MySQL database password */
define('DB_PASSWORD', 'MyHairyBalls88');

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
define('AUTH_KEY',         '1Js|9nID ycK$4gB0<6j7Z@o{3v?Bv=3^g3$192AN#jm@r2w)@zke/6bsv8[PXb+');
define('SECURE_AUTH_KEY',  ']?vuj=m:&%`-px>eY##J>tM}l@ngLaFyp{FcU0|D|(N(z(ZKr[Hw R>)|BcaVPDO');
define('LOGGED_IN_KEY',    '#em4J/9),Qxgd_hd[*ER>IhT[eBd;1,Q`kQi$Q,[LWFA,k9nS,@`UjmbNrI.IP/-');
define('NONCE_KEY',        'r`T|,DP0:=AE/HsA+]nb0*fq*]8Puvc|$V[cJ<Gzs;-/=OLMOzXaZ)d<x8W6**np');
define('AUTH_SALT',        '-`:*,rfNudHj7f+TTg,(GS%#`>ZCO2avW@^as=$N~xL`A/*PSB/go*zZ0+{rI.#B');
define('SECURE_AUTH_SALT', 'w|9D|kPl`w,J.6o#NvS3E9PWNqC4MSR4 )m#od.[b4pd1BH9wF>p@&P*d=*[}oZ_');
define('LOGGED_IN_SALT',   '%%f4q@qK SH?Z:V?=9t6P-uu#%9qGuu7(#m5vn:(TO&O/RweuS)p/ilU6$u40-`t');
define('NONCE_SALT',       '&YED*_G5K4o#26JP;@7JB[le(Q[x!46,U4aB.):`R--3(,+~;D]X2N>mc)@XYTsa');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'SoPerthweblog_';

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
define( 'PODS_DISABLE_FILE_UPLOAD', false );
define( 'PODS_UPLOAD_REQUIRE_LOGIN', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


