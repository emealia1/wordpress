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
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '8GeF`F)o&(CTzP|C,O@QLmaE>S[4B/B$6akR(c@Y8DRRB_a5UEE *9tM<?RChQuX');
define('SECURE_AUTH_KEY',  ' @wUQotHBGZK+cKe&,%x9dACvt8{mSC<R-{q[Z0jQQ=>>#VRRe/@#_t4NWZ+#[*m');
define('LOGGED_IN_KEY',    '[@ocJQ>jg%nsuGU9cK3/c%YZq;n<@NRFjh/O|eZcjy)LMf1bqURMFtfBntQj*cC|');
define('NONCE_KEY',        'Q=}&(/U~$T&xZy]g.ExlbM|%0FD_5XEt2z,d]TR<I>*%(RdJim1w7VQDJ6D4Ruq7');
define('AUTH_SALT',        '^2)E}nQ)IHQ@su> pp!TwOjaWO/*6X=h4>,!jR~$}@<v}r<j&!s0oo7iU#R!0IUC');
define('SECURE_AUTH_SALT', 'M~2*:A{` #44a|=_1J$SXj^hqFb0IcOs*Ro%3jkJt|aod)#B-6-^G[9&-]i1XS|+');
define('LOGGED_IN_SALT',   'STWY-{=p;Jm.}R~5jce{%7X5`q@mA.7I[:Z0NRCBKhZyd.t>!{Fs_+D>#>x6>ucg');
define('NONCE_SALT',       'V2>TsH;b/[}o@[XMef.bI)u^{@=?nE*eBTVE-Ul+a,BDs_IhWs@~}/uNd(C{xcgK');

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
