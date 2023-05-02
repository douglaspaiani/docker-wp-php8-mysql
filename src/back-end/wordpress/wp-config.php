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
define( 'AUTH_KEY',         '0_7[`=Ill(E#UfxJ8DqWB:12uN/`Wb^I~FTB;!nk>=P()<vat3N6>Q~mq?-Go%,<' );
define( 'SECURE_AUTH_KEY',  'g&7d0~,-kwe 5&`XFgvp|tzrHG%xR4RC6``^vh94`-sJ.GwFU4_2|ziS2@2g)/@j' );
define( 'LOGGED_IN_KEY',    '9SJ$j`WHi+2HyRd-sVSBXCwwNQvso,R<2toidahP_C<uwW MLq9q8VuUPH_IHWlT' );
define( 'NONCE_KEY',        '~{_!-6@sXC+67|{`wr0fXi}CFLVB|R62=bHjJDf5OEco2O2>O52Oip^q2)3s=8eK' );
define( 'AUTH_SALT',        ';OU2A0]$LWy;]Pj3,dI2OM)yF9Ep3}Y.>7W8jIwN@[vr5qgds99K`yY.u*cD-(|5' );
define( 'SECURE_AUTH_SALT', '5DYRXQ7`?oZOcm#]FD#I(?aE^r;Iwr2Qz;w2zjMJE6TWpvsPG3pCZCYW,v.Ls5#.' );
define( 'LOGGED_IN_SALT',   'C%:`AYDY5gQb#2mCdEQ?b?^tShM~CDvUX(mcvY>NLc]B;74.J,:~J++7E@D)O)x,' );
define( 'NONCE_SALT',       'q_S<lZQ63uQ76fPBVe8IV?pS{`-W.FH@G^wpTA%V?Z%X/n8H$8Qo<ni)>Bul4^T/' );

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
