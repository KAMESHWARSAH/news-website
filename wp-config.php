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
define( 'AUTH_KEY',         'vP1]J:$vdTh7YE2JdqF53<SCnd]^od1O<&LaXri2K0h4UE1a)Tyh63_1SxFE:.m7' );
define( 'SECURE_AUTH_KEY',  'Dc*OT~ H`i@!woO]A3=gUV[/o.[G$!#5|xv{RBXmo40g $1jE|Tq~91k@y/rAaqp' );
define( 'LOGGED_IN_KEY',    'u9#<yibW](s}yF.Hd-2Z4*S%h|5`M<)1;jjG>Nbxo?oA_EF%-#lqS_v3s>If)`7g' );
define( 'NONCE_KEY',        'XWt={Ljm|^k7NV6i~-s}V@`axS)*yCu4rg#HFod/QUGoP#3GqQ>=P:g~kr,V5WW7' );
define( 'AUTH_SALT',        '[QpF9:v6e$L|mNbTR*(9GP-3O5k2io^3j!T%|]x(}qo[Nc)/Q+#nM6^ >>UC(91b' );
define( 'SECURE_AUTH_SALT', ';cp.$B~Ku0{k{.7ZgF`R)6]#J8AuV4xHt;0OaHG@E+s(`ji.6}$,5jK!31pX8e|F' );
define( 'LOGGED_IN_SALT',   'DODqRi+n$*?|1Da}yYa:_!B`Y(o%^):{>bV:6B9bIH;w>T=cM(*b>r+k7XfaJs&`' );
define( 'NONCE_SALT',       '(tFUGC $Vh]ef4QwV9FhcmLpysy?N%i+nS5^Ds5~hSQ}k;b@*>-xWGO%q)7RawWh' );

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
