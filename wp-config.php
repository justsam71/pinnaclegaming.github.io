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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pinnaclegaming' );

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
define( 'AUTH_KEY',         '3&Hfs<&>=Efcw_x8,66YFX(s;#SlhfD jD cK3ET<#Cg+8^whc=w,B+R2/AR}%Su' );
define( 'SECURE_AUTH_KEY',  'A$_H@4:V[A!Un=IuJl?qyiO&>5${xf-:qwKEqe=l}yuM-{zq?0O{8oU$<he:Qa@,' );
define( 'LOGGED_IN_KEY',    'gY=ou~&tXp*f~-TcJ]R#T=p]c_rG_@sVJb4,)Zd%GLlM.*iTO[tG,kzIN8R{~u}d' );
define( 'NONCE_KEY',        '9B8>t9o1iCpio_N(vA~(dVi-`PQ*TTi*EueSK&GI;0j3<?$BK23tF(x:m%klk2W<' );
define( 'AUTH_SALT',        '=F?+Z$tf2pbK-;CDl+guRLJ9:Tu>F]L`U%VD_h_Orz>I<J bdlD5UTpwy1`]bluT' );
define( 'SECURE_AUTH_SALT', 'l-eIM0/3PE_hMbedoo`:!m:3n+lGA0U{N|Qj}|#?v2vd@}y{[b:Y9yf{#`;sva#v' );
define( 'LOGGED_IN_SALT',   'MVr=L/Y,sW]!;_PhPdHF!|69r(~4/KZYtZV:R.<L!|.$aImX9 [laAu6vL7p:a4<' );
define( 'NONCE_SALT',       '=^bY3C33u3XMGhXpIJ{uqKY0zFT_Wf-4|UEY>,&IFYIo3a4b)}#fv,BRA!*Vmjvv' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
