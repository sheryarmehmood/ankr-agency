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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'EhJy5I~w_(c/pB]GJ;^#M+!tO@T0uG?mKt{H)*3@Ip@l}$iWT!(g3SK(I.j:}^dZ' );
define( 'SECURE_AUTH_KEY',   '=ht/>*ccPq;=?e*NQAn/LOf3uG!*5UDb;fDDF/[ZGVUadRsaD&y$<G<&,`IR/+1<' );
define( 'LOGGED_IN_KEY',     ' JouJ+U@=W>$?JV]Y!GgG*ZGBRRg[P)liTt`t53XYC3~3R.Vqiu8VLg^EM>PUR#b' );
define( 'NONCE_KEY',         'bD%Jk`X+10{Rl`-5moil]ixX=,HZ5^y!M>x`VAOK[wdYSHX}BbK6KQc7@Ra)_r>5' );
define( 'AUTH_SALT',         ']f.k?#^cL0l,aPq*5Oab`4<G,OR8/A487kc.9(uaQ=Y,Fc*q0PcuzsY+!gW)K;W^' );
define( 'SECURE_AUTH_SALT',  'C?y5=xfx6Yyh`rc.zfiT.B(*sxd7CGaZ231?.mK)BAg@&YI LcmODe;gy&bo|wxI' );
define( 'LOGGED_IN_SALT',    'H DNNs>HF=?qKP<wfdw~A0Cb`R.l9ZqEN,7+0-VoQwFiN/`^-7DxqAQ6x6s{HEK*' );
define( 'NONCE_SALT',        '_!kG#=6H6Q{5_n_M3i3i/X`=&;I#gcFMq=Ia16}smR0$sp78MumNm#R#^i2]52pQ' );
define( 'WP_CACHE_KEY_SALT', 'uT;A6U,A5i=;fpqZj%KsYq?m-p6x,@K1OA~Ma)HHjMr{/^*-NizjTg8}@#P+[W#B' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
