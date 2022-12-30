<?php
define( 'WP_CACHE', true );
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'herbs' );

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
define( 'AUTH_KEY',         'uil1GtR_&}dk&UKT,LhD!dWBa#~?#I775D>X/oa~}Tr~WYkvvd=:Y{eXi/=ARWI)' );
define( 'SECURE_AUTH_KEY',  'Gd[+LWM5_<RpC5OUZBK<VbF/>}B)Iy:6B/tLX!oy+yWN IS_h]{TjJg%H;Xz!$C$' );
define( 'LOGGED_IN_KEY',    ')Lu})_k`xTi]C8)~(9wZyCk|2fJ^z`>//sByj6Qfrfdm8F=@pu:YVx$`3viH %E,' );
define( 'NONCE_KEY',        'gk.AdBNQ>gb.[C9Sb+C,-qF,||p-.wrS>hvh&Iort%Oln)F4=/Dl9bD2YBW*#.)p' );
define( 'AUTH_SALT',        'N8h-]<U&(Ub?+gBAP!3qrlm5L=3`~jRMN,)Ar1{|;X?|pHCDeCSN{{ueOe~]A.^l' );
define( 'SECURE_AUTH_SALT', 'jM6CY-WQt!GO/{qW^td826#6zGP-*lp9{hrdz;G4xu&! 9qLkJ$m9x~zTu{7A#)5' );
define( 'LOGGED_IN_SALT',   '}jmm$D8t?eMe2jQL9Xcg>4/)reg+^M&pVWcovqN[CBS|SE9(Oav<rB5du5D+Tzs!' );
define( 'NONCE_SALT',       '2o)gwvW,sv[22 % z$Z[>=l?09Z)OSem|iK#m[9@MQ3xk}|N #1{mZRjY4B<#O5q' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
