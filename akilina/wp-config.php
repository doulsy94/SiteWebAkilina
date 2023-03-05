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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'appakilina' );

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
define( 'AUTH_KEY',         '6J`uP1Z<(iE&9(%(>nj&Ml{sa%I!Jqi_`sciG2W}YXUOJ4zlwr`Rj3FwH0F;{QHN' );
define( 'SECURE_AUTH_KEY',  'r<C7CW(C-xOW.8:P0LpJc-)Cgr)4j/rrWkre9>^T~UXcQ:(Oh&hl?-y5X=lre}hG' );
define( 'LOGGED_IN_KEY',    'z-kHG+G4,:@8&^S)CM=E&Ss{|;Gi;G1E U|{6G(f{p)gB`%PJi=WJ>^mpxy^`Fgj' );
define( 'NONCE_KEY',        '&`}3kkhlR2p(B*gk8 VIylvRguuekMEvmx%+^);EUhcIJ.>{qpBvfRQW,YV^+u/q' );
define( 'AUTH_SALT',        'c<z02/Lk/0VQ^;fK|{-v]3CVzjJ.=VIDI3;4+0wM#*q4;dE_C^LWN59+n[l^e:IV' );
define( 'SECURE_AUTH_SALT', 'OAH -Y#&RyB`0Y`}w2Fh`9fr|RVXrJkFUemT{|EhelDmBJ(F|Q&@7=Q(-[XX9a@~' );
define( 'LOGGED_IN_SALT',   'A3qXcvEAOD5NaNr2I{b/RiEb 8%#GspWTDs@/xg<`qn1^Sh3j@Y OU9.B+u&5-yS' );
define( 'NONCE_SALT',       '>:&}/u$n=stKdH$teP5op ^:;yKqRSp-gxPL@T:+/%^o6ks@#(Z{=[Vk$#>q3=Fg' );

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
