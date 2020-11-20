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
define( 'DB_NAME', 'curriculum' );

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
define( 'AUTH_KEY',         '|7 bsW&&3T!3zJCYNm[GSMR*/nUbeD[K)veeYhxL6zBZ_xP)MG<BSMu2N!KBhxfE' );
define( 'SECURE_AUTH_KEY',  ':==R3D3vQvK#M=F0ial!Fyg?jwV]YL*+}Zo&Ft92HzuA0isJ0@$,&x9VmLOQ?^!k' );
define( 'LOGGED_IN_KEY',    '[,w`~dFBt?yL5x(){U9|eF84^ccT;@5.3&<MfS76j*MPJ=v?WSnt^6h0b2MwlRog' );
define( 'NONCE_KEY',        '3zSbC2~an)Qk$n_0-@juK3@Os@lxSOxzWrh/]kZUO!U]KH?nV80%Z?>r*S;-.*+:' );
define( 'AUTH_SALT',        'Ot)8L2M,oFSQKuM1N#GucVlc<.hzv_685%<j`6)+ue=!F-Yd>?4{q|G}V+b`VLBK' );
define( 'SECURE_AUTH_SALT', 'f{=`X9*Rpke?Lrlv=cj^<F;l>8mHh@HP9&&u.BE|F9a_fg<_cS~i~a%m#+El|#)!' );
define( 'LOGGED_IN_SALT',   'Uoail,GL`9TWa4,{)1dn|[01PvLtn|cBP%u3@m3Q,)RL7:_Wz{FAKZ7nIdbPcnMK' );
define( 'NONCE_SALT',       'Y-##+p@|`s~Sir1S`P4in-(gtC,G27YyVW)6iO!u`x,0C9ywBE(F@,X.d!<Rw@n&' );

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
