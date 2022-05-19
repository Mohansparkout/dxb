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
define( 'DB_NAME', 'dxb' );

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
define( 'AUTH_KEY',         '/BA7~%jBHKK,2!/0p@vu-To{=3T@M5w%%L=S)l!fj|NM~fO}T{f4n[#[GLkpDM4f' );
define( 'SECURE_AUTH_KEY',  'laoK=@DcpqTa/1 ZOK_!r!GERzcjBIowlC?,=mn&5ABlyTr9ayyVe]V0h3+8Kr[V' );
define( 'LOGGED_IN_KEY',    '%A]HkPxo;Ps9W<<*BFja:hL$m((prs2p9z4{!K0<|=*qbrdQ|)*c*JPU6 $U&ZuB' );
define( 'NONCE_KEY',        '0M.5_i$)i@$#L55.AMRI0f{]vChGp,E%a!d6A=ck(mRG]gM_zI(4,@yCnSHY*,6D' );
define( 'AUTH_SALT',        '{ON~.s?0]@IgqZ6d|55-GHCoU4NEpJbzb<T!S|% /Gf,XDkJyw+#}Ye[|t&Rk)Oy' );
define( 'SECURE_AUTH_SALT', 'u6!qEX!8Dw`==V.EjP&qRu$hV>%HI@R:yiYOY)s:JmU$b+SU~%gIzMnmy;D+B{S8' );
define( 'LOGGED_IN_SALT',   'T%LuQzSx_n+#ap R ${rS_rA+7H7F_|9^w>X4eX.>26JlM|lGsgg23>1UB2F_CZk' );
define( 'NONCE_SALT',       'G(C]O(^z6&)d1>QIcW[XRt6_!(4.PewJKHZ&:PV3$^i7=>LaH@dv*[?k#gIb#My_' );

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
