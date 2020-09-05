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
define( 'DB_NAME', getenv('DB_NAME') );

/** MySQL database username */
define( 'DB_USER', getenv('DB_USER') );

/** MySQL database password */
define( 'DB_PASSWORD', getenv('DB_PASSWORD') );

/** MySQL hostname */
define( 'DB_HOST', getenv('DB_HOST') );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('WP_SITEURL', 'https://' . getenv('HTTP_HOST') );
define('WP_HOME', 'https://' . getenv('HTTP_HOST') );
$_SERVER['HTTP_HOST'] = getenv('HTTP_HOST') ;

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Oo7ygcf8[Cb-+r1?Xlq&^~Q|~l7R1VjFtFM}_gg.{<^wrfW|A.U4KM!no!=s|9VQ');
define('SECURE_AUTH_KEY',  'mwB@B:1q9Nb|t+72WgkMig+L+a%(i.u|<D:HdycWZ($UD&J_Nq5eZ.U{o4@.i/cG');
define('LOGGED_IN_KEY',    'S Pk~2 |}2JzNay_G| o^DJmq-1[aDZqEjb-}[m3aR@D3L(iyLCr3n5!BpSiTHAN');
define('NONCE_KEY',        'Ez*+k?1&EPWKN>-e )}NOq(r)hb%8}~rhvmbjC@w,;*jGk}+_6c{ 1^J-xy`)<yB');
define('AUTH_SALT',        '!P_e#F]:DDz.FVr^.Z:)v2q{|X/dH2tB2e8c~e,L1s?n=p<6k~~Wkk3f%_7T3{9u');
define('SECURE_AUTH_SALT', 'Wi8T|m+Xf~aT)vz-H<Td3io#L9dXt*@!^UE&S,v=^QV3<tl(Uoq;8(el<AZ<`TJp');
define('LOGGED_IN_SALT',   '1!HF1[Qp(?]x~OxcXQdWZt+S[Rwt.rU^^ q39_X*JY4?NHlf^X o_6J:lvqyvG.X');
define('NONCE_SALT',       'lq&1%B*j{mS#{{+Ub2BC)aW|>~n>7&*>&C*QX-eF=-[MAa&}-&$;S/Xl8s8=O{~e');

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
define( 'WP_DEBUG', true );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
