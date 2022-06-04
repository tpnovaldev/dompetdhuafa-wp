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
define( 'DB_NAME', 'dompetdhuafa_db' );

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
define( 'AUTH_KEY',         '$?8zludDly-|]}o5,G%s2IIL24kDztOj>STuJgx/7-5pB<sR:2:2:^P}&]xmHZ1 ' );
define( 'SECURE_AUTH_KEY',  'H{Jkzj75t*E:<s%y|)/w#sXiubcex6C<[b4mV&z:ROKLs-zmYO+~^R9i_M|&NhTj' );
define( 'LOGGED_IN_KEY',    'MY,t5]D/0~pPSf<+7$tp QA9I`HQ-0Ho,Vv:y6zXO09}ox^.j`Wq>+qyAK*>tDCY' );
define( 'NONCE_KEY',        '75Km4 T_+9,Y{L:r<CAQ.8XDa>sm~zifL`j?3RG,/kB-)wBua:.I,tN]@`2LfnV0' );
define( 'AUTH_SALT',        '$cE*hI<qGrVbYz(ZiV;[qM 2^/GBbBeT!L6$(zIuw0|TUns)5c`8:+rlK5I<=>2`' );
define( 'SECURE_AUTH_SALT', '<GX,Hj!ue_<j*CFHz&@xM148PDl78jD8IE{:c tv5T57NK4A+giCKyDH}=%bJc<|' );
define( 'LOGGED_IN_SALT',   ']`7pwlKUPYxv}@Q(E& 08#lR}S3|SwO<_]!`:icW7&S/itpS[A0}U3le)WG:O~u~' );
define( 'NONCE_SALT',       'L;H2L0cgoi+-?d;zaTG&/HrRzxXTXi;1yWJa]k4q$d@<H1UPg6w*X6?}2LKG}EH]' );

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
