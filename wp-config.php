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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         '^zl]oJp cAo=$@pD#cluT4x9gzW[n[A5[CDSIbV7prv268b5p aZKNqC`6/HS%(-' );
define( 'SECURE_AUTH_KEY',  '*6^!J^.pRfy*]fB};NRE~R-mg?r<Y*3p8L1y*@@[Jb=O(KuqG`V%??z~N@>SznrJ' );
define( 'LOGGED_IN_KEY',    ')zNvFV-/Cm?b:ZJ3/0[`kzW_3IZu^[oqw^xcps)vEpP4vGmfoXxs<FWWs+hbf<s|' );
define( 'NONCE_KEY',        ':pzx!)@^#Di@TKlxc@U`+FEw_@N_+.F;.Y4ALi{9JX2ay#&!}`[X9sr~wY%A:,$L' );
define( 'AUTH_SALT',        'gLwUF8Z9eO8( N=md#LRbz0rRXz}WOXd>5~9V]<./iTiyP$~v8WPPzExtVP*^jyO' );
define( 'SECURE_AUTH_SALT', '8SdLQ^LZk?`aFrfFx,gEeF|FIV>R[-]99lF@wBy}DbbzxQ+9p}.b3L,EwMOCpL,Q' );
define( 'LOGGED_IN_SALT',   'PW]*5|m.co(5(VTBvN}IOy>5TDQqV.zORM/}%@`W[q%*;S_F|_k2:8p5:bvS,(vD' );
define( 'NONCE_SALT',       '9$UxYmei(uXeQK.Kw8Y95-Y}IO<YhN(R/+<isH1JT&:6LJ+tK<w&I#]4a[!n6?H4' );

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
