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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
if (file_exists(dirname(__FILE__) . '/local.php')){
// Local database settings
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
} else {

// Live database settings	
/** The name of the database for WordPress */
define( 'DB_NAME', 'ahhyuns4_universitydata' );

/** MySQL database username */
define( 'DB_USER', 'ahhyuns4_wp730' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Hthebest8!s' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
}



/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
	define('AUTH_KEY',         '=L0*K6{jN).&QIk4.m1JbeR+__pv.]h=biC$,Bz.*+.uNM5y< ;R;iW+|JffN>>#');
	define('SECURE_AUTH_KEY',  '&n|YTwR7]0f<=w;MPQ~0{4wfNfv0tLmBjM}-WYty<Zm80_rR8z>d:ip(1*1k)1=n');
	define('LOGGED_IN_KEY',    '.+nxM)/G+|s+OC3EN7uY[ 8N/pc1Puv=yc f=5zhX(r><A3kM+lbKnimMN+|-O|H');
	define('NONCE_KEY',        'd`KQs%+?i`ia#1wmJ#,,_1Ay>ze!nRYR61[A<KJ#dMHXYIIt,:6_SX:3iV+|CMjZ');
	define('AUTH_SALT',        'OEA(G-XFo31k`^qc7RhjVXd`a7a;I-co(I1~?]`Fp2`/GPDPeN4KDqsc2o3!X7/4');
	define('SECURE_AUTH_SALT', 'OZ9=OX)E=^#Cg|VGYIL|ByL=UR.H4+q%O0932:fF[wHE6Xx|?Qn7dEy6iA*mE[Tq');
	define('LOGGED_IN_SALT',   '|EHm-S4Vu|5@6HKR@;2/6)(s^dmx(s(nrxp{cm5d78O-GO*xgp@ H|}X1Q+L{+3*');
	define('NONCE_SALT',       'n.7*2zNM0Zc7x,!HuVxWmdnl$WnP$9~isXdrLK ><P0vdC{2&[|}Tw&f@D;-rY?M');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
