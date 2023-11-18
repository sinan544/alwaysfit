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
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         '{+1UHRk,D+c8q~:+6}STwQ{c:h,X?1D*+L~?+ERHRde6YCy7q+<|-#chc-T_n+A1' );
define( 'SECURE_AUTH_KEY',  'NL3)a15O?w,9<Mrb!y-o4^.cY]pv1k[_>r2D#K1!>g!&2|%hNMuK+C)8Q[7r5a]f' );
define( 'LOGGED_IN_KEY',    'xG!Rv8Mk:]5d:hCpoza@?.x7NX0=0lAR7]fc?wuo:.QVtoGCz_Z`yK]XhOAmy%.z' );
define( 'NONCE_KEY',        'o62wMA!K;7OvC$^LBBIiXrANw.g6aK$ma!VBOJE5|^(q!*tp+TdYgy~;H/.5&^?4' );
define( 'AUTH_SALT',        '%EsTNW_zHh4.>}MM5:a/F0>aIH228Y-Y1sa)G_Gwlm-2d(W$sc8j?Ol&AFO3pXo:' );
define( 'SECURE_AUTH_SALT', ',o+z@3f^/hRfT(mO/mGFTL:J#=8IG)h[PtA>+Enst!Fnb,,D:zQ2gS^WZ?Mla ,i' );
define( 'LOGGED_IN_SALT',   'C$06-?lNkrez>|:K?yBw>AhcR,](~9I1#G%OrFAAh2/;7^7H^9?mbS5o8xwLIEw&' );
define( 'NONCE_SALT',       'ej(G,s?,7OW<WtdL qmJA^#3eq46rx{d& TS#J#I! fG+!2QvYo=~eB>uEL}/xCw' );

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
