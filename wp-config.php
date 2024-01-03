<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'site3' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Krf3s*IMGj%)jC)|,cHHzk-xWMv1`]Fvt.nX4kGo-RboJiYsI[Jnt6BjjKY)/vw:' );
define( 'SECURE_AUTH_KEY',  'V59:&b %Vhln9cdV+d$V9mY0ul:ksL$LTA;>$lEqD*M~`UmQBKeR8e.IPi]vlz}b' );
define( 'LOGGED_IN_KEY',    'BwS;Yk6=-8F:VHH#7rW[Fe{yY~7% lY_3Y?SCBtEv$s==_(x/PWX;+u[0@a/m&(b' );
define( 'NONCE_KEY',        'GgK:uaGbJXW9`zq6z3Y]CKlIYs#==FH//4-`<ql4rZa$zI7-qv[/N5cIKz?(KzjO' );
define( 'AUTH_SALT',        'e&|Tn}yTVYlmAU2q/F:x!>@>;Rk!Pg!cKncdvgr0;42mqKXH(-{p [wi0$T`d,9i' );
define( 'SECURE_AUTH_SALT', '343/YueNHZg4Hg%L%HZp/m&~-)<NOZGFVvhI5=t7mX$rK4Iq5><F<,$@nv8uMrhJ' );
define( 'LOGGED_IN_SALT',   'WEdMA#S$3%rvV,`??iHvP~h1.[txk~TR!#P*fiU`gpnk],)L-yfdX%3hO1M5[{!h' );
define( 'NONCE_SALT',       'CBE@AS:ldNSU) l8]<ls>B#c|_>A_aW^A^s!uU6FUte,C@UhWL?&Xj]r@ROXe+n?' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
