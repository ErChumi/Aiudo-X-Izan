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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bbddaiudoxizan' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'qjg@z/TO0:@,I@b5x4w|xpLMNpu86_H(M,%QQ$Y@Z6Y/15?CDY2PTXe.{bXKuZ!^' );
define( 'SECURE_AUTH_KEY',  'sXg:H5qUxT8jGwWX9kTYOo>F~R@*jtK1`QOGuOE;(Hh/w?C3<{j#.:IP2LY@jyS]' );
define( 'LOGGED_IN_KEY',    '$)h8A9RGCo6K#C)8e),a,u>_8xGKyFHu-G,e]JrSvStV[xU;!4SH+4.E@,~Gjkx0' );
define( 'NONCE_KEY',        '9+~t {Foa+ 8-DT.ihDTEtb!T{OCvbQUq3(+XEDO*:)<oedFWARH$)T<ec}Ghl@=' );
define( 'AUTH_SALT',        'Ksh/OTuv/a4CgpeRes^bM[|pmy${Q4gr,r3[cGRKw/^C2HD(8OE!s/>@zqvRT{I|' );
define( 'SECURE_AUTH_SALT', 'K#</^wOK0LavNnFPnxVvu-,PbTuCEBs/[}f)[;N.VPk Ih#3)S~sC,oQpLcoMvI?' );
define( 'LOGGED_IN_SALT',   '2CB>:JUEPFg@}i$jju0 !D99&8GV,$35%kqEzZexbY#vQU^#`[DD?4Dy/,tVO-<U' );
define( 'NONCE_SALT',       '4c_6,KGRJ<v;7bKz;vo)b[6tE#d3>]MZkvSD@SOR&E<_tp00,ogBYYF^6uZ#*@HA' );

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
