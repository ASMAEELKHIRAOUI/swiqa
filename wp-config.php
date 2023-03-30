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
define( 'DB_NAME', 'wpbrief' );

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
define( 'AUTH_KEY',         'W_ITn|mrEGYH40>MXC+FEl]*z_1;rAh[<wtL}k>hlQD~5M%ALnk:zBlyo6x~?2V5' );
define( 'SECURE_AUTH_KEY',  ':gFQ]NXwqUJ/sKli*BWn|aR./M7EgjF{I*Wm]v`], cP%cg`g|P,U97ac0F$M=ta' );
define( 'LOGGED_IN_KEY',    'P^5u?uHT 1-!TB+=(-3}g!_&_=*;Z9pKDrB]*5ED#H{)N]G[UI 8|1T@]TUu=12E' );
define( 'NONCE_KEY',        'm9^jp?8K@FV.?>R9rS.HcXEE6%QeavZ(M<JiDNfSS~r5&XuSR%[/XNvn;vASd:8U' );
define( 'AUTH_SALT',        'Jrmqi=jxEHZKGII~2jH@Axz<w0;-5tAGK{,Hc6 :rO{asj-c~ay*7DR#`2oiz,6W' );
define( 'SECURE_AUTH_SALT', 'NRnwcBSMaIOeDpBe}hD~yog5i.ly5b7zx3x J<9Nzi;R*lZhyxE%S?3%:ecI$dk}' );
define( 'LOGGED_IN_SALT',   '52{)3O%$=,s[$]-ibo$mAz3%<aGo(j#AkQz`auaH1+Jgp(,^`>GW~~i9;4HzV#{$' );
define( 'NONCE_SALT',       '6j4E)&@vo/n|Y8)Mx_>dB? p,L>~;z4F_Dy+&1bE#4@8E3!p8aj+0fi<vV<}^]+r' );

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
