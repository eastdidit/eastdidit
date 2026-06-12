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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'eastdidit' );

/** Database username */
define( 'DB_USER', 'eastdidit' );

/** Database password */
define( 'DB_PASSWORD', 'Christ254@' );

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
define( 'AUTH_KEY',         '_lKD=E)iK}Z.!pM7Igq7i$d%#s@u9uu&y,!k&Jhp}l*MpA%%j>uV`6DR)A_ H#Pm' );
define( 'SECURE_AUTH_KEY',  'tlk<@Q$ivoe/_z$EN]@/=b/Y?~MR}F4^.GEm{=QQ@dXx`{Kf9swGMI}DpRoEKwc$' );
define( 'LOGGED_IN_KEY',    'l(@:L=mg:^5F&{h~$fT,8DUb0#~;m[gRgNrwzgY|G;+VN^2c[M`ncFOw(F2U<]z6' );
define( 'NONCE_KEY',        '0[&o.>_{a>G:gW$)WO@(2UP^bIye)USk-nIb>FYv3yB7,m.?e{tF[W4QAT8A`n~t' );
define( 'AUTH_SALT',        '99~M*0Hm>V&5$F&lMEJ/!DfeR;g=|#:m%}7Z=&(=YN1dp}nr|4V4u8>.&jv0;>GP' );
define( 'SECURE_AUTH_SALT', '8Pd)<~sgx3iB~G<Bg@$8 E:pnO^<>u.VWD#3Z[se^j2R$iyFY#35l;+l>=1cF0c)' );
define( 'LOGGED_IN_SALT',   '~Yhal`SUZvzp4XuhqPS/%^#s1HH<z5NTMh0M#N1 t&JYZX5oepUk>s^P5rdk?(SH' );
define( 'NONCE_SALT',       'f6&>6=V<rM},y=5?Ij)7}k^V`{)Oj=?Br8oTBnn/(:69003+~.zB0qs*7P&.b#oQ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
