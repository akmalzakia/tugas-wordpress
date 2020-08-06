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
define( 'DB_NAME', 'wappdb');

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'adminadmin' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_MEMORY_LIMIT', '512M' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Rf~G>|;qMD1?o!|Uw,~%;nq)D;5DSg87/4S<wx@b]hw?.[Mk@jFU(m1:@#Yl:p9`' );
define( 'SECURE_AUTH_KEY',  'Dw/}8`WDH9PTT9po2:QVu7?KE<@wjOGWCjCe9UK.~J)i4fEExYQZ<e6< 2fhO(1r' );
define( 'LOGGED_IN_KEY',    'u[UdM)(KttT4or%H((o>zaqt+!aBSTGrKOOlF}$T>isM#QX=Zyr|f(bIY,2cGw+y' );
define( 'NONCE_KEY',        '_I<zcaf.mV_D,<2L=ulv;s4hk7s?z9^qyK8QfnxwV3-pV+_!F?Gw-_Gz1:V7,&)a' );
define( 'AUTH_SALT',        '6W(7p^s*^~~f2lWYHRr=rB.}4c,rs@dYb*s/KC6I5<}%QWfKGsZjY3;n|rK>uvV#' );
define( 'SECURE_AUTH_SALT', 'h8kIb`8NBaE2D#$(&%NBg@AK6i[>tCQ)^fl_3d#w)EI^U_|K+{f./H`XK3R;_m#(' );
define( 'LOGGED_IN_SALT',   'awn:rZ]{=BGJM9M|{i^-thV8J/C!+9)!O+8ocYj5lrRO^EcjY![ {F^!$<ALBgnj' );
define( 'NONCE_SALT',       'yU N?md |_})sC4|!|RkR-,?W(ou~temn7zPdRN8(E`~em,vIN[)#qxG0ot$G7M6' );

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
