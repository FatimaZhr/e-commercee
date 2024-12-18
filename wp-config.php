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
define( 'DB_NAME', 'studibase' );

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
define( 'AUTH_KEY',         'i^:kN0R)H`.6]LMTFZWwWi%V=IZ+13e9|D~nCM:MIIB$/>}={f}/xY4!t&}k>.#v' );
define( 'SECURE_AUTH_KEY',  'h=W),mi=+:^4>_g=v(JsI:;gKBALfFW}5<<V.s t ezwR<D~8[zW`oAXu3^]-a1V' );
define( 'LOGGED_IN_KEY',    'E!P7eoEC~)p!PT*7!D2gK$xBAOJy|7+sggq~>EhE:hDGc&-A4b$pP? N!!O|5tjD' );
define( 'NONCE_KEY',        'j^(X,8reWk4J`m-QB`#?>As$x,Ls@@G!ugX:2sdlEowjgTYsY~16xOR.C}v%egP@' );
define( 'AUTH_SALT',        '#[F0OJyFG+SP:/2l^T:-a#H[T~+X^/~|4Yts.UbKU7SM^`<j^R=xH=;5J70(ok@n' );
define( 'SECURE_AUTH_SALT', ']ELi`icd*m%()(l!LW=K m<;B&4E6p{i5lcDzfu& @kJIzmyh:YI[##zL81>.b4!' );
define( 'LOGGED_IN_SALT',   '~xoT-0N6.s|2y.a? o!`LL6J1n4&!wdk`/a0@lYW=;y:O(>0-zEwS:J}Gu3YD-XR' );
define( 'NONCE_SALT',       'v{1yL`,L=!x!#~F:[UGfBP<a0afS)KPF]^Di8;x^ZmH*;`Y/>U:0^9q;}PQOj >v' );

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
