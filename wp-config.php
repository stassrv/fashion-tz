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
define( 'DB_NAME', 'fashion' );

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
define( 'AUTH_KEY',         'jMU+s^|d#q-{x>lQBNCn5aKn)$:x0{nE,bAE{7t1z)CpNA1S&5rTkH[98yC+^_GP' );
define( 'SECURE_AUTH_KEY',  'S_* }tl);s$K={jn%SaO]sTqKY{_/Z iEhXA78(]+8r{ tnGK{q&d%scGEco9,OT' );
define( 'LOGGED_IN_KEY',    'V=]ZHkJ-+B:G.o8{>NcUsi?}@v8d,m$qK][PVx>q05w@UHZ?t-oiPWaM@%#.?k[_' );
define( 'NONCE_KEY',        '34&kl0THrfz7`6);KkjDMpoXbx,mA$6k^novadk_%#at[JOiJ>grBO<j&GEMbGUP' );
define( 'AUTH_SALT',        'hk{hV)xq937&[9AQ?vWHz3MOM92L99cY,c1^`6] enhuuV5cBd@?YjJ|1VEFK(<i' );
define( 'SECURE_AUTH_SALT', '.vnF&:4<#*0%lGpkSxWUAoSL-_r3(vO*aAow4oa8I(m>l<h%0*G=t2B+H k}Y:z?' );
define( 'LOGGED_IN_SALT',   ';EPEImQbD.X_UHiWeH`1&7P-x;/LlFCJ}s&|gX0fED!E#g@ufeC(ylp-jFF,oNQb' );
define( 'NONCE_SALT',       'mbQ>msD)(.~)<`SFqL{A(jQf5>p,:Hv)@qPSU(&Z<o^Tvd@Rs=*yy*<Oa*6DRH|v' );

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
