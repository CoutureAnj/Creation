<?php
define( 'WP_CACHE', true );


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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'creation' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         '9yg5HKxGftDWpaxJZ5lROZkQjEqC0brnv92hV9VVQBnOYGm5r8htnphZ1464KfjN' );
define( 'SECURE_AUTH_KEY',  'gZExJ3SVNtWjyRvj8qlsrgDVSnA85aEoFpisZt74yzW3efkWhiZHHWE7qSn1uDKC' );
define( 'LOGGED_IN_KEY',    'LPcBNnmXhlnLjaOpeFhF950U6n93V8wUAYvj03pMdo7QawLqntKrMcg8V4g0wytS' );
define( 'NONCE_KEY',        'c15w4r0zET33w4Dgs689y9vaY79NSE5YFyi9wIkgSwdwggsEBYce4KvrWmUIa3pT' );
define( 'AUTH_SALT',        'LvjJU5k2f5gGNNpCt805xGdQxnfRE1gWp6U2sa2ey4pt24EnzRfVXJuaWp4rzoUp' );
define( 'SECURE_AUTH_SALT', 'KNZQW9rcwNB57oc5lsnOrAzEgpvsjZ0kvVaCyOeMffnRcNfDJMINJrqu85eqSap7' );
define( 'LOGGED_IN_SALT',   '3n6FXE1ul5Sq7blMJR0gNeO2EPzRuZHYKCtnARmwY1yWybB8gcGpCLfnL4Ck50N5' );
define( 'NONCE_SALT',       'LzXtzenJUwD7T3KdqXFTd8ion0zl3QBLL8Cla4cXJM23JhdgVwIGgbIdQ7FiRhzQ' );

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
