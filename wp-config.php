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
define( 'DB_NAME', 'wp_theme' );

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
define( 'AUTH_KEY',         ':ubfY2{~H+6jro$bfaY#k~Ou^ i@2SwZ<b!:Q5$@|qSiN2_Vh83Z@J:U1qzLq,=c' );
define( 'SECURE_AUTH_KEY',  '9n)}cuSiSP4GBw9~dXU:Q}~T!)iH=mZE3)-fkK|KI@dSETe|0 y3#_4LK(Ni :@-' );
define( 'LOGGED_IN_KEY',    '.nH#Hgq=4/fxX.i0OtVM0P= 4EOgMFT!T]Sk`wnWpO9W]4Q MrzO`KOJDtOs{rl*' );
define( 'NONCE_KEY',        'E6drb}]su|$y5]`W>}B+[4F{,[ghkKN+Kuy;IzT~YyLIMlcfQuH~@.PV;8OpDlj8' );
define( 'AUTH_SALT',        'Lk[]*Z$*Fr$`wv$(`w&eIQ{pf4$,m6_7J&r[`Jk}vMWL:6:u!#4[O6)[dz_t KY6' );
define( 'SECURE_AUTH_SALT', '&/Hfs[;y;ya12+wi++ y||Yi)T36#Iz0EIl0zz-]TRUo~Dxr5K`F-5u]$Ch X9`S' );
define( 'LOGGED_IN_SALT',   '[]4qe5bUd$|tj0oMF,h5wy,+=TIL*(9G zxv#Z}DfwvWC3WV<>kjFNK+[yAeY)yf' );
define( 'NONCE_SALT',       '6${76JRtJB-^!;QtXfcFUBwLlnu-U&]@72.9akNl+.=_?d7}:zvQu2>6_vUD`M:l' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'th_';

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
