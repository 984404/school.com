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
define( 'DB_NAME', 'demo1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ')H +x]LsEQm)S{g 8FP0mnFUf|/d9}{jjs9u_zw]cbZ4N5S*cj+YfLcZJ~|yE~?E' );
define( 'SECURE_AUTH_KEY',  '#(Jy5dBP[NXH(=PgC6WCaG<H[*kt<nY|+n`(D+U)JzYM8@|j1M3)ijSoxg<)=JC|' );
define( 'LOGGED_IN_KEY',    'fj$M`I1N_J_qIvxxCD`fCtGcCN~qDzXCzpOkq=2Gse0#{UQb(4}!LR,qd4h]:zbR' );
define( 'NONCE_KEY',        's 2Lr?zpjEwxy:|b!e~{bavx$1_R TrU#A$lIjmIW=d+0c5>gj)*c:WBxs>2UU,S' );
define( 'AUTH_SALT',        '^Vs]rtR%XZR>v|9h?C/-# ZGzqVSDTgC1Dtz);iD5s[%n)R63J],jF[~V91&VuV1' );
define( 'SECURE_AUTH_SALT', 'n-X`abAQ4X|EB^:Lhd2Wq#r]4P:/j|]S;-%;Vc~y{<qPA7{ M>2(]kg-.+F!P]MQ' );
define( 'LOGGED_IN_SALT',   'XU@z.f6TN.LE8r85VJ~V+gRr?y^=C?]G-3L#]j^OZJFV58fw:xGHLW^1-fiaidkf' );
define( 'NONCE_SALT',       '>7B^&6D5I}QU2NBoCpy9$_doYh-L&*;I3lWDl)MN.XLXsYGGj5LOUW1l!=! j{GL' );

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
