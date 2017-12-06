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
define('DB_NAME', 'wp_downtownshealthcare');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '24DOG#');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '/-f3ZW>a~as(}[Q&=3]1pyPp3Gan}#L-6y@rk.8PeDTZ=UT:yk6_/Bl0OdBf|3&?');
define('SECURE_AUTH_KEY',  'r:QN*=Ip,fbN+ (QxtXz.^?D&w9nX0l$EB&PS8Ju!!TQc=I&L*2s_H,%#5/]*j<s');
define('LOGGED_IN_KEY',    '0Pzq%9|zy]e2z56SQy?7h3;[acP/:1{-g#F#Y>;;su$C+zZx.&;+:7m2uo>:gbOY');
define('NONCE_KEY',        ']e?]@YfETKax&^MTp=f_ajxS(!Tb7!QIbix?bsv#<3F24M`r/9`Mp:sf~|wc8s7{');
define('AUTH_SALT',        'MS99:w#~&E~,lgIAXo#mC?*0U*6N*+QxQ;@>UzOf(O<^0WKbjbfAmn;U[q.ln@TG');
define('SECURE_AUTH_SALT', 'T|SZsO2B4e3#4eJwLCfyiHb3/uhZ0*r#n)5-e?v9r|FN)aPGcYw%aJn**PRT.$#j');
define('LOGGED_IN_SALT',   'Na{1kraoHTz3+<7LX_p sg{PkyUi5Ju%Tq;Cjo^y$%5{%Nck%;aSvX@EKM~{T4!k');
define('NONCE_SALT',       '<xT|q_mZ&+}n!PL6!I]uml=I;rz01mHd_zl0L)0pMmEYOkP}p=PV,hO(1JK[zRTe');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
