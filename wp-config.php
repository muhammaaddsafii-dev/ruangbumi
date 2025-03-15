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
define( 'DB_NAME', 'ruangbumidb' );

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
define( 'AUTH_KEY',         '=hXN(-kLayEcr-E7 4(-~V<.^@f<FS&Dgwx8K3(2A7km3LiqAa/M(yfq7;t*EY8k' );
define( 'SECURE_AUTH_KEY',  'N^];JX/Spe_xLeT?>ecV/$/7Uk5Z?uzt}5@l`mx8U.Yn,Y;<mqupk}O8&>&3;R`X' );
define( 'LOGGED_IN_KEY',    'Sly>,7<v`XD{^^TG<,w-}@&tX|*lRInBKu!B^Ks}h0bQv_HLwdXRaa}SnHNg$xT:' );
define( 'NONCE_KEY',        'SC} c0ZrGS{c%tnv`q:w`ODMuQj&X4ug{TBf&&SG+YX:|A<] z+oSsi|8#Ouh-$8' );
define( 'AUTH_SALT',        '1=L_97V5fb7@99V9R^Cjn]JfHMytq&{rgjDWik-Zb/3R:{}74V+Cb!U0i|(r[;>%' );
define( 'SECURE_AUTH_SALT', 'ZaIfMkLO:F|}rcTnX)$7Dsyv9~gl?]b @CvG4l`Le;WEd(euh2|m+kA{NVx:[D0J' );
define( 'LOGGED_IN_SALT',   '{tZ1eY<TDYdZd,h5U#5!  KQ_G6mPE?7Ff:cRBh&3d-A`@|Os?vmgUPs`6P`?BI]' );
define( 'NONCE_SALT',       'Q3@/D(m*JabBg??KKQqMFr_+bF1T24NYHbbKmS0QfjZJ{Oflw2&y!:It|6o^$Nu!' );

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
