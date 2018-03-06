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
define('DB_NAME', 'nexitia');

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
define('AUTH_KEY',         ';q,3(qOdKl%]fnVmD@/XdoSP$AWG=pRyCW8_r;.o#Me]u}]5uxXK#a6}16&HCfbF');
define('SECURE_AUTH_KEY',  '~adP0hsxPxj}vn3!6eJWYItE]iUk^<{DV;VF^bez&@RF4AP!jO Ub/ZTaiGtv&K{');
define('LOGGED_IN_KEY',    'tv:iUa5wnIxi Xu2V{3,!ju5hi2]8D7,S*%A_0HHg7CLQ~/.%(,G,yfYdizIB|6p');
define('NONCE_KEY',        'oHt?Y6tHEk8LKM!@OK:~!knHGF%#;EzZa(u1y%%|;Oh+mFJAiQqg8s1Zj/z%Y9j5');
define('AUTH_SALT',        'sJjO/qo3yAnfS<~(<}X.u058tkQUWVBf(p4iT8n]IPebHz-ecHQoQ|`4bcY#{[$k');
define('SECURE_AUTH_SALT', 'mvf5L1FK0jmt0(Vz&<kDt@F~{e[m@Tqk>~:FCqO].F`c8nBXH[XTg:VVmqWP1mQO');
define('LOGGED_IN_SALT',   'YogBuuDne}x7#0IRg=;8n5)`X6@tuK4rT248-T80FB[&DW?TafGs]d1b=_1Ukb+>');
define('NONCE_SALT',       'e%+(}(Iy/ni^E_Zj[bRFy=BnXg1U6pDhZzP$LI7yY)Br$wYm(qFIZ00j}+LQ+}@E');

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
