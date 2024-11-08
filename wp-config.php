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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '>tf&-.*O3Gk)20{X]!BZQJ^mDhgq9f]J<P:FB^U$^YCIOrCEHf(83M~=~Oe`ReGK' );
define( 'SECURE_AUTH_KEY',   '44)P-<d0q}Jr!Lfx*r|8aIO:E40 h#oR$m|uS|OZ7y:`YwHW(4}Tjo[iP0}a0Kwv' );
define( 'LOGGED_IN_KEY',     'ht5.En%q$CTyK33agbFYN{zH9cHynxQobBKPU6G>j}k{SO<4e(/002xN&Dd <2|)' );
define( 'NONCE_KEY',         'lxQEN:=`~~6Kun8mThoy]OGX3hfQu$IW.:3.eC;Q#X{$+B37m3[(@]K=b)%Dro,8' );
define( 'AUTH_SALT',         '_rL60*6Q5ovur[mJ}i:yNVgkb&3^;z/P S#a8:PQz4#ro|g;.FJ^mhT{@s_;bqTL' );
define( 'SECURE_AUTH_SALT',  'fcf),RgQL<O LR{Qy),H~0{IfXuXZkl>f48[XaW6>}niRK=.Ap4rxo}}lmDh ,@Q' );
define( 'LOGGED_IN_SALT',    'Ni8LHjZ`?/hQEm<bw8sX/`:WS$qUO.,A ]bJY:jkMb{@|U]U>t~qRN3p-6g9ePS@' );
define( 'NONCE_SALT',        'y^?c` QN72}EAD4;*]B1(E H5!;89d<AVHR#e,Q%B,?@|.QRfOSBmETTX}^ire!5' );
define( 'WP_CACHE_KEY_SALT', 'q&qG7)FZ;D)1dOP{u6kcK *neUdeYng{MsX2;dw!d(<39H$;Mw8I`) &;KDWmUij' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
