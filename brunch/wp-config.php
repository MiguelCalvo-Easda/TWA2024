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
define( 'DB_NAME', 'brunch' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '9.8l/{b@+y-VjtKF|-T.(T@Y5~l4]z1Kh.6,CSrW{Xe1d<{wvs][$^/lN_/}W&H)' );
define( 'SECURE_AUTH_KEY',  'Zy6>x>50P`?eqzjfD=06X6UoS:^q.YccvLd/Vo^lw|1Gq$(biZYpt^^boQi<acp ' );
define( 'LOGGED_IN_KEY',    '2HBD@uN0]BQQM2*#[qzCo-`R=0*J/zD6/h?%F^l%L2&1)JQ=B`>^9,0}Zu>dI7vM' );
define( 'NONCE_KEY',        '?r5?R_t rc@)J7sxiM^r;QFTLm#ufgLC@j|yqTJOq:d8:H=4~<COzds^3^vEsaG?' );
define( 'AUTH_SALT',        'S>Au7pX9JFNU`SNy#4OH-]c&g$4.Flw|b;Caaj2b<YkO+VB}Q@XM@5hs nb7)- N' );
define( 'SECURE_AUTH_SALT', 'Jq_TU+_mL$285/&HI3dm-{Tp <O,pSW~pr=x<zwR*7;!Q?7[/,C32}69qLhHvY!$' );
define( 'LOGGED_IN_SALT',   '3:Y:.]w!E-L^}uTzmY`q`Hz:Gc:p&c)[xY.T|SZe_Kz/J:e|@ASLz}^UDj4F{xHF' );
define( 'NONCE_SALT',       'Cw ,)_xkoiG2IiTqnLq$cIS/9!5MXd%,`ygbN*HhYS[&)joM3$xfu$IH5>t$jp4c' );

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
