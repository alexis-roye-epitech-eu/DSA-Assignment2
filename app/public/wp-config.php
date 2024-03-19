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
define( 'AUTH_KEY',          '~Pl2m]?w2n;>d2W]>8W!*`Qq}8ffonW:HK@:X2emtqzcn#n_XQqI8Vr<IDo*oz53' );
define( 'SECURE_AUTH_KEY',   '5h%{zP+`yb`^jn92KfJhAn@/)2>B/|:;8yGa(zxuMi*WTb8 |zLH:*[c8Jl cK~|' );
define( 'LOGGED_IN_KEY',     '{a?<z:>%ut)p4]|(tGKXsNy;[TvMO#hpiS[ -C8g?>1/@v8A-++9C2z2VFMBSGW_' );
define( 'NONCE_KEY',         ';@?<+qu 4[lCg9C4O_;GQm9>,^0;:(wfGuVt0 Yo@4LQS?n_7:B_me?FjLwOG2pa' );
define( 'AUTH_SALT',         'gghLtq)a%MDk/Jh]_$vl{:_l)T|[V$ipMF479zG($K$=qLaop)Pb(.lTXb_=/ sM' );
define( 'SECURE_AUTH_SALT',  '2<NTyv;u ~Qa4QVe4Mx@70C.>e(%ddQdzJdZj0onWJnO-<k^m7@6M[((Bo Px;y1' );
define( 'LOGGED_IN_SALT',    '_3+7BsG{yN*1;m:h~4<x&t..Ha]zQkJ8[Xhw]z^N[,9/>k`#1/)t7quL$_Sxv*1y' );
define( 'NONCE_SALT',        'EIOP:^Y3EZ_3[~3DgoqGaKnSn%gs4tX}XTrDjq11WkNBOO1_rwq:Pj%=o9Md3q!M' );
define( 'WP_CACHE_KEY_SALT', '@b=F$Am(/xwC#]_N@Xt]v1KTAq+{b}iZXMz/eYSzVn.G tw2I*.S5f`aD4FZ5*8R' );


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
