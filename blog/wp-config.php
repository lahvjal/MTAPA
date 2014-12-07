<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mtapa_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '}_vq=K0r#6B7TYLP&Fx@Ya-&rU-P@umuc]+tX|l#B;(tD+An#OHRg2DB=HwFEubo');
define('SECURE_AUTH_KEY',  'bB;f?Df>lcI:>+UlYH3|~/Y0rl;]a=2h,C&Q15&%JT yJF}+uRolNS+|[Sa%M|v<');
define('LOGGED_IN_KEY',    'cFep4fbJU59fYxBO_~Y2ghy|hO?h|]CemuHP:X3~YKS3ya?dy+N^aN($jpjJ*Q R');
define('NONCE_KEY',        'A&/#+3<G6jw9+w:uGP^T;x0)!<|`vk>Qh(IJ|$+aFvY=w6NG1N7`Lm x*lBL|`d5');
define('AUTH_SALT',        '|]!<8U7h3U|`(fEf1&K|Yc6C~<}|8A`U|+*tx;0w4~r2eJ-,A@|&F(s|^U+SRB]E');
define('SECURE_AUTH_SALT', 'mF!+i&0 X:sD=pn%n{[@`8PyM:[.t[LYgH{awz$*pi2+3WR|WbIa`ZJ>+:#+hLq4');
define('LOGGED_IN_SALT',   'g;!~Ie*aj5|1<-sTW.]9Tg?lz6||x?!BZwP|A2^N@B3dsR+l[l-m?oTSH`WSsJAC');
define('NONCE_SALT',       '{g{-AY!$y3OGegeK{.CxPAQPN`>ajZ0Esd(-g19IfBg*^h<w+}k_}%/$)@ULlJLZ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
