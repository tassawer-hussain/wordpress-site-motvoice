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
define( 'DB_NAME', '2020_motvoice' );

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
define( 'AUTH_KEY',         '4ML1|umpl6Kxcd0(%:^jkVkkl6l(I:}m2%tyJu_<*PT:X4(F.@r7Iqv:F%(j;4)E' );
define( 'SECURE_AUTH_KEY',  'wj:/s)0H`%nGl43+s;z);2 RNS{2hCGgqO{G<$<!ek {E!v:# SDZ=TJ&;4=!R-2' );
define( 'LOGGED_IN_KEY',    'e~3Y?Z:@F$JEM o*b/yhG}]3-)ziP]wL]Rh7cH0}xk0T] L5.4IO*Vd:h D(+&$u' );
define( 'NONCE_KEY',        'OqwmSX?v|r!qcv1k7!TXX.V@VnQ&TXKRs-8U%aeT]%1gLqab9n!v &T9pz&gvqWx' );
define( 'AUTH_SALT',        'a1VTiSi{B*O+.p=ZSm9CIntv)b^7KhE_4OZj%DAtgLcaXf2phbfC(Et)YVgp$iT{' );
define( 'SECURE_AUTH_SALT', 'G60qPmE T- 4eTY/HEfnGPSw}(3r4q|tRGzG(0<1]+[=F>jQcgo}E=%YpVw{@Q?V' );
define( 'LOGGED_IN_SALT',   '?cy!TSe1}&j-zA0ep!][VdM/l%@d Ynl7HI<|3<sFF)3t:Br;v#5SF5#^{IdSUo4' );
define( 'NONCE_SALT',       '7=o:f%$4>XS]k36L-Afm`8S!u5z8th8B8PCcbGvqio[;JZ5i<wP9/}s:8`@8*cIZ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mtv_';

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
