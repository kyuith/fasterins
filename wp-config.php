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
define( 'DB_NAME', 'fasterins' );

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
define( 'AUTH_KEY',         'c!H.|;KGb]Ex}!QQ]:x~WmXbYf=C_F>Dj399Fq[8D~$$+,]p^OZXzA[]YWB9v-t(' );
define( 'SECURE_AUTH_KEY',  '.5!C1=rlG#O7WuXX!%SLHGSIy/&;zZykj:,=~2h;$9rB&!+jXx,_z{zha6@jt/6^' );
define( 'LOGGED_IN_KEY',    'fNqeI}%=e59ro!]$BPe%nJ_0l{_Js%8QprXeSTAGJeAAp7EYs<;q6sXk-__8/4?r' );
define( 'NONCE_KEY',        '+5) 6vS!WVY3`W8R+fc7; _~S+K6Tc-h+WVtztkM~|GHH<3|(eY:=!{m2uf):p;!' );
define( 'AUTH_SALT',        '-OEX~F*$@_e]@TLV|xd8|:C1Q#xjbE6L,Jz&YE.%>vgq!Q|+(&6{({Ng6P!}OYXJ' );
define( 'SECURE_AUTH_SALT', '?i@7#Ypk;BDB+}n@OuUho*La@Bj_lZ(I92+DwpG2vPOX[ogcxfzk+~gEFfmEEQnf' );
define( 'LOGGED_IN_SALT',   ']aT-UrwzpHwJJs-V0c!a&~,~PY3[/Rm9cK GhVC9<pR+N1d-vpbNMxxMNpvn%R[i' );
define( 'NONCE_SALT',       'bP%.0i,xbSX~T32=Wn7C*I2Uv5R4RTc6_*4bl01;:mGuPw)]xSJ(Pd^sKEty}nHq' );

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
