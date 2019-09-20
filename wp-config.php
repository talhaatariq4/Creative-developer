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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Creative-developer' );

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
define( 'AUTH_KEY',         'o^?1$buZU)>_omP~SZ%*|2.X>~HJ_:acP*-9l9CRb.tCng$<AZosPgAp[%0Y-s>R' );
define( 'SECURE_AUTH_KEY',  'kv]*CY/?g3K.+DBS.!wutkX)I8uNap%363A7xS?7pr^a70x1NIr+!}qM<LyI3EGW' );
define( 'LOGGED_IN_KEY',    'XrAaPi%=~xCj:oz8l+jWnx/5587qEh2F~|!wAi:@-4;7hhC]*LczYpX&0b_S=,Sl' );
define( 'NONCE_KEY',        '@3UtFS_?]YMqW}AU:w3Da>Dz>a)<l^/?IdUL-9r3izV/BdNNt}f#EzYJv0V//iO2' );
define( 'AUTH_SALT',        'e>*&opOt;)NCMQClpBAG8Q6wt G0D :cS ^[*gu8cQ~%#aup4`6?qmq|#*R7NztM' );
define( 'SECURE_AUTH_SALT', '_]2@=KJ!Mw. HtL?q|[32uL,yJrLd*l<Ey@Ht.?)O_PMpnz#&<J5QaN5;vo(8:Ox' );
define( 'LOGGED_IN_SALT',   '<*.b,Wq^V7~>]yq[6z71h&|FT{f5LT$k~u89JWr9V.L)^=aLZ1me+G>G!p:}f:DN' );
define( 'NONCE_SALT',       '`w:[^6n2Cm!<<J78XAHH=:*]Jl<qszJLu+?coV@Hq/H,g]S9O44(v?<tv>[zn6H8' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
