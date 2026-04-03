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
define( 'DB_NAME', 'wp_db' );

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
define( 'AUTH_KEY',         'NeD=(9k.YUuuN0C7eep%{d~=_4so`q4+Z&lvgbeNW<&x rk4jI##i3$)>wz(f*5U' );
define( 'SECURE_AUTH_KEY',  '`VtDBEPwO+A43?Z/JEhji6m10-fHl(Ihv-xz3i.<-4pQjs=v0b,i8ElD;@64:a>R' );
define( 'LOGGED_IN_KEY',    ']n-3Q1K? VwZRsJtkPG`6>zDAb9WDt(nAzY5E%{D1C7^+}/|tWbC?}!5x-9 >l$@' );
define( 'NONCE_KEY',        '{}Pqd4V%Axy.0TZTY7[[ #69I!^X5xvZhi+v:1CftA3=>@zy.}/KAzRru9.`jroL' );
define( 'AUTH_SALT',        'D5PZ: 8Yc]%ak<4;O}Tn}n]@sI7Xo%3a2+_/&b{PL6<v%c|9M}CRp&rp|$A_U|FM' );
define( 'SECURE_AUTH_SALT', ' P)yss220z/~6sZf5(7OXfmTc<=p0VJ+9auHbli+CbD(XO&`oEg?,:5mSvoD5Z6;' );
define( 'LOGGED_IN_SALT',   'VYe;{:`smj>v9Ra.:f`._+?krfOaisJ>(5$Qhf0fbN<ct,,1*x=t<!Q|1qwF$81U' );
define( 'NONCE_SALT',       '8=^}F8.A);.9H`,XY.`fIQ)|OzIC|A[%UC/ eP0XY%#$z{$-BZ?0!}QO4Ae)vZZZ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
