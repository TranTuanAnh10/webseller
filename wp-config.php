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
define( 'DB_NAME', 'web_seller' );

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
define( 'AUTH_KEY',         'iw]|4(s6bz*=|0)km?79Ib[PoIa4s,Qmlg+Q_KUik(H{&)~ev@-|_UTz36R;|3;1' );
define( 'SECURE_AUTH_KEY',  '~V-vT}>JE$-<a}>9?NInkuLzuSh#bgP:qXXU$BI%Yc;A`cmeTB9+<?|Jy?Mu|~@1' );
define( 'LOGGED_IN_KEY',    'T;$|<A[~D[L6,Fb!UOz3n?Z9)M+I=HDd_NJ%k~E$$O#D!<S~}>p&w`qI&41Y$7<S' );
define( 'NONCE_KEY',        'CY-744%*?{8%fh<D?%sHl^-W:iM]xah>QbJl_)~$)>BlWL}].bS2 ve/fMX:~)dx' );
define( 'AUTH_SALT',        'D*pKj4+m*6l6P`Zj/|GL%ogiv_w0%6(Q2n1M=Tz.iG;Qa|YI-.ULE%+a>/qhODTr' );
define( 'SECURE_AUTH_SALT', 'L.!PwE^*b@:Qk>3FDXb_x!mp1$L=L(5wc*]pmnFzWN^1b{Lpd`f;-3Czeuq/,$gU' );
define( 'LOGGED_IN_SALT',   ' .|8mVMR]/!o)he~nf_y]f(PDW[}K`u)j{qgj6<f[ibV0Z+i;/-}-%Km>`Z>*%]?' );
define( 'NONCE_SALT',       'J(*NxX&Jc}:vLuXqc5,+boKJ$H+}aYR0#;}11 <6Z@#cqCOl4A.w@c#|Dj#GR zj' );

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
