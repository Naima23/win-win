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
define( 'DB_NAME', 'win_win' );

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
define( 'AUTH_KEY',         't CK}Rcw0D9T Q=137yWni>6/]wi;a5~2~;q(eB=d _=Im;w5mU5*]mPg}jMv,=w' );
define( 'SECURE_AUTH_KEY',  ':^|u5fx<GuXY7XK5>*s)KxvDS@Ff3vOd0#sCckMsB5#LdRd+GEIuso(FQ3U#6%v]' );
define( 'LOGGED_IN_KEY',    '~<s2.yaJijzM^P0J5Bp5%26qe5rfO}*]IxYeY3D0D3-%vzeto&]WrULg?HR:sS>q' );
define( 'NONCE_KEY',        'N`?#x9p3SUzIX7vC8kV05[SH#zao>BICcNET!=LX;ZuAc:%srpcJ=UVUG+Aa9]*7' );
define( 'AUTH_SALT',        '0Sr;o:Fao+*fw>|M?xBFX9dt#&cdNn{~7IG~kwJJw$C==D]D`Yu;vpL5Qn6(Db%/' );
define( 'SECURE_AUTH_SALT', '~jx&-#gS@@pD>e`OK1Ppl,w&G0eAiGA8 TcZnYfgYhKMh;6zcnxIA`2q762F:?C=' );
define( 'LOGGED_IN_SALT',   '8TVuPnxHK,QdXr1z[[?B{-fKw=AVu)yEht.I@O%qg,+fhsN_]V_l_brb$j*I9&lH' );
define( 'NONCE_SALT',       'G?f/oBxpD_LE4XT$q~6dpr#yA)_2SxpFY)Hk2z r?=Q3?GcHxCK1*+?L,r~le|I8' );

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
