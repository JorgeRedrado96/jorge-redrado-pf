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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jorge-redrado-pf' );

/** MySQL database username */
define( 'DB_USER', 'jorge-redrado-pf' );

/** MySQL database password */
define( 'DB_PASSWORD', 'jorge-redrado-pf' );

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
define( 'AUTH_KEY',         '_; #bZ,%GyZ.pK[!{2k@ds.bY~1(9M]U*q?  _>B=wC9GS}JG4iti}P1!HC:H&rV' );
define( 'SECURE_AUTH_KEY',  'Fg}7NGYq43-kPG9})B(|[#o[Ajj+c$H[ACMO^knI(!m3u8}$]~Z%^a%gH;3VPqHu' );
define( 'LOGGED_IN_KEY',    'G)rGA>yM|uMqu7_Iqjn>rglpP]w1e~5$/)kx<#:f(Nq5Q~]<Z|ADPCM>O[jp aIO' );
define( 'NONCE_KEY',        'K7BqLLxW*OR2#ZaLhFjYCTR%KUd8[4*+[^MQ,yjm_vzA>#]8M$0;sb%x=NMVb!8?' );
define( 'AUTH_SALT',        ',jMfhrxQvG8/k#wkNL[ #{OfxKqd0~s/B;1hOMu|D)N{@<_.zf .tnp~/.`3FRyQ' );
define( 'SECURE_AUTH_SALT', 'YbN4;e*E#!}4}<Mcf}oJh5Kk$9SB|lp0/L8/U3oAC{]kOzK$CUTQYNMB:PE5Lx Y' );
define( 'LOGGED_IN_SALT',   '}Cgw$77%F/?*Jkh96HHX[Wf%!l2mB3{h1s@`$?}M_.!hL~_P90adlbxTLks:!I-(' );
define( 'NONCE_SALT',       'AvJC~^8_=JQh%1:BLk{8ZOz8q!}5V{$MI&J5,EzeZ7-/<xEk6$>U*g+rCx|j|]}B' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
