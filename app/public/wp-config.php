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
define( 'AUTH_KEY',          'Er7^P)Q)mN0wk^Y}O=5dc,v y3,B![N?4a/Wxe}3_0 *%,=yVYaW+^CI~.7*DaRE' );
define( 'SECURE_AUTH_KEY',   'fv%IXUiJ} t5GK6)8id=sTe~#r?kIu&}x/lxWj.4rOjX3pk]SQ>{iu*0Tpfn6O g' );
define( 'LOGGED_IN_KEY',     'qke,KmX7Zo*8xYo*~#`n@S~e-_+t((ExiU1+4#IiNKb(yp}A:s|R--ttN0Sxgx[n' );
define( 'NONCE_KEY',         'rYSX5S|A}%o.1oAQnLf;/[JfG:-M5vNTU^X] O`+UNLxV/wb>=R01O=ly4E~D/T|' );
define( 'AUTH_SALT',         '/vIa 6=(zic<]Xj].,f*1[[Gy8Y<y+*A&O_v%W0g`^.iCn};nsf&(3UkT9%VYlYH' );
define( 'SECURE_AUTH_SALT',  '(fp}`>No)KgTklY5-.x>-!Y3&HJT!-uQ 3<W=imeY-@,d@MPrmd$43C#T.W[$v3s' );
define( 'LOGGED_IN_SALT',    'XOi0sq^X7p(FyDP[Ua2)M^dHF>Gm.3N?q@cGBQ#J[;JP&JMf )}@/|,5/7O#&EU^' );
define( 'NONCE_SALT',        'P?o)/# 2xQ}dIdpcDk-@sA_RCx`y,cC|L&#W>=nqg^1.3j~rpzB4N4,v<TKSb(l!' );
define( 'WP_CACHE_KEY_SALT', '}9|W[volh*,T9T/w`E/R!}+%`NA&Dren`C_MS|>9y{vQ_Eku+Sh]Vsc8[A6C,=Y+' );


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
