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
define( 'DB_NAME', 'locus' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Cw)3Tbj?>})![c4nvclN}*><U3!hJ%7xeSZ1NAW/k}mQq.b1dO*iFu}P.|tp#AwO' );
define( 'SECURE_AUTH_KEY',  'UD/[$/1*+%am %q%`#ths,Vl%{[v$3)}G@zuF5!wI<`sX:*6Hl.X.C`SZS}@}+uB' );
define( 'LOGGED_IN_KEY',    '9r:*m$4QIMLxr1?nZO5pa@g@[)Tf5r ;$Dx!dutAZ67Q,x8A`DNo,aFj`}*M)i.o' );
define( 'NONCE_KEY',        'odJ/66l!Yq|Nf6N*L=>>qy6RYv#ocF|?g9x/%X(nneNT`=<yAY_~NK;;F|_f4c:M' );
define( 'AUTH_SALT',        'YHWFD@D/083z9bl4=JwDgZ1Rs&cvXs`?.su Qy-1qA_?QB_|S~ }J04fZm|S*8Vp' );
define( 'SECURE_AUTH_SALT', '(BrX<yh|U/@{*GP@%?/DZIUI!eJgoSjk,DpWx>UA%NgV78X,-AhBu[6`#H&1#h&;' );
define( 'LOGGED_IN_SALT',   'f`)y>Zz;RmacM1zF<4@Tm~>XYo29mdjWL},6>_|A[p6nDV~*OB_>&IU`wiP)Hd+Q' );
define( 'NONCE_SALT',       '^9<M3)7+Iog!AA6&=~|a)I55d454v~ztL_e}6HvRtg9/RqzzCz>jb:r,)!uUwEaO' );

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
