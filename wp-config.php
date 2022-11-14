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
define( 'DB_NAME', 'Test1' );

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
define( 'AUTH_KEY',         'yO9I^v(iW3F^0`G_LQaYMb[EeOX/fg,cP8zihS&1tmQ^takI.cwR|]q<#/Kcvt5t' );
define( 'SECURE_AUTH_KEY',  'sw+YA!CY{zeMMHmuLtqq3E7#OpLxY*5W(z5.aJKp3ps5#Odf-*)*gE,5RyT*sdiB' );
define( 'LOGGED_IN_KEY',    'ab&V@MF_2Z6A$h)v2w<Oh>}e8zLTDuk@Di=%Bx>M:snO+$vJ I!,WO[MoMOP/hq,' );
define( 'NONCE_KEY',        'ss5{f,)Dn:{&;OoY_2Inbw.X)aeEkX!%#vqENbx+#*v5)[8-kTSKsQ.%q}h3vpD:' );
define( 'AUTH_SALT',        '$m-FCZg,7bud*[{W,obTlw*G>>ky{)cpMV1Dmr717Jr#mi,ZEPY7+0Kx-C (#@)@' );
define( 'SECURE_AUTH_SALT', '-ly6aWrygBxcSVm(1d;^_qLE1]`/AT<x*)+,`#9B;]gm_;^DvEht4c:HP]e,;IX ' );
define( 'LOGGED_IN_SALT',   'm2^gLLr=qJ7Iz7BP*+JtC6_307 ;9Z]GN%g2 t+}HLm ggLE`gu`5X-icGXm>wQ9' );
define( 'NONCE_SALT',       'wU#U;gQ:-+=4l=NK,0fgBBu FvIOb#D,^PQDqapmqyrAMdez08XU(VT`V-n;]1w@' );

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
