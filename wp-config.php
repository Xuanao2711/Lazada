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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lazada' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         'e]KTN/wT |,srgC- d-9-Y2pv=nk|FTn!d[I!VV|#(T7hv,C[j<tti3tjn~&eLF`' );
define( 'SECURE_AUTH_KEY',  'nr|qv`/`]8~lDr7!+>dAYmUk;41MjY93U8J~RuL`vBb*@s0J)QCo?DGemfI$oTGv' );
define( 'LOGGED_IN_KEY',    'UsAIW(V9TuTPH1;Da|6|QUhgoo}V9l*/qD_<)(s,x9Bvp1N?oZ7VOx2<!.Cv*5LB' );
define( 'NONCE_KEY',        'H[FRl|/Q>S)BEvz!3jj1mMm3E>Im[nE?[O8OWpJuH{O$<9@aYv/JE7g82j84Ny6F' );
define( 'AUTH_SALT',        'Pw]sSAE`q.%G^9/@]b?={,D|QTBbUY56h`QM*%j;AiAX?Dr9H?bLUn}v;=}c>|e5' );
define( 'SECURE_AUTH_SALT', 'fF5Yw^{.M:8];l,ulEFi5#SZZ$=*q[9~GQS53~Fm{.#f]fdVz2FJP<flrJ~_!_om' );
define( 'LOGGED_IN_SALT',   'C`dCrV9p;2*!M!{p7>}qa,u w`kYjS/Bn9jrjbAz}1G<j{KGye7N:0]1YNfG]^[T' );
define( 'NONCE_SALT',       '*Y?d+8@ gtBz6X5tk+we&pJ!*(Ria@Cs=O8&(*fsrWqy$rM5t>K)X@vxAKrglgYe' );

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
