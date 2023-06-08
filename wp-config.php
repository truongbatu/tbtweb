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
define( 'DB_NAME', 'tbtweb_db' );

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
define( 'AUTH_KEY',         'OoP~i`}yYDd~4MC&S<Gyp*Lh(OHM20;{Et40Q<^z*+w,|2|7$g>]E<VWC1O:N)[l' );
define( 'SECURE_AUTH_KEY',  'JaSTh,uUWu^wpfv|(5;uC@Ey|]7[TI-NeiwE.][!p^X^v9&6bnEm#1FZ7_pbbjbD' );
define( 'LOGGED_IN_KEY',    '@dv81]-t%>-Yz R$gGO!^(<:SLUaAWz@kW*S/eSZdEW*~QYV^*Z,X7DwFbOB .<`' );
define( 'NONCE_KEY',        '-GJ5YWZ`*$F$Y=Ue^[L=v$d4k1,4/y]yGKwonx_`,-s2&+;Y_aUOe&T2?+/Wo6h&' );
define( 'AUTH_SALT',        'v?yj|,1]Y~=4ZoG-[X]MQg$f,@wuCD7(N*&l/5zu&/$|YCm_[hbt/r`HV-XiRV2L' );
define( 'SECURE_AUTH_SALT', 'm f ,XRkt[/f!1!3=|BKLF8HiG ZN.<?Sl@nF-Fm(iA~Op~33HmbW]6*$cD.fLPv' );
define( 'LOGGED_IN_SALT',   's57[^v{to.=n-2A!ZS_Zg7Xj8&iE>r]?^B`+wca0n=0,f3t(]nNDHu_/unO&~?y/' );
define( 'NONCE_SALT',       '<w*>>|h=`eXx%Vm$oqD$</;9Wb)R6PY]6C$SyBmRsvZc>w0Y!R?N<)D9Ut~jF=ti' );

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
