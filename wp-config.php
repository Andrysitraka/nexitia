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

define('FS_METHOD','direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'cOySMzU& 8DYB71k8*8Ox%?3kEJ(.@JHjm0KM?F]3i!(]H/;P&Lt{mb?IfHGs?TG');
define('SECURE_AUTH_KEY',  '%$@0fSOktuDvsA.]xRb1|@:WEc2WP+nd!l+<-p`Bi=BJEJGW-kmfqSxqO^%Xj*Q=');
define('LOGGED_IN_KEY',    'PH%%Vl~7H}}h9c.cK/L3%qC$P**d6<vIVk=miA|tj}qq@,`mzs&|NBIAW]W!qB&,');
define('NONCE_KEY',        ' 0}Wj^7[l<GGI+XtAdB#CUPW|}9|NXsMqn468}D_A(R:,6iF^ib[1a|91&PX?H~^');
define('AUTH_SALT',        '>vESq]Zs*e5od)e w-n/YHS[yre}zIjXb:ZEYD2spJ&a-fC^0V.L@`Q9EU3kio#K');
define('SECURE_AUTH_SALT', 'jn0MJPn 1ogskbAm?hE*G;j+.a$`@pUdyg%]s{ooP7iE7<v9h^.b.diNQT,;qjE7');
define('LOGGED_IN_SALT',   'QBK6nQ.3hqo68]3[q1tU6Vmq!Bt$^#2whY%$_%-DEZ),(pns=Ij=g:`yd0TO8-I)');
define('NONCE_SALT',       '>9$]vz!LRQGsHu.E)!&tq)w.6&XlAnLRy=i^wSi{aG.mfzMgtkOl?SIE]%p3E~`:');

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
