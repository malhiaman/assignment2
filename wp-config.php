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
define('DB_NAME', 'assignment2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '1_qja}OI{q_FBF@veLJa{}rSI:4_d*Hv+_|lYCA!(7S?j%fC1:H@+ IBf|fI@qs0');
define('SECURE_AUTH_KEY',  '=-vZi%6:~zJ2Os+X3/B4){`s1n3@>$ #/KHB6_AWAacfH}~sG#0BOr?yG)v>{;]q');
define('LOGGED_IN_KEY',    'GM~sG32AIR&Asqb]@kN}*~-SqAf,+}:)k{EgQmw-xuKgDW@630H<Iv1uA,HL(%Wf');
define('NONCE_KEY',        'VQb=cWw84A1#= dSs*>{!5%P- qkPIpJ1Op>&!L;bXbOKQdek6GsXRo]0m`lJ5:%');
define('AUTH_SALT',        'Wr#IYss4{m7 ;!U9*^%pbH`kd$43H,O7+S0WQtcV%9qdv%|r:8sj-C4it?Q>tj^;');
define('SECURE_AUTH_SALT', 'y`rKrO3&k!3{y-cBt.dtyq?BAZG|FO0T5 n[G-BRONx5~=ir5XgONIf.JU9,t_OV');
define('LOGGED_IN_SALT',   '<pC%aMne|#RJ,Ow=s#aXACZkn,lHXIG XgUg/N]|bD?u`nh !F#eE!#|t[xB&oat');
define('NONCE_SALT',       '$:ad4w(l)$L>vvGeAh3P3ude7$W{w:stS@?:$,vjY^9JN_S(2+p25rH-3S)Rth/k');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
