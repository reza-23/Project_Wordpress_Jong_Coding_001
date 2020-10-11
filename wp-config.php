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
define( 'DB_NAME', 'dbjongkoding' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'bPZ>8:7Q*-0RU!fnW^*VyaYH}P_q5dnJs{y`5n}E=ZFmUMiJMq!n)rd5c/20~fHY' );
define( 'SECURE_AUTH_KEY',  '}Xlp5n(u(gyKC?tkrH>4<ul/$!kU!w]Ee8ZLQ2T!Cf?&|u2Q/wedOiIGhA--gv<z' );
define( 'LOGGED_IN_KEY',    'h-AOnlbYi8lq`!lk|[(j|s3,OpCtgn}*Ugq7(*mKg:xmAa;[w?_@PVw<(f^?aw;X' );
define( 'NONCE_KEY',        'P>-@E;NV{e<0>g1c2962EavZ]/GhSf[yBw2o2A3rX$|,Xi[`.Q)#0m]3FlLRGaz9' );
define( 'AUTH_SALT',        'b0r7|VBhC+35GAo`%2=k?h0m--;2lxKZ;DSsfm/R-wcXAP$dxOtV<li3f#+=8{ a' );
define( 'SECURE_AUTH_SALT', '3,,(dj:AagQ )Q37Pu* W@znTXd?j?}#/mBNTR2fM~-#r<]?ZU(9+C<@>lftkH-d' );
define( 'LOGGED_IN_SALT',   ':U1cmKD7>6y[l-OHye7OOJZYuwyYcyzVb]0doa8yF=FtgrcoYT}|c+`USq.<E,I.' );
define( 'NONCE_SALT',       '5[Rh?OtMcRN=J#^k*2WJH|+hR7[4r{.EX<WUZg;~S*kH]6+q%ly?<tw>L(!-s@?u' );

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
