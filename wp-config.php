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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '(H%.~:l2HXBfUAEk 9:].TIE[/5 0<sgzUpUqsN2U nKX8/FV1q4w4e>lDl[d%wO' );
define( 'SECURE_AUTH_KEY',  '-7ay0UY)R>i,9@b .,r.)>q[FcL[#wU%IkpzWdE2W~[]z[M/$u^vU 5+alQ`0>/p' );
define( 'LOGGED_IN_KEY',    'RZ^3a^]RiHvA:Dkdz%7P[<KwEuWrvhq*i-|)]K Pk_vWtC:*1xM`2_-wBAIX(2`G' );
define( 'NONCE_KEY',        'e(Or>i<G @9a:G`Qk4%w)K|>}eraLBj[Emd[qrAr6[q!]|6:/4^*;2/eYL?jEi54' );
define( 'AUTH_SALT',        '@+4iNoH~!6J&+NtF>,L49NaHJAcDuuIbB HWrr:7i7>lz>Iyoj^(5 IN%VO-lUXE' );
define( 'SECURE_AUTH_SALT', '# A}fsR#8viK!2FU-Vk1R}9.1~`x(xrp3C(E:boW!~Vlpj>88.M#:;e^{RGApf]1' );
define( 'LOGGED_IN_SALT',   '}:yQny68d>s~X@hG-d[YcA&jO`0nE,gWxX_Gtf-eO?p@1BhP#.G5]#f.# WzD<Bg' );
define( 'NONCE_SALT',       'iE[7KU)3})FnCC6@x|>awU78=mT.W(3$TO(}Ws+iR}gC13DxV_?=Ltcr}*g4_?MV' );

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
