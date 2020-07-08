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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'matstudio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Y6e>oBicrK@yeiV-g5~2<8V]HGJRH23<,VCiH$&ZF,E#1-8=E*B@lzH 0Ahj]JE7' );
define( 'SECURE_AUTH_KEY',  '3bA(Bx^Jb$kMt7;Au.Jo7Y~ilU]rb/tcB-LyzyL/za~fbvPWSC5lb{cT71bMRw8u' );
define( 'LOGGED_IN_KEY',    '9Ao3e-a&u2+SM1KpoESMvU&&Xo/to]g?[+xz^Kd,nW18,c[0QmFZR)!CH<6Z#RY.' );
define( 'NONCE_KEY',        'Icg:f3[~(DA>4V_0ph)af}CICR;Px@3J@tOO%o)i:mE#zTP~8%v4x0JF,;KeF ]v' );
define( 'AUTH_SALT',        '7o;OIBbpYmd4%g-N/}YC{oNoa i|/G(OQWE8U!Ev1b>pP(`0wgda`p3Fv5lvyulN' );
define( 'SECURE_AUTH_SALT', '$X`g6jV)YRD_F-37vRxo?,];e=)!bI*gaebVG&xp;p{9hhzw)5<ZbL+K:*BMY+V*' );
define( 'LOGGED_IN_SALT',   '2imQO89&e7UkY3bZNo5~aM#(.zU3!(X{egV %NQV@R**x)8)z+apsU+Nm5J;)@2d' );
define( 'NONCE_SALT',       '486B$pXyXV>(`#weg_K.<,#tlmU3TFI/bv.Yq`BhRS/~C<>]JJ[qD0J>p1kHAVqe' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
