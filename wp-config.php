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
define( 'DB_NAME', 'wpwordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'm1DAy1gS2pbtb5lMFgwEQJSsAd5joUg2t5IjMU0gZxXiOuFRk0JI30cBVvOzIWSh' );
define( 'SECURE_AUTH_KEY',  'OP8AaTZLBBX5y0wnE260DOs1iBVxLH3181EAVizplhUpZ66StLOavEYUMUMMbAKv' );
define( 'LOGGED_IN_KEY',    '4Pe5ZeNaOdZvyH4CuWM5qMWyO3jHY59TSy0gj8CIFwexelm44qniBBWKUhqsRcUk' );
define( 'NONCE_KEY',        'nkmM2x0dbMbIQThJG586DmaGQS3Bx3fYRxgtSKgn1P8nKThArERRqDYDMWUvAXe2' );
define( 'AUTH_SALT',        'KEQzrtlsC2MxVkKsjC2uZOZF3Qy6ye2Lg2zdPj6aluvMFc5fMI1T03GTT42lZsWm' );
define( 'SECURE_AUTH_SALT', 'csky5l5lcdy9ipU5inAZNUAdJeojV1NJTXvuZHvjHetTQOugUk7lDwscJr1yt8Oz' );
define( 'LOGGED_IN_SALT',   'MAcOhO0513U8Lm2a6LmYbtwb7anQ8CeBcPfQIQGW4owiGtpLOlMIKt1WzzsUGFei' );
define( 'NONCE_SALT',       'HQORSow7o6zEHIG9QCe2bFWAiBVLir2s24dRNjZUruiZ7yYz2HBiTo7y6sIYsaTW' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
