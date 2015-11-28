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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'D>s_*$mjNHC_EP>GMnB7!--:RtUY*<a,D(K:aa55d-4Kh.@o1e:-7emL{B1*Zg|2');
define('SECURE_AUTH_KEY',  'kGba~|7V=)N81Bl^<^s?25PsNmC}2Fa7]x2[l[{+m$d|p<X5HkX*,E6O+PeG`+!X');
define('LOGGED_IN_KEY',    '->m^}NY xfSlnvsJz6Rh>k-oA@e&1t^hf7:!mv3-rrF8QdA$r%C9~&%M80K[_rbz');
define('NONCE_KEY',        's@,+<:#0/qE+I~bSi!S^?{)pH93xZ+Q0yn-wg<,}hN=YG*jP4sN,=B:mj+kt6}1z');
define('AUTH_SALT',        ']iG+Lpv+*8W`FnhrRG%/maAr9wXaNVl4$#p&@bgHG<ASQk1h6)#Syeo/!0~8M_N ');
define('SECURE_AUTH_SALT', '#0:*H*XrLl=7qU|:g9L),8tU8d9MgtIqG>jWFDEGz3*|59ja?&=Cf!&9aXHT1bQk');
define('LOGGED_IN_SALT',   '$pV+]2ye,VI3*^hc[l]#}l<jwZ`2Ur7E^-yAP**<7kWEw6DA_%E!n>B@g# 6,w)%');
define('NONCE_SALT',       'tF@W<}IIN?{IP6qV@({%da+:sA?+7[+y=vUIk!^er<C2<-]QP@Emopkma{KnS`Fj');

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
