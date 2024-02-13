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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost:8888' );

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
define( 'AUTH_KEY',         '4RM*u$/*@z>7HUJ(J4$@_}M!^$GI[Dj)|GT9-H?RbO]JB|:s9r2MaKt?@_36NCkd' );
define( 'SECURE_AUTH_KEY',  'NA?HLB`2;JGqlonw%yv`!z%(SYv,D.#G#pw6yK{WH-x*L;?j<#I]BWyF%tI8MXbu' );
define( 'LOGGED_IN_KEY',    'UCvfq2ZN!/@;4k$;EeVT^!yizdGp{}>9AMVk!m;-S#$Ojyy$C<qVnsP)6yx^eHR ' );
define( 'NONCE_KEY',        '*exC}a0HnDWORXga1/o&MuR#NBhuGxQwgG$&w%WOzRTq{Bx-tFuyqdLrwSb/ZBn|' );
define( 'AUTH_SALT',        'B@)aTic-hd@ZIc%fC%FE,l;QY+{`[-1Bp#5c$3V8BJQk;&WYxuD@)RX{z@`?>T3J' );
define( 'SECURE_AUTH_SALT', '/bJ`j`AdN?.b$iF{Tw-$f<-t&g(<LPJkbOeb9L^=A(1u;<fLJ[D2Enc!g}zpDKj?' );
define( 'LOGGED_IN_SALT',   '{IC](}Hwc{%}h=:l0E%UK7u!eH5F7KA40[G< :4so /gK/|=$x|xYdqdv$,Lh#pe' );
define( 'NONCE_SALT',       '-j*0`^oQ3}j? ur9M]C8`WEO>)X6S|g.Q/,)1CWxi72SOyl1r)k%x6bW[<rIl4I[' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
