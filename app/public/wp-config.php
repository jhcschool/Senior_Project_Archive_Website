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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'k#WIggxK6/?V:+v?WMenAcoDPBassn5Bg>O7v/g]bC1FpJ:&cJ[6F~KbSoIg)91X' );
define( 'SECURE_AUTH_KEY',   'k%X&wDtVZ37Ogw?RxeU<W&Dt~NBnmMffwpzT va{klUV$V6Je~kxj%`yziwv$vE!' );
define( 'LOGGED_IN_KEY',     '{.,dD&Er46+PBck,8+sd~W+R#`%|T1efUi&!N3[hK(}$HYZ@Uec<lrby}5[E.Xi{' );
define( 'NONCE_KEY',         'QIX(=U}k++xS^_O;8qAJ/slP&vjv*&-YC~-Jk3KCE(JR|ZLwC6fO)0d3$5~=CXT<' );
define( 'AUTH_SALT',         'Q.5z.u}-1]ekpCc>m|eKi~p@fxKi3akC>8oYI/T[>N/m-c`K[EVxA_`kiXw@Ag=x' );
define( 'SECURE_AUTH_SALT',  'b8;a[z<q/.VRNO_i5E<&;U)t7aR$B6ijqtK:gUToX~/Oz[#$?wXArHTU0`9=MJ%v' );
define( 'LOGGED_IN_SALT',    'lp*;7;IqWfeh7UYZ#mi3(y~-mSh0>& ptH`+Dve>*%.B1UU[}*u:gx!+;.|ub4di' );
define( 'NONCE_SALT',        '32kV|e|qD!t;g#7JR`#H(p[ )kN&=tL0n0SIUpQ]g4>Uz1[O4%PmF/,ZmN(yr$/o' );
define( 'WP_CACHE_KEY_SALT', '4)#d*)@L0dmKLM&oF~(Xo54Ym1>8V&Y!KJt.q}?3~*qVgV?LMH?<Yj=L+7dHy`L)' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
