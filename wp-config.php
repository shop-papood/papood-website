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
define( 'DB_NAME', 'papood' );

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
define( 'AUTH_KEY',         'ku2>,>X0){<)eFID|Q 54J&gA&=]il,NUf:Ks_H6nPfgMap&sstmXXykQk7:?1nA' );
define( 'SECURE_AUTH_KEY',  '*)ccyLIs.wf{KaKDKSajx6E6?;c!,+(#EK^ bXS4[jn5mQQR$i;+i?_{w7iAAX#P' );
define( 'LOGGED_IN_KEY',    '`,=kw6}ld^-OsUr0phsR2_@Q%ZW]jd~qt3edan9g$:xGn-_,Vor!IwC8ESgWb%tI' );
define( 'NONCE_KEY',        '1WT7j~=}8>m+}z.;F?2S?$:nYTBb(HVyz#tm0m!(pvO{O%d5I prvU|[x$~JYVQa' );
define( 'AUTH_SALT',        'kdBrBuYes7=o)Ht]Wf|v[rjP-If}`sy:;>4Yq {|~&=rxu+RHj!59FYY3@,f?v-f' );
define( 'SECURE_AUTH_SALT', ']?5p3vF*,N#njxy9<$gE h/S>H^-k^BG_uLM4$w{tS=eO=HB6sn`f$~5@vO*27H~' );
define( 'LOGGED_IN_SALT',   '_neeDE5(VH?~C)<*CTZ!$_L75A?+9t=RSv/[8=W8k#%<`cd*Iy/-Ts4),!#=D ~8' );
define( 'NONCE_SALT',       '[Z#bETs#o$5:N_0GJ!N~df*XcjE:Q@X~T4 NFameAi%jCg2v0hs7/M9EuDvxi]DH' );

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
