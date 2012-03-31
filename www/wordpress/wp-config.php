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
define('DB_NAME', 'zuntechi');

/** MySQL database username */
define('DB_USER', 'zuntechi');

/** MySQL database password */
define('DB_PASSWORD', 'Zuntechi1');

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
define('AUTH_KEY',         'e&>P!- hx jx+9cO%Dxx#nB#U4]ii37<)BK=6D96FD9]^.JFzjTlAth9Ovfqq@vr');
define('SECURE_AUTH_KEY',  '`!7q/-&o; Qze]~@Z&8M?(+j$Frh3IyJaam]FW+@MN(W}#0M;Hi~uni(-J#]Wl1P');
define('LOGGED_IN_KEY',    'm@v+]L(-W`b$5a?!Eamq^D|hJ<a.]IJPy&!XZ1x!(xU#q=uAe!zZJ_8_?9Qo([z~');
define('NONCE_KEY',        '-Ok0ntv)QYMv48z;Cc$ll36Ut%@O1m-jJUSki:j *pq0*}]Sj.|^5hLqATKv9dLT');
define('AUTH_SALT',        'S#GaVjqF<m3y*O93ZJ!kV-HURN:-e-f-?k=BGXFMYXxl0$zMR}y#ad[|c1]p~tfy');
define('SECURE_AUTH_SALT', '/P~kp4A[qRSSmP]WZ}+d9+wz/9hH=btPqg  ?dd%4>+vNY&M[{LaYQwB(om^-A0j');
define('LOGGED_IN_SALT',   'Bvi;@@4UJ|/o~Moq,C$)Ev4A2:Xr[(955tu|j>=[Nfd9X^hrRg*3<R/7sk)eCm@W');
define('NONCE_SALT',       '5IRn3x5zx$9^6@&|XI`OMqAjODl1-Kwy o/J+.$;:O8-Gc>I-`-=lw_9#u],?b&O');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
