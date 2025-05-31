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
define( 'DB_NAME', 'techaidpro' );

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
define( 'AUTH_KEY',         ':K_2Krd]C).%`LS)NgG?5LUE %?4MtM4:lF7T1Ufk)IqJ96R|e>,ThR74yNocM4o' );
define( 'SECURE_AUTH_KEY',  'K*H]o8:(m9!LLg/ZroX#p$zYt`M]utgd>A,5l`e0Z{folUypl%9sX0%,MX;2h)$g' );
define( 'LOGGED_IN_KEY',    'x,N7c>SKr]socy#DGGY3xHCnN|};r(sp}VcR7PBI`ry{Y-Ddwpk.AY&joR>;fg@O' );
define( 'NONCE_KEY',        'pW,lYyjvh#&KtfHYJ1m^?@/5`_AH tc:g~k(lDJ^ n*Syn3~Bf~$uiZ=TpZx5~Za' );
define( 'AUTH_SALT',        ']K:LksLefRZLgD-,gQ;N/pY]qx^30HA9qk[zX7#<k9[/U8HSxG?Xs+|[+?3Y~TG1' );
define( 'SECURE_AUTH_SALT', '~cG@--tciUO*(roL,UaSTb,*|={#tj!;mZ<gb=,7$GVW^D+A2s>_o>/~Nlvp#sz?' );
define( 'LOGGED_IN_SALT',   '6QzK</9SkE!:i1Sm-U9%R`nQr}b%LSG:2Kc/w2hESO5BYp>tI:#6nW4yk})k|aYf' );
define( 'NONCE_SALT',       'GG5D}30D_;~v3by#J3IMGkh,#,eiUE%$nca.3SRxsM@B9;*$CU(X<|f^s: (B@-5' );

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
