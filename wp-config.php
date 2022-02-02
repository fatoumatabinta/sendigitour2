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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nouvelle' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '.Vo*~sFRNIT3L(Y-il[{n/0zB7OA>8<[+TdF52U+ mAwNVIz.]EK>+d{u0EEc<45' );
define( 'SECURE_AUTH_KEY',  '9r_E|#8^ZN[XkKc+|q&.=<T%n)+fe @wiX>FueXU93bYN]^Jwe1~Hm?T >yIA}#)' );
define( 'LOGGED_IN_KEY',    'hv-x%;`^N@): I.H2itpSUg=du[uJMrq}cI~]$*|G]/-r^YA+ja>3;nINPrF4us;' );
define( 'NONCE_KEY',        '<=:7:y!>LA)`c[qE5|Vt-;&8EG@In{?ptW6X`i2(4YDwJ2VUS<?:.7~;MdFA!_x ' );
define( 'AUTH_SALT',        'L!6mv+Djla]TLglF6h.8Q0KHg7L[*(@|YJ,m7|u~tkN[SLGDexdKHhP[{AyJWWmy' );
define( 'SECURE_AUTH_SALT', '.I~Z_96M./:8_QGnKvAZ`bTcmpkczVZ{7mZ7|ew0Q3]P_-)_eq0H<>pLs>Mz<F`N' );
define( 'LOGGED_IN_SALT',   'Ah~9*]]VS:%{:dL)8*d7?hTRgagx;aY*hjlM/2b*NMh>l/7o-]Z]*R_;Ndh5 #98' );
define( 'NONCE_SALT',       '<5@gMI;QDC$W)KEr^%I3Um`==ph9fl1O)G4 8r@%xs#8^|;qF^hfm%M?aF3oOU8(' );

/**#@-*/

define( 'FS_METHOD', 'direct' );

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
