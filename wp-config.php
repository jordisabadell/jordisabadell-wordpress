<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define( 'DB_HOST', '${DB_HOST}' );

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
define( 'AUTH_KEY',         'IkNc{er&*P!+f1%x5:uh]4SIoi;Klo!luc pbN>p!;_kuw=bh<C?>G/0NL=/7z?S' );
define( 'SECURE_AUTH_KEY',  'zfx{)iG!+QamsgQ#{-cjar[5F1jYz+p.A`=0*{>8$vx59X=>D[IR(.5DlvY}]2Sl' );
define( 'LOGGED_IN_KEY',    '}KSE6`{L]R[0nRAHn +z2V-7+D^PCns<DU)7y*.(!% tAR&2Pl6=:~zu1}696+hf' );
define( 'NONCE_KEY',        '}i!pgkm#p.Tt@no.)isk;GoPQ(h/6y3ot)R6m:<4rDO1oB0Dc| L$+Y(;B]R:M;J' );
define( 'AUTH_SALT',        'L-?IBPQ0P-7zP7$T!DE</JVd.i8q 51ISl([er*9%a4zw/~YOS]r8N(~8T(C>&so' );
define( 'SECURE_AUTH_SALT', '9WC#_AL1FDFx``,^t6V*-_m@vcG3sV!l[&2!^G<pUZ12lAgfm,$|:;x;f:ou7(@:' );
define( 'LOGGED_IN_SALT',   'qw!Mwz/P+~0d]DbaDb`~LBOHXC^v]t(PaKdYV`A8yGzZqJEC[>C:66Jso6Rr+W%-' );
define( 'NONCE_SALT',       '2u ;PyL`27j<F?v!41Z#(5gP&nti$~Xp&gWNs^6hkC,pUs,A>C9SRux=94Z8^BbZ' );

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

/* Multisite */
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
