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
 * * Localized language
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
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'M/v/anoO$ouMk6!upCw|/jgNCyuh){-ar}@/zUE$F0<:LKR,F?VWMVw.|!FZR HN' );
define( 'SECURE_AUTH_KEY',   'gi]BWg)i}%Zgem:O;[6Qrey~*~M-yK$tBh^@4ID^5m|_E9%+Bz<%#^C5(}4|^Kd3' );
define( 'LOGGED_IN_KEY',     '+{1G_+eou8zirwX/[R%.1<;^X@VGw}tZ7~3d,7;OF2/bo5dR*<a]Hu0pI5$hX-)+' );
define( 'NONCE_KEY',         'Jee$V@7qCJ7BEny}8d%v{&}NiBJib XA^2D`XwHB Gc{FQJD^JIi`/h9_7V`L,O0' );
define( 'AUTH_SALT',         '$BF2B$GB|9mg/bTrzeEwH)%[c(0, =07LFP2S*CE<1Fl6hctkh,-;e8_a_s9wG;f' );
define( 'SECURE_AUTH_SALT',  'C3!tuwojKZ#8joJomkHQ* t. sao?t~TbE0c4Zc(R1.G#_`a=G8JRY7<J8c,X2^%' );
define( 'LOGGED_IN_SALT',    'uG4U%4vZf(Otheov><,7kej]&`:UT~$4Mv-(9/j3}b~LhT`V:s*9McW}09zSCxlE' );
define( 'NONCE_SALT',        'iDIm!per&XB<[z+,W(E/90Msxjko_0<3VyKM+9=vlhI!^<Gbf|{*JKKO;#aR,-;E' );
define( 'WP_CACHE_KEY_SALT', '(?LY2)-_Hq=AqXk&+^SdCyvCWUNLU!E>QK_Vo#Z#p4W=64!qP=k>d^vV!Tpx3-5z' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
