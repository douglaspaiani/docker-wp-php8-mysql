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
define( 'DB_NAME', 'database' );

/** Database username */
define( 'DB_USER', 'jose-cleiton' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         '9fERZ!iSBxr/;vVsQxWB 7&?my0vQ*[q`-*=|d=$ze*{Uu&)x;>,cJ_[e:Hk {zg' );
define( 'SECURE_AUTH_KEY',  '#:Vcnb{0r;QWZKQm5XKF2C/){bTi=9gKM)f]iw$*>a<c+#FauQKEN)<J/mmBNZf5' );
define( 'LOGGED_IN_KEY',    'H_E8D[N$aeYK2]%9jYqFCP|1V~zO>8YpK5v;d1EcxkWTx&}|$U~P,xgT 9n|(: .' );
define( 'NONCE_KEY',        'j$:}KD7hB!5H1##,YUtZ=/xbz(ce^TA*h:sKB5C(zm:wT ZJq;%I1&y.]5(XMiC1' );
define( 'AUTH_SALT',        'XnQHTXvzR]Xt}zY6Kg#KNNB$q8(EVd{%Cmc<.#,0ul,D#I|;n#r,ERA}:|@^kzw+' );
define( 'SECURE_AUTH_SALT', '2]b~pzq20E;ga<?9*42t87/;:+PL4TucV#OA2pQ@jfa38wLkwo-W6@U?9kh:X|;s' );
define( 'LOGGED_IN_SALT',   'h:.s~:;C^4rL.k!62[Y/Kp{LF!+*CH|^ubC@FhQc@o$J{_td9*TKK7ifZwgcp&nz' );
define( 'NONCE_SALT',       'dYvKbcBV$TVZx,{#n@dn{B2u1`;><>F2(p2X{wO4E)PUj)!z$H[J&t0C)=+f.r!-' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'jc_';

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
