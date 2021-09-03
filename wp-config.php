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
define( 'DB_NAME', 'waqasz6' );

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
define( 'AUTH_KEY',         '$slY*6EDRh>G6cC<[9gCp&1ibK=5;Oa7.CAg-vt@c>7yL|7VL ApW+{L]5!FTm _' );
define( 'SECURE_AUTH_KEY',  '<z! BPm~ldlB1&Azh]B~0NL@P^SSeZ-%D4[+=t+b:Q~?l4 W=_<LaG{]UR54gQyG' );
define( 'LOGGED_IN_KEY',    '~1dV(6#[vBnZZxIvr}*N*Idotq5IZ4:3SSv3M,F&QRAw[x3uVaBU^O&:3jv{Y6}]' );
define( 'NONCE_KEY',        'r]m1>AuRf3C `2y6LL]H_|*B$pfBYa{`=.G#=`git]ic!k2`z,}HiQJ,:YaWB/r$' );
define( 'AUTH_SALT',        '-Rf)mQ$*`wFSH_:Or;~TV^I0a7hPS(;G~1@lm[YLV?(cmsI?f2L7A/IIuJlJWS9:' );
define( 'SECURE_AUTH_SALT', '@*D_@Bt&=@pdx9c|:HYA.8ilL9tksc{dD^}5xiJKob#c<<{~MMq_*{]GQ{K<E;/Z' );
define( 'LOGGED_IN_SALT',   '*zXY}.(.X`jH.|RZQ(y(!ZNqy0[`|#Npn4|{(+`8[3@U{+GLG8aG/YIN0ps?C XU' );
define( 'NONCE_SALT',       '*,:EH3`2uZunBIjXF:{V<Z;hp5 TRGotg^(ih>3VrXYoB4p:,oG[p[u# TRT4e(o' );

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
