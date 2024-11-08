<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
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
define( 'AUTH_KEY',         'tYGKUt!<+mmkC0dR0KnovDiQ4=m6;JBWb[z?mZ:ruoBkHl8(&NgF^=Q#cDTEm76f' );
define( 'SECURE_AUTH_KEY',  'x]~`22M0657{fndyfA%{vRGe>^2=yvWCN5GJ#dT|AHX.zP%Vt`r/Rq0)VS5#Wcp~' );
define( 'LOGGED_IN_KEY',    ',Lc?CsU%e]XtQz%%I|<oO/hs1qaW_cq]OV<osr(5=pG@^B7kL`$7uVTZ0#rTwRmf' );
define( 'NONCE_KEY',        'dK#wxO>1h8zssg5E6CA}R@<|Fp7KHh}9y*:lyeBUs%*@iAgb0vHTNmZfV#_KPZ*n' );
define( 'AUTH_SALT',        'k8dfr:)%{puR<!/a|6UX3qQFJ$oG>Kz&he;j448JE9QRHuX-Ecy)?a1]Z@9^ txS' );
define( 'SECURE_AUTH_SALT', '1PXjxB.DP!k:t8zm(azNkf$T 4 (1|)&E*S`aq2drkd+BzZ#1{4Rf[W,ID!tSO#X' );
define( 'LOGGED_IN_SALT',   '8BL/!g(k(CPQQDu)YiKFg&rQ23/V+o<6nMoO](A={x#fO;71M~wR`cWfgbXuKmiQ' );
define( 'NONCE_SALT',       '[e%:>qcZX0F|ECcm0V/)A>h^*kz-)7Zy&Bt&bfc <_UQf)8^9#IbK2TK^Jk)uqnY' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
