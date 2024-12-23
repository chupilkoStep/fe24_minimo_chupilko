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
define( 'DB_NAME', 'fe24_minimo_chupilko' );

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
define( 'AUTH_KEY',         'HDU`9Nw38^|KNc D~7w2C+^:Q^*kG95#=.Dc|VxS}Jza#JNiH<74,dvS}vxvXXQz' );
define( 'SECURE_AUTH_KEY',  '[p8,O~l1f!haN/3N3^1/-qAs9XMK]U3hb1s})!LlS(<1Bz 5CBi<<Pv[4z-bi@`0' );
define( 'LOGGED_IN_KEY',    '(Au%&F>S==5^j_O2ho{_a_{a<iVJY`Bu4Ho*:^8^<`:KFj>5=^SW{D,Oj+R>@lg#' );
define( 'NONCE_KEY',        '=9k/WwG|Twh2l]M-5R&kdP4&_ 02qu@s}-/%k?)]?q{N&yH#M;X_&7=~CI&hg{WP' );
define( 'AUTH_SALT',        '9#ef}V:kyc|D>P2{F4gP##i(f)LT>RZ<z~1(}%YP)}{@E(|7$7Hhu_~+TDdTxJ5F' );
define( 'SECURE_AUTH_SALT', 'YNSe>#vY`K%5e=Z!W6P/I+pGFo_8r@cr;1WdNVpz:mq1)5D]HhXe>AZNb3]wM7 <' );
define( 'LOGGED_IN_SALT',   'ZNDQ:@f&`^C`%=eN{gZC2|4_wEG!m1*Thjtl_`EJ}Gg%!<IlF2X6xo-QQqD8q;55' );
define( 'NONCE_SALT',       'KYr=B*Bn~v`X.o7ReW(y-gKhU eOC:pmLg,/XC#vC**K7u9nSuw,[lP`A7Os?J}M' );

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
