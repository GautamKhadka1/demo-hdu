<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demohdudb' );

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
define( 'AUTH_KEY',         'IsKPAh_M=5u}w~bP/MPh/]))EZayCI0F`)`<+^zXB5U)!qAq7wukmfI?O:R)h,P`' );
define( 'SECURE_AUTH_KEY',  '!~e)SrpSh^fJ?M>OkW[A?-N#0``#r)+c{51^:jh7!O3YL%a A_rE~%xG#_OH#*v8' );
define( 'LOGGED_IN_KEY',    'UnZz*gENVGQa)mY!Q|)uGJ?:2?K39Mf*PYd9Mw]r>?6V)pXX`dPm1)G5=UR,V<&2' );
define( 'NONCE_KEY',        '|w~)+wmv(nv8<QP&t>/dg1 b%t[jK[;g-+`x8fx#?a_046Nie)NEjR=1a,rNZ~XA' );
define( 'AUTH_SALT',        '}3QS( u[(7BkTP/bqW(xp|JD_!0h-WU0X](rO:_xqqDT/:2d8@J>Yg-ME5GW!0#U' );
define( 'SECURE_AUTH_SALT', '_8hO* w(LbMY>{)/y2sX2.Hh9B$9v57:w,.+<aX^QEmC|p:$;}TE12tvL2oM;5VH' );
define( 'LOGGED_IN_SALT',   'Vbi@+!HBReO?h/4^I.}uAn0M=^;w^M<+~1Z=~#-J~/Eo.As?Ho?u&88}GS$>.4d{' );
define( 'NONCE_SALT',       'CQ@ZZZc3.863~rpYKeq-tkiZO$t83n~o*IXpM74m2T6)5t?}kl{vdtF-)_4liQbf' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
