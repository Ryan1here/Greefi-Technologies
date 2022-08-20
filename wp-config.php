<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'GreefiTech' );

/** Database username */
define( 'DB_USER', 'RyanGreefiTech' );

/** Database password */
define( 'DB_PASSWORD', '4-GUtYsxjtrYadIw' );

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
define( 'AUTH_KEY',         '2l;#j[hStTZ5ckovz%W7l(CBt5-eBj001DTxyo`zA_p0K^8Z@3#4|O$o~h4?mB04' );
define( 'SECURE_AUTH_KEY',  'M!fNu9wboub%(23#KYt1rg?P5%UW]YG/XE3R_45Un+}8PE$umLB%oNPm+XW .+W@' );
define( 'LOGGED_IN_KEY',    '+:sZi8y,`qF{Pfo,p9YKdQ]kOu,/v4|93xL/F}&1oaRsJ(rqNK11m`/cCI|~9NbN' );
define( 'NONCE_KEY',        'CHg;Rc@=RU}:u:bf],mT-*y|(OHM,x2o.pEe/S[>iN+PCFeh$?}&y`V#SF<,N)7O' );
define( 'AUTH_SALT',        '8Eq495h(T{nOG KAzA!F`t)DY#eyA#L{jB/;PnMwP/<)=2VpB)QF9/}2+8{XrA_H' );
define( 'SECURE_AUTH_SALT', 'h{34evQCx4g/.Bsf D56NDS=ntd-ch9I?gqV)$(].E xGFya,_aJEM#Qs<p_9<&A' );
define( 'LOGGED_IN_SALT',   'qLE{ZJbUWF` GAnS1*1!P6%i8ySa^vJ%0q2:$Gc?b)mh=HvgMN);<H%=umxnR9[&' );
define( 'NONCE_SALT',       '`!aAO{K{?Yso1#/Bsx_jn1>*ALk3L%mcApVLyNOs0pC6e?aVYeaH*8{L6UAsxBE(' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rgt_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
