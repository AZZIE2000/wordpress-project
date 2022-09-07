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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'T.lV6>uW1@QSG5Av]P=5Vj1u~^eq,4O&:6X:$;*xABdG?_z}6U/W)[is;*|nO?)r' );
define( 'SECURE_AUTH_KEY',  'mwqb#T&=k*q2K2$q&]$</A1]tmG9<v@nv3Abl1^uStCjC18[JhvGPEvLC^E*x3p7' );
define( 'LOGGED_IN_KEY',    '@D#q1r]^!^*_Qd~~:.q[iRAv>leI#,V9ZU0I>tzcGu6[f`A9NwTY`~F+3Cmc6deU' );
define( 'NONCE_KEY',        'fD!2>eF`]NE!K~^1uAYX9|`2Oaz1qgY^ q_k.<hp0f%KX7K Sha>{(v|/LNnG@cZ' );
define( 'AUTH_SALT',        '2]kag}5^??9zZNq>j>?k)2<yNS(W1Vk22A/oW796F{/YX%Cz77b>/EhHPT&>%R:A' );
define( 'SECURE_AUTH_SALT', 'Hv&|]iUs7A.<V$U3xa-&G;wb%SedD]t]=A&jhcW](qR}8bw.a6(/?Ddqg:E]]m`S' );
define( 'LOGGED_IN_SALT',   'FB<(AzgzB_UYlO:L?K3Mia(QNZNx+y;NRjUO{%=*Y:>~5YCd0T#B{?aB7YiME;=T' );
define( 'NONCE_SALT',       'k$|S.?t#m3~YI,sj0N}}HvV2tvI:c{=Xw^J5-PtXx 8>gulB} ~x,vj8]dK.8pA;' );

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
