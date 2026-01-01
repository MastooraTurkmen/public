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
define( 'AUTH_KEY',          ')>%_QDj/hfL}}f343h}5AH{uci?^(O~2?h0L/}E2W(p8#Q^Jsh6@gY0 R]iA<a (' );
define( 'SECURE_AUTH_KEY',   'BQ!%R$r@C@JfGcSh5_w46G+kLu_n]Li!9Kb8z,5mTvY_[Q2.?sWpL/`^(-juC*Gb' );
define( 'LOGGED_IN_KEY',     'mA0mOF|>-iJAKVqiIW)[ZhYj1i#&k.%]2E^sL*Lc?qrMzAZSs!(Z ,?QLzrpAvWU' );
define( 'NONCE_KEY',         '<y#AjdFUt=K@N_Ae<l_2: @0,zE/SlkJhQZql}9_O)$S;]3g$UEx<w#W1@kBG}!3' );
define( 'AUTH_SALT',         '-IS5|wJtd@y_sg?;I)U~d1fvyY~5i*duw`e40v,N~?&SwX:1*;2<fBp.-Q ]de/l' );
define( 'SECURE_AUTH_SALT',  ' `UJ{h{knb&6olwsn.LlR?^ye_w2,Obqrx_NbgR(E1Cbzq`8onn{Cuil[f C5y%I' );
define( 'LOGGED_IN_SALT',    'y!=PD]Lq(Ij[N=Te(&|<XhQW2F/-utq i.LzrjB?lId@yk<m;0<r[W(+/XVG):Zk' );
define( 'NONCE_SALT',        'snFtsjBBM;%,-&li} s<S;l,v*tPyL#!`!:d1-$Ro><Uezwl08gI23CvFIy]=aj8' );
define( 'WP_CACHE_KEY_SALT', 'HoLa~zziYl9kq`+$Z Gc+#wW20U9&o`}?(D-uD1wS*@}?FMUhtDB$bCjLzrR[5z.' );


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
