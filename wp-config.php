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
define( 'DB_NAME', 'portfolio_db' );

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
define( 'AUTH_KEY',         'Ct/{8#K/Jvt/W6A1uWnPd_9minpQdy]`#yRBx;R/4{I[dT5$Xav@]uclMk<YDgB:' );
define( 'SECURE_AUTH_KEY',  '+~Cd*EnswwY.gKD&&&/%8&QWTaQ}LfcxYura93CIXL^x6sy4x!VFJT`Q^WsOlCX=' );
define( 'LOGGED_IN_KEY',    '&;74xG~XOyN c<4VW,TPk5is+-LgmTLyE6?zK2Vj3S@`A2O1q>B$SvhY1pSkp=(@' );
define( 'NONCE_KEY',        '+!{-a(~Cr5~Y&Xs5El)ejC{>|L,qg,_l*(GfLFg7^6)oI6[F2.6?mM02cIX(K$@;' );
define( 'AUTH_SALT',        ',TWt2 Aa6;$2$)0rs5z;p;AsJZ)wN1|(|?2Bj0_H0%D^AF$xTP~lTc!Tv!%&Zg?_' );
define( 'SECURE_AUTH_SALT', ' .[(oTnM5+K|=qr,12+i@(9oK$]Xii(@]U`*r+{AA~N2:}JMn]g/&7J#dU#P@n;e' );
define( 'LOGGED_IN_SALT',   '^Pa@gU%-KeV9HyO&xG<=%JJJ]<|,=*z gfPwrvB`BQ/gI>CV)P&b+%wu~*f;6[(V' );
define( 'NONCE_SALT',       'd~fIWi4z.]YFvwASQy$9x85:/UZ*t%bFHg,<j%qG>F]Yk67sWFeG1c3wu1(L;AC$' );

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
