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
define( 'DB_NAME', 'mod6_blog_cms' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Secur3Passw0rd!' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'x+0G+Z+q@eqCg2)VTSf.AW!8Dha[C;j52J#T20>=vog}ho@/uq`hF>82RWj0+Zh1' );
define( 'SECURE_AUTH_KEY',  '_0Rg{WM./3$;gwmHCf(%xek}G QWx~wSae:}0]dbQt,+yX54XZheC<61t4SuhGks' );
define( 'LOGGED_IN_KEY',    'uG{t{Dik&.K ]t^BFMJ Q^) !]|}1M9CE=+q82qi=Lxg*5s1j_~*Fz!)_e5nVuOs' );
define( 'NONCE_KEY',        'Kl2D*]YHH,J<5&Q-$vJmg{ph{TNjz6KT%.L&7t2F06G*[1i%EfUl(-mH%>rkEKyI' );
define( 'AUTH_SALT',        ';`^3YZCIKhNL2?Iwg]]L0}]YLURV!!m|ge;wP%zZPzr~pSxO2CxC<t0!USflRJ^i' );
define( 'SECURE_AUTH_SALT', 'h;C@X>F(OwEU`1>-`lq3dx~.m-H}Ir$jk_y%ibZN[_b0#N`g%lEakIG1uGV1&670' );
define( 'LOGGED_IN_SALT',   '#y%nUim:d|uZim62;Q#i9 URz>$}&OyKqr8bt$g,V?Lf_$wp*E%:@~/@oAZ<]u3V' );
define( 'NONCE_SALT',       'F!khY_?YnF>egF_~j|@X6RwcAmua$C?.JOoD*!,F!gln(u1j<hWot@-XN4n#U2io' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_mod6';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
