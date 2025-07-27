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
define( 'DB_NAME', 'shivdurgyatra' );

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
define( 'AUTH_KEY',         'dE+ke1h&hq8GK*hi(a{.BM2W7.flc.>RW!B=&d).o18Bd{a6SsUt8McZOs}N-CtI' );
define( 'SECURE_AUTH_KEY',  '=0ZoUM7!CLhG!/p+AzR>W%32@!iZS`rphYvY 0w{pFn>t&l%AG ,lg11rR($8a)>' );
define( 'LOGGED_IN_KEY',    'Ggo[%KV(X*J9:VYE>>VNb)Tq3F/)g/w&Id PSwK(Lq}_]# b!mgBJ^}tz-R-n)zf' );
define( 'NONCE_KEY',        '(1$Hq7G+k<)eAJYjom9YHs)fiEX1HM-|CB9YncBs4r5daj1$>^VdTuqM+DcOpWQX' );
define( 'AUTH_SALT',        'dd|#S4nLqCOZU|n!x>+Ay(CwP)-mOl*<w@OwcE` 4.=ZI[Iah=km*S X3%}gtwNR' );
define( 'SECURE_AUTH_SALT', 'B}xD#kvLM8z{l^r8134HK~M,qi&5u#m&|G&q}eVI<8Uro.|t$rq,X.o()rtmQ(VX' );
define( 'LOGGED_IN_SALT',   'sS3XyJ~ubYzvwjN]48o&cnnOGaeXPBso|)Z]p$~/^5iPI/G+;J:i=hi)| zHN-W(' );
define( 'NONCE_SALT',       '</ z*j|`gY+eS|kv=Q^`LE9.rExINBQW;[k8sLr$+2BY0qk2mwftB]=xN,v )2Q@' );

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
