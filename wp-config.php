<?php
// Allow editor fastest cache access
// define(WPFC_TOOLBAR_FOR_EDITOR, true);

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
define( 'DB_NAME', 'lollypop' );

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
define( 'AUTH_KEY',         '1HqSDCOUhr5m,,;xD@|vPqa` D+T:ylF5*#R8L0R,w.XI 4Zjlv8f=i%`^g&YYm3' );
define( 'SECURE_AUTH_KEY',  'PkQ3==J6JW&7;},C:2: eIr8UC)964>0| ]7*_A1UPFYRzw>z_P2}r,[fs,-c}L>' );
define( 'LOGGED_IN_KEY',    'EX$N#mV]G9=QW^$~R? MN.}s;Sis[WV%9;]%wFg^/=45iCyu!-JMPsaG,?:$m;u]' );
define( 'NONCE_KEY',        ')t%0/hC(a1W-:Q}Dvs4veeSCnlr2,:+$N*u6817*[&)ewJ>!~/avB@kM*T/ET,vS' );
define( 'AUTH_SALT',        'Rk43e14SS709},kI7+l!ZZQv>(*GUpo319~$>lS3/w _@onBrz@di1VBIj$N-88i' );
define( 'SECURE_AUTH_SALT', ']fTCjBfJpF9,#_U=A[X!p.ik6cF~;vR%DE=EcESo-PFD.i`w/8jzaUUCLO$X9+,z' );
define( 'LOGGED_IN_SALT',   '7-1AyU 5LOywzkl,>FK*.7L5:sHKrZoAe<(6)0-t]u]`AL/F5ST:^=PV:GQl94p+' );
define( 'NONCE_SALT',       'm[|GRtoX_f&rd{iNNKHkt)Y!RdSCsZ*Zze{EoBrH uN93/j|$3X0XUew76DG ?2Z' );
/**#@-*/

/**
 *  * WordPress database table prefix.
 *   *
 *    * You can have multiple installations in one database if you give each
 *     * a unique prefix. Only numbers, letters, and underscores please!
 *      */
$table_prefix = 'wp_';
/**
 *  * For developers: WordPress debugging mode.
 *   *
 *    * Change this to true to enable the display of notices during development.
 *     * It is strongly recommended that plugin and theme developers use WP_DEBUG
 *      * in their development environments.
 *       *
 *        * For information on other constants that can be used for debugging,
 *         * visit the documentation.
 *          *
 *           * @link https://wordpress.org/support/article/debugging-in-wordpress/
 *            */
define( 'WP_DEBUG', false );
/* Add any custom values between this line and the "stop editing" line. */


define('ALLOW_UNFILTERED_UPLOADS', true);
// define('WP_HOME','https://lollypop.design'); 
// define('WP_SITEURL','https://lollypop.design');
//define('FS_METHOD', 'direct');


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
