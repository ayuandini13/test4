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
define( 'DB_NAME', 'test4' );

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
define( 'AUTH_KEY',         '.o$]TwA+)wp17vi@&7Y#_F8[q?gp*$[Ei6)A&ypf#3KM_Y[j,pJ!ua[M5w2`~L}b' );
define( 'SECURE_AUTH_KEY',  'UTM#tR8$~hjY&N5[5nN_XBTqYRuqF87FBF=~t$H<xk)zA9vx<hSiNRcXxGrx[s{~' );
define( 'LOGGED_IN_KEY',    'x06>vz#UM;S?+[IxkBd,9vEv(mN?wGdROR Y2kOTAEd~H*]GX2V{yz-5Z/Wvx|j7' );
define( 'NONCE_KEY',        '7.zv5*1-TqjdYZW?eNO8eB+-&`;5t2>nh?ys}0NO]=j3Gn0Iwl7,)Mvp(*t{-ys5' );
define( 'AUTH_SALT',        '/sz4di~dk:?:Ox/?gqj{fO cc%I5jTJ%v2pffZ/|m{y`F/7Q%!Xl_Av>rb))FZAn' );
define( 'SECURE_AUTH_SALT', 'l_ni?Box/7{V:4zQuw]E#rN+AOL* -Nmo*0`88Q:s2RzAgCbMlz(kOf;^NqoCS3i' );
define( 'LOGGED_IN_SALT',   'k-60_7}ta2-T ^1)@yy-6M[(QX{eq#=.2~,E}9X2}H^Keve,Arg!Tclh7bl:j?=U' );
define( 'NONCE_SALT',       '6w+k`6FS.=&,I<XAx?9-~Fc~!%vPPoI=SJ48&SHXPa,o}w$h!iyfk+|o&*b)vO=W' );

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
