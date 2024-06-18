<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'test' );

/** Database username */
define( 'DB_USER', 'thanh' );

/** Database password */
define( 'DB_PASSWORD', 'Thanh12345@' );

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
define( 'AUTH_KEY',         '+DI(;ee MyovV_iOY%3Gd]LpfP0<3N+2l/1kbBTq~A|}Bu*6p*9C-P}mf3v-mwA<' );
define( 'SECURE_AUTH_KEY',  'X#d +n[lJSC^s@:O|_46HQ T.4PkEWm Rk}@7!XItA)MRDq8Y>,i` j5>]f5z$#H' );
define( 'LOGGED_IN_KEY',    'ZFJuP6kj0nMAMc .p1<Aw/3-xIny{ _8gxFxK@NR&Hc;IDq52B<.aprwv<<s9|f}' );
define( 'NONCE_KEY',        '~O:BkMt$_ANP25QWqmX9r!mn$rXI=/q1r]o*P)^D8s(se|nJ-;5@Dx?9I;G:HMDr' );
define( 'AUTH_SALT',        '.@beXjmS}/C!E+XZ5#*ifV>IOFA_IaJ%K#^d2GVA=@L=9jhV5|or6Y,U@Yto%3:J' );
define( 'SECURE_AUTH_SALT', 'R</VUUg/Q)|G9nb03+]L,Y_dLXIwJ+w+ P0%|-P6qq6%tsf2OH^,0USeW)2w(ign' );
define( 'LOGGED_IN_SALT',   '?5e*a}G@8E3jo:uSV$AL8k(b]xR+z75//YpSXxsM)U;IWs;RgU=I{Uz9F+WqP,Ik' );
define( 'NONCE_SALT',       '}9VWfjn1FSu?`kdkfnm37$%Jh3Gb$a$O^W: GBefo58^#>9)Guf%{2G_sU5;F|ju' );

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
