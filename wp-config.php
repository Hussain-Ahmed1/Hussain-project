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
define( 'DB_NAME', 'Hussain' );

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
define( 'AUTH_KEY',         '/$Cv/blEACK.AJPa6-bGSlGvg45wzQ;k9lJo(ggL7/@OaP7bF2-dO1K)*Z1b861c' );
define( 'SECURE_AUTH_KEY',  '9S_s!jfS10yrf!7QT^n9)MSP.J,8Fs>3r67XQ`^`9nn2v|GUvI3drR7*y1o@kb-|' );
define( 'LOGGED_IN_KEY',    'ltb*G9!(mpURMirjtd./QYvX1FTz.HbowMo,60gb,2+ga6xZIDt^J>Pjb+$2|&zW' );
define( 'NONCE_KEY',        '(qSwq[/OI9Y1lWp{La:QFD_yu9R;PQc=Y|fm7kL#i|`ldbm>31taa shDGi:<,1S' );
define( 'AUTH_SALT',        'ol2 `FN{klp`j0Ixr|A-0~PGyD,Fox9XOC>Xydwv.J83ifw[2>w4Oz`L.W7P{gET' );
define( 'SECURE_AUTH_SALT', '_p;9Ou{TP4M2Jv;6:73`!axBtBKm-/`&#G3$aw#1c/+QF4w13S_rd%2X=|qOh5{f' );
define( 'LOGGED_IN_SALT',   'G)jp~{`Cl>9|?!5Wf]ubfx9z<q#FxW$;6,T^1Ly{%O+VT,`;gn5 tXz)=5Fxb`nK' );
define( 'NONCE_SALT',       '0,C1Ybdy^yp.D,+(T&C|[E?sPCd_cEl|K7Z]kdg&0D9`(K8|TRTU^dA)~CMVuDIz' );

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
