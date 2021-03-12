<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'class17' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         't<KyXAh/X#L9`P$;.q`^<K@X*JeP&$nz}{S_A 0PJ=N-:u,8LrH6CnY|>DYBTV f' );
define( 'SECURE_AUTH_KEY',  '3{d_$n};UV|,CV2z:AHrjW/,I;($=</ WZaRmLES+d0 eB(UgG:%R+.5K7!D9c($' );
define( 'LOGGED_IN_KEY',    'tv+Qv,.MI8XHRdZM2}tDWa^iq,]@ tS-%msc0YiN|^~a5j Hb[EH`,+QZi#l07?<' );
define( 'NONCE_KEY',        'y{D2Lh@C0+6*-:R-!8^-uC_bi}csVNrw}Tr`-&9>?@JZ$~2D+q^s&9CaA X[y,VP' );
define( 'AUTH_SALT',        'ongwR4,4D4b|v=d,R>]nWvV%[+yA`^a:xtS<S!DM/=/PvUqe&!n^Cg:m#yf:E ;c' );
define( 'SECURE_AUTH_SALT', '$Ii|10Aq}K%HZV!?s]g*f=[gvc,4hb)Mkki*r=| dq$`eGx5(ni13o))apY~?ga3' );
define( 'LOGGED_IN_SALT',   '8.UDhNjl+IhEd%eL=o2mk`h,v#YW<f9Pe*o|<XfHm#j#B51<,Hv2ozC9%uXXBtC!' );
define( 'NONCE_SALT',       '3PkFV>P!sx,E!;J+3O!vitM,*p6`wQC_<^xUTKnAcWQ1ZWvm9/A<~yei=iX+|-9W' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
