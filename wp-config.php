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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '&?,oR$6:0a<L9^Jw=n(UW&.WVpN|eDv%7m@Tyup]5_xCWU|CMXpxD(1B?`n-^&DD' );
define( 'SECURE_AUTH_KEY',  'uDRaFA9Dt`w3b8F2&L*inUy86J`X?4SMz@lLpct=d;4He?1QbIkj1#+@I8,1I_%=' );
define( 'LOGGED_IN_KEY',    '9;erzr|Ky7yA{@Y1z},^e#A_1EVNSjK`E83%v^L;vyl@5jP@Lp=GE/[( h|:P]k*' );
define( 'NONCE_KEY',        'e*Ts^+Nhp8hpD<<{=Ve=[.#(,Hip`._?:d#cj&W/0LY,XllZ_V9Pq38K3e#O2XGF' );
define( 'AUTH_SALT',        '`zKEe<.^?:r-H4*oJviMKS%wVP#4?T# T)~ZADrlVry-w:fVxqog-Kp-UmwiG-_u' );
define( 'SECURE_AUTH_SALT', 'z0[ki}/()K/qB-&/5k<pZ`J},l)scNse&`^L6O+kj,mcu/x3a@F9>xVEBz|VD,*-' );
define( 'LOGGED_IN_SALT',   't !=Cim XK2v$ OzN!bH|4QcX^^@7&I6JcFr}Br-xp[*.*^7:^L+2tj]7 oVp-bV' );
define( 'NONCE_SALT',       'Ha;&objxvG56PKS>e/,1TZD@6M6f8o-CTy]CQ2pO,WKU}YEZcZ85H.:4<LulawcX' );

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
