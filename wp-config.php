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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/var/www/html/cp4/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'cp4' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'H?qh4QF3hP(Oit2x-cchhmMDY?N/bUn.Q0-e1,KxGcSd Vu?%IiiHR$@y=[5D(qr' );
define( 'SECURE_AUTH_KEY',  '#%B<cW;OpX/5q*=!QkyS;@!3R%JF*k$spi8vTEG4$941E^hfU{39U=&Tk`AFDUs)' );
define( 'LOGGED_IN_KEY',    ',`#E/wo#TQ/AyBX!<SQCWBJ0M~F@MO[{y,!Y?bnI2HX9vpiYbc/OC`x|jU}HtPNK' );
define( 'NONCE_KEY',        'KEj!9uHUgNyW~,4AqWYg*},H|K)sS|ex&l|p/5FLxF^CAni?<c#oC[[t8k{S!PK*' );
define( 'AUTH_SALT',        '#KqQZ.ko+M?k1~Wod:jfJ7Qa.Z4&_15tK]0M{< {t}xUkEf@:k:sP/XB+SYO[#!o' );
define( 'SECURE_AUTH_SALT', 'x$s3db}GmljTMb}k} Zm,3E/h_Whz-Bk9QF<qX^Hy[/t)V,;mo>eS=R&HHiJ|pPl' );
define( 'LOGGED_IN_SALT',   'g^f {2[)_4&3X>gKA}y-Pry+vS%lQ@8I{e0Kt5P-K KluY.&&iI;F75!l<_HFWY3' );
define( 'NONCE_SALT',       'f$k#W#2[-*?VEk,brz0oO`*CEDT/FNIKK1^,<g*idlU!wyc[VOQ2;P@~E_PJhnfw' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );


define('FS_METHOD', 'direct');
/* That's all, stop editing! Happy blogging. */
