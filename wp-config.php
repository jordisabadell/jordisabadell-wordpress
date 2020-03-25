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
define( 'DB_NAME', '${DB_NAME}' );

/** MySQL database username */
define( 'DB_USER', '${DB_USER}' );

/** MySQL database password */
define( 'DB_PASSWORD', '${DB_PASSWORD}' );

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
define( 'AUTH_KEY',         'dEP^./$$`2xF7e:b&0JKr:8B7#iclK~#k$r8IwX,4]U6p{%c^)@,m! `H6+d.m5d' );
define( 'SECURE_AUTH_KEY',  'a`/ZsGd;#9O%pTKTBU$l?pJeC:{d:B[Q&Ny30.R7btS2D{nbg =3ax&#PG1Vh)F[' );
define( 'LOGGED_IN_KEY',    'Y(FCu[nq^jEzg=R>e4:Q9s)uBrd[Jp~[u:9/@!.wGaX:F}1P>rF})~DSycXsGux$' );
define( 'NONCE_KEY',        '{)ard..!qno=hCA]$e/C;M0XegHfzN:`m=,Hq5<ie|]7nzURCgAXkB@:(CueSl/Y' );
define( 'AUTH_SALT',        '%IraD;y%@ f5G@.*:(UCaJ?!Gw@j8wnZNYWTVVb3PkV#W{;}^mq;^9;2Qw9sj8LH' );
define( 'SECURE_AUTH_SALT', '}$.z_P2|txY9JTtyn*X#{]Xb-jtZwlg3]j$ ygx^tWZtP9LR4p)B4T*/[<UljiGy' );
define( 'LOGGED_IN_SALT',   'B<|L?U<v+)?G@/:npQd^+WwZzV}m6@R4X<1^@gL7+T{pwiX(0eD*V$#)r2Qas{Tm' );
define( 'NONCE_SALT',       '>hVT>f]hJAwTOpXyV*haJ&[syP>vMom8$O39Vpx[<NWS$+hZTR(Lu}vwC8jO?.xQ' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'jordisabadell.com');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
