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
define( 'DB_NAME', 'wp-blog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '9!cnv;D^{y4B=f_J[5+e.QqL`Og]~F[NuL64!=)r])-|<}$MUI?Mw>oBH~YXg=z<' );
define( 'SECURE_AUTH_KEY',  'Vc~YUDQV1<Ixetl{/#Wakuv7]gZ=?>O]l409>>upK.:&)>+cH-^:q+I$j?@GEO4n' );
define( 'LOGGED_IN_KEY',    'i4VhAu5x[UkK,;x[[#oon&;H7As/r$H[e?&(x`)JKbcyHQ=L@?:;UM/GuuNJ.F^Z' );
define( 'NONCE_KEY',        'b3=77k:m:yg?sX;|(=zfmAv!N9>Np43qQyZ`fqs#C7BRZ(H|0l:tZks/&Shks*Zl' );
define( 'AUTH_SALT',        'SN_D>G6E}|A[.%z##yQfHASn%M9sy?!`1VqylLQwu8;JoDNtUQaYl_cXjL9*tp_%' );
define( 'SECURE_AUTH_SALT', '#EDwI9d$A1Lzbp 7grYmptn>:w<hu3On||gW=t_rN5PWr@B1;% o:JI6r-Njn[)X' );
define( 'LOGGED_IN_SALT',   'Vj4=^atH$X+:}XK#2--C4/j9@c*UTD g=::2%E2g(Q%yBUmvU<GcUqP4?0K_rBxm' );
define( 'NONCE_SALT',       'bgi*/(x8|+KV2BVCIr]G bu].[Fzz&yXKjc{k#]!VwAf<pcHLkc`O(@~kAoLPw(o' );

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
