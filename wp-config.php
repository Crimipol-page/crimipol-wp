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
define( 'DB_NAME', 'crimipol' );

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
define( 'AUTH_KEY',         'M)TXMoTb?S(Ey,7NeZh{X_*b1W#c!:d_1{&c&2+UxUp<`|(d^RIKQaOhoEssN<9k' );
define( 'SECURE_AUTH_KEY',  'fX^,!6mt[=}tgy1DT.m/<ufHQiQwTOBWU%z~3eZuVb1Si:.>FSdaEK4bOBCD5Go-' );
define( 'LOGGED_IN_KEY',    '9DlOYet>bl9VC8{X_{I94huqY.egZw>duJ}rgA9+K0DLsI^OF&^MMa^^vhJ(uoPy' );
define( 'NONCE_KEY',        'WRSRbfHaLX(K%}4^@di4WP:95G5P6<&LsMpdwi!IHXJ=T7a9Iq~oYZ%t$:=??F}F' );
define( 'AUTH_SALT',        'N^2t4v0Eh/&?gI@So<qP%?)]D=n@ 6pf)$kzXrp(dwyK;;i+PlxFc&ns|XP(2Pw@' );
define( 'SECURE_AUTH_SALT', 'e;xdTY1K?Y+n]M;C.Y,yM<`7-gi8=Ml&OSNfH6o@Kjxwg0aan^I!cKz}VQX$?n.}' );
define( 'LOGGED_IN_SALT',   'F8W IUCZ22wF:rPOm!Wx>3jA6bVsE<x}y*n Q8$P4URcbS(wF<gI9!qLIwe!>X$;' );
define( 'NONCE_SALT',       '%NN=u/nS{.$z-wBdY$#@&KubN@:2^Y[1@NDq18=%mwd&1DVF1nwE8`rz<qriDHfs' );

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
