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
define( 'DB_NAME', 'v-project' );

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
define( 'AUTH_KEY',         'qwFdy*YHQVGG51-HF 8s*%ijwY)Slk93!#ELAAVtnFg%+> wDF=C?YGDFK9o:[,3' );
define( 'SECURE_AUTH_KEY',  '`*Y#xIM(&%.*N=7C]5BW(} KOG:bTz%U9K.oNlxUT%?*AYjWgmfI2D|M`*aq_NTL' );
define( 'LOGGED_IN_KEY',    'A(CN#e8a6}$Q8I)u j+5I.kH;Nz2a)y{e9^8!h;bE:pI6HcdBO$v#kUW(a]-BDZJ' );
define( 'NONCE_KEY',        'h+W#}@KlXqwV~MVT-EBi)Wp]*R|+XF|7jC!v1[a^_*Pqo<lO8C~?eXCv?7yNv;+>' );
define( 'AUTH_SALT',        'HKoC(7kTtBOCD`-uShf)e|3YfPuuZ)]O5pSKRd8jxq4> 6LH:0qm/38LQ90Rc<J$' );
define( 'SECURE_AUTH_SALT', 'HFu|b;Z1fT7S~HUW>!b.xt}BZADd1tt9YI1/k,3(7j+A+?cVM[u@(1T6w~|HI*`J' );
define( 'LOGGED_IN_SALT',   '<*Id(7P~55Suyg>T`C^lo457Qn2,[YSTS@;Q9v+s?dWWhsr;J3a,/rH8qbE?~coE' );
define( 'NONCE_SALT',       '>:#C|aA @rr:ACV`./^EpDpG+VEB,px,2<J{y:TV*J6-Zdzn-FD6im;|?j.tWqr7' );

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
