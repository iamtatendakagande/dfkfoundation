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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dfkfoundation' );

/** Database username */
define( 'DB_USER', 'tatenda' );

/** Database password */
define( 'DB_PASSWORD', 'iamtatenda' );

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
define( 'AUTH_KEY',         '}epj*U9:*r&190~9,SR ,]fC6iHlYlvAV|qnbN!/<pm0rGzg79<:}a_!H0^E&{XC' );
define( 'SECURE_AUTH_KEY',  '4M@Fw~S{BCZ|I=E.W/ElER@{nf]n~SpE:ccyiS%>hJxu-]}V@2)!pWrN-EX_a(l=' );
define( 'LOGGED_IN_KEY',    ':zU@u.[cw6KJLEtx;^snYuU@sx~+3`4IkB4=7(fZBSubR?k4X+:tyNNhe)s7@6/4' );
define( 'NONCE_KEY',        'nY.=BH%=C#17K+slX[](u[X0^WtT3:ND*F{XUNu|kw*Ub2O>)hURop/7[j?5+M@r' );
define( 'AUTH_SALT',        'Z]6z1 H;(@7,]a1L}Aq@|ot#2$N/-;+q^a`-rO]O/#bCY~ugG!$Oxu$=@qs+ O&$' );
define( 'SECURE_AUTH_SALT', 'hi2^#UF?x:GDM42KdaamuBd,]H)O6z5{tPj,uvT+-crXN$IX8G{|&Rpki4iXDT=y' );
define( 'LOGGED_IN_SALT',   '{g!T!IpG+X;wYzn.(YRWE~2}O3b{/h}wD>;FCLD+v||NCu3|8*M^mS3H{vOn*T30' );
define( 'NONCE_SALT',       'zKilS#NHBcAat7[E?asiImwW g[*CgDRo}88-(1.?#%g|GfAKaIpIDx!f7]wdz(?' );

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
