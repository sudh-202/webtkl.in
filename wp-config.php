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
define( 'DB_NAME', 'webtkl.in' );

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
define( 'AUTH_KEY',         '=2Y53bhAbyUKB9iE$~mu/_2r(..P7HAs/Nhlo9ik_xLB}uE*[&+0me^mx88f_W*,' );
define( 'SECURE_AUTH_KEY',  '&Ug/M>Zb.68Q@I?E4lYrr!b!vecy,V9:@cl) kxDV[Sj@HT7OMnz-pmfvp~jFBT^' );
define( 'LOGGED_IN_KEY',    '#pQALq[Wsi/JG3O_Jix}$Ww&N]7uTu @<]6~n* T7-MP0Zvk&4IJ(RCn(q.jt*X$' );
define( 'NONCE_KEY',        'nh]VxRiNo}chlYG)qg5 I1ob>krjHdre-Y&T+Z+uCcuZ2(s3j87pp1^|_i.0n$G?' );
define( 'AUTH_SALT',        'Q;dgJ)5<1>86Y%T k6A/hy2o;m0bPQB*oON2QIxrCSA<9rWZm,=v@N2EZhh@md.D' );
define( 'SECURE_AUTH_SALT', ',nJf|verwqg><unG[I{ELI.gPO*%YY/lJx+W0lZj_*xSXG$w5::7JPB;v#Yxv3~p' );
define( 'LOGGED_IN_SALT',   'w%Y+_@qk<1VVi!.!WbY?r([!_#Vyueh$X{G@RNW0ITk6&7z-{])F//>-E7OaJiLg' );
define( 'NONCE_SALT',       'T`Yt4Za&pB-^T{q=5p(Wlfo+m<2~!U;@V)Tm_2LXm3xN,x8@0K.)F~4y(#l>c8ok' );

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
