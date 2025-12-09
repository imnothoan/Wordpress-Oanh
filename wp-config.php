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
define( 'DB_NAME', '23IM031-23IM015' );

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
define( 'AUTH_KEY',         'D]b`MY%56fy<d<}FKswyJT+gqxDCFWw;[kSZle[(XT }2<b_gaF[#R@9of1Y(rxb' );
define( 'SECURE_AUTH_KEY',  'R5dZHXR?t/,Bzegg3_&Bi4/VKVC{?0i6_b1VB6wF<PtKeNoo>:MuA1MzBIw(N,t|' );
define( 'LOGGED_IN_KEY',    '/+q7&]2cLV3L+7n!:G#Qlkt(6My@0Ej8Y#MhooS:nRia?W_!rwOZohXPL3ES< w|' );
define( 'NONCE_KEY',        'j/U-1Mo3KB}l4+GAZ][OvW&6(52mz`N0:yu?-&o%LHyqRbpd%V S0|M8hG{3nvQg' );
define( 'AUTH_SALT',        ';jB!`?o-8kZLNRy|^@{ eK#`8~Eq|bbyAm`G. %0{{B#0OQ6$S RX|#h:m*HpT86' );
define( 'SECURE_AUTH_SALT', 'j.N[ap/T@i#Z]#d!%]#HU~?R1OWDrk_iz0x[43rG.YXqb[~ajxT-L#E<r9J!<^?D' );
define( 'LOGGED_IN_SALT',   'IL#9H95.l?DoS#[$j*-8}Dh3H~*cVG{MPpnQ#WPm-:|e6yCC?|taqHe;&|#m~tCD' );
define( 'NONCE_SALT',       'R!9_(k(5JMJX>I=9k9<6kRkXxZ(tBe+M<&SWnIjd |<5f)^Rp#Q]x74y`V>VM2fQ' );

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
