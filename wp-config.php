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
define( 'DB_NAME', 'SangCN' );

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
define( 'AUTH_KEY',         ',]!)Gk~v2`tf/&k:E~t/YhmV;@]py 98[=77Y<RgQ.V1SDvd=&fE&@xJj9]9(VFv' );
define( 'SECURE_AUTH_KEY',  'z%Ba#RjyR39v:s -)03^50shY*CuQ-P&?x4>4Kc{q[wt,5`!L?YX72hs^~ul]Eyc' );
define( 'LOGGED_IN_KEY',    'aQFx/ugr]3&n]^0E>7S)^*xi1L~B8HfuKx!uTVV29Djg!=nN2=P=gSj?(/Km:)Ox' );
define( 'NONCE_KEY',        '/+Sf:r)x{We{!OEV1B_y)004E3=J>zLW#h<9S4p`ey1e9L1) l}/-l-dGjeC?()w' );
define( 'AUTH_SALT',        'qb>E!1iuK}xP`KV,p*(k)5&%A-K1nMPOIMix^N$TI wqh9r pk>`^WrZ[BmhWG</' );
define( 'SECURE_AUTH_SALT', '$X9ub0r<!)Z6<P5Dd/fnt~KbP3,96ZFJqm=|Bk$%6l_x,HXV;$?7G=$5bjNe)+P!' );
define( 'LOGGED_IN_SALT',   'D^Z#;W-i;p`/S@0/7El43]i+W0+WWD -hdx~L<h8Gu?jb/RyafI&*vaX#0v%_d1,' );
define( 'NONCE_SALT',       'w(c;kFc~ :~7#C3r$a-lhyChfVJicLJ>m5KU[T62ybp/-}:kS6&)]p!#@C<5)JvN' );

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
